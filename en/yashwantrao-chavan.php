<?php
require_once __DIR__ . '/../includes/config.php';

// TODO: have the Samiti verify the biography facts below before launch
$facts = [
    ['Born', '12 March 1913, Devrashtre (then Satara district, now Sangli district)'],
    ['Wife', 'Venutai Chavan'],
    ['Education', 'B.A., LL.B.'],
    ['Known as', 'Architect of modern Maharashtra'],
    ['Key offices', 'First Chief Minister of Maharashtra; Union Minister of Defence, Home, Finance and External Affairs; Deputy Prime Minister'],
    ['Autobiography', 'Krishnakath'],
    ['Died', '25 November 1984, New Delhi'],
    ['Samadhi', 'Preetisangam, Karad'],
];

$life = [
    ['1913', 'Birth', 'Born into a farming family at Devrashtre, then in Satara district (now Sangli district).'],
    ['1930–32', 'Freedom struggle', 'Joined the freedom movement while still at school and was jailed for taking part in the Civil Disobedience Movement.'],
    ['1942', 'Quit India Movement', 'Took an active part in the Quit India Movement. Married Venutai the same year.'],
    ['1946', 'Enters the legislature', 'Elected to the Bombay Province Legislative Assembly, beginning his political career.'],
    ['1956', 'Chief Minister of bilingual Bombay State', 'Took charge as Chief Minister of the bilingual Bombay State.'],
    ['1960', 'First Chief Minister of Maharashtra', 'Sworn in as the first Chief Minister when Maharashtra was formed on 1 May 1960.'],
    ['1962', 'Defence Minister of India', 'Appointed Union Defence Minister after the war with China.'],
    ['1966–77', 'Key Union ministries', 'Held the Home, Finance and External Affairs portfolios.'],
    ['1979', 'Deputy Prime Minister of India', 'Became Deputy Prime Minister of India.'],
    ['1984', 'Death', 'Died in New Delhi on 25 November 1984. His samadhi is at Preetisangam, Karad.'],
];

$work = [
    ['Cooperative movement', 'Built a network of cooperative sugar factories, banks and credit societies that gave rural Maharashtra economic strength.'],
    ['Industrial growth', 'His industrial policies brought small and large industries to Maharashtra and jobs to lakhs of people.'],
    ['Panchayati Raj', 'Decentralised power through Zilla Parishads and Panchayat Samitis, taking democracy to the village level.'],
    ['Education', 'Encouraged educational institutions so that rural students got the chance to study.'],
    ['Literature and culture', 'Consistently supported Marathi language, literature and culture.'],
    ['National leadership', 'Shaped the nation through key portfolios – Defence, Home, Finance and External Affairs.'],
];

$faqs = [
    ['Who was Yashwantrao Chavan?', 'Yashwantrao Chavan (1913–1984) was a freedom fighter, the first Chief Minister of Maharashtra and a former Deputy Prime Minister of India. He also served as the country\'s Defence, Home, Finance and External Affairs Minister.'],
    ['Why is he called the architect of Maharashtra?', 'As the first Chief Minister of Maharashtra he laid the foundations of the cooperative movement, industry, education and Panchayati Raj. Modern Maharashtra was shaped by his policies, which is why he is called its architect.'],
    ['When did he become Chief Minister of Maharashtra?', 'Maharashtra was formed on 1 May 1960 and Yashwantrao Chavan became its first Chief Minister.'],
    ['Where was Yashwantrao Chavan born?', 'He was born on 12 March 1913 at Devrashtre, then in Satara district and now in Sangli district.'],
    ['What is his autobiography called?', '"Krishnakath" is the autobiography of Yashwantrao Chavan.'],
    ['Where is his memorial in Pimpri-Chinchwad?', 'The Late Yashwantrao Chavan Smruti Bhavan is at Sector 27A, next to Sant Tukaram Udyan, Pradhikaran, Nigdi. It has his 15 ft full-length statue and a complete life-story gallery.'],
];

