<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$aims = [
    ['प्रेरणा', 'स्व. यशवंतराव चव्हाण यांच्या कार्याची प्रेरणा व स्फूर्ती भावी पिढीतील युवकांना मिळावी.'],
    ['शिक्षण', 'स्पर्धा परीक्षा अभ्यासिका, ग्रंथालये, वसतिगृह व मार्गदर्शन केंद्रातून विद्यार्थ्यांना संधी उपलब्ध करून देणे.'],
    ['समाजसेवा', 'सर्व जाती-धर्मातील नागरिकांसाठी सामाजिक, सांस्कृतिक व कौटुंबिक उपक्रमांना हक्काचे व्यासपीठ देणे.'],
];

// TODO: add posts (अध्यक्ष, सचिव...) and photos once the Samiti sends them
$contacts = [
    ['श्री. सुनिल जाधव', PHONE_1],
    ['श्री. रामभाऊ तावरे', PHONE_2],
    ['श्री. विलास भोसले', PHONE_3],
];

$tributes = [
    ['jagtap-bust', 'स्व. आ. लक्ष्मणभाऊ जगताप', 'स्मृती भवन उभारण्यामध्ये मोलाचा वाटा उचलला. त्यांचे हे कार्य सदैव स्मरणात राहावे म्हणून स्मृती भवनात त्यांचा अर्धाकृती पुतळा उभारण्यात आला आहे.'],
    ['guidance', 'आ. महेशदादा लांडगे', 'स्मृती भवन उभारण्यामध्ये भरघोस मदत केली. त्यांचे हे कार्य स्मरणात राहावे म्हणून त्यांच्या आई स्व. हिराबाई किसनराव लांडगे यांचे नाव विद्यार्थी मार्गदर्शन केंद्रास दिले आहे.'],
    ['library-board', 'स्व. अरुण किर्लोस्कर', 'फ्लिटगार्ड ग्रुप ऑफ कं. तर्फे औद्योगिक क्षेत्रात तसेच भारत विद्यालय, शहाबाग, ता. वाई या संस्थेतर्फे हजारो गोरगरीब विद्यार्थ्यांना मोफत शिक्षण दिले. त्यांचे नाव स्पर्धा परीक्षा अभ्यासिकेला देण्यात आले आहे.'],
    ['history-entry', 'स्व. श्रीमंत छ. अभयसिंहराजे भोसले', 'छ. शिवरायांचे वंशज. अजिंक्यतारा सह. साखर कारखाना व अजिंक्य समूह स्थापन करून हजारो लोकांना रोजगार दिला. त्यांचे नाव इतिहासाच्या ग्रंथालयाला देण्यात आले आहे.'],
];

$page = [
    'title' => 'यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड | आमच्याबद्दल',
    'description' => '१९८९ पासून कार्यरत यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड - उद्दिष्टे, पदाधिकारी, सहयोगी मित्र मंडळे व निगडी येथील स्व. यशवंतराव चव्हाण स्मृती भवनाची उभारणी.',
    'path' => '/about-samiti',
    'alternates' => ['mr' => '/about-samiti', 'en' => '/en/about-samiti'],
    'active' => 'about',
    'breadcrumb' => ['आमच्याबद्दल' => '/about-samiti'],
];

$hero = [
    'eyebrow' => '१९८९ पासून',
    'title' => 'यशवंतराव चव्हाण स्मारक समिती',
    'subtitle' => 'पिंपरी-चिंचवड - यशवंतप्रेमींनी एकत्र येऊन स्थापन केलेली सामाजिक संस्था.',
    'image' => 'building',
];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-hero.php';
?>

<!-- Story -->
<section class="section">
    <div class="container split">
        <img src="/assets/images/building.webp" alt="यशवंतराव चव्हाण स्मारक समितीने उभारलेले स्मृती भवन, निगडी" loading="lazy" width="1600" height="900">
        <div>
            <p class="eyebrow">आमची कहाणी</p>
            <h2>सामाजिक बांधिलकीतून उभे राहिलेले स्मारक</h2>
            <p>स्व. यशवंतराव चव्हाण यांनी राबविलेल्या औद्योगिक आणि सहकार धोरणांमुळे संपूर्ण महाराष्ट्रभर उद्योगधंदे, सहकारी साखर कारखाने, बँका व पतसंस्थांचे जाळे विणले गेले. हे ऋण फेडण्याचे औचित्य म्हणून त्यांचे स्मारक पिंपरी-चिंचवड या औद्योगिक नगरीत असावे, ही भावना यशवंतप्रेमींच्या मनात होती.</p>
            <p>याच सामाजिक बांधिलकीतून प्रेरित होऊन <strong>१९८९ मध्ये</strong> यशवंतप्रेमींनी एकत्र येऊन मुंबई सार्वजनिक विश्वस्त व्यवस्था अधिनियम १९५० अन्वये "यशवंतराव चव्हाण स्मारक समिती" या सामाजिक संस्थेची स्थापना केली. १९९१ मध्ये प्राधिकरण, निगडी येथे ४४ गुंठे भूखंड घेऊन संस्थेने भव्य स्मृती भवन उभारले.</p>
            <a href="/smruti-bhavan-project" class="btn btn-primary">स्मृती भवन प्रकल्प</a>
        </div>
    </div>
</section>

<!-- Aims -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">उद्दिष्टे</p>
            <h2>समितीचे ध्येय</h2>
        </div>
        <div class="work-grid work-grid-3">
            <?php foreach ($aims as $i => [$title, $text]): ?>
                <div class="work-card">
                    <span class="work-num"><?= mr_num($i + 1) ?></span>
                    <h3><?= e($title) ?></h3>
                    <p><?= e($text) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Office bearers -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">पदाधिकारी</p>
            <h2>संपर्क पदाधिकारी</h2>
            <p>अध्यक्ष, पदाधिकारी व सर्व कार्यकारिणी सदस्य.</p>
        </div>
        <div class="people-grid">
            <?php foreach ($contacts as [$name, $phone]): ?>
                <div class="person-card">
                    <span class="person-avatar" aria-hidden="true"><?= mb_substr(str_replace('श्री. ', '', $name), 0, 1) ?></span>
                    <h3><?= e($name) ?></h3>
                    <a href="tel:+91<?= $phone ?>"><?= icon('phone') ?> <?= mr_num($phone) ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Tributes -->
<section class="section section-alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">कृतज्ञता</p>
            <h2>स्मृती भवन उभारणीतील मोलाचे योगदान</h2>
        </div>
        <div class="tribute-grid">
            <?php foreach ($tributes as [$img, $name, $text]): ?>
                <div class="tribute-card">
                    <img src="/assets/images/<?= $img ?>.webp" alt="<?= e($name) ?>" loading="lazy">
                    <div>
                        <h3><?= e($name) ?></h3>
                        <p><?= e($text) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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

<!-- CTA -->
<section class="visit-band">
    <div class="container visit-grid">
        <div>
            <h2>समितीच्या कार्यात सहभागी व्हा</h2>
            <p>समितीने हाती घेतलेल्या सामाजिक उपक्रमांमध्ये भाग घेऊन आमच्या कार्यात सहभागी व्हावे ही नम्र विनंती.</p>
        </div>
        <div class="btn-row">
            <a href="/contact" class="btn btn-gold">संपर्क करा</a>
            <a href="tel:+91<?= PHONE_1 ?>" class="btn btn-light"><?= icon('phone') ?> <?= mr_num(PHONE_1) ?></a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
