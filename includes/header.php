<?php
// Expects $page = ['title', 'description', 'path', 'active', 'schema' => [...]] set by the page.
require_once __DIR__ . '/config.php';

$canonical = SITE_URL . $page['path'];
$ogImage = SITE_URL . '/assets/images/building.webp';

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
    'sameAs' => [MAP_URL, HALL_BOOKING_URL],
];

$graph = array_merge([$orgSchema], $page['schema'] ?? []);

// Inner pages pass ['label' => '/path', ...] after Home
if (!empty($page['breadcrumb'])) {
    $crumbs = array_merge(['मुखपृष्ठ' => '/'], $page['breadcrumb']);
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
        ['यशवंतराव चव्हाण स्मारक समिती', '/about-samiti'],
        ['स्व. यशवंतराव चव्हाण', '/about-yashwantrao-chavan'],
        ['स्मृती भवन प्रकल्प', '/smruti-bhavan-project'],
    ]],
    'facilities' => ['सोयी-सुविधा', null, [
        ['१५ फूट पूर्णाकृती पुतळा', '/facilities/statue'],
        ['स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय', '/facilities/upsc-mpsc-library'],
        ['इतिहासाचे ग्रंथालय', '/facilities/history-library'],
        ['विद्यार्थी मार्गदर्शन केंद्र', '/facilities/student-guidance-centre'],
        ['जीवनपट दालन', '/facilities/jeevanpat-gallery'],
        ['वधू-वर सूचक केंद्र', '/facilities/vadhu-var-suchak-kendra'],
    ]],
    'hostel' => ['वसतिगृह', '/student-hostel'],
    'hall' => ['हॉल बुकिंग', HALL_BOOKING_URL],
    'gallery' => ['गॅलरी', '/gallery'],
    'contact' => ['संपर्क', '/contact'],
];
?>
<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <link rel="alternate" hreflang="mr" href="<?= e($canonical) ?>">
    <link rel="alternate" hreflang="en" href="<?= e(SITE_URL . '/en' . $page['path']) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= e($canonical) ?>">
    <meta name="theme-color" content="#8B1E2D">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="mr_IN">
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
        <a href="/" class="brand" aria-label="<?= e(SITE_NAME_MR) ?> - मुखपृष्ठ">
            <img src="/assets/images/chavan-portrait.webp" alt="स्व. यशवंतराव चव्हाण" width="56" height="56">
            <span>
                <strong><?= e(SITE_NAME_MR) ?></strong>
                <small><?= e(ORG_NAME_MR) ?></small>
            </span>
        </a>
        <div class="header-actions">
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline btn-sm"><?= icon('phone') ?> कॉल करा</a>
            <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp btn-sm" target="_blank" rel="noopener"><?= icon('whatsapp') ?> WhatsApp</a>
            <a href="/en/" class="lang-switch" hreflang="en" lang="en">EN</a>
        </div>
        <button class="nav-toggle" aria-label="मेनू उघडा" aria-expanded="false" aria-controls="main-nav">
            <span></span><span></span><span></span>
        </button>
    </div>

    <nav class="main-nav" id="main-nav" aria-label="मुख्य मेनू">
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
            <li class="nav-mobile-only"><a href="/en/" lang="en">English</a></li>
        </ul>
    </nav>
</header>

<main id="main">
