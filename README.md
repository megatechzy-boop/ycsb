# Yashwantrao Chavan Smruti Bhavan – Website

PHP website (HTML, CSS, vanilla JS front end; PHP back end) for Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad.

## Structure
- `index.php` – home page
- `includes/` – `config.php` (contact details, URLs), `header.php` (meta, schema, menu), `footer.php`
- `inquiry.php` – inquiry form handler
- `assets/` – css, js, images
- `.htaccess` – clean URLs, caching
- `robots.txt`, `sitemap.xml`, `llms.txt`

## Run locally
```
php -S localhost:8000
```

## Before going live
- Set `SITE_URL`, `EMAIL`, `WHATSAPP` in `includes/config.php`
- Replace `example.com` in `robots.txt`, `sitemap.xml`, `llms.txt`
- Replace brochure-cropped images in `assets/images/` with the professional photo shoot
