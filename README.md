# Yashwantrao Chavan Smruti Bhavan – Website

PHP website (HTML, CSS, vanilla JS front end; PHP back end) for Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad.

## Structure
- `index.php` – home page
- `includes/` – `config.php` (contact details, URLs), `header.php` (meta, schema, menu), `footer.php`
- `inquiry.php` – inquiry form handler
- `assets/` – css, js, images
- `.htaccess` – clean URLs, caching
- `sitemap.php`, `robots.php`, `llms.php` – served as /sitemap.xml, /robots.txt, /llms.txt (page list in `includes/pages.php`)
- `.cpanel.yml` + `DEPLOY.md` – cPanel deployment

## Run locally
```
php -S localhost:8000
```

## Before going live
- Create `includes/config.local.php` on the server (see DEPLOY.md)
- Confirm `WHATSAPP` number in `includes/config.php`
- Replace brochure-cropped images in `assets/images/` with the professional photo shoot
