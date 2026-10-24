<?php
// Home page body, shared by / (Marathi) and /en/ (English). The page file sets $page['lang'].
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

$L = is_en() ? '/en' : '';
$cards = is_en() ? $facilitiesEn : $facilities;
$steps = is_en() ? $timelineEn : $timeline;
$groups = is_en() ? $partnersEn : $partners;

$halls = [
    ['hall-large', t('मोठे सभागृह', 'Large Hall'), t('बैठक क्षमता : १२०० पर्यंत', 'Seats up to 1,200')],
    ['hall-small', t('छोटे सभागृह', 'Small Hall'), t('बैठक क्षमता : ३५० पर्यंत', 'Seats up to 350')],
    ['dining', t('डायनिंग हॉल', 'Dining Hall'), t('क्षमता : ४०० एका वेळी', '400 at a time')],
    ['guest-room', t('पाहुण्यांसाठी खोल्या', 'Guest Rooms'), t('८ वातानुकूलित (A/C) खोल्या', '8 air-conditioned rooms')],
];

$gallery = [
    ['building', t('स्मृती भवनाची इमारत व यशवंतराव चव्हाण यांचा पुतळा', 'Smruti Bhavan building and Yashwantrao Chavan statue')],
    ['venutai-hall', t('स्व. वेणुताई चव्हाण बहुउद्देशीय सभागृह - बाल्कनीसह', 'Late Venutai Chavan hall with balcony')],
    ['hall-large', t('मोठे सभागृह - स्टेज व झुंबर', 'Large hall – stage and chandeliers')],
    ['history-library', t('स्व. श्रीमंत छ. अभयसिंहराजे भोसले इतिहास ग्रंथालय', 'Late Shrimant Chh. Abhaysinhraje Bhosale History Library')],
    ['dining', t('डायनिंग हॉल', 'Dining hall')],
    ['jeevanpat', t('यशवंतराव चव्हाण जीवनपट दालन', 'Yashwantrao Chavan life-story gallery')],
    ['history-entry', t('इतिहास ग्रंथालयाचे प्रवेशद्वार', 'History library entrance')],
    ['library-upsc', t('स्व. अरुण किर्लोस्कर UPSC व MPSC अभ्यासिका', 'Late Arun Kirloskar UPSC & MPSC Library')],
    ['hostel', t('विद्यार्थी वसतिगृह - खोली', 'Student hostel room')],
];

$faqs = is_en() ? [
    ['Where is the Yashwantrao Chavan Smruti Bhavan?',
        'The Smruti Bhavan is at ' . ADDRESS_STREET . ', ' . ADDRESS_CITY . ' ' . ADDRESS_PIN . '. It is in the Nigdi Pradhikaran area of Pimpri-Chinchwad, next to Sant Tukaram Udyan.'],
    ['How tall is the Yashwantrao Chavan statue?',
        'The full-length statue of Yashwantrao Chavan at the Smruti Bhavan is 15 ft tall – his tallest statue in India.'],
    ['What is the seating capacity of the halls and how do I book?',
        'The large hall seats 1,200 and the small hall 350. The dining hall serves 400 at a time. Book at venutaihall.com or call +91 ' . PHONE_1 . '.'],
    ['How many places does the student hostel have?',
        'The hostel has 52 rooms for 144 male and female students. Contact the Samiti office for admission.'],
    ['Who is the competitive exam library for?',
        'The Late Arun Kirloskar study library is for students preparing for UPSC, MPSC and other competitive exams.'],
    ['Who built the Smruti Bhavan?',
        'It was built by Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad, founded in 1989. Construction began in 2014 and was completed in September 2026.'],
] : [
    ['स्व. यशवंतराव चव्हाण स्मृती भवन कुठे आहे?',
        'स्मृती भवन ' . ADDRESS_MR . ' येथे आहे. हे पिंपरी-चिंचवड शहरातील निगडी प्राधिकरण भागात, संत तुकाराम उद्यानाशेजारी आहे.'],
    ['यशवंतराव चव्हाण यांचा पुतळा किती उंच आहे?',
        'स्मृती भवनातील स्व. यशवंतराव चव्हाण यांचा पूर्णाकृती पुतळा १५ फूट उंच असून तो त्यांचा भारतातील सर्वांत उंच पुतळा आहे.'],
    ['सभागृहाची आसन क्षमता किती आहे आणि बुकिंग कसे करावे?',
        'मोठ्या सभागृहाची क्षमता १२०० व छोट्या सभागृहाची क्षमता ३५० आहे. डायनिंग हॉलमध्ये एका वेळी ४०० जणांची सोय आहे. बुकिंगसाठी venutaihall.com ला भेट द्या किंवा ' . mr_num(PHONE_1) . ' वर संपर्क करा.'],
    ['विद्यार्थी वसतिगृहात किती जागा आहेत?',
        'वसतिगृहात ५२ खोल्या असून १४४ विद्यार्थी-विद्यार्थिनींची निवास क्षमता आहे. प्रवेशासाठी समितीच्या कार्यालयाशी संपर्क करा.'],
    ['स्पर्धा परीक्षा अभ्यासिका कोणासाठी आहे?',
        'स्व. अरुण किर्लोस्कर स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय UPSC, MPSC व इतर स्पर्धा परीक्षांची तयारी करणाऱ्या विद्यार्थ्यांसाठी उपलब्ध आहे.'],
    ['स्मृती भवन कोणी उभारले?',
        'हे स्मृती भवन १९८९ मध्ये स्थापन झालेल्या यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड यांनी उभारले आहे. बांधकाम २०१४ मध्ये सुरू होऊन सप्टेंबर २०२६ मध्ये पूर्ण झाले.'],
];

