<?php
require_once __DIR__ . '/../includes/config.php';

$groups = [
    'Smruti Bhavan & visiting' => [
        ['Where is the Yashwantrao Chavan Smruti Bhavan?', 'It is at ' . ADDRESS_STREET . ', Pimpri-Chinchwad, Pune ' . ADDRESS_PIN . ', next to Sant Tukaram Udyan.', '/en/contact'],
        ['Who built the Smruti Bhavan?', 'Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad – a social organisation founded in 1989. Construction began in 2014 and was completed in September 2026.', '/en/about-samiti'],
        ['What can I see there?', 'The 15 ft full-length statue of Yashwantrao Chavan, his complete life-story gallery, the history library and the bust of Late Laxmanbhau Jagtap, MLA.', '/en/smruti-bhavan-project'],
        ['What are the visiting hours?', 'Please call +91 ' . PHONE_1 . ' before your visit for timings.', '/en/contact'],
    ],
    'Statue & life-story gallery' => [
        ['How tall is the Yashwantrao Chavan statue?', 'The full-length statue is 15 ft tall – the tallest statue of Yashwantrao Chavan in India.', '/en/facilities/statue'],
        ['What is the life-story gallery?', 'A gallery presenting Yashwantrao Chavan\'s entire life in photographs and information panels – the only one of its kind in Maharashtra.', '/en/facilities/jeevanpat-gallery'],
        ['Who was Yashwantrao Chavan?', 'Yashwantrao Chavan (1913–1984) was a freedom fighter, the first Chief Minister of Maharashtra and a former Deputy Prime Minister of India.', '/en/about-yashwantrao-chavan'],
    ],
    'Halls & booking' => [
        ['What is the seating capacity of the halls?', 'The large hall seats up to 1,200 and the small hall up to 350. The dining hall serves 400 at a time.', '/en/halls'],
        ['How do I book a hall?', 'Book online at venutaihall.com or call +91 ' . PHONE_1 . '.', '/en/halls'],
        ['Is there accommodation for guests?', 'Yes, there are 8 air-conditioned guest rooms in the same building.', '/en/halls'],
    ],
    'For students' => [
        ['How many students can the hostel accommodate?', 'The hostel has 52 rooms for 144 male and female students.', '/en/student-hostel'],
        ['Who is the study library for?', 'The Late Arun Kirloskar study library is for students preparing for UPSC, MPSC and other competitive exams.', '/en/facilities/upsc-mpsc-library'],
        ['How do I apply for the hostel or library?', 'Fill in the form on the contact page or call +91 ' . PHONE_1 . ' for the admission process and fees.', '/en/contact'],
    ],
    'Other services' => [
        ['How do I register at the matrimonial centre?', 'Bring your bio-data and photograph to the office at the Smruti Bhavan, or fill in the form on the centre\'s page.', '/en/facilities/vadhu-var-suchak-kendra'],
        ['What books does the history library have?', 'Books and reference material on the history of Maharashtra and the Marathas.', '/en/facilities/history-library'],
    ],
];
$all = array_merge(...array_values($groups));

$page = [
    'lang' => 'en',
    'title' => 'Frequently Asked Questions | Yashwantrao Chavan Smruti Bhavan, Nigdi',
    'description' => 'FAQs about the Yashwantrao Chavan Smruti Bhavan, Nigdi – location, 15 ft statue, hall booking, hostel admission, UPSC library and matrimonial centre.',
    'path' => '/en/faq',
    'alternates' => ['mr' => '/faq', 'en' => '/en/faq'],
    'breadcrumb' => ['FAQ' => '/en/faq'],
    'schema' => [[
        '@type' => 'FAQPage',
        'inLanguage' => 'en',
        'mainEntity' => array_map(fn($q) => ['@type' => 'Question', 'name' => $q[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $q[1]]], $all),
    ]],
];

$hero = ['eyebrow' => 'FAQ', 'title' => 'Frequently asked questions', 'subtitle' => 'Answers to common questions about the Smruti Bhavan, halls, hostel and other facilities.'];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container narrow">
        <nav class="faq-jump" aria-label="Topics">
            <?php $n = 0; foreach ($groups as $title => $items): $n++; ?>
                <a href="#faq-<?= $n ?>"><?= e($title) ?></a>
            <?php endforeach; ?>
        </nav>
        <?php $n = 0; foreach ($groups as $title => $items): $n++; ?>
            <div class="faq-group" id="faq-<?= $n ?>">
                <h2><?= e($title) ?></h2>
                <div class="faq">
                    <?php foreach ($items as [$q, $a, $link]): ?>
                        <details>
                            <summary><?= e($q) ?></summary>
                            <p><?= e($a) ?> <a href="<?= e($link) ?>">Learn more →</a></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="visit-band">
    <div class="container visit-grid">
        <div>
            <h2>Can't find your question?</h2>
            <p>Call us or ask on WhatsApp and we will reply as soon as we can.</p>
        </div>
        <div class="btn-row">
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-gold"><?= icon('phone') ?> +91 <?= PHONE_1 ?></a>
            <a href="https://wa.me/<?= WHATSAPP ?>" class="btn btn-whatsapp" target="_blank" rel="noopener"><?= icon('whatsapp') ?> WhatsApp</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
