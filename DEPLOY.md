# Deploying to cPanel

The site is plain PHP (no database, no build step). It needs Apache with `mod_rewrite` and `mod_headers`, and PHP 8.1 or newer.

## One-time setup

1. The code is on GitHub at `megatechzy-boop/ycsb`.
2. In cPanel open **Git™ Version Control → Create**.
   - Clone URL: `https://github.com/megatechzy-boop/ycsb.git`
     (private repo: create an SSH key in cPanel **SSH Access**, add it as a Deploy key in GitHub, and use `git@github.com:megatechzy-boop/ycsb.git`)
   - Repository path: `/home/CPANEL_USER/repositories/ycsb` (outside public_html)
3. Edit `.cpanel.yml`: replace `CPANEL_USER` with your cPanel username (and the folder, if this is not the main domain). Commit and push.
4. In **File Manager**, create `public_html/includes/config.local.php` from `includes/config.local.example.php`:
   ```php
   <?php
   define('SITE_URL', 'https://www.your-domain.com');
   define('EMAIL', 'office@your-domain.com');
   ```
5. **MultiPHP Manager**: set the domain to PHP 8.1 or newer.
6. **SSL/TLS Status → Run AutoSSL**. The site redirects all traffic to HTTPS.

## Every update

1. Push to `main` on GitHub.
2. cPanel → **Git Version Control → Manage → Pull or Deploy**:
   **Update from Remote**, then **Deploy HEAD Commit** (runs `.cpanel.yml`).

## After the first deploy, check

- `/` and `/en/` open; `/about-samiti.php` redirects to `/about-samiti`
- `/sitemap.xml`, `/robots.txt`, `/llms.txt` show the real domain
- The enquiry form sends mail (many hosts block PHP `mail()`; if so, switch to SMTP)
- Submit `https://your-domain/sitemap.xml` in Google Search Console
