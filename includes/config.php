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
define('SITE_THEME_COLOR', '#188DE1');
define('COMPANY_EMAIL', 'info@ajath.uk');
define('COMPANY_PHONE_DISPLAY', '+44 (0) 20 8123 4567'); // Easily editable
define('COMPANY_PHONE_RAW', '+442081234567');
define('COMPANY_ADDRESS_STREET', '138 Hazelmere Road');
define('COMPANY_ADDRESS_CITY', 'Northolt');
define('COMPANY_ADDRESS_POSTCODE', 'UB5 6UW');
define('COMPANY_ADDRESS_COUNTRY', 'United Kingdom');
define('COMPANY_MAPS_URL', 'https://maps.app.goo.gl/8zTaWyddYztiCVtw8?g_st=awb');

// Assets
define('LOGO_URL', '/assets/images/ajath-logo-white.webp');
define('FAVICON_URL', '/assets/images/favicon-ajath.webp');

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
