<?php
/**
 * Router script for PHP Built-in Server
 * Handles clean URLs and hides .php extensions locally
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static assets directly if they exist
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    // If user explicitly browses to a .php file, redirect to clean URL
    if (pathinfo($filePath, PATHINFO_EXTENSION) === 'php' && $uri !== '/router.php') {
        $cleanUri = substr($uri, 0, -4);
        header("Location: " . $cleanUri, true, 301);
        exit;
    }
    return false; // Let built-in server handle static asset (CSS, JS, images)
}

// Clean route handling
$cleanSlug = trim($uri, '/');

// Home route
if ($cleanSlug === '' || $cleanSlug === 'index') {
    require __DIR__ . '/index.php';
    exit;
}

// Check if a direct PHP script matches the slug (e.g. /services -> services.php)
$targetScript = __DIR__ . '/' . $cleanSlug . '.php';
if (file_exists($targetScript)) {
    require $targetScript;
    exit;
}

// Check api routes (e.g. /api/enquiry -> api/enquiry.php)
if (strpos($cleanSlug, 'api/') === 0) {
    $apiScript = __DIR__ . '/' . $cleanSlug . '.php';
    if (file_exists($apiScript)) {
        require $apiScript;
        exit;
    }
}

// 404 handler
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo "<h1>404 Page Not Found</h1><p>The requested URL was not found on this server.</p><a href='/'>Return to Home</a>";
}
exit;
