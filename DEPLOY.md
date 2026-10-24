# Deploying to cPanel

The site is plain PHP (no database, no build step). It needs Apache with `mod_rewrite` and `mod_headers`, and PHP 8.1 or newer.

## One-time setup

1. The code is on GitHub at `megatechzy-boop/ycsb`.
2. In cPanel open **Git™ Version Control → Create**.
   - Clone URL: `https://github.com/megatechzy-boop/ycsb.git`
     (private repo: create an SSH key in cPanel **SSH Access**, add it as a Deploy key in GitHub, and use `git@github.com:megatechzy-boop/ycsb.git`)
   - Repository path: `repositories/ycsb` (outside the website folder)
3. `.cpanel.yml` deploys to `/home/venutaihall/ycbhavan.org/`. Check the domain's **Document Root** in cPanel **Domains**; if it is different, change the path in `.cpanel.yml`, commit and push.
4. In **File Manager**, create `ycbhavan.org/includes/config.local.php` with the enquiry email (the domain is already set to https://ycbhavan.org):
   ```php
   <?php
   define('EMAIL', 'office@ycbhavan.org');
   ```
5. **MultiPHP Manager**: set the domain to PHP 8.1 or newer.
6. **SSL/TLS Status → Run AutoSSL**. The site redirects all traffic to HTTPS.

## Every update

1. Push to `main` on GitHub.
2. cPanel → **Git Version Control → Manage → Pull or Deploy**:
   **Update from Remote**, then **Deploy HEAD Commit** (runs `.cpanel.yml`).

## After the first deploy, check

- `/` and `/en/` open; `/yashwantrao-chavan.php` redirects to `/yashwantrao-chavan`
- `/sitemap.xml`, `/robots.txt`, `/llms.txt` show the real domain
- The enquiry form sends mail (many hosts block PHP `mail()`; if so, switch to SMTP)
- Submit `https://your-domain/sitemap.xml` in Google Search Console
