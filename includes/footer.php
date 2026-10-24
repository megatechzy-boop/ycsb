</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-about">
            <img src="/assets/images/chavan-portrait.webp" alt="" width="72" height="72" loading="lazy">
            <h3><?= e(ORG_NAME_MR) ?></h3>
            <p><?= e(ADDRESS_MR) ?></p>
            <p>
                <a href="tel:+91<?= PHONE_1 ?>"><?= mr_num(PHONE_1) ?></a> /
                <a href="tel:+91<?= PHONE_2 ?>"><?= mr_num(PHONE_2) ?></a> /
                <a href="tel:+91<?= PHONE_3 ?>"><?= mr_num(PHONE_3) ?></a>
            </p>
        </div>
        <div>
            <h4>आमच्याबद्दल</h4>
            <ul>
                <li><a href="/about-samiti">स्मारक समिती</a></li>
                <li><a href="/about-yashwantrao-chavan">स्व. यशवंतराव चव्हाण</a></li>
                <li><a href="/smruti-bhavan-project">स्मृती भवन प्रकल्प</a></li>
                <li><a href="/gallery">गॅलरी</a></li>
                <li><a href="/news-events">बातम्या व कार्यक्रम</a></li>
            </ul>
        </div>
        <div>
            <h4>सोयी-सुविधा</h4>
            <ul>
                <li><a href="/facilities/upsc-mpsc-library">स्पर्धा परीक्षा अभ्यासिका</a></li>
                <li><a href="/student-hostel">विद्यार्थी वसतिगृह</a></li>
                <li><a href="/facilities/vadhu-var-suchak-kendra">वधू-वर सूचक केंद्र</a></li>
                <li><a href="<?= HALL_BOOKING_URL ?>" target="_blank" rel="noopener">हॉल बुकिंग ↗</a></li>
            </ul>
        </div>
        <div>
            <h4>माहिती</h4>
            <ul>
                <li><a href="/faq">वारंवार विचारले जाणारे प्रश्न</a></li>
                <li><a href="/contact">संपर्क</a></li>
                <li><a href="/privacy-policy">गोपनीयता धोरण</a></li>
                <li><a href="/terms">नियम व अटी</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            © <?= mr_num(date('Y')) ?> <?= e(ORG_NAME_MR) ?>. सर्व हक्क राखीव.
            <span>Website by Mega Techzy</span>
        </div>
    </div>
</footer>

<div class="mobile-bar" aria-label="त्वरित संपर्क">
    <a href="tel:+91<?= PHONE_1 ?>"><?= icon('phone') ?><span>कॉल</span></a>
    <a href="https://wa.me/<?= WHATSAPP ?>" target="_blank" rel="noopener"><?= icon('whatsapp') ?><span>WhatsApp</span></a>
    <a href="<?= MAP_URL ?>" target="_blank" rel="noopener"><?= icon('pin') ?><span>दिशा</span></a>
</div>

<div class="lightbox" hidden>
    <button class="lightbox-close" aria-label="बंद करा">×</button>
    <img src="" alt="">
</div>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
