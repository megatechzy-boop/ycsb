<?php
require_once __DIR__ . '/../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'student-hostel',
    'path' => '/student-hostel',
    'active' => 'hostel',
    'breadcrumb' => ['Student Hostel' => '/en/student-hostel'],
    'interest' => 'hostel',
    'schemaType' => 'Hostel',
    'title' => 'Student Hostel in Nigdi Pradhikaran, Pimpri-Chinchwad | 52 Rooms',
    'h1' => 'Student Hostel',
    'eyebrow' => '52 rooms · 144 students',
    'subtitle' => 'Safe accommodation for students who come to Pimpri-Chinchwad to study.',
    'description' => 'Student hostel at Pradhikaran, Nigdi, Pimpri-Chinchwad – 52 rooms for 144 male and female students, with a UPSC/MPSC study library in the same building. Enquire about admission.',
    'image' => 'hostel',
    'intro' => [
        'The Smruti Bhavan has a student hostel so that students from rural areas who come to Pimpri-Chinchwad to study get safe and affordable accommodation.',
        'The hostel has 52 rooms for 144 male and female students. With a study library, history library and guidance centre in the same building, it offers an excellent environment for study.',
    ],
    'info' => [
        'Rooms' => '52',
        'Capacity' => '144 male and female students',
        'In each room' => 'Bed, study table, chair, cupboard',
        'Safety' => 'CCTV and fire safety systems',
        'Fees' => 'Please contact the office',
        'Address' => 'Sector 27A, Nigdi Pradhikaran',
    ],
    'features' => [
        'Bed, study table and chair for every student',
        'Airy, well-lit rooms',
        'Whole building covered by CCTV and fire safety systems',
        'UPSC / MPSC study library in the same building',
        'History library and guidance centre',
        'Quiet location next to Sant Tukaram Udyan',
    ],
    'photos' => [
        ['hostel', 'Hostel room'],
        ['hostel-2', 'Hostel room with study tables'],
        ['library-upsc', 'Study library in the same building'],
    ],
    'faqs' => [
        ['Where is the student hostel in Nigdi Pradhikaran?', 'In the Yashwantrao Chavan Smruti Bhavan, Sector 27A, next to Sant Tukaram Udyan, Pradhikaran, Nigdi.'],
        ['How many students can stay?', 'The hostel has 52 rooms for 144 male and female students.'],
        ['Is it open to girls?', 'Yes, the hostel is for both male and female students. Contact the office for detailed rules.'],
        ['How do I apply?', 'For the admission process and fees, fill in the enquiry form on this page or call +91 ' . PHONE_1 . '.'],
    ],
];
require __DIR__ . '/../includes/facility-template.php';
