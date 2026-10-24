<?php
// Inner page banner. Expects $hero = ['eyebrow', 'title', 'subtitle', 'image'] and $page['breadcrumb'].
?>
<section class="page-hero"<?= !empty($hero['image']) ? ' style="--hero-img: url(\'/assets/images/' . e($hero['image']) . '.webp\')"' : '' ?>>
    <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= home_url() ?>"><?= t('मुखपृष्ठ', 'Home') ?></a>
            <?php foreach ($page['breadcrumb'] as $label => $path): ?>
                <span aria-hidden="true">/</span>
                <?php if ($path === $page['path']): ?>
                    <span aria-current="page"><?= e($label) ?></span>
                <?php else: ?>
                    <a href="<?= e($path) ?>"><?= e($label) ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
        <?php if (!empty($hero['eyebrow'])): ?>
            <p class="eyebrow eyebrow-gold"><?= e($hero['eyebrow']) ?></p>
        <?php endif; ?>
        <h1><?= e($hero['title']) ?></h1>
        <?php if (!empty($hero['subtitle'])): ?>
            <p class="page-hero-sub"><?= e($hero['subtitle']) ?></p>
        <?php endif; ?>
    </div>
</section>
