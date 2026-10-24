<?php
require_once __DIR__ . '/../includes/config.php';

// TODO: have the Samiti review before launch
$updated = 'October 2026';
$sections = [
    'What we collect' => [
        'We only receive what you enter in the enquiry form: your name, mobile number, enquiry topic and message.',
        'General, anonymous website usage statistics (such as which pages were viewed) may be collected.',
    ],
    'How we use it' => [
        'Your details are used only to reply to your enquiry and to contact you about hall booking, the hostel, the library or other services.',
        'We do not sell your information or share it with others for advertising.',
    ],
    'Other websites' => [
        'We link to venutaihall.com for hall booking, Google Maps for directions and WhatsApp for messages. Their own privacy policies apply on those sites.',
    ],
    'Your rights' => [
        'You can ask to see, correct or delete the information you gave us using the contact details below.',
    ],
];

$page = [
    'lang' => 'en',
    'title' => 'Privacy Policy | ' . SITE_NAME_EN,
    'description' => 'Privacy policy of the Yashwantrao Chavan Smruti Bhavan website – how enquiry form details are used and protected.',
    'path' => '/en/privacy-policy',
    'alternates' => ['mr' => '/privacy-policy', 'en' => '/en/privacy-policy'],
    'breadcrumb' => ['Privacy Policy' => '/en/privacy-policy'],
];
$hero = ['eyebrow' => 'Policy', 'title' => 'Privacy Policy', 'subtitle' => 'How we use your information.'];

require __DIR__ . '/../includes/legal-page.php';
