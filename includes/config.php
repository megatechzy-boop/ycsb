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
