<?php
require_once __DIR__ . '/../includes/config.php';

$annual = [
    ['12 March', 'Yashwantrao Chavan Jayanti', 'Tribute at the statue and programmes on his birth anniversary.'],
    ['1 May', 'Maharashtra Day', 'Remembering the first Chief Minister of Maharashtra.'],
    ['25 November', 'Yashwantrao Chavan Punyatithi', 'Tribute gathering on his death anniversary.'],
];

// Add news here: [date (Y-m-d), title, text, image or '']
$news = [];

$page = [
    'lang' => 'en',
    'title' => 'News & Events | Yashwantrao Chavan Smruti Bhavan, Nigdi',
    'description' => 'Events, anniversary tributes, activities and news from the Yashwantrao Chavan Smruti Bhavan, Nigdi.',
    'path' => '/en/news-events',
    'alternates' => ['mr' => '/news-events', 'en' => '/en/news-events'],
    'breadcrumb' => ['News & Events' => '/en/news-events'],
];

$hero = ['eyebrow' => 'News & events', 'title' => 'What\'s happening at the Smruti Bhavan', 'subtitle' => 'Programmes, activities and news from the Samiti.', 'image' => 'hall-large'];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Every year</p>
            <h2>Important days</h2>
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
            <p class="eyebrow">News</p>
            <h2>Latest updates</h2>
        </div>
        <?php if ($news): ?>
            <div class="news-list">
                <?php foreach ($news as [$date, $title, $text, $img]): ?>
                    <article class="news-item">
                        <?php if ($img): ?><img src="/assets/images/<?= e($img) ?>.webp" alt="<?= e($title) ?>" loading="lazy"><?php endif; ?>
                        <div>
                            <time datetime="<?= e($date) ?>"><?= date('j M Y', strtotime($date)) ?></time>
                            <h3><?= e($title) ?></h3>
                            <p><?= e($text) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h3>News coming soon</h3>
                <p>Details of the inauguration and upcoming programmes will be published here. Contact us for the latest information.</p>
                <a href="/en/contact" class="btn btn-primary">Contact us</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
