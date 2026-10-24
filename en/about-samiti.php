<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';

$aims = [
    ['Inspiration', 'To pass on the inspiration of Yashwantrao Chavan\'s work to the younger generation.'],
    ['Education', 'To give students opportunities through a study library, libraries, a hostel and a guidance centre.'],
    ['Social service', 'To give citizens of all communities a platform for social, cultural and family events.'],
];

// TODO: add posts and photos once the Samiti sends them
$tributes = [
    ['jagtap-bust', 'Late Laxmanbhau Jagtap, MLA', 'Played a key role in building the Smruti Bhavan. A bust has been installed in the Smruti Bhavan so his work is always remembered.'],
    ['guidance', 'Maheshdada Landge, MLA', 'Contributed generously to building the Smruti Bhavan. The student guidance centre is named after his mother, Late Hirabai Kisanrao Landge.'],
    ['library-board', 'Late Arun Kirloskar', 'Through the Fleetguard group and Bharat Vidyalaya, Shahabag (Wai), he gave free education to thousands of students. The competitive exam library is named after him.'],
    ['history-entry', 'Late Shrimant Chh. Abhaysinhraje Bhosale', 'A descendant of Chhatrapati Shivaji Maharaj who founded Ajinkyatara Sahakari Sakhar Karkhana and the Ajinkya group, employing thousands. The history library is named after him.'],
];

$page = [
    'lang' => 'en',
    'title' => 'Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad | About Us',
    'description' => 'Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad – working since 1989. Aims, office bearers, partner associations and the building of the Yashwantrao Chavan Smruti Bhavan at Nigdi.',
    'path' => '/en/about-samiti',
    'alternates' => ['mr' => '/about-samiti', 'en' => '/en/about-samiti'],
    'active' => 'about',
    'breadcrumb' => ['About' => '/en/about-samiti'],
];

$hero = [
    'eyebrow' => 'Since 1989',
    'title' => 'Yashwantrao Chavan Smarak Samiti',
    'subtitle' => 'Pimpri-Chinchwad – a social organisation founded by admirers of Yashwantrao Chavan.',
    'image' => 'building',
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container split">
        <img src="/assets/images/building.webp" alt="Smruti Bhavan built by Yashwantrao Chavan Smarak Samiti, Nigdi" loading="lazy" width="1600" height="900">
        <div>
            <p class="eyebrow">Our story</p>
            <h2>A memorial born of social commitment</h2>
            <p>Yashwantrao Chavan's industrial and cooperative policies spread industries, cooperative sugar factories, banks and credit societies across Maharashtra. His admirers felt his memorial should stand in the industrial city of Pimpri-Chinchwad as a way of repaying that debt.</p>
            <p>Moved by this commitment, they came together in <strong>1989</strong> and registered "Yashwantrao Chavan Smarak Samiti" under the Bombay Public Trusts Act, 1950. In 1991 the Samiti acquired 44 gunthe of land at Pradhikaran, Nigdi, where it has built the grand Smruti Bhavan.</p>
            <a href="/en/smruti-bhavan-project" class="btn btn-primary">The Smruti Bhavan project</a>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Aims</p>
            <h2>What the Samiti works for</h2>
        </div>
        <div class="work-grid work-grid-3">
            <?php foreach ($aims as $i => [$title, $text]): ?>
                <div class="work-card">
                    <span class="work-num"><?= $i + 1 ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Office bearers</p>
            <h2>Contact persons</h2>
            <p>President, office bearers and executive committee members.</p>
        </div>
        <div class="people-grid">
            <?php foreach (contact_people() as [$name, $phone]): ?>
                <div class="person-card">
                    <span class="person-avatar" aria-hidden="true"><?= e(substr(str_replace('Mr. ', '', $name), 0, 1)) ?></span>
                    <h3><?= e($name) ?></h3>
                    <a href="tel:+91<?= $phone ?>"><?= icon('phone') ?> +91 <?= $phone ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Gratitude</p>
            <h2>Key contributors to the Smruti Bhavan</h2>
        </div>
        <div class="tribute-grid">
            <?php foreach ($tributes as [$img, $name, $text]): ?>
                <div class="tribute-card">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($name) ?>" loading="lazy">
                    <div>
                        <h3><?= e($name) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section partners">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Partners</p>
            <h2>Associations with us</h2>
        </div>
        <ul class="partner-list">
            <?php foreach ($partnersEn as $p): ?>
                <li><?= e($p) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="visit-band">
    <div class="container visit-grid">
        <div>
            <h2>Be part of the Samiti's work</h2>
            <p>We warmly invite you to take part in the social activities run by the Samiti.</p>
        </div>
        <div class="btn-row">
            <a href="/en/contact" class="btn btn-gold">Contact us</a>
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-light"><?= icon('phone') ?> +91 <?= PHONE_1 ?></a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
