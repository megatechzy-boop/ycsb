<?php
require_once __DIR__ . '/../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'yashwantrao-chavan-jeevanpat-gallery',
    'interest' => 'visit',
    'schemaType' => ['Museum', 'TouristAttraction'],
    'title' => 'Yashwantrao Chavan Life-Story Gallery, Nigdi | Only One in Maharashtra',
    'h1' => 'Yashwantrao Chavan Life-Story Gallery',
    'eyebrow' => 'Only in Maharashtra',
    'subtitle' => 'The complete life of Yashwantrao Chavan in photographs and information panels.',
    'description' => 'The Yashwantrao Chavan life-story gallery (Jeevanpat Dalan) at the Smruti Bhavan, Nigdi – his entire life journey in pictures. The only such gallery in Maharashtra.',
    'image' => 'jeevanpat',
    'intro' => [
        'The complete life story of Late Yashwantrao Chavan has been set up as a picture gallery – and in Maharashtra, only at the Smruti Bhavan in Nigdi.',
        'From his childhood in Devrashtre and the freedom struggle to the formation of Maharashtra and his years as Deputy Prime Minister, his journey unfolds through rare photographs and information panels.',
    ],
    'info' => [
        'Highlight' => 'The only life-story picture gallery in Maharashtra',
        'Format' => 'Photographs and information panels',
        'Facilities' => 'Air-conditioned, gallery lighting',
        'Visits' => 'Call for timings',
    ],
    'features' => [
        'His complete journey – from childhood to Deputy Prime Minister',
        'History of the Samyukta Maharashtra movement',
        'Rare photographs and newspaper records',
        'Air-conditioned gallery with special lighting',
        'Useful for school and college trips',
    ],
    'photos' => [
        ['jeevanpat', 'Life-story gallery'],
        ['jeevanpat-2', 'Information panels and photographs'],
        ['building', 'Smruti Bhavan building'],
    ],
    'faqs' => [
        ['Where is the Yashwantrao Chavan life-story gallery?', 'It is in the Yashwantrao Chavan Smruti Bhavan at Pradhikaran, Nigdi, Pimpri-Chinchwad – the only such gallery in Maharashtra.'],
        ['Can schools bring a trip?', 'Yes. Please call the Samiti office in advance to fix a time.'],
    ],
];
require __DIR__ . '/../includes/facility-template.php';
