<?php
// Expects $page = ['title', 'description', 'path', 'active', 'schema' => [...]] set by the page.
require_once __DIR__ . '/config.php';

$canonical = SITE_URL . $page['path'];
// Share image: the page banner photo, else the building
$ogImage = SITE_URL . '/assets/images/' . ($hero['image'] ?? $page['ogImage'] ?? 'building') . '.webp';

// For local images: add width/height (no layout jump while loading) and an 800px version
// for phones and small cards (srcset), when assets/images/<name>-800.webp exists
ob_start(function ($html) {
    return preg_replace_callback('#<img src="(/assets/images/([\w-]+)\.webp)"([^>]*)>#', function ($m) {
        static $sizes = [];
        $root = dirname(__DIR__);
        $file = $root . $m[1];
        $sizes[$file] ??= is_file($file) ? getimagesize($file) : false;
        $attrs = $m[3];
        if ($sizes[$file] && !str_contains($attrs, 'width=')) {
            $attrs .= sprintf(' width="%d" height="%d"', $sizes[$file][0], $sizes[$file][1]);
        }
        $small = '/assets/images/' . $m[2] . '-800.webp';
        if ($sizes[$file] && is_file($root . $small) && !str_contains($attrs, 'srcset=')) {
            $attrs .= sprintf(' srcset="%s 800w, %s %dw" sizes="(max-width: 860px) 100vw, 50vw"', $small, $m[1], $sizes[$file][0]);
        }
        return '<img src="' . $m[1] . '"' . $attrs . '>';
    }, $html);
});

$orgSchema = [
    '@type' => ['NGO', 'Organization'],
    '@id' => SITE_URL . '/#organization',
    'name' => ORG_NAME_EN,
    'alternateName' => ORG_NAME_MR,
    'url' => SITE_URL,
    'foundingDate' => '1989',
    'telephone' => '+91' . PHONE_1,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => ADDRESS_STREET,
        'addressLocality' => ADDRESS_CITY,
        'addressRegion' => 'Maharashtra',
        'postalCode' => ADDRESS_PIN,
        'addressCountry' => 'IN',
    ],
    'image' => SITE_URL . '/assets/images/building.webp',
    'logo' => SITE_URL . '/assets/images/icon-512.png',
    'email' => EMAIL,
    'areaServed' => 'Pimpri-Chinchwad, Pune, Maharashtra',
    'sameAs' => [MAP_URL, HALL_BOOKING_URL],
];

$graph = array_merge([$orgSchema], $page['schema'] ?? []);

// Inner pages pass ['label' => '/path', ...] after Home
if (!empty($page['breadcrumb'])) {
    $crumbs = array_merge([t('मुखपृष्ठ', 'Home') => home_url()], $page['breadcrumb']);
    $graph[] = [
        '@type' => 'BreadcrumbList',
        'itemListElement' => array_map(fn($label, $path, $i) => [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $label,
            'item' => SITE_URL . $path,
        ], array_keys($crumbs), $crumbs, array_keys(array_keys($crumbs))),
    ];
}

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => $graph,
];

$menu = [
    'home' => ['मुखपृष्ठ', '/'],
    'about' => ['आमच्याबद्दल', null, [
        ['यशवंतराव चव्हाण स्मारक समिती', '/yashwantrao-chavan-smarak-samiti'],
        ['स्व. यशवंतराव चव्हाण', '/yashwantrao-chavan'],
        ['स्मृती भवन प्रकल्प', '/yashwantrao-chavan-smruti-bhavan'],
    ]],
    'facilities' => ['सोयी-सुविधा', null, [
        ['१५ फूट पूर्णाकृती पुतळा', '/yashwantrao-chavan-statue'],
        ['स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय', '/arun-kirloskar-upsc-mpsc-library'],
        ['इतिहासाचे ग्रंथालय', '/abhaysinhraje-bhosale-history-library'],
        ['विद्यार्थी मार्गदर्शन केंद्र', '/hirabai-landge-student-guidance-centre'],
        ['जीवनपट दालन', '/yashwantrao-chavan-jeevanpat-gallery'],
        ['वधू-वर सूचक केंद्र', '/paschim-maharashtra-vadhu-var-suchak-kendra'],
    ]],
    'hostel' => ['वसतिगृह', '/student-hostel-nigdi'],
    'hall' => ['हॉल बुकिंग', '/venutai-chavan-multipurpose-hall'],
    'gallery' => ['गॅलरी', '/gallery'],
    'contact' => ['संपर्क', '/contact'],
];

