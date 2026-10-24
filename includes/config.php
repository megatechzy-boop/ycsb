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
define('MAP_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.2783984084604!2d73.76854247501643!3d18.65149908246762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b91cbfe11e15%3A0xbe01cc53890e1bbe!2sYashwantrao%20Chavan%20Smarak!5e0!3m2!1sen!2sin!4v1792835763895!5m2!1sen!2sin');
// Map pin coordinates (from the Google Maps embed)
define('GEO_LAT', 18.65149908246762);
define('GEO_LNG', 73.76854247501643);
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
        'pin' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
    ];
    // Official WhatsApp logo (filled glyph)
    if ($name === 'whatsapp') {
        return '<svg class="icon icon-whatsapp" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>';
    }
    return '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[$name] . '</svg>';
}
