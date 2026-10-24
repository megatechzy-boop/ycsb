<?php
require_once __DIR__ . '/includes/config.php';

$people = [
    ['श्री. सुनिल जाधव', PHONE_1],
    ['श्री. रामभाऊ तावरे', PHONE_2],
    ['श्री. विलास भोसले', PHONE_3],
];

$topics = [
    ['हॉल बुकिंग', 'विवाह, वाढदिवस व इतर कार्यक्रमांसाठी सभागृह.', '/halls', 'सभागृह माहिती'],
    ['वसतिगृह प्रवेश', '५२ खोल्या, १४४ विद्यार्थी-विद्यार्थिनी.', '/student-hostel', 'वसतिगृह माहिती'],
    ['अभ्यासिका प्रवेश', 'UPSC / MPSC स्पर्धा परीक्षा अभ्यासिका.', '/facilities/upsc-mpsc-library', 'अभ्यासिका माहिती'],
    ['वधू-वर नोंदणी', 'सर्व जाती-धर्मातील वधू-वरांसाठी.', '/facilities/vadhu-var-suchak-kendra', 'नोंदणी माहिती'],
];

$formInterest = in_array($_GET['topic'] ?? '', ['hall', 'hostel', 'library', 'vadhu-var', 'visit'], true) ? $_GET['topic'] : 'visit';

$page = [
    'title' => 'संपर्क | स्व. यशवंतराव चव्हाण स्मृती भवन, निगडी प्राधिकरण, पुणे',
    'description' => 'स्व. यशवंतराव चव्हाण स्मृती भवन, सेक्टर २७ अ, संत तुकाराम उद्यानाशेजारी, निगडी प्राधिकरण, पुणे ४११०४४. फोन: ' . PHONE_1 . ', ' . PHONE_2 . ', ' . PHONE_3 . '. नकाशा व चौकशी फॉर्म.',
    'path' => '/contact',
    'alternates' => ['mr' => '/contact', 'en' => '/en/contact'],
    'active' => 'contact',
    'breadcrumb' => ['संपर्क' => '/contact'],
    'schema' => [[
        '@type' => 'ContactPage',
        'name' => 'संपर्क - ' . SITE_NAME_MR,
        'mainEntity' => ['@id' => SITE_URL . '/#organization'],
    ]],
];

$hero = [
    'eyebrow' => 'संपर्क',
    'title' => 'आमच्याशी संपर्क साधा',
    'subtitle' => 'हॉल बुकिंग, वसतिगृह, अभ्यासिका किंवा भेटीबद्दल कोणतीही माहिती हवी असल्यास फोन करा किंवा फॉर्म भरा.',
    'image' => 'building',
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-hero.php';
?>

<!-- Quick contact cards -->
<section class="section">
    <div class="container">
        <div class="contact-cards">
            <div class="contact-card">
                <span class="contact-icon"><?= icon('pin') ?></span>
                <h2>पत्ता</h2>
                <address>
                    <strong><?= e(SITE_NAME_MR) ?></strong><br>
                    <?= e(ADDRESS_MR) ?>
                </address>
                <a href="<?= MAP_URL ?>" class="btn btn-outline btn-sm" target="_blank" rel="noopener">Google Maps वर दिशा ↗</a>
            </div>
            <div class="contact-card">
                <span class="contact-icon"><?= icon('phone') ?></span>
                <h2>फोन</h2>
                <ul class="contact-people">
                    <?php foreach ($people as [$name, $phone]): ?>
                        <li><span><?= e($name) ?></span><a href="tel:+91<?= $phone ?>"><?= mr_num($phone) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="contact-card contact-card-wa">
                <span class="contact-icon"><?= icon('whatsapp') ?></span>
                <h2>WhatsApp</h2>
                <p>त्वरित उत्तरासाठी WhatsApp वर संदेश पाठवा.</p>
                <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp btn-sm" target="_blank" rel="noopener"><?= icon('whatsapp') ?> WhatsApp करा</a>
            </div>
        </div>
    </div>
</section>

<!-- Form + map -->
<section class="section section-alt" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow">नकाशा</p>
            <h2>स्मृती भवनला कसे पोहोचाल?</h2>
            <p>संत तुकाराम उद्यानाशेजारी, सेक्टर २७ अ, निगडी प्राधिकरण, पिंपरी-चिंचवड.</p>
            <div class="map map-tall">
                <iframe src="<?= MAP_EMBED ?>" title="स्मृती भवन नकाशा" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <?php require __DIR__ . '/includes/inquiry-form.php'; ?>
    </div>
</section>

<!-- Topics -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">कशासाठी संपर्क?</p>
            <h2>तुमच्या गरजेनुसार माहिती</h2>
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
        <p class="note">कार्यालयीन वेळेसाठी कृपया आधी फोन करा.</p>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
