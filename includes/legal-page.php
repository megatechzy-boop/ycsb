<?php
// Simple text page. Expects $page, $hero and $sections = [heading => [paragraphs]].
require __DIR__ . '/header.php';
require __DIR__ . '/page-hero.php';
?>

<section class="section">
    <div class="container narrow legal">
        <p class="note legal-updated">शेवटचा बदल: <?= e($updated) ?></p>
        <?php foreach ($sections as $heading => $paras): ?>
            <h2><?= e($heading) ?></h2>
            <?php foreach ($paras as $para): ?>
                <p><?= e($para) ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <h2>संपर्क</h2>
        <p><?= e(ORG_NAME_MR) ?>, <?= e(ADDRESS_MR) ?>. फोन: <a href="tel:+91<?= PHONE_1 ?>"><?= mr_num(PHONE_1) ?></a></p>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
