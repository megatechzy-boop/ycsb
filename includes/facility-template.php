<?php
// Renders a facility page from $f:
//   slug, interest, title, h1, eyebrow, subtitle, description, image, heroImage, cutout (bool),
//   intro (paragraphs), info (label => value), features (list), photos ([img, caption]),
//   faqs ([q, a]), schemaType
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

$path = '/facilities/' . $f['slug'];
if (!empty($f['path'])) {
    $path = $f['path'];
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
    'title' => $f['title'],
    'description' => $f['description'],
    'path' => $path,
    'active' => $f['active'] ?? 'facilities',
    'breadcrumb' => $f['breadcrumb'] ?? ['सोयी-सुविधा' => '/#facilities', $f['h1'] => $path],
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
$internal = array_values(array_filter($facilities, fn($x) => str_starts_with($x[3], '/') && $x[3] !== '/smruti-bhavan-project'));
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
                <img src="/assets/images/<?= e($f['image']) ?>.webp" alt="<?= e($f['h1']) ?> - स्मृती भवन, निगडी">
            </figure>
            <?php foreach ($f['intro'] as $i => $para): ?>
                <p<?= $i === 0 ? ' class="lead"' : '' ?>><?= e($para) ?></p>
            <?php endforeach; ?>
        </div>
        <aside class="fact-box" aria-label="<?= e($f['h1']) ?> - थोडक्यात माहिती">
            <h2>थोडक्यात माहिती</h2>
            <dl>
                <?php foreach ($f['info'] as $label => $value): ?>
                    <div><dt><?= e($label) ?></dt><dd><?= e($value) ?></dd></div>
                <?php endforeach; ?>
            </dl>
            <div class="fact-box-cta">
                <a href="#contact" class="btn btn-primary btn-sm">चौकशी करा</a>
                <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-outline btn-sm"><?= icon('phone') ?> कॉल करा</a>
            </div>
        </aside>
    </div>
</section>

<?php if (!empty($f['features'])): ?>
<!-- Features -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">वैशिष्ट्ये</p>
            <h2>येथे काय मिळते?</h2>
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
            <p class="eyebrow">फोटो</p>
            <h2>झलक</h2>
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
            <p class="eyebrow">प्रश्नोत्तरे</p>
            <h2>वारंवार विचारले जाणारे प्रश्न</h2>
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
            <p class="eyebrow">संपर्क</p>
            <h2>अधिक माहितीसाठी संपर्क करा</h2>
            <p>वेळा, शुल्क व प्रवेश प्रक्रियेबद्दल माहितीसाठी फॉर्म भरा किंवा थेट फोन करा.</p>
            <ul class="contact-list">
                <li>श्री. सुनिल जाधव - <a href="tel:+91<?= PHONE_1 ?>"><?= mr_num(PHONE_1) ?></a></li>
                <li>श्री. रामभाऊ तावरे - <a href="tel:+91<?= PHONE_2 ?>"><?= mr_num(PHONE_2) ?></a></li>
                <li>श्री. विलास भोसले - <a href="tel:+91<?= PHONE_3 ?>"><?= mr_num(PHONE_3) ?></a></li>
            </ul>
            <address><?= e(ADDRESS_MR) ?></address>
        </div>
        <?php require __DIR__ . '/inquiry-form.php'; ?>
    </div>
</section>

<!-- Related -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">इतर सुविधा</p>
            <h2>स्मृती भवनमध्ये आणखी काय आहे?</h2>
        </div>
        <div class="card-grid card-grid-3">
            <?php foreach ($related as [$img, $title, $text, $link]): ?>
                <a class="card" href="<?= e($link) ?>">
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

<?php require __DIR__ . '/footer.php'; ?>
