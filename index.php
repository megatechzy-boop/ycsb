<?php
require_once __DIR__ . '/includes/config.php';

$facilities = [
    ['statue-3d', 'स्व. यशवंतराव चव्हाण यांचा पूर्णाकृती पुतळा', 'भारतातील सर्वांत उंच (१५ फूट) पुतळा.', '/facilities/statue'],
    ['library-board', 'स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय', 'स्व. अरुण किर्लोस्कर अभ्यासिका - UPSC / MPSC विद्यार्थ्यांसाठी.', '/facilities/upsc-mpsc-library'],
    ['history-library', 'इतिहासाचे ग्रंथालय व वाचनालय', 'स्व. श्रीमंत छ. अभयसिंहराजे भोसले इतिहास ग्रंथालय.', '/facilities/history-library'],
    ['guidance', 'विद्यार्थी मार्गदर्शन केंद्र', 'स्व. हिराबाई किसनराव लांडगे केंद्र - शैक्षणिक व सर्वांगीण विकासासाठी.', '/facilities/student-guidance-centre'],
    ['hostel', 'विद्यार्थी वसतिगृह', '५२ खोल्या, १४४ विद्यार्थी-विद्यार्थिनींसाठी.', '/student-hostel'],
    ['jeevanpat', 'यशवंतराव चव्हाण जीवनपट दालन', 'संपूर्ण जीवनपट चित्र दालनाच्या स्वरूपात - महाराष्ट्रात फक्त येथे.', '/facilities/jeevanpat-gallery'],
    ['vadhu-var', 'पश्चिम महाराष्ट्र वधू-वर सूचक केंद्र', 'सर्व जाती-धर्मातील विवाहेच्छुक वधू-वरांसाठी.', '/facilities/vadhu-var-suchak-kendra'],
    ['venutai-hall', 'स्व. वेणुताई चव्हाण बहुउद्देशीय सभागृह', '१२०० व ३५० आसन क्षमतेची वातानुकूलित सभागृहे.', HALL_BOOKING_URL],
    ['guest-room', 'पाहुण्यांच्या निवासासाठी खोल्या', '८ वातानुकूलित (A/C) खोल्या उपलब्ध.', HALL_BOOKING_URL],
    ['jagtap-bust', 'स्व. आ. लक्ष्मणभाऊ जगताप अर्धाकृती पुतळा', 'स्मृती भवन उभारणीतील मोलाच्या योगदानाचे स्मरण.', '/smruti-bhavan-project'],
];

$timeline = [
    ['१९८९', 'समितीची स्थापना', 'यशवंतप्रेमींनी एकत्र येऊन मुंबई सार्वजनिक विश्वस्त व्यवस्था अधिनियम १९५० अन्वये समिती स्थापन केली.'],
    ['१९९१', 'भूखंड प्राप्त', 'प्राधिकरण, निगडी येथे स्मारक उभारण्यासाठी ४४ गुंठे भूखंड घेतला.'],
    ['२०१४', 'बांधकामास सुरुवात', 'भव्य स्मृती भवनाच्या बांधकामाची सुरुवात झाली.'],
    ['२०२६', 'बांधकाम पूर्ण', 'सप्टेंबर २०२६ मध्ये १.५ लाख चौ. फूट बांधकाम पूर्ण.'],
];

$halls = [
    ['hall-large', 'मोठे सभागृह', 'बैठक क्षमता : १२०० पर्यंत'],
    ['hall-small', 'छोटे सभागृह', 'बैठक क्षमता : ३५० पर्यंत'],
    ['dining', 'डायनिंग हॉल', 'क्षमता : ४०० एका वेळी'],
    ['guest-room', 'पाहुण्यांसाठी खोल्या', '८ वातानुकूलित (A/C) खोल्या'],
];