$page['alternates'] = ['mr' => '/', 'en' => '/en/'];
$page['active'] = 'home';
$page['schema'] = [
    [
        '@type' => ['TouristAttraction', 'Place'],
        '@id' => SITE_URL . '/#smruti-bhavan',
        'name' => SITE_NAME_EN,
        'alternateName' => SITE_NAME_MR,
        'description' => 'Memorial of Yashwantrao Chavan, first Chief Minister of Maharashtra, with a 15 ft statue, UPSC/MPSC library, student hostel (144 students), 1200-seat hall and life-story gallery. Built 2014–2026, 1.5 lakh sq ft.',
        'hasMap' => MAP_URL,
        'geo' => ['@type' => 'GeoCoordinates', 'latitude' => GEO_LAT, 'longitude' => GEO_LNG],
        'image' => SITE_URL . '/assets/images/building.webp',
        'address' => ['@type' => 'PostalAddress', 'streetAddress' => ADDRESS_STREET, 'addressLocality' => ADDRESS_CITY, 'postalCode' => ADDRESS_PIN, 'addressCountry' => 'IN'],
        'telephone' => '+91' . PHONE_1,
        'isAccessibleForFree' => true,
        'parentOrganization' => ['@id' => SITE_URL . '/#organization'],
    ],
    [
        '@type' => 'FAQPage',
        'inLanguage' => is_en() ? 'en' : 'mr',
        'mainEntity' => array_map(fn($f) => [
            '@type' => 'Question',
            'name' => $f[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
        ], $faqs),
    ],
];

require __DIR__ . '/header.php';
?>

<!-- Hero -->
<section class="hero">
    <div class="container hero-grid">
        <div class="statue-stage" aria-label="<?= t('स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती पुतळा', '15 ft full-length statue of Yashwantrao Chavan') ?>">
            <div class="stage-3d">
                <div class="halo" aria-hidden="true"></div>
                <div class="measure" aria-hidden="true">
                    <span style="--h:100%"><?= t('१५ फूट', '15 ft') ?></span>
                    <span style="--h:66.6%"><?= num(10) ?></span>
                    <span style="--h:33.3%"><?= num(5) ?></span>
                    <span style="--h:0%"><?= num(0) ?></span>
                </div>
                <img class="statue-3d" src="/assets/images/statue-3d.webp" alt="<?= t('स्व. यशवंतराव चव्हाण यांचा १५ फूट उंच पूर्णाकृती ब्राँझ पुतळा, स्मृती भवन निगडी', '15 ft full-length bronze statue of Yashwantrao Chavan, Smruti Bhavan Nigdi') ?>" width="483" height="1030" fetchpriority="high">
                <div class="pedestal" aria-hidden="true">
                    <div class="pedestal-top"></div>
                    <div class="pedestal-front"><?= t('स्व. यशवंतराव चव्हाण', 'Late Yashwantrao Chavan') ?><small><?= t('१९१३ - १९८४', '1913 – 1984') ?></small></div>
                </div>
                <div class="floor-shadow" aria-hidden="true"></div>
                <div class="statue-badge"><strong><?= t('१५ फूट', '15 ft') ?></strong><span><?= t('भारतातील सर्वांत उंच पुतळा', 'Tallest statue in India') ?></span></div>
            </div>
        </div>
        <div class="hero-text">
            <p class="eyebrow"><?= t('महाराष्ट्राचे शिल्पकार · संयुक्त महाराष्ट्राचे पहिले मुख्यमंत्री', 'Architect of Maharashtra · First Chief Minister of Maharashtra') ?></p>
            <h1><?= t('स्व. यशवंतराव चव्हाण', 'Late Yashwantrao Chavan') ?> <span><?= t('स्मृती भवन', 'Smruti Bhavan') ?></span></h1>
            <p class="hero-sub"><?= t('निगडी, प्राधिकरण, पिंपरी-चिंचवड येथे यशवंतराव चव्हाण स्मारक समितीने उभारलेले भव्य स्मारक - भावी पिढीसाठी प्रेरणा व मार्गदर्शनाचे केंद्र.', 'A grand memorial built by Yashwantrao Chavan Smarak Samiti at Pradhikaran, Nigdi, Pimpri-Chinchwad – a centre of inspiration and guidance for the next generation.') ?></p>
            <div class="btn-row">
                <a href="#visit" class="btn btn-primary"><?= t('भेट द्या', 'Visit Us') ?></a>
                <a href="<?= $L ?>/venutai-chavan-multipurpose-hall" class="btn btn-outline"><?= t('हॉल बुकिंग', 'Hall Booking') ?></a>
                <a href="#contact" class="btn btn-ghost"><?= t('संपर्क', 'Contact') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Facts strip -->
<section class="facts" aria-label="<?= t('स्मृती भवन - महत्त्वाची माहिती', 'Smruti Bhavan – key facts') ?>">
    <div class="container facts-grid">
        <div><strong data-count="15"><?= num(15) ?></strong><span><?= t('फूट उंच पुतळा', 'ft tall statue') ?></span></div>
        <div><strong><?= t('१.५ लाख', '1.5 lakh') ?></strong><span><?= t('चौ. फूट बांधकाम', 'sq ft built-up') ?></span></div>
        <div><strong data-count="1200"><?= num(1200) ?></strong><span><?= t('आसनी सभागृह', 'seat hall') ?></span></div>
        <div><strong data-count="144"><?= num(144) ?></strong><span><?= t('विद्यार्थी वसतिगृह क्षमता', 'students in the hostel') ?></span></div>
        <div><strong><?= num(1989) ?></strong><span><?= t('पासून समाजसेवेत', 'serving since') ?></span></div>
    </div>
</section>

<!-- About -->
<section class="section about">
    <div class="container about-grid">
        <figure class="about-img">
            <img src="/assets/images/building.webp" alt="<?= t('स्व. यशवंतराव चव्हाण स्मृती भवन इमारत व पुतळा - ड्रोन दृश्य, निगडी प्राधिकरण', 'Yashwantrao Chavan Smruti Bhavan building and statue – drone view, Nigdi Pradhikaran') ?>" loading="lazy" width="1600" height="900">
        </figure>
        <div>
            <p class="eyebrow"><?= t('आमच्याबद्दल', 'About') ?></p>
            <h2><?= t('यशवंतराव चव्हाण यांच्या विचारांचे स्मारक', 'A memorial to Yashwantrao Chavan\'s vision') ?></h2>
            <p><?= t('थोर स्वातंत्र्य सेनानी, महाराष्ट्राचे शिल्पकार, संयुक्त महाराष्ट्राचे पहिले मुख्यमंत्री आणि भारताचे माजी उपपंतप्रधान स्व. यशवंतराव चव्हाण यांच्या औद्योगिक व सहकार धोरणांमुळे महाराष्ट्राच्या कानाकोपऱ्यात उद्योग, सहकारी साखर कारखाने, बँका व पतसंस्थांचे जाळे विणले गेले.', 'Freedom fighter, architect of Maharashtra, first Chief Minister of Maharashtra and former Deputy Prime Minister of India – Late Yashwantrao Chavan\'s industrial and cooperative policies spread industries, cooperative sugar factories, banks and credit societies to every corner of Maharashtra.') ?></p>
            <p><?= t('त्यांच्या कार्याची प्रेरणा भावी पिढीतील युवकांना मिळावी म्हणून <strong>यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड</strong> यांनी निगडी प्राधिकरण येथे हे भव्य स्मृती भवन उभारले आहे.', 'So that young people draw inspiration from his work, <strong>Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad</strong> has built this grand Smruti Bhavan at Nigdi Pradhikaran.') ?></p>
            <div class="btn-row">
                <a href="<?= $L ?>/yashwantrao-chavan-smarak-samiti" class="btn btn-primary"><?= t('समितीविषयी', 'About the Samiti') ?></a>
                <a href="<?= $L ?>/yashwantrao-chavan" class="btn btn-outline"><?= t('यशवंतराव चव्हाण', 'Yashwantrao Chavan') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="section section-alt" id="facilities">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('सोयी-सुविधा', 'Facilities') ?></p>
            <h2><?= t('स्मृती भवनमध्ये उपलब्ध सुविधा', 'Facilities at the Smruti Bhavan') ?></h2>
        </div>
        <div class="card-grid">
            <?php foreach ($cards as [$img, $title, $text, $link]): ?>
                <a class="card" href="<?= e($link) ?>">
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link"><?= t('अधिक माहिती', 'Learn more') ?> →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Statue highlight -->
<section class="statue-band">
    <div class="container statue-grid">
        <div class="statue-img">
            <img src="/assets/images/statue-3d.webp" alt="<?= t('स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती ब्राँझ पुतळा, निगडी', '15 ft full-length bronze statue of Yashwantrao Chavan, Nigdi') ?>" width="483" height="1030" loading="lazy">
        </div>
        <div>
            <p class="eyebrow eyebrow-gold"><?= t('भारतात सर्वांत उंच', 'Tallest in India') ?></p>
            <h2><?= t('स्व. यशवंतराव चव्हाण यांचा <span class="gold">१५ फूट</span> पूर्णाकृती पुतळा', 'The <span class="gold">15 ft</span> full-length statue of Yashwantrao Chavan') ?></h2>
            <p><?= t('स्मृती भवनाच्या प्रवेशद्वारासमोर उभारलेला हा पुतळा स्व. यशवंतराव चव्हाण यांचा भारतातील सर्वांत उंच पुतळा आहे. महाराष्ट्राच्या शिल्पकाराला वंदन करण्यासाठी सर्वांनी अवश्य भेट द्यावी.', 'Standing at the entrance of the Smruti Bhavan, this is the tallest statue of Yashwantrao Chavan in India. Everyone is welcome to visit and pay tribute to the architect of Maharashtra.') ?></p>
            <a href="<?= $L ?>/yashwantrao-chavan-statue" class="btn btn-gold"><?= t('पुतळ्याविषयी अधिक', 'More about the statue') ?></a>
        </div>
    </div>
</section>

<!-- Project timeline -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('स्मृती भवन प्रकल्प', 'The Smruti Bhavan project') ?></p>
            <h2><?= t('संकल्प ते साकार - प्रवास', 'From idea to reality') ?></h2>
        </div>
        <ol class="timeline">
            <?php foreach ($steps as [$year, $title, $text]): ?>
                <li>
                    <span class="tl-dot"></span>
                    <span class="tl-year"><?= e($year) ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
        <div class="center"><a href="<?= $L ?>/yashwantrao-chavan-smruti-bhavan" class="btn btn-primary"><?= t('संपूर्ण प्रकल्प माहिती', 'Full project details') ?></a></div>
    </div>
</section>

<!-- Hall booking -->
<section class="section section-alt" id="halls">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('सांस्कृतिक भवन', 'Event venue') ?></p>
            <h2><?= t('स्व. वेणुताई चव्हाण बहुउद्देशीय सभागृह', 'Late Venutai Chavan Multipurpose Hall') ?></h2>
            <p><?= t('विवाह समारंभ, वाढदिवस, कौटुंबिक कार्यक्रम तसेच सामाजिक व इतर सर्व कार्यक्रमांसाठी उपलब्ध.', 'Available for weddings, birthdays, family functions and all social and other events.') ?></p>
        </div>
        <div class="hall-grid">
            <?php foreach ($halls as [$img, $title, $cap]): ?>
                <div class="hall-card">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?> - <?= t('वेणुताई चव्हाण सभागृह, निगडी', 'Venutai Chavan Hall, Nigdi') ?>" loading="lazy">
                    <div><h3><?= e($title) ?></h3><p><?= e($cap) ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
        <ul class="feature-list">
            <li><?= t('दोन्ही सभागृहे वातानुकूलित (A/C)', 'Both halls air-conditioned') ?></li>
            <li><?= t('अत्याधुनिक ध्वनियंत्रणा (Acoustic System)', 'Modern acoustic system') ?></li>
            <li><?= t('LED स्क्रीन व प्रोजेक्टर सुविधा', 'LED screen and projector') ?></li>
            <li><?= t('संपूर्ण इमारत CCTV व अग्निशमन यंत्रणा युक्त', 'CCTV and fire safety across the building') ?></li>
        </ul>
        <div class="center"><a href="<?= HALL_BOOKING_URL ?>" class="btn btn-primary" target="_blank" rel="noopener"><?= t('आत्ताच बुक करा', 'Book now') ?> - venutaihall.com ↗</a></div>
    </div>
</section>

<!-- Students -->
<section class="section students">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('विद्यार्थ्यांसाठी', 'For students') ?></p>
            <h2><?= t('शिक्षण, निवास आणि मार्गदर्शन - एकाच ठिकाणी', 'Study, stay and guidance – under one roof') ?></h2>
        </div>
        <div class="student-grid">
            <div class="student-card">
                <img src="/assets/images/library-upsc.webp" alt="<?= t('स्व. अरुण किर्लोस्कर UPSC MPSC अभ्यासिका, निगडी', 'Late Arun Kirloskar UPSC MPSC library, Nigdi') ?>" loading="lazy">
                <h3><?= t('स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय', 'Competitive Exam Study Library') ?></h3>
                <p><?= t('UPSC, MPSC व इतर स्पर्धा परीक्षांची तयारी करणाऱ्या विद्यार्थ्यांसाठी शांत अभ्यासिका.', 'A quiet study room for students preparing for UPSC, MPSC and other competitive exams.') ?></p>
            </div>
            <div class="student-card">
                <img src="/assets/images/hostel.webp" alt="<?= t('विद्यार्थी वसतिगृह, निगडी प्राधिकरण', 'Student hostel, Nigdi Pradhikaran') ?>" loading="lazy">
                <h3><?= t('विद्यार्थी वसतिगृह', 'Student Hostel') ?></h3>
                <p><?= t('५२ खोल्या - १४४ विद्यार्थी-विद्यार्थिनींसाठी सुरक्षित निवास व्यवस्था.', '52 rooms – safe accommodation for 144 male and female students.') ?></p>
            </div>
            <div class="student-card">
                <img src="/assets/images/guidance.webp" alt="<?= t('विद्यार्थी मार्गदर्शन केंद्र', 'Student guidance centre') ?>" loading="lazy">
                <h3><?= t('विद्यार्थी मार्गदर्शन केंद्र', 'Student Guidance Centre') ?></h3>
                <p><?= t('शैक्षणिक, सामाजिक व सर्वांगीण विकासासाठी उपयुक्त मार्गदर्शन.', 'Guidance for academic, social and all-round development.') ?></p>
            </div>
        </div>
        <div class="center"><a href="#contact" class="btn btn-primary" data-interest="hostel"><?= t('प्रवेशासाठी चौकशी करा', 'Enquire about admission') ?></a></div>
    </div>
</section>

<!-- Gallery -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('गॅलरी', 'Gallery') ?></p>
            <h2><?= t('स्मृती भवनची झलक', 'A glimpse of the Smruti Bhavan') ?></h2>
        </div>
        <div class="gallery-grid">
            <?php foreach ($gallery as [$img, $alt]): ?>
                <button class="gallery-item" data-full="/assets/images/<?= $img ?>.webp">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($alt) ?>" loading="lazy">
                </button>
            <?php endforeach; ?>
        </div>
        <div class="center"><a href="<?= $L ?>/gallery" class="btn btn-outline"><?= t('संपूर्ण गॅलरी पहा', 'View full gallery') ?></a></div>
    </div>
</section>

<!-- Partners -->
<section class="section partners">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow"><?= t('सहभाग आणि सहकार्य', 'Partners') ?></p>
            <h2><?= t('आमच्यासोबत असलेली मंडळे', 'Associations with us') ?></h2>
        </div>
        <ul class="partner-list">
            <?php foreach ($groups as $p): ?>
                <li><?= e($p) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- FAQ -->
<section class="section section-alt" id="faq">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow"><?= t('प्रश्नोत्तरे', 'FAQ') ?></p>
            <h2><?= t('वारंवार विचारले जाणारे प्रश्न', 'Frequently asked questions') ?></h2>
        </div>
        <div class="faq">
            <?php foreach ($faqs as $i => [$q, $a]): ?>
                <details<?= $i === 0 ? ' open' : '' ?>>
                    <summary><?= e($q) ?></summary>
                    <p><?= e($a) ?></p>
                </details>
            <?php endforeach; ?>
        </div>
        <div class="center"><a href="<?= $L ?>/faq" class="btn btn-outline"><?= t('सर्व प्रश्नोत्तरे पहा', 'See all questions') ?></a></div>
    </div>
</section>

<!-- Visit -->
<section class="visit-band" id="visit">
    <div class="container visit-grid">
        <div>
            <h2><?= t('स्मृती भवनला भेट द्या', 'Visit the Smruti Bhavan') ?></h2>
            <p><?= t('महाराष्ट्राच्या शिल्पकाराचा जीवनपट, १५ फूट पुतळा व इतिहासाचे ग्रंथालय पाहण्यासाठी कुटुंबासह अवश्य या. भेटीच्या वेळेसाठी कृपया संपर्क करा.', 'Bring your family to see the life story of the architect of Maharashtra, the 15 ft statue and the history library. Please call for visiting hours.') ?></p>
        </div>
        <div class="btn-row">
            <a href="<?= MAP_URL ?>" class="btn btn-gold" target="_blank" rel="noopener"><?= icon('pin') ?> <?= t('दिशा पहा', 'Directions') ?></a>
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-light"><?= icon('phone') ?> <?= t(mr_num(PHONE_1), '+91 ' . PHONE_1) ?></a>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow"><?= t('संपर्क', 'Contact') ?></p>
            <h2><?= t('आमच्याशी संपर्क साधा', 'Get in touch') ?></h2>
            <address>
                <strong><?= e(t(ORG_NAME_MR, ORG_NAME_EN)) ?></strong><br>
                <?= e(t(ADDRESS_MR, ADDRESS_STREET . ', ' . ADDRESS_CITY . ' ' . ADDRESS_PIN)) ?>
            </address>
            <ul class="contact-list">
                <?php foreach (contact_people() as [$name, $phone]): ?>
                    <li><?= e($name) ?> - <a href="tel:+91<?= $phone ?>"><?= num($phone) ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="map">
                <iframe src="<?= MAP_EMBED ?>" title="<?= t('स्मृती भवन नकाशा', 'Map – Smruti Bhavan') ?>" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <?php require __DIR__ . '/inquiry-form.php'; ?>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
