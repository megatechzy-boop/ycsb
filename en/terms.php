<?php
require_once __DIR__ . '/../includes/config.php';

// TODO: have the Samiti review before launch
$updated = 'October 2026';
$sections = [
    'Use of this website' => [
        'This website belongs to Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad, and provides information about the Smruti Bhavan and its facilities.',
        'We try to keep the information accurate, but timings, fees and rules may change. Please contact the office for final details.',
    ],
    'Booking and admission' => [
        'Hall booking and admission to the hostel and library are subject to the Samiti\'s own rules. An enquiry on this website is not a guarantee of booking or admission.',
    ],
    'Content and photos' => [
        'Text, photos and logos on this website may not be used commercially without the Samiti\'s permission.',
    ],
    'When visiting' => [
        'Please keep the premises clean and quiet, and do not damage the statue, gallery or library items.',
    ],
];

$page = [
    'lang' => 'en',
    'title' => 'Terms of Use | ' . SITE_NAME_EN,
    'description' => 'Terms for using the Yashwantrao Chavan Smruti Bhavan website and facilities.',
    'path' => '/en/terms',
    'alternates' => ['mr' => '/terms', 'en' => '/en/terms'],
    'breadcrumb' => ['Terms' => '/en/terms'],
];
$hero = ['eyebrow' => 'Policy', 'title' => 'Terms of Use', 'subtitle' => 'About using the website and facilities.'];

require __DIR__ . '/../includes/legal-page.php';