// English pages set $page['lang'] = 'en'; they get an English menu that points into the English page
$isEn = ($page['lang'] ?? 'mr') === 'en';
if ($isEn) {
    $menu = [
        'home' => ['Home', '/en/'],
        'about' => ['About', null, [
            ['Yashwantrao Chavan Smarak Samiti', '/en/yashwantrao-chavan-smarak-samiti'],
            ['Yashwantrao Chavan', '/en/yashwantrao-chavan'],
            ['Smruti Bhavan Project', '/en/yashwantrao-chavan-smruti-bhavan'],
        ]],
        'facilities' => ['Facilities', null, [
            ['15 ft Statue', '/en/yashwantrao-chavan-statue'],
            ['UPSC & MPSC Library', '/en/arun-kirloskar-upsc-mpsc-library'],
            ['History Library', '/en/abhaysinhraje-bhosale-history-library'],
            ['Student Guidance Centre', '/en/hirabai-landge-student-guidance-centre'],
            ['Life-Story Gallery', '/en/yashwantrao-chavan-jeevanpat-gallery'],
            ['Matrimonial Centre', '/en/paschim-maharashtra-vadhu-var-suchak-kendra'],
        ]],
        'hostel' => ['Hostel', '/en/student-hostel-nigdi'],
        'hall' => ['Hall Booking', '/en/venutai-chavan-multipurpose-hall'],
        'gallery' => ['Gallery', '/en/gallery'],
        'contact' => ['Contact', '/en/contact'],
    ];
}
$siteName = $isEn ? SITE_NAME_EN : SITE_NAME_MR;
// Language switch goes to the same page in the other language when it exists
$switchMr = $page['alternates']['mr'] ?? '/';
$switchEn = $page['alternates']['en'] ?? '/en/';
$orgName = $isEn ? ORG_NAME_EN : ORG_NAME_MR;
?>
<!DOCTYPE html>
<html lang="<?= $isEn ? 'en' : 'mr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <?php if ($page['path'] === '/404' || !empty($page['noindex'])): ?><meta name="robots" content="noindex, follow"><?php endif; ?>
    <link rel="canonical" href="<?= e($canonical) ?>">
    <?php // Only pages that exist in both languages declare $page['alternates'] = ['mr' => path, 'en' => path] ?>
    <?php foreach ($page['alternates'] ?? [] as $hl => $altPath): ?>
        <link rel="alternate" hreflang="<?= $hl ?>" href="<?= e(SITE_URL . $altPath) ?>">
    <?php endforeach; ?>
    <?php if (!empty($page['alternates']['mr'])): ?>
        <link rel="alternate" hreflang="x-default" href="<?= e(SITE_URL . $page['alternates']['mr']) ?>">
    <?php endif; ?>
    <meta name="theme-color" content="#8B1E2D">
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/assets/images/icon-192.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/images/icon-180.png">
    <meta property="og:site_name" content="<?= e($siteName) ?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= $isEn ? 'en_IN' : 'mr_IN' ?>">
    <meta property="og:title" content="<?= e($page['title']) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700&family=Tiro+Devanagari+Marathi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
</head>
<body>

<header class="site-header">
    <div class="container brand-row">
        <a href="<?= $isEn ? '/en/' : '/' ?>" class="brand" aria-label="<?= e($siteName) ?> - <?= $isEn ? 'Home' : 'मुखपृष्ठ' ?>">
            <img src="/assets/images/chavan-portrait.webp" alt="<?= $isEn ? 'Yashwantrao Chavan' : 'स्व. यशवंतराव चव्हाण' ?>" width="56" height="56">
            <span>
                <strong><?= e($siteName) ?></strong>
                <small><?= e($orgName) ?></small>
            </span>
        </a>
        <div class="header-actions">
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline btn-sm"><?= icon('phone') ?> <?= $isEn ? 'Call' : 'कॉल करा' ?></a>
            <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp btn-sm" target="_blank" rel="noopener"><?= icon('whatsapp') ?> WhatsApp</a>
            <?php if ($isEn): ?>
                <a href="<?= e($switchMr) ?>" class="lang-switch" hreflang="mr" lang="mr">मराठी</a>
            <?php else: ?>
                <a href="<?= e($switchEn) ?>" class="lang-switch" hreflang="en" lang="en">EN</a>
            <?php endif; ?>
        </div>
        <button class="nav-toggle" aria-label="<?= $isEn ? 'Open menu' : 'मेनू उघडा' ?>" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>
    </div>

    <nav class="main-nav" id="main-nav" aria-label="<?= $isEn ? 'Main menu' : 'मुख्य मेनू' ?>">
        <ul class="container">
            <?php foreach ($menu as $key => $item): ?>
                <?php $isActive = ($page['active'] ?? '') === $key ? ' active' : ''; ?>
                <?php if (!empty($item[2])): ?>
                    <li class="has-dropdown<?= $isActive ?>">
                        <button class="dropdown-toggle" aria-expanded="false"><?= e($item[0]) ?></button>
                        <ul class="dropdown">
                            <?php foreach ($item[2] as $sub): ?>
                                <li><a href="<?= e($sub[1]) ?>"><?= e($sub[0]) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else: ?>
                    <?php $external = str_starts_with($item[1], 'http'); ?>
                    <li class="<?= trim($isActive) ?>">
                        <a href="<?= e($item[1]) ?>"<?= $external ? ' target="_blank" rel="noopener"' : '' ?>><?= e($item[0]) ?><?= $external ? ' ↗' : '' ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            <li class="nav-mobile-only"><?= $isEn ? '<a href="' . e($switchMr) . '" lang="mr">मराठी</a>' : '<a href="' . e($switchEn) . '" lang="en">English</a>' ?></li>
        </ul>
    </nav>
</header>

<main id="main">
