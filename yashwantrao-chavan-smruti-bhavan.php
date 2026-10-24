<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$projectFacts = [
    ['४४', 'गुंठे भूखंड'],
    ['१.५ लाख', 'चौ. फूट बांधकाम'],
    ['२०१४-२०२६', 'बांधकाम कालावधी'],
    ['१०+', 'सोयी-सुविधा'],
];

$page = [
    'title' => 'स्व. यशवंतराव चव्हाण स्मृती भवन प्रकल्प, निगडी | इतिहास व सुविधा',
    'description' => 'निगडी प्राधिकरण येथील ४४ गुंठे भूखंडावर १.५ लाख चौ. फूट बांधकाम असलेले स्व. यशवंतराव चव्हाण स्मृती भवन - १९८९ ते २०२६ प्रवास, सुविधा व पत्ता.',
    'path' => '/yashwantrao-chavan-smruti-bhavan',
    'alternates' => ['mr' => '/yashwantrao-chavan-smruti-bhavan', 'en' => '/en/yashwantrao-chavan-smruti-bhavan'],
    'active' => 'about',
    'breadcrumb' => ['आमच्याबद्दल' => '/yashwantrao-chavan-smarak-samiti', 'स्मृती भवन प्रकल्प' => '/yashwantrao-chavan-smruti-bhavan'],
    'schema' => [
        [
            '@type' => ['TouristAttraction', 'Place'],
            '@id' => SITE_URL . '/#smruti-bhavan',
            'name' => SITE_NAME_EN,
            'alternateName' => SITE_NAME_MR,
            'description' => 'Memorial building of 1.5 lakh sq ft on 44 gunthe land at Pradhikaran, Nigdi, built 2014–2026 by Yashwantrao Chavan Smarak Samiti.',
            'hasMap' => MAP_URL,
            'geo' => ['@type' => 'GeoCoordinates', 'latitude' => GEO_LAT, 'longitude' => GEO_LNG],
            'image' => SITE_URL . '/assets/images/building.webp',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => ADDRESS_STREET, 'addressLocality' => ADDRESS_CITY, 'postalCode' => ADDRESS_PIN, 'addressCountry' => 'IN'],
        ],
    ],
];

$hero = [
    'eyebrow' => 'प्रकल्प',
    'title' => 'स्व. यशवंतराव चव्हाण स्मृती भवन',
    'subtitle' => 'निगडी प्राधिकरण येथे ४४ गुंठे भूखंडावर उभारलेले १.५ लाख चौ. फूट भव्य स्मारक.',
    'image' => 'building',
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-hero.php';
?>

<!-- Facts -->
<section class="facts" aria-label="प्रकल्प - महत्त्वाची माहिती">
    <div class="container facts-grid facts-grid-4">
        <?php foreach ($projectFacts as [$num, $label]): ?>
            <div><strong><?= $num ?></strong><span><?= e($label) ?></span></div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Purpose -->
<section class="section">
    <div class="container split">
        <div>
            <p class="eyebrow">उद्देश</p>
            <h2>औद्योगिक नगरीत महाराष्ट्राच्या शिल्पकाराचे स्मारक</h2>
            <p>स्व. यशवंतराव चव्हाण यांच्या औद्योगिक धोरणांमुळेच पिंपरी-चिंचवडसारख्या औद्योगिक नगरी उभ्या राहिल्या. त्यांच्या कार्याची प्रेरणा भावी पिढीतील युवकांना मिळावी म्हणून त्यांचे स्मारक याच नगरीत असावे, या भावनेतून हा प्रकल्प उभा राहिला.</p>
            <p>या स्मृती भवनामुळे पिंपरी-चिंचवड शहराच्या नावलौकिकात भर पडली असून महाराष्ट्रातील जनतेला व भावी पिढीतील युवकांना हे स्मृतीभवन निश्चितच मार्गदर्शक ठरेल.</p>
        </div>
        <div class="split-statue"><img src="/assets/images/statue-3d.webp" alt="स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती ब्राँझ पुतळा" width="483" height="1030" loading="lazy"></div>
    </div>
</section>

<!-- Timeline -->
<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">प्रवास</p>
            <h2>संकल्प ते साकार</h2>
        </div>
        <ol class="v-timeline">
            <?php foreach ($timeline as [$year, $title, $text]): ?>
                <li>
                    <span class="vt-year"><?= $year ?></span>
                    <div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
        <p class="note">निधीअभावी काम पूर्ण होण्यास थोडा विलंब झाला, मात्र सप्टेंबर २०२६ मध्ये संपूर्ण बांधकाम पूर्ण झाले.</p>
    </div>
</section>

<!-- Facilities -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">सोयी-सुविधा</p>
            <h2>स्मृती भवनमध्ये काय आहे?</h2>
        </div>
        <div class="card-grid">
            <?php foreach ($facilities as [$img, $title, $text, $link]): ?>
                <?php $external = str_starts_with($link, 'http'); ?>
                <a class="card" href="<?= e($link) ?>"<?= $external ? ' target="_blank" rel="noopener"' : '' ?>>
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link">अधिक माहिती →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Location -->
<section class="section section-alt">
    <div class="container split">
        <div>
            <p class="eyebrow">पत्ता</p>
            <h2>स्मृती भवनला कसे पोहोचाल?</h2>
            <address>
                <strong><?= e(SITE_NAME_MR) ?></strong><br>
                <?= e(ADDRESS_MR) ?>
            </address>
            <p>संत तुकाराम उद्यानाशेजारी, निगडी प्राधिकरण, पिंपरी-चिंचवड.</p>
            <div class="btn-row">
                <a href="<?= MAP_URL ?>" class="btn btn-primary" target="_blank" rel="noopener"><?= icon('pin') ?> Google Maps वर दिशा</a>
                <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline"><?= icon('phone') ?> <?= mr_num(PHONE_1) ?></a>
            </div>
        </div>
        <div class="map">
            <iframe src="<?= MAP_EMBED ?>" title="स्मृती भवन नकाशा" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
