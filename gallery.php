<?php
require_once __DIR__ . '/includes/config.php';

$categories = [
    'all' => 'सर्व',
    'building' => 'इमारत व पुतळा',
    'halls' => 'सभागृह',
    'library' => 'ग्रंथालय व अभ्यासिका',
    'jeevanpat' => 'जीवनपट दालन',
    'hostel' => 'वसतिगृह व निवास',
];

$photos = [
    ['building', 'building', 'स्मृती भवन इमारत व यशवंतराव चव्हाण यांचा पुतळा - ड्रोन दृश्य'],
    ['statue-3d', 'building', 'स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती पुतळा'],
    ['jagtap-bust', 'building', 'स्व. आ. लक्ष्मणभाऊ जगताप अर्धाकृती पुतळा'],
    ['venutai-hall', 'halls', 'स्व. वेणुताई चव्हाण सभागृह - बाल्कनीसह'],
    ['hall-large', 'halls', 'मोठे सभागृह - स्टेज व झुंबर'],
    ['hall-small', 'halls', 'छोटे सभागृह'],
    ['dining', 'halls', 'डायनिंग हॉल'],
    ['history-entry', 'library', 'इतिहास ग्रंथालयाचे प्रवेशद्वार'],
    ['history-library', 'library', 'स्व. श्रीमंत छ. अभयसिंहराजे भोसले इतिहास ग्रंथालय'],
    ['history-library-2', 'library', 'इतिहास ग्रंथालय - वाचन कक्ष'],
    ['library-board', 'library', 'स्व. अरुण किर्लोस्कर UPSC व MPSC अभ्यासिका'],
    ['library-upsc', 'library', 'अभ्यासिकेतील स्वतंत्र अभ्यास टेबल'],
    ['guidance', 'library', 'विद्यार्थी मार्गदर्शन केंद्र - सेमिनार हॉल'],
    ['jeevanpat', 'jeevanpat', 'यशवंतराव चव्हाण जीवनपट दालन'],
    ['jeevanpat-2', 'jeevanpat', 'जीवनपट दालनातील माहिती फलक'],
    ['hostel', 'hostel', 'विद्यार्थी वसतिगृहातील खोली'],
    ['hostel-2', 'hostel', 'विद्यार्थी वसतिगृह - अभ्यास टेबल'],
    ['guest-room', 'hostel', 'पाहुण्यांसाठी वातानुकूलित खोली'],
];

$page = [
    'title' => 'फोटो गॅलरी | स्व. यशवंतराव चव्हाण स्मृती भवन, निगडी',
    'description' => 'स्व. यशवंतराव चव्हाण स्मृती भवन, निगडीचे फोटो - इमारत, १५ फूट पुतळा, वेणुताई चव्हाण सभागृह, इतिहास ग्रंथालय, UPSC अभ्यासिका, जीवनपट दालन व वसतिगृह.',
    'path' => '/gallery',
    'alternates' => ['mr' => '/gallery', 'en' => '/en/gallery'],
    'active' => 'gallery',
    'breadcrumb' => ['गॅलरी' => '/gallery'],
    'schema' => [[
        '@type' => 'ImageGallery',
        'name' => 'स्व. यशवंतराव चव्हाण स्मृती भवन - फोटो गॅलरी',
        'about' => ['@id' => SITE_URL . '/#smruti-bhavan'],
        'image' => array_map(fn($p) => [
            '@type' => 'ImageObject',
            'contentUrl' => SITE_URL . '/assets/images/' . $p[0] . '.webp',
            'caption' => $p[2],
        ], $photos),
    ]],
];

$hero = [
    'eyebrow' => 'गॅलरी',
    'title' => 'स्मृती भवनची झलक',
    'subtitle' => 'इमारत, पुतळा, सभागृहे, ग्रंथालये, जीवनपट दालन व वसतिगृहाचे फोटो.',
    'image' => 'hall-large',
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-hero.php';
?>

<section class="section">
    <div class="container">
        <div class="filter-bar" role="group" aria-label="फोटो प्रकार निवडा">
            <?php foreach ($categories as $key => $label): ?>
                <button class="filter-btn<?= $key === 'all' ? ' active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>"><?= e($label) ?></button>
            <?php endforeach; ?>
        </div>

        <div class="masonry">
            <?php foreach ($photos as [$img, $cat, $caption]): ?>
                <figure class="masonry-item" data-cat="<?= $cat ?>">
                    <button class="gallery-item<?= $img === 'statue-3d' ? ' gallery-item-cutout' : '' ?>" data-full="/assets/images/<?= $img ?>.webp">
                        <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($caption) ?>" loading="lazy">
                    </button>
                    <figcaption><?= e($caption) ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>

        <p class="note">आणखी फोटो व व्हिडिओ लवकरच. उद्घाटन व कार्यक्रमांचे फोटो येथे जोडले जातील.</p>
    </div>
</section>

<section class="visit-band">
    <div class="container visit-grid">
        <div>
            <h2>प्रत्यक्ष भेट द्या</h2>
            <p>फोटोपेक्षा प्रत्यक्ष अनुभव अधिक भव्य आहे. कुटुंबासह स्मृती भवनला अवश्य भेट द्या.</p>
        </div>
        <div class="btn-row">
            <a href="<?= MAP_URL ?>" class="btn btn-gold" target="_blank" rel="noopener"><?= icon('pin') ?> दिशा पहा</a>
            <a href="/contact" class="btn btn-light">संपर्क</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
