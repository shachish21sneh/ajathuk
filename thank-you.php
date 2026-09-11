<?php
$pageTitle = "Thank You | Enquiry Received | Ajath Infotech";
$pageDescription = "Thank you for reaching out to Ajath Infotech. We have received your project details and our engineering team will connect with you within 24 hours.";
$pageRobots = "noindex, follow";
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Event snippet for Lead conversion page -->
  <script>
    gtag('event', 'conversion', {
        'send_to': 'AW-18351205284/aSUwCJqD99YcEKTXxK5E',
        'value': 0.0,
        'currency': 'INR',
        'transaction_id': ''
    });
  </script>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 50px); padding-bottom: 100px; text-align: center;">
    <div class="container" style="max-width: 820px;">
      <!-- Glowing Success Icon -->
      <div style="width: 84px; height: 84px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); border: 2px solid #10b981; margin: 0 auto 24px auto; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 35px rgba(16, 185, 129, 0.35);">
        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
      </div>

      <div class="section-badge" style="color: #059669; background: rgba(5, 150, 105, 0.1); border-color: rgba(5, 150, 105, 0.25); margin-bottom: 16px;">
        Enquiry Submitted Successfully
      </div>

      <h1 style="font-size: clamp(2.3rem, 4.5vw, 3.4rem); margin-bottom: 18px; color: var(--text-dark);">
        Thank You for Contacting <span class="text-gradient">Ajath Infotech</span>
      </h1>

      <!-- 24 Hours Prominent Notice -->
      <div style="background: linear-gradient(135deg, rgba(2, 132, 199, 0.08) 0%, rgba(124, 58, 237, 0.08) 100%); border: 1px solid rgba(2, 132, 199, 0.25); border-radius: var(--radius-lg); padding: 24px 28px; margin: 30px auto; max-width: 680px; box-shadow: var(--shadow-md);">
        <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 8px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          <span style="font-size: 1.25rem; font-weight: 800; color: var(--text-dark);">We will connect with you within 24 hours</span>
        </div>
        <p style="font-size: 1rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
          Your enquiry has been dispatched directly to our technical directors. A lead engineer will evaluate your requirements and reach out via email or phone with recommended next steps.
        </p>
      </div>

      <!-- What Happens Next Roadmap -->
      <div class="glass-card" style="padding: 36px 30px; text-align: left; margin: 40px 0; border-radius: var(--radius-xl);">
        <h3 style="font-size: 1.35rem; color: var(--text-dark); margin-bottom: 24px; text-align: center;">What Happens Next?</h3>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
          <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: var(--accent-cyan); line-height: 1;">01</div>
            <h4 style="font-size: 1.05rem; color: var(--text-dark);">Technical Review</h4>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.5;">Our engineering team analyzes your project scope, platform feasibility, and AI agent architectures.</p>
          </div>

          <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: var(--accent-purple); line-height: 1;">02</div>
            <h4 style="font-size: 1.05rem; color: var(--text-dark);">Roadmap & Estimates</h4>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.5;">We outline initial delivery milestones, estimated investment scope, and recommended tech stacks.</p>
          </div>

          <div style="display: flex; flex-direction: column; gap: 10px;">
            <div style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: var(--accent-emerald); line-height: 1;">03</div>
            <h4 style="font-size: 1.05rem; color: var(--text-dark);">Discovery Call</h4>
            <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.5;">We schedule a free 30-minute discovery session with our senior UK engineering lead.</p>
          </div>
        </div>
      </div>

      <!-- Quick Actions -->
      <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; margin-bottom: 30px;">
        <a href="<?php echo url(''); ?>" class="btn btn-primary btn-lg">
          <span>Return to Homepage</span>
          <svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        <a href="<?php echo url('work'); ?>" class="btn btn-secondary btn-lg">
          Explore Our Case Studies
        </a>
        <a href="<?php echo url('services'); ?>" class="btn btn-outline btn-lg">
          Browse Solutions
        </a>
      </div>

      <!-- Direct Contact Line -->
      <div style="font-size: 0.92rem; color: var(--text-muted);">
        Need immediate assistance? Email us at <a href="mailto:info@ajath.uk" style="color:var(--accent-cyan); font-weight:600;">info@ajath.uk</a> or call <a href="tel:+442081234567" style="color:var(--text-dark); font-weight:600;">+44 (0) 20 8123 4567</a>.
      </div>
    </div>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
