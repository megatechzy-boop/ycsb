<?php
// Site-wide settings. Update SITE_URL and email before going live.

define('SITE_URL', 'https://www.example.com'); // TODO: final domain
define('SITE_NAME_MR', 'स्व. यशवंतराव चव्हाण स्मृती भवन');
define('SITE_NAME_EN', 'Late Yashwantrao Chavan Smruti Bhavan');
define('ORG_NAME_MR', 'यशवंतराव चव्हाण स्मारक समिती, पिंपरी-चिंचवड');
define('ORG_NAME_EN', 'Yashwantrao Chavan Smarak Samiti, Pimpri-Chinchwad');

define('ADDRESS_MR', 'सेक्टर नं. २७ अ, संत तुकाराम उद्यानाशेजारी, प्राधिकरण, निगडी, पुणे - ४११ ०४४');
define('ADDRESS_STREET', 'Sector No. 27A, Near Sant Tukaram Udyan, Pradhikaran, Nigdi');
define('ADDRESS_CITY', 'Pune');
define('ADDRESS_PIN', '411044');

define('PHONE_1', '9763312447'); // श्री. सुनिल जाधव
define('PHONE_2', '9665501501'); // श्री. रामभाऊ तावरे
define('PHONE_3', '9860490867'); // श्री. विलास भोसले
define('WHATSAPP', '919763312447'); // TODO: confirm WhatsApp number with client
define('EMAIL', 'info@example.com'); // TODO: client email for inquiries

define('MAP_URL', 'https://maps.google.com/?cid=13691449001336773566');
define('MAP_EMBED', 'https://maps.google.com/maps?q=Yashwantrao+Chavan+Smarak+Samiti+Nigdi+Pune&output=embed');
define('HALL_BOOKING_URL', 'https://venutaihall.com/');

// Convert western digits to Marathi (Devanagari) digits
function mr_num($value)
{
    return strtr((string) $value, ['0' => '०', '1' => '१', '2' => '२', '3' => '३', '4' => '४', '5' => '५', '6' => '६', '7' => '७', '8' => '८', '9' => '९']);
}

function e($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// Inline SVG icons (stroke style, inherit text colour)
function icon($name)
{
    $paths = [
        'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'chat' => '<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22z"/><path d="M8.5 9.5c.5 2 2 3.5 4 4.5l1.2-1.2 2 1-.5 1.7c-3.5-.3-6.7-3.5-7-7l1.7-.5 1 2z"/>',
        'pin' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
    ];
    return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[$name] . '</svg>';
}