$page = [
    'lang' => 'en',
    'title' => 'Yashwantrao Chavan Biography | Architect of Maharashtra',
    'description' => 'Yashwantrao Chavan (1913–1984): first Chief Minister of Maharashtra and Deputy Prime Minister of India. His life, freedom struggle and work.',
    'path' => '/en/yashwantrao-chavan',
    'alternates' => ['mr' => '/yashwantrao-chavan', 'en' => '/en/yashwantrao-chavan'],
    'active' => 'about',
    'breadcrumb' => ['About' => '/en/yashwantrao-chavan-smarak-samiti', 'Yashwantrao Chavan' => '/en/yashwantrao-chavan'],
    'schema' => [
        [
            '@type' => 'Person',
            'name' => 'Yashwantrao Chavan',
            'alternateName' => 'यशवंतराव चव्हाण',
            'sameAs' => ['https://en.wikipedia.org/wiki/Yashwantrao_Chavan'],
            'birthDate' => '1913-03-12',
            'birthPlace' => 'Devrashtre, Maharashtra',
            'deathDate' => '1984-11-25',
            'deathPlace' => 'New Delhi',
            'jobTitle' => ['First Chief Minister of Maharashtra', 'Deputy Prime Minister of India'],
            'image' => SITE_URL . '/assets/images/chavan-portrait.webp',
        ],
        [
            '@type' => 'FAQPage',
            'inLanguage' => 'en',
            'mainEntity' => array_map(fn($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs),
        ],
    ],
];

$hero = [
    'eyebrow' => '1913 – 1984',
    'title' => 'Late Yashwantrao Chavan',
    'subtitle' => 'Freedom fighter, architect of Maharashtra, first Chief Minister of Maharashtra and former Deputy Prime Minister of India.',
];

require __DIR__ . '/../includes/header.php';
require __DIR__ . '/../includes/page-hero.php';
?>

<section class="section">
    <div class="container bio-grid">
        <div class="bio-intro">
            <img class="bio-portrait" src="/assets/images/chavan-portrait.webp" alt="Portrait of Yashwantrao Chavan" width="265" height="345">
            <p class="lead">Yashwantrao Balwantrao Chavan is remembered as the architect of modern Maharashtra. He became the state's first Chief Minister on 1 May 1960, and later served India as Defence, Home, Finance and External Affairs Minister and as Deputy Prime Minister.</p>
            <p>Born into a farming family, he joined the freedom struggle while still at school. Through cooperatives, industrialisation, education and Panchayati Raj he gave rural Maharashtra a new direction, and his policies created jobs for lakhs of people.</p>
        </div>
        <aside class="fact-box" aria-label="Yashwantrao Chavan – quick facts">
            <h2>Quick facts</h2>
            <dl>
                <?php foreach ($facts as [$label, $value]): ?>
                    <div><dt><?= e($label) ?></dt><dd><?= e($value) ?></dd></div>
                <?php endforeach; ?>
            </dl>
        </aside>
    </div>
</section>

<section class="section section-alt">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">Life</p>
            <h2>From Devrashtre to Delhi</h2>
        </div>
        <ol class="v-timeline">
            <?php foreach ($life as [$year, $title, $text]): ?>
                <li>
                    <span class="vt-year"><?= e($year) ?></span>
                    <div>
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Work</p>
            <h2>His contribution to Maharashtra</h2>
        </div>
        <div class="work-grid">
            <?php foreach ($work as $i => [$title, $text]): ?>
                <div class="work-card">
                    <span class="work-num"><?= $i + 1 ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="quote-band">
    <div class="container narrow">
        <blockquote>
            <p>"His policies gave work to lakhs of hands and set small and large industries in motion. We remain forever in his debt."</p>
            <cite>– Yashwantrao Chavan Smarak Samiti</cite>
        </blockquote>
    </div>
</section>

<section class="section section-alt">
    <div class="container split">
        <img src="/assets/images/jeevanpat.webp" alt="Yashwantrao Chavan life-story gallery, Smruti Bhavan Nigdi" loading="lazy" width="1600" height="900">
        <div>
            <p class="eyebrow">At the Smruti Bhavan</p>
            <h2>His complete life story – as a picture gallery</h2>
            <p>The complete life story of Yashwantrao Chavan has been set up as a picture gallery – in Maharashtra, only at the Smruti Bhavan in Nigdi. His 15 ft full-length statue, the tallest in India, stands at the entrance.</p>
            <div class="btn-row">
                <a href="/en/yashwantrao-chavan-jeevanpat-gallery" class="btn btn-primary">Life-story gallery</a>
                <a href="/en/contact" class="btn btn-outline">Visit</a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="faq">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">FAQ</p>
            <h2>Yashwantrao Chavan – frequently asked questions</h2>
        </div>
        <div class="faq">
            <?php foreach ($faqs as $i => [$q, $a]): ?>
                <details<?= $i === 0 ? ' open' : '' ?>>
                    <summary><?= e($q) ?></summary>
                    <p><?= e($a) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
