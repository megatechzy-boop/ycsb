<?php
require_once __DIR__ . '/../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'hirabai-landge-student-guidance-centre',
    'interest' => 'guidance',
    'schemaType' => 'EducationalOrganization',
    'title' => 'Student Guidance Centre, Nigdi | Late Hirabai Kisanrao Landge Centre',
    'h1' => 'Late Hirabai Kisanrao Landge Student Guidance Centre',
    'eyebrow' => 'Student guidance centre',
    'subtitle' => 'Guidance for the academic, social and all-round development of students.',
    'description' => 'Student guidance centre at the Smruti Bhavan, Pradhikaran, Nigdi – career and competitive exam guidance, with a seminar hall for sessions and workshops.',
    'image' => 'guidance',
    'intro' => [
        'The Smruti Bhavan runs a student guidance centre so that students get useful guidance for their academic, social and all-round development.',
        'It is named after Late Hirabai Kisanrao Landge, mother of MLA Maheshdada Landge, who contributed generously to building the Smruti Bhavan.',
    ],
    'info' => [
        'Purpose' => 'Academic, social and all-round development',
        'Facilities' => 'Seminar hall with projector screen',
        'Activities' => 'Guidance sessions, workshops',
        'Schedule' => 'Contact us for upcoming sessions',
    ],
    'features' => [
        'Career and competitive exam guidance sessions',
        'Seminar hall with projector screen',
        'Talks and workshops by experts',
        'Study library and hostel in the same building',
    ],
    'photos' => [
        ['guidance', 'Seminar hall of the guidance centre'],
        ['library-upsc', 'Competitive exam study library'],
        ['hostel', 'Student hostel'],
    ],
    'faqs' => [
        ['What activities does the guidance centre run?', 'Academic and career guidance sessions, talks and workshops for students. Contact us for upcoming sessions.'],
        ['Where is the guidance centre?', 'It is in the Yashwantrao Chavan Smruti Bhavan at Pradhikaran, Nigdi.'],
    ],
];
require __DIR__ . '/../includes/facility-template.php';
