<?php
require_once __DIR__ . '/../includes/config.php';

$categories = [
    'all' => 'All',
    'building' => 'Building & statue',
    'halls' => 'Halls',
    'library' => 'Libraries',
    'jeevanpat' => 'Life-story gallery',
    'hostel' => 'Hostel & rooms',
];

$photos = [
    ['building', 'building', 'Smruti Bhavan building and Yashwantrao Chavan statue – drone view'],
    ['statue-3d', 'building', '15 ft full-length statue of Yashwantrao Chavan'],
    ['jagtap-bust', 'building', 'Bust of Late Laxmanbhau Jagtap, MLA'],
    ['venutai-hall', 'halls', 'Late Venutai Chavan hall with balcony'],
    ['hall-large', 'halls', 'Large hall – stage and chandeliers'],
    ['hall-small', 'halls', 'Small hall'],
    ['dining', 'halls', 'Dining hall'],
    ['history-entry', 'library', 'History library entrance'],
    ['history-library', 'library', 'Late Shrimant Chh. Abhaysinhraje Bhosale History Library'],
    ['history-library-2', 'library', 'History library reading room'],
    ['library-board', 'library', 'Late Arun Kirloskar UPSC & MPSC Library'],
    ['library-upsc', 'library', 'Individual study desks'],
    ['guidance', 'library', 'Student guidance centre – seminar hall'],
    ['jeevanpat', 'jeevanpat', 'Yashwantrao Chavan life-story gallery'],
    ['jeevanpat-2', 'jeevanpat', 'Information panels in the life-story gallery'],
    ['hostel', 'hostel', 'Student hostel room'],
    ['hostel-2', 'hostel', 'Student hostel – study tables'],
    ['guest-room', 'hostel', 'Air-conditioned guest room'],
];

$page = [
    'lang' => 'en',
    'title' => 'Photo Gallery | Yashwantrao Chavan Smruti Bhavan, Nigdi',
    'description' => 'Photos of the Yashwantrao Chavan Smruti Bhavan, Nigdi – the building, 15 ft statue, Venutai Chavan halls, history library, UPSC library, life-story gallery and hostel.',
    'path' => '/en/gallery',
    'alternates' => ['mr' => '/gallery', 'en' => '/en/gallery'],
    'active' => 'gallery',
    'breadcrumb' => ['Gallery' => '/en/gallery'],
    'schema' => [[
        '@type' => 'ImageGallery',
        'name' => 'Yashwantrao Chavan Smruti Bhavan – Photo Gallery',
        'image' => array_map(fn($p) => ['@type' => 'ImageObject', 'contentUrl' => SITE_URL . '/assets/images/' . $p[0] . '.webp', 'caption' => $p[2]], $photos),
    ]],
];

$hero = [
    'eyebrow' => 'Gallery',
    'title' => 'A glimpse of the Smruti Bhavan',
    'subtitle' => 'Photos of the building, statue, halls, libraries, life-story gallery and hostel.',
    'image' => 'hall-large',
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container">
        <div class="filter-bar" role="group" aria-label="Filter photos">
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
        <p class="note">More photos and videos coming soon, including the inauguration and events.</p>
    </div>
</section>

<section class="visit-band">
    <div class="container visit-grid">
        <div>
            <h2>Visit in person</h2>
            <p>It is even grander in real life. Bring your family to the Smruti Bhavan.</p>
        </div>
        <div class="btn-row">
            <a href="<?= MAP_URL ?>" class="btn btn-gold" target="_blank" rel="noopener"><?= icon('pin') ?> Directions</a>
            <a href="/en/contact" class="btn btn-light">Contact</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