$gallery = [
    ['building', 'स्मृती भवनाची इमारत व यशवंतराव चव्हाण यांचा पुतळा'],
    ['venutai-hall', 'स्व. वेणुताई चव्हाण बहुउद्देशीय सभागृह - बाल्कनीसह'],
    ['hall-large', 'मोठे सभागृह - स्टेज व झुंबर'],
    ['history-library', 'स्व. श्रीमंत छ. अभयसिंहराजे भोसले इतिहास ग्रंथालय'],
    ['dining', 'डायनिंग हॉल'],
    ['jeevanpat', 'यशवंतराव चव्हाण जीवनपट दालन'],
    ['history-entry', 'इतिहास ग्रंथालयाचे प्रवेशद्वार'],
    ['library-upsc', 'स्व. अरुण किर्लोस्कर UPSC व MPSC अभ्यासिका'],
    ['hostel', 'विद्यार्थी वसतिगृह - खोली'],
];

$partners = [
    'पुणे जिल्हा मित्र मंडळ',
    'सातारा जिल्हा मित्र मंडळ',
    'कोल्हापूर जिल्हा मित्र मंडळ',
    'सांगली जिल्हा मित्र मंडळ',
    'सोलापूर जिल्हा मित्र मंडळ',
    'पश्चिम महाराष्ट्र युवा मंच',
];

$faqs = [
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

$page = [
    'title' => 'स्व. यशवंतराव चव्हाण स्मृती भवन, निगडी | सभागृह, वसतिगृह, UPSC अभ्यासिका',
    'description' => 'निगडी प्राधिकरण, पिंपरी-चिंचवड येथील स्व. यशवंतराव चव्हाण स्मृती भवन - १५ फूट पूर्णाकृती पुतळा, स्पर्धा परीक्षा अभ्यासिका, विद्यार्थी वसतिगृह, १२०० आसनी सभागृह व जीवनपट दालन.',
    'path' => '/',
    'active' => 'home',
    'schema' => [
        [
            '@type' => ['TouristAttraction', 'Place'],
            '@id' => SITE_URL . '/#smruti-bhavan',
            'name' => SITE_NAME_EN,
            'alternateName' => SITE_NAME_MR,
            'description' => 'Memorial of Yashwantrao Chavan, first Chief Minister of Maharashtra, with a 15 ft statue, UPSC/MPSC library, student hostel (144 students), 1200-seat hall and life-story gallery. Built 2014–2026, 1.5 lakh sq ft.',
            'hasMap' => MAP_URL,
            'image' => SITE_URL . '/assets/images/building.webp',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => ADDRESS_STREET, 'addressLocality' => ADDRESS_CITY, 'postalCode' => ADDRESS_PIN, 'addressCountry' => 'IN'],
            'telephone' => '+91' . PHONE_1,
            'isAccessibleForFree' => true,
            'parentOrganization' => ['@id' => SITE_URL . '/#organization'],
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn($f) => [
                '@type' => 'Question',
                'name' => $f[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
            ], $faqs),
        ],
    ],
];

require __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<section class="hero">
    <div class="container hero-grid">
        <div class="statue-stage" aria-label="स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती पुतळा">
            <div class="stage-3d">
                <div class="halo" aria-hidden="true"></div>
                <div class="measure" aria-hidden="true">
                    <span style="--h:100%">१५ फूट</span>
                    <span style="--h:66.6%">१०</span>
                    <span style="--h:33.3%">५</span>
                    <span style="--h:0%">०</span>
                </div>
                <img class="statue-3d" src="/assets/images/statue-3d.webp" alt="स्व. यशवंतराव चव्हाण यांचा १५ फूट उंच पूर्णाकृती ब्राँझ पुतळा, स्मृती भवन निगडी" width="483" height="1030" fetchpriority="high">
                <div class="pedestal" aria-hidden="true">
                    <div class="pedestal-top"></div>
                    <div class="pedestal-front">स्व. यशवंतराव चव्हाण<small>१९१३ - १९८४</small></div>
                </div>
                <div class="floor-shadow" aria-hidden="true"></div>
                <div class="statue-badge"><strong>१५ फूट</strong><span>भारतातील सर्वांत उंच पुतळा</span></div>
            </div>
        </div>
        <div class="hero-text">
            <p class="eyebrow">महाराष्ट्राचे शिल्पकार · संयुक्त महाराष्ट्राचे पहिले मुख्यमंत्री</p>
            <h1>स्व. यशवंतराव चव्हाण <span>स्मृती भवन</span></h1>
            <p class="hero-sub">निगडी, प्राधिकरण, पिंपरी-चिंचवड येथे यशवंतराव चव्हाण स्मारक समितीने उभारलेले भव्य स्मारक - भावी पिढीसाठी प्रेरणा व मार्गदर्शनाचे केंद्र.</p>
            <div class="btn-row">
                <a href="#visit" class="btn btn-primary">भेट द्या</a>
                <a href="<?= HALL_BOOKING_URL ?>" class="btn btn-outline" target="_blank" rel="noopener">हॉल बुकिंग ↗</a>
                <a href="#contact" class="btn btn-ghost">संपर्क</a>
            </div>
        </div>
    </div>
