<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';


$faqsEn = [
    ['Where is the Yashwantrao Chavan Smruti Bhavan?', 'It is at ' . ADDRESS_STREET . ', Pimpri-Chinchwad, Pune ' . ADDRESS_PIN . ', next to Sant Tukaram Udyan.'],
    ['How tall is the Yashwantrao Chavan statue?', 'The full-length bronze statue is 15 ft tall – the tallest statue of Yashwantrao Chavan in India.'],
    ['What is the seating capacity of the halls?', 'The large hall seats up to 1,200 and the small hall up to 350. The dining hall serves 400 at a time, and there are 8 air-conditioned guest rooms.'],
    ['How many students can the hostel accommodate?', 'The hostel has 52 rooms for 144 male and female students.'],
    ['Who built the Smruti Bhavan?', 'Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad, a public trust founded in 1989. Construction started in 2014 and was completed in September 2026.'],
];

$page = [
    'lang' => 'en',
    'title' => 'Yashwantrao Chavan Smruti Bhavan, Nigdi | Halls, Hostel, UPSC Library',
    'description' => 'Yashwantrao Chavan Smruti Bhavan at Pradhikaran, Nigdi, Pimpri-Chinchwad – 15 ft statue, UPSC/MPSC library, student hostel for 144, 1,200-seat AC hall and life-story gallery.',
    'path' => '/en/',
    'alternates' => ['mr' => '/', 'en' => '/en/'],
    'active' => 'home',
    'schema' => [[
        '@type' => 'FAQPage',
        'inLanguage' => 'en',
        'mainEntity' => array_map(fn($f) => [
            '@type' => 'Question',
            'name' => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
        ], $faqsEn),
    ]],
];

require __DIR__ . '/../includes/header.php';
?>

<section class="page-hero" style="--hero-img: url('/assets/images/building.webp')">
    <div class="container">
        <p class="eyebrow eyebrow-gold">Architect of Modern Maharashtra</p>
        <h1>Late Yashwantrao Chavan Smruti Bhavan</h1>
        <p class="page-hero-sub">A memorial to the first Chief Minister of Maharashtra, built by Yashwantrao Chavan Smarak Samiti at Pradhikaran, Nigdi, Pimpri-Chinchwad.</p>
        <div class="btn-row">
            <a href="#contact" class="btn btn-gold">Visit Us</a>
            <a href="<?= HALL_BOOKING_URL ?>" class="btn btn-light" target="_blank" rel="noopener">Book a Hall ↗</a>
        </div>
    </div>
</section>

<section class="facts" aria-label="Key facts">
    <div class="container facts-grid">
        <div><strong>15 ft</strong><span>statue</span></div>
        <div><strong>1.5 lakh</strong><span>sq ft built-up</span></div>
        <div><strong>1,200</strong><span>seat hall</span></div>
        <div><strong>144</strong><span>student hostel</span></div>
        <div><strong>1989</strong><span>Samiti founded</span></div>
    </div>
</section>

<section class="section" id="about">
    <div class="container split">
        <img src="/assets/images/building.webp" alt="Yashwantrao Chavan Smruti Bhavan building and statue, Nigdi" loading="lazy" width="1600" height="900">
        <div>
            <p class="eyebrow">About</p>
            <h2>A memorial to Yashwantrao Chavan's vision</h2>
            <p>Yashwantrao Chavan (1913–1984) was a freedom fighter, the first Chief Minister of Maharashtra and later Deputy Prime Minister of India. His cooperative and industrial policies created sugar factories, banks and industries across the state.</p>
            <p>To pass on his inspiration to young people, <strong>Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad</strong> – a public trust founded in 1989 – built this 1.5 lakh sq ft Smruti Bhavan on 44 gunthe of land at Pradhikaran, Nigdi.</p>
            <a href="/en/about-yashwantrao-chavan" class="btn btn-outline">About Yashwantrao Chavan</a>
        </div>
    </div>
</section>

<section class="section section-alt" id="facilities">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Facilities</p>
            <h2>What you'll find at the Smruti Bhavan</h2>
        </div>
        <div class="card-grid">
            <?php foreach (array_slice($facilitiesEn, 0, 7) as [$img, $title, $text, $link]): ?>
                <a class="card" href="<?= e($link) ?>">
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link">Learn more →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section" id="halls">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Event venue</p>
            <h2>Late Venutai Chavan Multipurpose Halls</h2>
            <p>For weddings, birthdays, family functions, conferences and cultural events.</p>
        </div>
        <div class="hall-grid">
            <?php foreach ([['hall-large', 'Large Hall', 'Up to 1,200 seats'], ['hall-small', 'Small Hall', 'Up to 350 seats'], ['dining', 'Dining Hall', '400 at a time'], ['guest-room', 'Guest Rooms', '8 air-conditioned rooms']] as [$img, $title, $cap]): ?>
                <div class="hall-card">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?> – Venutai Chavan Hall, Nigdi" loading="lazy">
                    <div><h3><?= e($title) ?></h3><p><?= e($cap) ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="center btn-row" style="justify-content:center"><a href="/en/halls" class="btn btn-outline">Hall details</a><a href="<?= HALL_BOOKING_URL ?>" class="btn btn-primary" target="_blank" rel="noopener">Book now – venutaihall.com ↗</a></div>
    </div>
</section>

<section class="section section-alt" id="students">
    <div class="container split">
        <img src="/assets/images/hostel.webp" alt="Student hostel room, Nigdi Pradhikaran" loading="lazy" width="1600" height="900">
        <div>
            <p class="eyebrow">For students</p>
            <h2>Study, stay and guidance under one roof</h2>
            <p>The student hostel has 52 rooms for 144 male and female students, with a UPSC/MPSC study library, a history library and a guidance centre in the same building.</p>
            <a href="/en/student-hostel" class="btn btn-primary">Student hostel</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">FAQ</p>
            <h2>Frequently asked questions</h2>
        </div>
        <div class="faq">
            <?php foreach ($faqsEn as $i => [$q, $a]): ?>
                <details<?= $i === 0 ? ' open' : '' ?>>
                    <summary><?= e($q) ?></summary>
                    <p><?= e($a) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-alt" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow">Contact</p>
            <h2>Get in touch</h2>
            <address>
                <strong><?= e(ORG_NAME_EN) ?></strong><br>
                <?= e(ADDRESS_STREET) ?>, <?= e(ADDRESS_CITY) ?> <?= e(ADDRESS_PIN) ?>, Maharashtra
            </address>
            <ul class="contact-list">
                <li>Mr. Sunil Jadhav – <a href="tel:+91<?= PHONE_1 ?>">+91 <?= PHONE_1 ?></a></li>
                <li>Mr. Rambhau Taware – <a href="tel:+91<?= PHONE_2 ?>">+91 <?= PHONE_2 ?></a></li>
                <li>Mr. Vilas Bhosale – <a href="tel:+91<?= PHONE_3 ?>">+91 <?= PHONE_3 ?></a></li>
            </ul>
            <div class="btn-row">
                <a href="<?= MAP_URL ?>" class="btn btn-primary" target="_blank" rel="noopener"><?= icon('pin') ?> Directions</a>
                <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp" target="_blank" rel="noopener"><?= icon('whatsapp') ?> WhatsApp</a>
            </div>
        </div>
        <div class="map">
            <iframe src="<?= MAP_EMBED ?>" title="Map – Yashwantrao Chavan Smruti Bhavan" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
