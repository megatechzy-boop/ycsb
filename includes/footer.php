</main>

<footer class="site-footer">
<?php if (!empty($isEn)): ?>
    <div class="container footer-grid">
        <div class="footer-about">
            <img src="/assets/images/chavan-portrait.webp" alt="" width="72" height="72" loading="lazy">
            <h3><?= e(ORG_NAME_EN) ?></h3>
            <p><?= e(ADDRESS_STREET) ?>, <?= e(ADDRESS_CITY) ?> <?= e(ADDRESS_PIN) ?></p>
            <p>
                <a href="tel:+91<?= PHONE_1 ?>">+91 <?= PHONE_1 ?></a> /
                <a href="tel:+91<?= PHONE_2 ?>">+91 <?= PHONE_2 ?></a> /
                <a href="tel:+91<?= PHONE_3 ?>">+91 <?= PHONE_3 ?></a>
            </p>
        </div>
        <div>
            <h4>Explore</h4>
            <ul>
                <li><a href="/en/yashwantrao-chavan-smarak-samiti">Smarak Samiti</a></li>
                <li><a href="/en/yashwantrao-chavan">Yashwantrao Chavan</a></li>
                <li><a href="/en/yashwantrao-chavan-smruti-bhavan">Smruti Bhavan Project</a></li>
                <li><a href="/en/gallery">Gallery</a></li>
                <li><a href="/en/news-events">News &amp; Events</a></li>
            </ul>
        </div>
        <div>
            <h4>Facilities</h4>
            <ul>
                <li><a href="/en/arun-kirloskar-upsc-mpsc-library">UPSC &amp; MPSC Library</a></li>
                <li><a href="/en/student-hostel-nigdi">Student Hostel</a></li>
                <li><a href="/en/paschim-maharashtra-vadhu-var-suchak-kendra">Matrimonial Centre</a></li>
                <li><a href="/en/venutai-chavan-multipurpose-hall">Halls &amp; Booking</a></li>
            </ul>
        </div>
        <div>
            <h4>Information</h4>
            <ul>
                <li><a href="/en/faq">FAQ</a></li>
                <li><a href="/en/contact">Contact</a></li>
                <li><a href="/en/privacy-policy">Privacy Policy</a></li>
                <li><a href="/en/terms">Terms</a></li>
            </ul>
        </div>
    </div>
<?php else: ?>
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
                <li><a href="/yashwantrao-chavan-smarak-samiti">स्मारक समिती</a></li>
                <li><a href="/yashwantrao-chavan">स्व. यशवंतराव चव्हाण</a></li>
                <li><a href="/yashwantrao-chavan-smruti-bhavan">स्मृती भवन प्रकल्प</a></li>
                <li><a href="/gallery">गॅलरी</a></li>
                <li><a href="/news-events">बातम्या व कार्यक्रम</a></li>
            </ul>
        </div>
        <div>
            <h4>सोयी-सुविधा</h4>
            <ul>
                <li><a href="/arun-kirloskar-upsc-mpsc-library">स्पर्धा परीक्षा अभ्यासिका</a></li>
                <li><a href="/student-hostel-nigdi">विद्यार्थी वसतिगृह</a></li>
                <li><a href="/paschim-maharashtra-vadhu-var-suchak-kendra">वधू-वर सूचक केंद्र</a></li>
                <li><a href="/venutai-chavan-multipurpose-hall">सभागृह व हॉल बुकिंग</a></li>
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
<?php endif; ?>
    <div class="footer-bottom">
        <div class="container">
            <?php if (!empty($isEn)): ?>
                © <?= date('Y') ?> <?= e(ORG_NAME_EN) ?>. All rights reserved.
            <?php else: ?>
                © <?= mr_num(date('Y')) ?> <?= e(ORG_NAME_MR) ?>. सर्व हक्क राखीव.
            <?php endif; ?>
            <span>Website by <a href="https://megatechzy.com" target="_blank" rel="noopener">Mega Techzy</a></span>
        </div>
    </div>
</footer>

<div class="lightbox" hidden>
    <button class="lightbox-close" aria-label="<?= t('बंद करा', 'Close') ?>">×</button>
    <img src="" alt="">
</div>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
