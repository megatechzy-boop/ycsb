<?php
require_once __DIR__ . '/../../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'upsc-mpsc-library',
    'interest' => 'library',
    'schemaType' => 'Library',
    'title' => 'UPSC MPSC Study Library, Nigdi Pimpri-Chinchwad',
    'h1' => 'UPSC & MPSC Study Library, Nigdi',
    'eyebrow' => 'Late Arun Kirloskar Library',
    'subtitle' => 'A quiet, well-equipped study room for students preparing for UPSC, MPSC and other competitive exams.',
    'description' => 'Late Arun Kirloskar UPSC & MPSC study library at Nigdi Pradhikaran – individual desks, reference books and a hostel in the same building.',
    'image' => 'library-board',
    'intro' => [
        'The Smruti Bhavan has a well-equipped study room and library with individual desks for students preparing for competitive exams.',
        'It is named after Late Arun Kirloskar, who through the Fleetguard group and Bharat Vidyalaya, Shahabag (Wai) gave free education to thousands of students.',
    ],
    'info' => [
        'For' => 'UPSC, MPSC and other competitive exam aspirants',
        'Seating' => 'Individual desks with partitions',
        'Timings' => 'Please contact the office',
        'Fees' => 'Please contact the office',
        'Stay' => 'Student hostel in the same building',
    ],
    'features' => [
        'Individual partitioned desk for every student',
        'Reference books for competitive exams',
        'Quiet, clean study environment',
        'Whole building covered by CCTV and fire safety systems',
        'Student guidance centre in the same building',
        'Option to stay in the hostel and study',
    ],
    'photos' => [
        ['library-upsc', 'Individual study desks'],
        ['library-board', 'Late Arun Kirloskar UPSC & MPSC Library'],
        ['guidance', 'Student guidance centre'],
    ],
    'faqs' => [
        ['Where is the UPSC / MPSC study library in Nigdi Pradhikaran?', 'The Late Arun Kirloskar study library is in the Yashwantrao Chavan Smruti Bhavan, Sector 27A, next to Sant Tukaram Udyan, Pradhikaran, Nigdi.'],
        ['How do I get admission?', 'For admission, timings and fees, fill in the enquiry form on this page or call +91 ' . PHONE_1 . '.'],
        ['Is accommodation available?', 'Yes. The same building has a student hostel with 52 rooms for 144 male and female students.'],
    ],
];
require __DIR__ . '/../../includes/facility-template.php';