</section>

<!-- Facts strip -->
<section class="facts" aria-label="स्मृती भवन - महत्त्वाची माहिती">
    <div class="container facts-grid">
        <div><strong data-count="15">१५</strong><span>फूट उंच पुतळा</span></div>
        <div><strong>१.५ लाख</strong><span>चौ. फूट बांधकाम</span></div>
        <div><strong data-count="1200">१२००</strong><span>आसनी सभागृह</span></div>
        <div><strong data-count="144">१४४</strong><span>विद्यार्थी वसतिगृह क्षमता</span></div>
        <div><strong>१९८९</strong><span>पासून समाजसेवेत</span></div>
    </div>
</section>

<!-- About -->
<section class="section about">
    <div class="container about-grid">
        <figure class="about-img">
            <img src="/assets/images/building.webp" alt="स्व. यशवंतराव चव्हाण स्मृती भवन इमारत व पुतळा - ड्रोन दृश्य, निगडी प्राधिकरण" loading="lazy" width="1600" height="900">
        </figure>
        <div>
            <p class="eyebrow">आमच्याबद्दल</p>
            <h2>यशवंतराव चव्हाण यांच्या विचारांचे स्मारक</h2>
            <p>थोर स्वातंत्र्य सेनानी, महाराष्ट्राचे शिल्पकार, संयुक्त महाराष्ट्राचे पहिले मुख्यमंत्री आणि भारताचे माजी उपपंतप्रधान स्व. यशवंतराव चव्हाण यांच्या औद्योगिक व सहकार धोरणांमुळे महाराष्ट्राच्या कानाकोपऱ्यात उद्योग, सहकारी साखर कारखाने, बँका व पतसंस्थांचे जाळे विणले गेले.</p>
            <p>त्यांच्या कार्याची प्रेरणा भावी पिढीतील युवकांना मिळावी म्हणून <strong>यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड</strong> यांनी निगडी प्राधिकरण येथे हे भव्य स्मृती भवन उभारले आहे.</p>
            <div class="btn-row">
                <a href="/about-samiti" class="btn btn-primary">समितीविषयी</a>
                <a href="/about-yashwantrao-chavan" class="btn btn-outline">यशवंतराव चव्हाण</a>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="section section-alt" id="facilities">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">सोयी-सुविधा</p>
            <h2>स्मृती भवनमध्ये उपलब्ध सुविधा</h2>
        </div>
        <div class="card-grid">
            <?php foreach ($facilities as [$img, $title, $text, $link]): ?>
                <?php $external = str_starts_with($link, 'http'); ?>
                <a class="card" href="<?= e($link) ?>"<?= $external ? ' target="_blank" rel="noopener"' : '' ?>>
                    <div class="card-img<?= $img === 'statue-3d' ? ' card-img-cutout' : '' ?>"><img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?>" loading="lazy"></div>
                    <div class="card-body">
                        <h3><?= e($title) ?></h3>
                        <p><?= e($text) ?></p>
                        <span class="card-link">अधिक माहिती →</span>
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
            <img src="/assets/images/statue-3d.webp" alt="स्व. यशवंतराव चव्हाण यांचा १५ फूट पूर्णाकृती ब्राँझ पुतळा, निगडी" width="483" height="1030" loading="lazy">
        </div>
        <div>
            <p class="eyebrow eyebrow-gold">भारतात सर्वांत उंच</p>
            <h2>स्व. यशवंतराव चव्हाण यांचा <span class="gold">१५ फूट</span> पूर्णाकृती पुतळा</h2>
            <p>स्मृती भवनाच्या प्रवेशद्वारासमोर उभारलेला हा पुतळा स्व. यशवंतराव चव्हाण यांचा भारतातील सर्वांत उंच पुतळा आहे. महाराष्ट्राच्या शिल्पकाराला वंदन करण्यासाठी सर्वांनी अवश्य भेट द्यावी.</p>
            <a href="/facilities/statue" class="btn btn-gold">पुतळ्याविषयी अधिक</a>
        </div>
    </div>
