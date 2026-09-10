<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

// Page-specific metadata defaults
$pageTitle = $pageTitle ?? 'Ajath Infotech | Mobile App Development & AI Solutions';
$pageDescription = $pageDescription ?? 'Ajath Infotech builds powerful mobile applications, AI-integrated apps, AI agents, web applications and custom software solutions for modern businesses.';
$pageKeywords = $pageKeywords ?? 'Mobile app development, Custom mobile app development, Mobile app developers, iOS app development, Android app development, AI App Development, AI Agents Development, AI Integration, AI Automation, Custom Software Development, Web Application Development, Mobile App Development UK';
$pageAuthor = $pageAuthor ?? (defined('COMPANY_LEGAL_NAME') ? COMPANY_LEGAL_NAME : 'Ajath Infotech Pvt Ltd');
$pageRobots = $pageRobots ?? 'index, follow';

// Compute clean canonical URL
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if (substr($requestPath, -4) === '.php') {
    $requestPath = substr($requestPath, 0, -4);
}
if ($requestPath === '/index') {
    $requestPath = '/';
}
$canonicalUrl = $canonicalUrl ?? (SITE_URL . $requestPath);

$ogLocale = $ogLocale ?? 'en_GB';
$ogType = $ogType ?? 'website';
$ogTitle = $ogTitle ?? $pageTitle;
$ogDescription = $ogDescription ?? $pageDescription;
$ogImage = $ogImage ?? (SITE_URL . LOGO_URL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary SEO Meta -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="keywords" itemprop="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
  <meta name="author" content="<?php echo htmlspecialchars($pageAuthor); ?>">
  <meta name="robots" content="<?php echo htmlspecialchars($pageRobots); ?>">
  <meta name="revisit-after" content="1 days">
  <meta name="distribution" content="global">
  <meta name="copyright" content="<?php echo htmlspecialchars(defined('COMPANY_LEGAL_NAME') ? COMPANY_LEGAL_NAME : 'Ajath Infotech Pvt Ltd'); ?>">
  <meta name="theme-color" content="<?php echo defined('SITE_THEME_COLOR') ? SITE_THEME_COLOR : '#188DE1'; ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:locale" content="<?php echo htmlspecialchars($ogLocale); ?>">
  <meta property="og:locale:alternate" content="en_US">
  <meta property="og:type" content="<?php echo htmlspecialchars($ogType); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($ogDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(SITE_NAME); ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($ogTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($ogDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- Favicons & Touch Icons -->
  <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?><?php echo LOGO_URL; ?>">
  <link rel="shortcut icon" href="<?php echo FAVICON_URL; ?>" type="image/webp">
  <link rel="icon" href="<?php echo FAVICON_URL; ?>" type="image/webp" sizes="16x16">
  <link rel="icon" href="<?php echo FAVICON_URL; ?>" type="image/webp" sizes="32x32">
  <link rel="icon" href="<?php echo FAVICON_URL; ?>" type="image/webp" sizes="192x192">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="/assets/css/style.css?v=1.1">
  <link rel="stylesheet" href="/assets/css/components.css?v=1.1">
  <link rel="stylesheet" href="/assets/css/responsive.css?v=1.1">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Ajath Infotech",
    "image": "<?php echo SITE_URL; ?><?php echo LOGO_URL; ?>",
    "@id": "<?php echo SITE_URL; ?>",
    "url": "<?php echo SITE_URL; ?>",
    "telephone": "<?php echo COMPANY_PHONE_RAW; ?>",
    "email": "<?php echo COMPANY_EMAIL; ?>",
    "priceRange": "£££",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo COMPANY_ADDRESS_STREET; ?>",
      "addressLocality": "<?php echo COMPANY_ADDRESS_CITY; ?>",
      "postalCode": "<?php echo COMPANY_ADDRESS_POSTCODE; ?>",
      "addressCountry": "GB"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 51.5542,
      "longitude": -0.3734
    },
    "hasMap": "<?php echo COMPANY_MAPS_URL; ?>",
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "18:00"
    },
    "sameAs": [
      "https://ajath.com",
      "https://twitter.com/ajathinfotech",
      "https://linkedin.com/company/ajathinfotech"
    ]
  }
  </script>
</head>
<body>

  <!-- Sticky Responsive Header -->
  <header class="site-header" id="site-header">
    <div class="container nav-container">
      <!-- Brand Logo -->
      <a href="<?php echo url(''); ?>" class="logo-link" aria-label="Ajath Infotech Home">
        <img src="<?php echo LOGO_URL; ?>" alt="Ajath Infotech Logo" class="logo-img" width="160" height="38">
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="nav-menu-wrapper" aria-label="Main Navigation">
        <ul class="nav-menu">
          <li class="nav-item"><a href="<?php echo url(''); ?>" class="nav-link <?php echo is_active('home'); ?>">Home</a></li>
          <li class="nav-item"><a href="<?php echo url('services'); ?>" class="nav-link <?php echo is_active('services'); ?>">Services</a></li>
          <li class="nav-item"><a href="<?php echo url('ai-solutions'); ?>" class="nav-link <?php echo is_active('ai-solutions'); ?>">AI Solutions</a></li>
          <li class="nav-item"><a href="<?php echo url('work'); ?>" class="nav-link <?php echo is_active('work'); ?>">Our Work</a></li>
          <li class="nav-item"><a href="<?php echo url('about'); ?>" class="nav-link <?php echo is_active('about'); ?>">About</a></li>
          <li class="nav-item"><a href="<?php echo url('contact'); ?>" class="nav-link <?php echo is_active('contact'); ?>">Contact</a></li>
        </ul>
      </nav>

      <!-- Header Action CTA & Mobile Toggle -->
      <div class="nav-cta-wrapper">
        <button type="button" class="btn btn-primary btn-sm nav-cta-btn" data-open-modal="consultation-modal">
          <span>Get a Free Consultation</span>
          <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </button>

        <button type="button" class="nav-mobile-toggle" aria-label="Toggle navigation menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Off-Canvas Drawer -->
  <div class="drawer-backdrop"></div>
  <aside class="mobile-nav-drawer" aria-label="Mobile Navigation">
    <div>
      <div class="drawer-header">
        <img src="<?php echo LOGO_URL; ?>" alt="Ajath Infotech Logo" class="logo-img" style="height: 32px;">
        <button type="button" class="drawer-close-btn" style="background:transparent; border:none; color:#fff; cursor:pointer;" aria-label="Close menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
      </div>
      <ul class="drawer-nav-list">
        <li><a href="<?php echo url(''); ?>" class="<?php echo is_active('home'); ?>">Home</a></li>
        <li><a href="<?php echo url('services'); ?>" class="<?php echo is_active('services'); ?>">Services</a></li>
        <li><a href="<?php echo url('ai-solutions'); ?>" class="<?php echo is_active('ai-solutions'); ?>">AI Solutions</a></li>
        <li><a href="<?php echo url('work'); ?>" class="<?php echo is_active('work'); ?>">Our Work</a></li>
        <li><a href="<?php echo url('about'); ?>" class="<?php echo is_active('about'); ?>">About</a></li>
        <li><a href="<?php echo url('contact'); ?>" class="<?php echo is_active('contact'); ?>">Contact</a></li>
      </ul>
    </div>
    <div style="padding-top: 20px; border-top: 1px solid var(--border-subtle);">
      <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="consultation-modal">
        Get a Free Consultation
      </button>
    </div>
  </aside>
