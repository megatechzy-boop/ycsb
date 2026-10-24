<?php
require_once __DIR__ . '/../../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'vadhu-var-suchak-kendra',
    'interest' => 'vadhu-var',
    'schemaType' => 'LocalBusiness',
    'title' => 'Matrimonial Centre, Pimpri-Chinchwad | Vadhu-Var Kendra',
    'h1' => 'Paschim Maharashtra Vadhu-Var Suchak Kendra',
    'eyebrow' => 'Matrimonial centre',
    'subtitle' => 'A trusted matchmaking centre for brides and grooms of all castes and religions.',
    'description' => 'Paschim Maharashtra Vadhu-Var Suchak Kendra at Pradhikaran, Nigdi – registration for brides and grooms of all communities.',
    'image' => 'vadhu-var',
    'intro' => [
        'The Paschim Maharashtra Vadhu-Var Suchak Kendra helps brides and grooms of all castes and religions find a suitable match.',
        'Run by a social organisation, it gives families a trustworthy and safe place to exchange information.',
    ],
    'info' => [
        'For' => 'Brides and grooms of all communities',
        'Registration' => 'In person at the office',
        'Required' => 'Bio-data and photograph',
        'Fees' => 'Please contact the office',
    ],
    'features' => [
        'Registration open to all castes and religions',
        'Trusted service run by a social organisation',
        'Meeting space for families',
        'Wedding halls in the same building',
    ],
    'photos' => [
        ['vadhu-var', 'Matrimonial centre office'],
        ['venutai-hall', 'Venutai Chavan hall for weddings'],
        ['dining', 'Dining hall'],
    ],
    'faqs' => [
        ['How do I register?', 'Bring your bio-data and photograph to the office at the Smruti Bhavan, or fill in the form on this page and we will contact you.'],
        ['Who can register?', 'Brides and grooms of all castes and religions.'],
    ],
];
require __DIR__ . '/../../includes/facility-template.php';
