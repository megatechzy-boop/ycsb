<?php
// Simple text page. Expects $page, $hero and $sections = [heading => [paragraphs]].
require __DIR__ . '/header.php';
require __DIR__ . '/page-hero.php';
?>

<section class="section">
    <div class="container narrow legal">
        <p class="note legal-updated"><?= t('शेवटचा बदल', 'Last updated') ?>: <?= e($updated) ?></p>
        <?php foreach ($sections as $heading => $paras): ?>
            <h2><?= e($heading) ?></h2>
            <?php foreach ($paras as $para): ?>
                <p><?= e($para) ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <h2><?= t('संपर्क', 'Contact') ?></h2>
        <p><?= e(t(ORG_NAME_MR, ORG_NAME_EN)) ?>, <?= e(t(ADDRESS_MR, ADDRESS_STREET . ', ' . ADDRESS_CITY . ' ' . ADDRESS_PIN)) ?>. <?= t('फोन', 'Phone') ?>: <a href="tel:+91<?= PHONE_1 ?>"><?= num(PHONE_1) ?></a></p>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
