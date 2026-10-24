<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';

$page = [
    'lang' => 'en',
    'title' => 'Smruti Bhavan Project, Nigdi | History & Facilities',
    'description' => 'The Yashwantrao Chavan Smruti Bhavan – 1.5 lakh sq ft of construction on 44 gunthe at Pradhikaran, Nigdi. The journey from 1989 to 2026, facilities and location.',
    'path' => '/en/smruti-bhavan-project',
    'alternates' => ['mr' => '/smruti-bhavan-project', 'en' => '/en/smruti-bhavan-project'],
    'active' => 'about',
    'breadcrumb' => ['About' => '/en/about-samiti', 'Smruti Bhavan Project' => '/en/smruti-bhavan-project'],
    'schema' => [[
        '@type' => ['TouristAttraction', 'Place'],
        '@id' => SITE_URL . '/#smruti-bhavan',
        'name' => SITE_NAME_EN,
        'description' => 'Memorial building of 1.5 lakh sq ft on 44 gunthe land at Pradhikaran, Nigdi, built 2014–2026 by Yashwantrao Chavan Smarak Samiti.',
        'hasMap' => MAP_URL,
        'geo' => ['@type' => 'GeoCoordinates', 'latitude' => GEO_LAT, 'longitude' => GEO_LNG],
        'image' => SITE_URL . '/assets/images/building.webp',
        'address' => ['@type' => 'PostalAddress', 'streetAddress' => ADDRESS_STREET, 'addressLocality' => ADDRESS_CITY, 'postalCode' => ADDRESS_PIN, 'addressCountry' => 'IN'],
    ]],
];

$hero = [
    'eyebrow' => 'The project',
    'title' => 'Late Yashwantrao Chavan Smruti Bhavan',
    'subtitle' => 'A grand 1.5 lakh sq ft memorial on 44 gunthe of land at Pradhikaran, Nigdi.',
    'image' => 'building',
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="facts" aria-label="Project facts">
    <div class="container facts-grid facts-grid-4">
        <div><strong>44</strong><span>gunthe of land</span></div>
        <div><strong>1.5 lakh</strong><span>sq ft built-up</span></div>
        <div><strong>2014–2026</strong><span>construction</span></div>
        <div><strong>10+</strong><span>facilities</span></div>
    </div>
</section>

<section class="section">
    <div class="container split">
        <div>
            <p class="eyebrow">Purpose</p>
            <h2>A memorial to Maharashtra's architect in an industrial city</h2>
            <p>Industrial cities like Pimpri-Chinchwad grew out of Yashwantrao Chavan's industrial policies. The project was born of the wish that his memorial should stand in this very city, so that young people draw inspiration from his work.</p>
            <p>The Smruti Bhavan adds to the reputation of Pimpri-Chinchwad and will guide the people of Maharashtra and the younger generation for years to come.</p>
        </div>
        <div class="split-statue"><img src="/assets/images/statue-3d.webp" alt="15 ft full-length bronze statue of Yashwantrao Chavan" width="483" height="1030" loading="lazy"></div>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">Journey</p>
            <h2>From idea to reality</h2>
        </div>
        <ol class="v-timeline">
            <?php foreach ($timelineEn as [$year, $title, $text]): ?>
                <li>
                    <span class="vt-year"><?= e($year) ?></span>
                    <div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
        <p class="note">Shortage of funds delayed the work a little, but construction was completed in September 2026.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Facilities</p>
            <h2>What is inside the Smruti Bhavan?</h2>
        </div>
        <div class="card-grid">
            <?php foreach ($facilitiesEn as [$img, $title, $text, $link]): ?>
                <a class="card" href="<?= e($link) ?>">
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link">Learn more →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container split">
        <div>
            <p class="eyebrow">Location</p>
            <h2>How to reach the Smruti Bhavan</h2>
            <address>
                <strong><?= e(SITE_NAME_EN) ?></strong><br>
                <?= e(ADDRESS_STREET) ?>, <?= e(ADDRESS_CITY) ?> <?= e(ADDRESS_PIN) ?>
            </address>
            <p>Next to Sant Tukaram Udyan, Nigdi Pradhikaran, Pimpri-Chinchwad.</p>
            <div class="btn-row">
                <a href="<?= MAP_URL ?>" class="btn btn-primary" target="_blank" rel="noopener"><?= icon('pin') ?> Directions on Google Maps</a>
                <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline"><?= icon('phone') ?> +91 <?= PHONE_1 ?></a>
            </div>
        </div>
        <div class="map">
            <iframe src="<?= MAP_EMBED ?>" title="Map – Smruti Bhavan" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