</section>

<!-- Project timeline -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">स्मृती भवन प्रकल्प</p>
            <h2>संकल्प ते साकार - प्रवास</h2>
        </div>
        <ol class="timeline">
            <?php foreach ($timeline as [$year, $title, $text]): ?>
                <li>
                    <span class="tl-dot"></span>
                    <span class="tl-year"><?= $year ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
        <div class="center"><a href="/smruti-bhavan-project" class="btn btn-primary">संपूर्ण प्रकल्प माहिती</a></div>
    </div>
</section>

<!-- Hall booking -->
<section class="section section-alt" id="halls">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">सांस्कृतिक भवन</p>
            <h2>स्व. वेणुताई चव्हाण बहुउद्देशीय सभागृह</h2>
            <p>विवाह समारंभ, वाढदिवस, कौटुंबिक कार्यक्रम तसेच सामाजिक व इतर सर्व कार्यक्रमांसाठी उपलब्ध.</p>
        </div>
        <div class="hall-grid">
            <?php foreach ($halls as [$img, $title, $cap]): ?>
                <div class="hall-card">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($title) ?> - वेणुताई चव्हाण सभागृह, निगडी" loading="lazy">
                    <div><h3><?= e($title) ?></h3><p><?= e($cap) ?></p></div>
                </div>
            <?php endforeach; ?>
        </div>
        <ul class="feature-list">
            <li>दोन्ही सभागृहे वातानुकूलित (A/C)</li>
            <li>अत्याधुनिक ध्वनियंत्रणा (Acoustic System)</li>
            <li>LED स्क्रीन व प्रोजेक्टर सुविधा</li>
            <li>संपूर्ण इमारत CCTV व अग्निशमन यंत्रणा युक्त</li>
        </ul>
        <div class="center"><a href="<?= HALL_BOOKING_URL ?>" class="btn btn-primary" target="_blank" rel="noopener">आत्ताच बुक करा - venutaihall.com ↗</a></div>
    </div>
</section>

<!-- Students -->
<section class="section students">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">विद्यार्थ्यांसाठी</p>
            <h2>शिक्षण, निवास आणि मार्गदर्शन - एकाच ठिकाणी</h2>
        </div>
        <div class="student-grid">
            <div class="student-card">
                <img src="/assets/images/library-upsc.webp" alt="स्व. अरुण किर्लोस्कर UPSC MPSC अभ्यासिका, निगडी" loading="lazy">
                <h3>स्पर्धा परीक्षा अभ्यासिका व ग्रंथालय</h3>
                <p>UPSC, MPSC व इतर स्पर्धा परीक्षांची तयारी करणाऱ्या विद्यार्थ्यांसाठी शांत अभ्यासिका.</p>
            </div>
            <div class="student-card">
                <img src="/assets/images/hostel.webp" alt="विद्यार्थी वसतिगृह, निगडी प्राधिकरण" loading="lazy">
                <h3>विद्यार्थी वसतिगृह</h3>
                <p>५२ खोल्या - १४४ विद्यार्थी-विद्यार्थिनींसाठी सुरक्षित निवास व्यवस्था.</p>
            </div>
            <div class="student-card">
                <img src="/assets/images/guidance.webp" alt="विद्यार्थी मार्गदर्शन केंद्र" loading="lazy">
                <h3>विद्यार्थी मार्गदर्शन केंद्र</h3>
                <p>शैक्षणिक, सामाजिक व सर्वांगीण विकासासाठी उपयुक्त मार्गदर्शन.</p>
            </div>
        </div>
        <div class="center"><a href="#contact" class="btn btn-primary" data-interest="hostel">प्रवेशासाठी चौकशी करा</a></div>
    </div>
</section>

