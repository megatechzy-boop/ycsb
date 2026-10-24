<?php
require_once __DIR__ . '/includes/config.php';

// Recurring commemorations held every year
$annual = [
    ['१२ मार्च', 'यशवंतराव चव्हाण जयंती', 'स्व. यशवंतराव चव्हाण यांच्या जयंतीनिमित्त पुतळ्यास अभिवादन व कार्यक्रम.'],
    ['१ मे', 'महाराष्ट्र दिन', 'संयुक्त महाराष्ट्राचे पहिले मुख्यमंत्री यांच्या स्मृतीस वंदन.'],
    ['२५ नोव्हेंबर', 'यशवंतराव चव्हाण पुण्यतिथी', 'पुण्यतिथीनिमित्त अभिवादन सभा.'],
];

// Add news here: [date (Y-m-d), title, text, image or '']
$news = [];

$page = [
    'noindex' => empty($news),
    'title' => 'बातम्या व कार्यक्रम | स्व. यशवंतराव चव्हाण स्मृती भवन, निगडी',
    'description' => 'स्व. यशवंतराव चव्हाण स्मृती भवन, निगडी येथील कार्यक्रम, जयंती-पुण्यतिथी अभिवादन, उपक्रम व बातम्या.',
    'path' => '/news-events',
    'alternates' => ['mr' => '/news-events', 'en' => '/en/news-events'],
    'breadcrumb' => ['बातम्या व कार्यक्रम' => '/news-events'],
];

$hero = [
    'eyebrow' => 'बातम्या व कार्यक्रम',
    'title' => 'स्मृती भवनमधील घडामोडी',
    'subtitle' => 'समितीचे कार्यक्रम, उपक्रम व बातम्या.',
    'image' => 'hall-large',
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-hero.php';
?>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">दरवर्षी</p>
            <h2>महत्त्वाचे दिवस</h2>
        </div>
        <div class="work-grid work-grid-3">
            <?php foreach ($annual as [$date, $title, $text]): ?>
                <div class="work-card event-card">
                    <span class="event-date"><?= e($date) ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">बातम्या</p>
            <h2>ताज्या घडामोडी</h2>
        </div>
        <?php if ($news): ?>
            <div class="news-list">
                <?php foreach ($news as [$date, $title, $text, $img]): ?>
                    <article class="news-item">
                        <?php if ($img): ?><img src="/assets/images/<?= e($img) ?>.webp" alt="<?= e($title) ?>" loading="lazy"><?php endif; ?>
                        <div>
                            <time datetime="<?= e($date) ?>"><?= mr_num(date('d-m-Y', strtotime($date))) ?></time>
                            <h3><?= e($title) ?></h3>
                            <p><?= e($text) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h3>बातम्या लवकरच</h3>
                <p>उद्घाटन सोहळा व आगामी कार्यक्रमांची माहिती येथे प्रसिद्ध केली जाईल. ताज्या माहितीसाठी आमच्याशी संपर्क करा.</p>
                <a href="/contact" class="btn btn-primary">संपर्क करा</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
