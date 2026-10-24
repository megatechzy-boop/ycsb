<?php
// Served as /llms.txt (see .htaccess): a plain summary for AI assistants and answer engines
require_once __DIR__ . '/includes/config.php';
$pages = require __DIR__ . '/includes/pages.php';
header('Content-Type: text/plain; charset=UTF-8');
?>
# <?= SITE_NAME_EN ?> (<?= SITE_NAME_MR ?>)

> Memorial to Yashwantrao Chavan – freedom fighter, first Chief Minister of Maharashtra (1960) and former Deputy Prime Minister of India – built by <?= ORG_NAME_EN ?> at <?= ADDRESS_STREET ?>, Pimpri-Chinchwad, <?= ADDRESS_CITY ?> <?= ADDRESS_PIN ?>, Maharashtra, India.

The website is in Marathi (default) and English (/en/). Facts below are the same in both.

## Key facts
- Samiti founded: 1989, registered under the Bombay Public Trusts Act, 1950
- Land: 44 gunthe at Pradhikaran, Nigdi, acquired in 1991
- Construction: started 2014, completed September 2026; 1.5 lakh sq ft built-up
- 15 ft full-length bronze statue of Yashwantrao Chavan – his tallest statue in India
- Late Venutai Chavan Multipurpose Hall: air-conditioned halls seating 1,200 and 350; dining hall for 400; 8 air-conditioned guest rooms
- Student hostel: 52 rooms for 144 male and female students
- Late Arun Kirloskar UPSC & MPSC study library
- Late Shrimant Chh. Abhaysinhraje Bhosale history library
- Late Hirabai Kisanrao Landge student guidance centre
- Yashwantrao Chavan life-story gallery (Jeevanpat Dalan) – the only one in Maharashtra
- Paschim Maharashtra Vadhu-Var Suchak Kendra (matrimonial centre, all communities)

## Contact
- Phone: +91 <?= PHONE_1 ?>, +91 <?= PHONE_2 ?>, +91 <?= PHONE_3 ?>

- Hall booking: <?= HALL_BOOKING_URL ?>

- Map: <?= MAP_URL ?>

- Coordinates: <?= GEO_LAT ?>, <?= GEO_LNG ?>


## Pages (English)
<?php foreach ($pages as $mr => [$label]): ?>
<?php if (in_array($mr, ['/privacy-policy', '/terms', '/news-events'], true)) continue; ?>
- [<?= $label ?>](<?= SITE_URL . ($mr === '/' ? '/en/' : '/en' . $mr) ?>)
<?php endforeach; ?>

## Pages (Marathi)
<?php foreach ($pages as $mr => [$label]): ?>
<?php if (in_array($mr, ['/privacy-policy', '/terms', '/news-events'], true)) continue; ?>
- [<?= $label ?>](<?= SITE_URL . $mr ?>)
<?php endforeach; ?>
