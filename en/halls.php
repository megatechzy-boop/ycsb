<?php
require_once __DIR__ . '/../includes/config.php';

$f = [
    'lang' => 'en',
    'slug' => 'halls',
    'path' => '/halls',
    'active' => 'hall',
    'breadcrumb' => ['Halls & Booking' => '/en/halls'],
    'interest' => 'hall',
    'schemaType' => 'EventVenue',
    'bookingUrl' => HALL_BOOKING_URL,
    'title' => 'AC Hall in Nigdi Pradhikaran | Venutai Chavan Hall',
    'h1' => 'Late Venutai Chavan Multipurpose Hall',
    'eyebrow' => 'Halls & booking',
    'subtitle' => 'Air-conditioned halls seating 1,200 and 350 for weddings, birthdays, family, social and cultural events.',
    'description' => 'Late Venutai Chavan Hall, Nigdi – AC halls for 1,200 and 350 guests, dining hall for 400 and 8 AC rooms. Book for weddings and events.',
    'image' => 'venutai-hall',
    'heroImage' => 'hall-large',
    'intro' => [
        'The Late Venutai Chavan Multipurpose Hall at the Smruti Bhavan is available for weddings, birthdays, family functions and social, cultural and educational events.',
        'Both halls are air-conditioned, with a modern acoustic system, LED screen and projector. There are 8 air-conditioned guest rooms in the same building.',
    ],
    'info' => [
        'Large hall' => 'Seats up to 1,200',
        'Small hall' => 'Seats up to 350',
        'Dining hall' => '400 at a time',
        'Stay' => '8 air-conditioned rooms',
        'Booking' => 'venutaihall.com or by phone',
    ],
    'features' => [
        'Both halls air-conditioned',
        'Modern acoustic system',
        'LED screen and projector',
        'Dining hall for 400 at a time',
        '8 air-conditioned guest rooms',
        'Whole building covered by CCTV and fire safety systems',
        'Weddings, birthdays, family functions',
        'Social, cultural and educational events, conferences',
    ],
    'photos' => [
        ['venutai-hall', 'Late Venutai Chavan hall with balcony'],
        ['hall-large', 'Large hall – stage and chandeliers'],
        ['hall-small', 'Small hall'],
        ['dining', 'Dining hall'],
        ['guest-room', 'Air-conditioned guest room'],
        ['building', 'Smruti Bhavan building'],
    ],
    'faqs' => [
        ['Where is a large AC hall in Nigdi Pradhikaran?', 'The Late Venutai Chavan Hall is in the Yashwantrao Chavan Smruti Bhavan, Sector 27A, next to Sant Tukaram Udyan, Pradhikaran, Nigdi. It has two air-conditioned halls seating 1,200 and 350.'],
        ['What is the seating capacity?', 'The large hall seats up to 1,200 and the small hall up to 350. The dining hall serves 400 at a time.'],
        ['How do I book a hall?', 'Book online at venutaihall.com or call +91 ' . PHONE_1 . '.'],
        ['Is accommodation available for guests?', 'Yes, there are 8 air-conditioned guest rooms in the same building.'],
        ['What is the hall rent?', 'Rent depends on the date, hall and type of event. Please enquire at venutaihall.com or by phone.'],
    ],
];
require __DIR__ . '/../includes/facility-template.php';
