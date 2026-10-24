<?php
// Renders a facility page from $f:
//   slug, interest, title, h1, eyebrow, subtitle, description, image, heroImage, cutout (bool),
//   intro (paragraphs), info (label => value), features (list), photos ([img, caption]),
//   faqs ([q, a]), schemaType, bookingUrl (external booking button)
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

// English pages live under /en with the same path as the Marathi page
$isEnPage = ($f['lang'] ?? 'mr') === 'en';
$prefix = $isEnPage ? '/en' : '';
$mrPath = $f['path'] ?? '/facilities/' . $f['slug'];
$path = $prefix . $mrPath;
if ($isEnPage) {
    $facilities = $facilitiesEn;
}

$schema = [[
    '@type' => $f['schemaType'] ?? 'Place',
    'name' => $f['h1'],
    'description' => $f['description'],
    'image' => SITE_URL . '/assets/images/' . $f['image'] . '.webp',
    'containedInPlace' => ['@id' => SITE_URL . '/#smruti-bhavan'],
    'address' => ['@type' => 'PostalAddress', 'streetAddress' => ADDRESS_STREET, 'addressLocality' => ADDRESS_CITY, 'postalCode' => ADDRESS_PIN, 'addressCountry' => 'IN'],
]];
if (!empty($f['faqs'])) {
    $schema[] = [
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn($q) => [
            '@type' => 'Question',
            'name' => $q[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]],
        ], $f['faqs']),
    ];
}

$page = [
    'lang' => $isEnPage ? 'en' : 'mr',
    'alternates' => ['mr' => $mrPath, 'en' => '/en' . $mrPath],
    'title' => $f['title'],
    'description' => $f['description'],
    'path' => $path,
    'active' => $f['active'] ?? 'facilities',
    'breadcrumb' => $f['breadcrumb'] ?? [($isEnPage ? 'Facilities' : 'सोयी-सुविधा') => $prefix . '/#facilities', $f['h1'] => $path],
    'schema' => $schema,
];

$hero = [
    'eyebrow' => $f['eyebrow'],
    'title' => $f['h1'],
    'subtitle' => $f['subtitle'],
    'image' => $f['heroImage'] ?? $f['image'],
];

$formInterest = $f['interest'] ?? 'other';

// Other facilities, excluding this one and external links
// Other facilities: the next three after this one, wrapping around
$internal = array_values(array_filter($facilities, fn($x) => str_starts_with($x[3], '/') && !str_ends_with($x[3], '/smruti-bhavan-project')));
$self = array_search($path, array_column($internal, 3), true);
$related = [];
for ($i = 1; count($related) < 3 && $i < count($internal); $i++) {
    $related[] = $internal[(($self === false ? -1 : $self) + $i) % count($internal)];
}

require __DIR__ . '/header.php';
require __DIR__ . '/page-hero.php';
?>

<!-- Intro + quick info -->
<section class="section">
    <div class="container bio-grid">
        <div>
            <figure class="facility-figure<?= !empty($f['cutout']) ? ' facility-figure-cutout' : '' ?>">
                <img src="/assets/images/<?= e($f['image']) ?>.webp" alt="<?= e($f['h1']) ?> - <?= t('स्मृती भवन, निगडी', 'Smruti Bhavan, Nigdi') ?>">
            </figure>
            <?php foreach ($f['intro'] as $i => $para): ?>
                <p<?= $i === 0 ? ' class="lead"' : '' ?>><?= e($para) ?></p>
            <?php endforeach; ?>
        </div>
        <aside class="fact-box" aria-label="<?= e($f['h1']) ?> - <?= t('थोडक्यात माहिती', 'Quick facts') ?>">
            <h2><?= t('थोडक्यात माहिती', 'Quick facts') ?></h2>
            <dl>
                <?php foreach ($f['info'] as $label => $value): ?>
                    <div><dt><?= e($label) ?></dt><dd><?= e($value) ?></dd></div>
                <?php endforeach; ?>
            </dl>
            <div class="fact-box-cta">
                <?php if (!empty($f['bookingUrl'])): ?>
                    <a href="<?= e($f['bookingUrl']) ?>" class="btn btn-gold btn-sm fact-box-book" target="_blank" rel="noopener"><?= t('ऑनलाइन बुकिंग', 'Book online') ?> - venutaihall.com ↗</a>
                <?php endif; ?>
                <a href="#contact" class="btn btn-primary btn-sm"><?= t('चौकशी करा', 'Enquire') ?></a>
                <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline btn-sm"><?= icon('phone') ?> <?= t('कॉल करा', 'Call') ?></a>
            </div>
        </aside>
    </div>
</section>

<?php if (!empty($f['features'])): ?>
<!-- Features -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('वैशिष्ट्ये', 'Features') ?></p>
            <h2><?= t('येथे काय मिळते?', 'What you get') ?></h2>
        </div>
        <ul class="check-grid">
            <?php foreach ($f['features'] as $feature): ?>
                <li><?= e($feature) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($f['photos'])): ?>
<!-- Photos -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('फोटो', 'Photos') ?></p>
            <h2><?= t('झलक', 'A glimpse') ?></h2>
        </div>
        <div class="photo-row">
            <?php foreach ($f['photos'] as [$img, $caption]): ?>
                <button class="gallery-item" data-full="/assets/images/<?= e($img) ?>.webp">
                    <img src="/assets/images/<?= e($img) ?>.webp" alt="<?= e($caption) ?>" loading="lazy">
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if (!empty($f['faqs'])): ?>
<!-- FAQ -->
<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow"><?= t('प्रश्नोत्तरे', 'FAQ') ?></p>
            <h2><?= t('वारंवार विचारले जाणारे प्रश्न', 'Frequently asked questions') ?></h2>
        </div>
        <div class="faq">
            <?php foreach ($f['faqs'] as $i => [$q, $a]): ?>
                <details<?= $i === 0 ? ' open' : '' ?>>
                    <summary><?= e($q) ?></summary>
                    <p><?= e($a) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Inquiry -->
<section class="section" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow"><?= t('संपर्क', 'Contact') ?></p>
            <h2><?= t('अधिक माहितीसाठी संपर्क करा', 'Contact us for details') ?></h2>
            <p><?= t('वेळा, शुल्क व प्रवेश प्रक्रियेबद्दल माहितीसाठी फॉर्म भरा किंवा थेट फोन करा.', 'For timings, fees and admission details, fill in the form or call us directly.') ?></p>
            <ul class="contact-list">
                <?php foreach (contact_people() as [$name, $phone]): ?>
                    <li><?= e($name) ?> - <a href="tel:+91<?= $phone ?>"><?= num($phone) ?></a></li>
                <?php endforeach; ?>
            </ul>
            <address><?= e(t(ADDRESS_MR, ADDRESS_STREET . ', ' . ADDRESS_CITY . ' ' . ADDRESS_PIN)) ?></address>
        </div>
        <?php require __DIR__ . '/inquiry-form.php'; ?>
    </div>
</section>

<!-- Related -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('इतर सुविधा', 'More facilities') ?></p>
            <h2><?= t('स्मृती भवनमध्ये आणखी काय आहे?', 'More at the Smruti Bhavan') ?></h2>
        </div>
        <div class="card-grid card-grid-3">
            <?php foreach ($related as [$img, $title, $text, $link]): ?>
                <a class="card" href="<?= e($link) ?>">
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link"><?= t('अधिक माहिती', 'Learn more') ?> →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