<!-- Gallery -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">गॅलरी</p>
            <h2>स्मृती भवनची झलक</h2>
        </div>
        <div class="gallery-grid">
            <?php foreach ($gallery as [$img, $alt]): ?>
                <button class="gallery-item" data-full="/assets/images/<?= $img ?>.webp">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($alt) ?>" loading="lazy">
                </button>
            <?php endforeach; ?>
        </div>
        <div class="center"><a href="/gallery" class="btn btn-outline">संपूर्ण गॅलरी पहा</a></div>
    </div>
</section>

<!-- Partners -->
<section class="section partners">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">सहभाग आणि सहकार्य</p>
            <h2>आमच्यासोबत असलेली मंडळे</h2>
        </div>
        <ul class="partner-list">
            <?php foreach ($partners as $p): ?>
                <li><?= e($p) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- FAQ -->
<section class="section section-alt" id="faq">
    <div class="container narrow">
        <div class="section-head">
            <p class="eyebrow">प्रश्नोत्तरे</p>
            <h2>वारंवार विचारले जाणारे प्रश्न</h2>
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

<!-- Visit -->
<section class="visit-band" id="visit">
    <div class="container visit-grid">
        <div>
            <h2>स्मृती भवनला भेट द्या</h2>
            <p>महाराष्ट्राच्या शिल्पकाराचा जीवनपट, १५ फूट पुतळा व इतिहासाचे ग्रंथालय पाहण्यासाठी कुटुंबासह अवश्य या. भेटीच्या वेळेसाठी कृपया संपर्क करा.</p>
        </div>
        <div class="btn-row">
            <a href="<?= MAP_URL ?>" class="btn btn-gold" target="_blank" rel="noopener">📍 दिशा पहा</a>
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-light">📞 <?= mr_num(PHONE_1) ?></a>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section" id="contact">
    <div class="container contact-grid">
        <div>
            <p class="eyebrow">संपर्क</p>
            <h2>आमच्याशी संपर्क साधा</h2>
            <address>
                <strong><?= e(ORG_NAME_MR) ?></strong><br>
                <?= e(ADDRESS_MR) ?>
            </address>
            <ul class="contact-list">
                <li>श्री. सुनिल जाधव - <a href="tel:+91<?= PHONE_1 ?>"><?= mr_num(PHONE_1) ?></a></li>
                <li>श्री. रामभाऊ तावरे - <a href="tel:+91<?= PHONE_2 ?>"><?= mr_num(PHONE_2) ?></a></li>
                <li>श्री. विलास भोसले - <a href="tel:+91<?= PHONE_3 ?>"><?= mr_num(PHONE_3) ?></a></li>
            </ul>
            <div class="map">
                <iframe src="<?= MAP_EMBED ?>" title="स्मृती भवन नकाशा" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <form class="inquiry-form" action="/inquiry.php" method="post">
            <h3>चौकशी फॉर्म</h3>
            <?php if (isset($_GET['sent'])): ?>
                <p class="form-msg <?= $_GET['sent'] === '1' ? 'ok' : 'err' ?>">
                    <?= $_GET['sent'] === '1' ? 'धन्यवाद! आम्ही लवकरच संपर्क करू.' : 'माफ करा, कृपया सर्व माहिती बरोबर भरा.' ?>
                </p>
            <?php endif; ?>
            <label>नाव *<input type="text" name="name" required maxlength="80"></label>
            <label>मोबाईल नंबर *<input type="tel" name="phone" required pattern="[0-9]{10}" maxlength="10" inputmode="numeric"></label>
            <label>कशाबद्दल चौकशी?
                <select name="interest">
                    <option value="hall">सभागृह बुकिंग</option>
                    <option value="hostel">विद्यार्थी वसतिगृह</option>
                    <option value="library">स्पर्धा परीक्षा अभ्यासिका</option>
                    <option value="vadhu-var">वधू-वर सूचक केंद्र</option>
                    <option value="visit">स्मृती भवन भेट</option>
                    <option value="other">इतर</option>
                </select>
            </label>
            <label>संदेश<textarea name="message" rows="4" maxlength="1000"></textarea></label>
            <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">
            <button type="submit" class="btn btn-primary">पाठवा</button>
        </form>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
