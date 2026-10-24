<?php
require_once __DIR__ . '/../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'yashwantrao-chavan-statue',
    'interest' => 'visit',
    'schemaType' => ['TouristAttraction', 'LandmarksOrHistoricalBuildings'],
    'title' => '15 ft Yashwantrao Chavan Statue, Nigdi | Tallest in India',
    'h1' => 'Full-length Statue of Late Yashwantrao Chavan',
    'eyebrow' => 'Tallest in India',
    'subtitle' => 'A 15 ft bronze statue at the entrance of the Smruti Bhavan.',
    'description' => 'The 15 ft bronze statue of Yashwantrao Chavan at the Smruti Bhavan, Nigdi – his tallest statue in India. Location and visiting details.',
    'image' => 'statue-3d',
    'cutout' => true,
    'heroImage' => 'building',
    'intro' => [
        'A 15 ft full-length statue of the architect of modern Maharashtra stands in front of the Smruti Bhavan entrance. It is the tallest statue of Yashwantrao Chavan in India.',
        'The bronze statue shows him in his familiar cap, closed-collar coat and dhoti, standing on a black granite pedestal. With the grand steps and glass facade behind it, it can be seen from a distance.',
    ],
    'info' => [
        'Height' => '15 ft (full-length)',
        'Material' => 'Bronze statue, granite pedestal',
        'Highlight' => 'Tallest statue of Yashwantrao Chavan in India',
        'Location' => 'Smruti Bhavan entrance, Nigdi Pradhikaran',
        'Entry' => 'Open to all',
    ],
    'features' => [
        'A place to pay tribute to the architect of Maharashtra',
        'Tribute programmes on his birth anniversary (12 March) and death anniversary (25 November)',
        'The life-story gallery is in the same building',
        'Good for family visits and school trips',
    ],
    'photos' => [
        ['building', 'Smruti Bhavan building and statue – drone view'],
        ['jeevanpat', 'Life-story gallery next to it'],
        ['jeevanpat-2', 'Information panels in the life-story gallery'],
    ],
    'faqs' => [
        ['Where is the tallest statue of Yashwantrao Chavan?', 'The tallest (15 ft) full-length statue of Yashwantrao Chavan in India stands in front of the Yashwantrao Chavan Smruti Bhavan at Pradhikaran, Nigdi, Pimpri-Chinchwad.'],
        ['How tall is the statue?', 'The full-length statue is 15 ft tall.'],
        ['Is there an entry fee?', 'The statue is open to all. Please call the office for visiting hours.'],
    ],
];
require __DIR__ . '/../includes/facility-template.php';
