<?php
$pageTitle = "Services & Engineering Solutions | Ajath Infotech";
$pageDescription = "Explore Ajath Infotech's full suite of technology solutions: Mobile App Development, AI Integration, AI Agents, Enterprise Web Apps, and Business Process Automation.";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 40px); padding-bottom: 90px;">
    <!-- Subpage Hero -->
    <section style="padding: 40px 0 60px 0; text-align: center;">
      <div class="container">
        <div class="section-badge">Technology Solutions</div>
        <h1 style="margin-bottom: 16px;">
          Scalable Software & <span class="text-gradient">AI Engineering</span>
        </h1>
        <p style="max-width: 700px; margin: 0 auto; font-size: 1.15rem;">
          From high-performance mobile applications to autonomous 24/7 AI agents, we architect and ship digital products designed around your core business objectives.
        </p>
      </div>
    </section>

    <!-- Services Deep Dive Section -->
    <section class="container">
      <div style="display: flex; flex-direction: column; gap: 48px;">
        <?php foreach ($servicesData as $idx => $svc): ?>
          <div class="glass-card <?php echo !empty($svc['highlight']) ? 'highlight-card' : ''; ?>" style="padding: 42px; border-radius: var(--radius-xl);" id="<?php echo htmlspecialchars($svc['id']); ?>">
            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 40px; align-items: center;">
              <div>
                <span class="service-tag"><?php echo htmlspecialchars($svc['tag']); ?></span>
                <h2 style="font-size: 2rem; margin: 8px 0 16px 0; color:#fff;"><?php echo htmlspecialchars($svc['title']); ?></h2>
                <p style="font-size: 1.05rem; line-height: 1.6; margin-bottom: 24px; color: var(--text-secondary);">
                  <?php echo htmlspecialchars($svc['description']); ?>
                </p>

                <div style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700; letter-spacing: 0.05em; margin-bottom: 12px;">
                  Core Deliverables & Capabilities
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 30px;">
                  <?php foreach ($svc['items'] as $item): ?>
                    <div style="display: flex; align-items: center; gap: 8px; font-size: 0.92rem; color: #cbd5e1;">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="color: var(--accent-cyan); flex-shrink: 0;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                      <span><?php echo htmlspecialchars($item); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>

                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                  <button type="button" class="btn btn-primary" data-open-modal="consultation-modal">
                    <span><?php echo htmlspecialchars($svc['cta_text']); ?></span>
                    <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                  </button>
                  <a href="<?php echo url('work'); ?>" class="btn btn-secondary">
                    View Case Studies
                  </a>
                </div>
              </div>

              <!-- Graphic / Architecture Mock -->
              <div style="background: rgba(6, 9, 14, 0.75); border: 1px solid var(--border-glass); border-radius: var(--radius-lg); padding: 32px; display: flex; flex-direction: column; gap: 16px;">
                <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid var(--border-subtle); padding-bottom: 14px;">
                  <span style="font-size: 0.85rem; font-weight: 700; color: #fff;">Architecture Spec</span>
                  <span style="font-size: 0.75rem; color: #10b981; font-weight: 600;">Production Verified</span>
                </div>
                <div style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">
                  Built to scale from day one. Includes enterprise-grade security protocols, end-to-end automated testing, and CI/CD deployment pipelines.
                </div>
                <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 8px;">
                  <span class="p-tag">Multi-Cloud Ready</span>
                  <span class="p-tag">GDPR Compliant</span>
                  <span class="p-tag">REST / GraphQL</span>
                  <span class="p-tag">Zero Downtime</span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Bottom Conversion Strip -->
    <section class="container" style="margin-top: 80px;">
      <div class="cta-banner-box">
        <h2>Ready To Modernize Your Systems?</h2>
        <p>Book a technical scoping call with an Ajath Infotech systems architect today.</p>
        <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
          Start Your Project
        </button>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
