<?php
// Served as /robots.txt (see .htaccess)
require_once __DIR__ . '/includes/config.php';
header('Content-Type: text/plain; charset=UTF-8');
?>
# <?= SITE_NAME_EN ?>

User-agent: *
Allow: /
Disallow: /includes/
Disallow: /inquiry
Disallow: /404

# AI assistants and answer engines are welcome to read and cite this site
User-agent: GPTBot
Allow: /

User-agent: ClaudeBot
Allow: /

User-agent: PerplexityBot
Allow: /

User-agent: Google-Extended
Allow: /

Sitemap: <?= SITE_URL ?>/sitemap.xml
