<?php
// Served as /sitemap.xml (see .htaccess). Lists both languages with hreflang pairs.
require_once __DIR__ . '/includes/config.php';
$pages = require __DIR__ . '/includes/pages.php';

// Source file of a page, for its last-modified date
function page_file($path)
{
    $file = $path === '/' ? 'index' : (str_ends_with($path, '/') ? $path . 'index' : $path);
    return __DIR__ . '/' . ltrim($file, '/') . '.php';
}

header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
<?php foreach ($pages as $mr => [$label, $priority, $freq]): ?>
<?php $en = $mr === '/' ? '/en/' : '/en' . $mr; ?>
<?php foreach ([$mr, $en] as $path): ?>
<?php $file = page_file($path); ?>
  <url>
    <loc><?= e(SITE_URL . $path) ?></loc>
<?php if (is_file($file)): ?>
    <lastmod><?= date('Y-m-d', filemtime($file)) ?></lastmod>
<?php endif; ?>
    <changefreq><?= $freq ?></changefreq>
    <priority><?= $path === $mr ? $priority : number_format(max(0.1, $priority - 0.1), 1) ?></priority>
    <xhtml:link rel="alternate" hreflang="mr" href="<?= e(SITE_URL . $mr) ?>"/>
    <xhtml:link rel="alternate" hreflang="en" href="<?= e(SITE_URL . $en) ?>"/>
    <xhtml:link rel="alternate" hreflang="x-default" href="<?= e(SITE_URL . $mr) ?>"/>
  </url>
<?php endforeach; ?>
<?php endforeach; ?>
</urlset>
