<?php
require_once __DIR__ . '/../../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'history-library',
    'interest' => 'history-library',
    'schemaType' => 'Library',
    'title' => 'History Library, Nigdi | Abhaysinhraje Bhosale Library',
    'h1' => 'Late Shrimant Chh. Abhaysinhraje Bhosale History Library',
    'eyebrow' => 'History library and reading room',
    'subtitle' => 'Books on the history of Maharashtra and a gallery of great figures from Maratha history.',
    'description' => 'The Late Shrimant Chh. Abhaysinhraje Bhosale History Library at the Smruti Bhavan, Nigdi – books on Maharashtra history, an image of Chhatrapati Shivaji Maharaj and a reading room.',
    'image' => 'history-library',
    'intro' => [
        'To pass on the proud history of Maharashtra to the next generation, the Smruti Bhavan has a dedicated history library and reading room.',
        'It is named after Late Shrimant Chh. Abhaysinhraje Bhosale, a descendant of Chhatrapati Shivaji Maharaj and founder of Ajinkyatara Sahakari Sakhar Karkhana and the Ajinkya group, who gave employment to thousands.',
    ],
    'info' => [
        'Subject' => 'History of Maharashtra and the Marathas',
        'Facilities' => 'Library, reading room, portrait gallery',
        'Timings' => 'Please contact the office',
        'For' => 'Students, researchers and history lovers',
    ],
    'features' => [
        'Marathi books on the history of Maharashtra',
        'Image of Chhatrapati Shivaji Maharaj',
        'Portrait wall of great figures from Maratha history',
        'Reading room with traditional wooden furniture',
        'Reference material for researchers and students',
    ],
    'photos' => [
        ['history-entry', 'Library entrance'],
        ['history-library', 'Shivaji Maharaj image and portrait wall'],
        ['history-library-2', 'Reading room and book collection'],
    ],
    'faqs' => [
        ['Where is the history library?', 'It is in the Yashwantrao Chavan Smruti Bhavan at Pradhikaran, Nigdi.'],
        ['What books does it have?', 'Marathi books and reference material on the history of Maharashtra and the Marathas.'],
        ['How do I become a member?', 'For membership and timings, fill in the form on this page or contact the Samiti office.'],
    ],
];
require __DIR__ . '/../../includes/facility-template.php';
