<?php
$pageTitle = "About Ajath Infotech | UK AI & Mobile App Agency";
$pageDescription = "Learn about Ajath Infotech, a premier UK technology agency headquartered in Northolt, London, specializing in cutting-edge mobile apps and AI agents.";
$pageKeywords = "About Ajath Infotech, UK mobile app company, London software agency, AI development agency, Northolt London tech firm";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 40px); padding-bottom: 90px;">
    <!-- Subpage Hero -->
    <section style="padding: 40px 0 60px 0; text-align: center;">
      <div class="container">
        <div class="section-badge">Company Profile</div>
        <h1 style="margin-bottom: 16px;">
          Engineering The Future of <span class="text-gradient">Mobile & AI</span>
        </h1>
        <p style="max-width: 720px; margin: 0 auto; font-size: 1.15rem;">
          Ajath Infotech is an established UK technology engineering firm specializing in modern mobile applications, AI-powered products, and autonomous digital workforces.
        </p>
      </div>
    </section>

    <!-- Company Story & Mission -->
    <section class="container" style="margin-bottom: 80px;">
      <div class="glass-card" style="padding: 48px; border-radius: var(--radius-xl);">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;">
          <div>
            <span class="service-tag">Our Philosophy</span>
            <h2 style="font-size: 2.2rem; color: var(--text-dark); margin: 8px 0 20px 0;">
              High-Velocity Software With AI-First Thinking
            </h2>
            <p style="margin-bottom: 18px; line-height: 1.7;">
              At Ajath Infotech, we believe software is fundamentally shifting. Applications are evolving from static databases with user interfaces into intelligent, proactive systems powered by autonomous AI models.
            </p>
            <p style="margin-bottom: 24px; line-height: 1.7;">
              Headquartered in Northolt, Greater London, our dedicated squads partner with innovative startups, scale-ups, and established enterprises across the UK and internationally to turn complex business logic into intuitive, scalable digital products.
            </p>
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
              <div>
                <div style="font-size: 2rem; font-weight: 800; color: var(--accent-cyan);">99.8%</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">Delivery Success</div>
              </div>
              <div>
                <div style="font-size: 2rem; font-weight: 800; color: var(--accent-purple);">50+</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">Apps Shipped</div>
              </div>
              <div>
                <div style="font-size: 2rem; font-weight: 800; color: var(--accent-emerald);">24/7</div>
                <div style="font-size: 0.85rem; color: var(--text-muted);">AI Agent Uptime</div>
              </div>
            </div>
          </div>

          <div style="background: #f8fafc; border: 1px solid var(--border-subtle); border-radius: var(--radius-lg); padding: 36px; display: flex; flex-direction: column; gap: 20px;">
            <div style="font-size: 1.2rem; font-weight: 700; color: var(--text-dark);">Our Core Guiding Principles</div>
            
            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(2,132,199,0.1); color: var(--accent-cyan); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">1</div>
              <div>
                <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 4px;">Business-Focused Development</div>
                <div style="font-size: 0.9rem; color: var(--text-secondary);">We align technology architecture directly with your commercial KPIs and conversion metrics.</div>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(124,58,237,0.1); color: var(--accent-purple); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">2</div>
              <div>
                <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 4px;">Zero Generic Templates</div>
                <div style="font-size: 0.9rem; color: var(--text-secondary);">Every line of code and UI component is bespoke, robust, and designed specifically for your brand.</div>
              </div>
            </div>

            <div style="display: flex; gap: 14px; align-items: flex-start;">
              <div style="width: 36px; height: 36px; border-radius: 50%; background: rgba(5,150,105,0.1); color: var(--accent-emerald); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">3</div>
              <div>
                <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 4px;">Long-Term Partnership</div>
                <div style="font-size: 0.9rem; color: var(--text-secondary);">We provide proactive scaling, security audits, and continuous AI capability upgrades post-launch.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Us Grid In About -->
    <section class="container" style="margin-bottom: 80px;">
      <div class="section-header">
        <div class="section-badge">Why Ajath</div>
        <h2>Why UK & International Leaders Trust Us</h2>
        <p>Combining rigorous British engineering compliance with Silicon Valley speed.</p>
      </div>

      <div class="why-grid">
        <?php foreach ($whyChooseUs as $why): ?>
          <div class="glass-card why-card">
            <div class="why-icon-wrap">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
            </div>
            <h3><?php echo htmlspecialchars($why['title']); ?></h3>
            <p><?php echo htmlspecialchars($why['description']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Bottom CTA -->
    <section class="container">
      <div class="cta-banner-box">
        <h2>Let's Discuss Your Digital Vision</h2>
        <p>Schedule an introductory conversation with our managing technical director.</p>
        <div class="cta-btn-group">
          <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
            Get a Free Consultation
          </button>
          <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
            Visit Our Northolt Office
          </a>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
