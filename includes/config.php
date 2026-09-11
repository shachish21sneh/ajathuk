<?php
/**
 * Ajath Infotech - Global Configuration
 */

// Site Constants
define('SITE_NAME', 'Ajath Infotech');
define('SITE_TAGLINE', 'Mobile App Development & AI Solutions');
define('SITE_URL', rtrim((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . ($_SERVER['HTTP_HOST'] ?? 'localhost:8000'), '/'));

// Brand Details
define('COMPANY_NAME', 'Ajath Infotech');
define('COMPANY_LEGAL_NAME', 'Ajath Infotech Pvt Ltd');
define('SITE_THEME_COLOR', '#0284c7');
define('COMPANY_EMAIL', 'info@ajath.uk');
define('COMPANY_PHONE_DISPLAY', '+1 (347) 539-3979');
define('COMPANY_PHONE_RAW', '+13475393979');
define('COMPANY_WHATSAPP', '+13475393979');
define('COMPANY_WHATSAPP_URL', 'https://wa.me/13475393979?text=Hi%20Ajath%20Infotech%2C%20I%20would%20like%20to%20discuss%20a%20project.');
define('COMPANY_ADDRESS_STREET', '138 Hazelmere Road');
define('COMPANY_ADDRESS_CITY', 'Northolt');
define('COMPANY_ADDRESS_POSTCODE', 'UB5 6UW');
define('COMPANY_ADDRESS_COUNTRY', 'United Kingdom');
define('COMPANY_MAPS_URL', 'https://maps.app.goo.gl/8zTaWyddYztiCVtw8?g_st=awb');

// Global Offices
define('GLOBAL_OFFICES', [
    'uk' => [
        'country' => 'United Kingdom',
        'role' => 'UK Headquarters',
        'flag' => '🇬🇧',
        'image' => '/assets/images/offices/uk.jpg',
        'address' => '138 Hazelmere Road, Northolt, UB5 6UW, United Kingdom',
        'email' => 'info@ajath.uk',
        'phone' => '+1 (347) 539-3979',
        'phone_raw' => '+13475393979',
        'website' => 'https://ajath.uk'
    ],
    'usa' => [
        'country' => 'USA',
        'role' => 'North America Office',
        'flag' => '🇺🇸',
        'image' => '/assets/images/offices/usa.jpg',
        'address' => '447 Broadway, 2nd Floor, Suite #1332, New York City, USA - 10015',
        'email' => 'info@ajath.us',
        'phone' => '+1 (347) 539-3979',
        'phone_raw' => '+13475393979',
        'website' => 'https://dev.ajath.us/'
    ],
    'uae' => [
        'country' => 'Dubai UAE',
        'role' => 'Middle East Office',
        'flag' => '🇦🇪',
        'image' => '/assets/images/offices/uae.jpg',
        'address' => 'Office no. 304, Floor no. 3, Coastal Building Al quasis 2nd, Dubai – Dubai – United Arab Emirates',
        'email' => 'info@ajath.ae',
        'phone' => '+971 50 431 3932',
        'phone_raw' => '+971504313932',
        'website' => 'https://ajath.ae'
    ],
    'india' => [
        'country' => 'India',
        'role' => 'R&D Center',
        'flag' => '🇮🇳',
        'image' => '/assets/images/offices/india.jpg',
        'address' => 'WeWork DLF Forum, Cybercity, Phase III, Gurugram, Haryana, 122002',
        'email' => 'info@ajath.com',
        'phone' => '(+91) 7838518049',
        'phone_raw' => '+917838518049',
        'website' => 'https://ajath.com'
    ]
]);

// Assets
define('LOGO_URL', '/assets/images/ajath-logo-dark.webp');
define('FAVICON_URL', '/assets/images/favicon-ajath.png');
define('FAVICON_WEBP_URL', '/assets/images/favicon-ajath.webp');
define('OG_IMAGE_URL', '/assets/images/og-share.png');
define('APPLE_TOUCH_ICON_URL', '/assets/images/apple-touch-icon.png');

// SMTP Mail Settings
define('SMTP_HOST', 'ssl://mail.ajath.uk');
define('SMTP_PORT', 465);
define('SMTP_USER', 'info@ajath.uk');
define('SMTP_PASS', 'Ajath@123');
define('SMTP_FROM_EMAIL', 'info@ajath.uk');
define('SMTP_FROM_NAME', 'Ajath Infotech Inquiries');
define('ENQUIRY_RECIPIENTS', ['shachisheh@gmail.com', 'manjot@ajath.com']);


// Helper for clean URLs without .php extension
function url($path = '') {
    $path = ltrim($path, '/');
    if (empty($path)) {
        return '/';
    }
    // Remove .php if present to guarantee clean URL
    if (substr($path, -4) === '.php') {
        $path = substr($path, 0, -4);
    }
    return '/' . $path;
}

// Current page active state helper
function is_active($slug) {
    $uri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
    if ($slug === '' || $slug === 'home') {
        return empty($uri) || $uri === 'index.php' || $uri === 'index' ? 'active' : '';
    }
    // Check if uri matches or starts with slug
    if ($uri === $slug || $uri === $slug . '.php') {
        return 'active';
    }
    return '';
}
