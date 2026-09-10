<?php
$pageTitle = "404 Page Not Found | Ajath Infotech";
$pageDescription = "The page you are looking for does not exist on Ajath Infotech. Return to our homepage or explore our services.";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 60px); padding-bottom: 120px; text-align: center;">
    <div class="container" style="max-width: 680px;">
      <div class="section-badge" style="margin-bottom: 20px;">Error 404</div>
      <h1 style="font-size: clamp(3rem, 7vw, 6rem); margin-bottom: 12px;" class="text-gradient">404</h1>
      <h2 style="font-size: 2rem; margin-bottom: 18px; color: #fff;">Page Not Found</h2>
      <p style="font-size: 1.15rem; margin-bottom: 36px; color: var(--text-secondary);">
        The page or URL you requested could not be located on our servers. It may have been moved, renamed, or temporarily unavailable.
      </p>
      <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
        <a href="<?php echo url(''); ?>" class="btn btn-primary btn-lg">
          Return to Homepage
        </a>
        <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
          Contact Support
        </a>
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
