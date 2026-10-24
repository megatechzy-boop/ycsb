<?php
require_once __DIR__ . '/../includes/config.php';

$topics = [
    ['Hall booking', 'Halls for weddings, birthdays and other events.', '/en/halls', 'Hall details'],
    ['Hostel admission', '52 rooms for 144 male and female students.', '/en/student-hostel', 'Hostel details'],
    ['Library admission', 'UPSC / MPSC competitive exam study library.', '/en/facilities/upsc-mpsc-library', 'Library details'],
    ['Matrimonial registration', 'For brides and grooms of all communities.', '/en/facilities/vadhu-var-suchak-kendra', 'Registration details'],
];

$formInterest = in_array($_GET['topic'] ?? '', ['hall', 'hostel', 'library', 'vadhu-var', 'visit'], true) ? $_GET['topic'] : 'visit';

$page = [
    'lang' => 'en',
    'title' => 'Contact | Yashwantrao Chavan Smruti Bhavan, Nigdi Pradhikaran, Pune',
    'description' => 'Yashwantrao Chavan Smruti Bhavan, Sector 27A, near Sant Tukaram Udyan, Pradhikaran, Nigdi, Pune 411044. Phone: ' . PHONE_1 . ', ' . PHONE_2 . ', ' . PHONE_3 . '. Map and enquiry form.',
    'path' => '/en/contact',
    'alternates' => ['mr' => '/contact', 'en' => '/en/contact'],
    'active' => 'contact',
    'breadcrumb' => ['Contact' => '/en/contact'],
    'schema' => [['@type' => 'ContactPage', 'name' => 'Contact – ' . SITE_NAME_EN, 'mainEntity' => ['@id' => SITE_URL . '/#organization']]],
];

$hero = [
    'eyebrow' => 'Contact',
    'title' => 'Get in touch',
    'subtitle' => 'Call us or fill in the form for anything about hall booking, the hostel, the library or visiting.',
    'image' => 'building',
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container">
        <div class="contact-cards">
            <div class="contact-card">
                <span class="contact-icon"><?= icon('pin') ?></span>
                <h2>Address</h2>
                <address>
                    <strong><?= e(SITE_NAME_EN) ?></strong><br>
                    <?= e(ADDRESS_STREET) ?>, <?= e(ADDRESS_CITY) ?> <?= e(ADDRESS_PIN) ?>, Maharashtra
                </address>
                <a href="<?= MAP_URL ?>" class="btn btn-outline btn-sm" target="_blank" rel="noopener">Directions on Google Maps ↗</a>
            </div>
            <div class="contact-card">
                <span class="contact-icon"><?= icon('phone') ?></span>
                <h2>Phone</h2>
                <ul class="contact-people">
                    <?php foreach (contact_people() as [$name, $phone]): ?>
                        <li><span><?= e($name) ?></span><a href="tel:+91<?= $phone ?>">+91 <?= $phone ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="contact-card contact-card-wa">
                <span class="contact-icon"><?= icon('whatsapp') ?></span>
                <h2>WhatsApp</h2>
                <p>Send us a message on WhatsApp for a quick reply.</p>
                <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp btn-sm" target="_blank" rel="noopener"><?= icon('whatsapp') ?> Chat on WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow">Map</p>
            <h2>How to reach us</h2>
            <p>Next to Sant Tukaram Udyan, Sector 27A, Nigdi Pradhikaran, Pimpri-Chinchwad.</p>
            <div class="map map-tall">
                <iframe src="<?= MAP_EMBED ?>" title="Map – Smruti Bhavan" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <?php require __DIR__ . '/../includes/inquiry-form.php'; ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">What do you need?</p>
            <h2>Information by topic</h2>
        </div>
        <div class="work-grid topic-grid">
            <?php foreach ($topics as [$title, $text, $link, $cta]): ?>
                <a class="work-card topic-card" href="<?= e($link) ?>">
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                    <span class="card-link"><?= e($cta) ?> →</span>
                </a>
            <?php endforeach; ?>
        </div>
        <p class="note">Please call ahead for office hours.</p>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
