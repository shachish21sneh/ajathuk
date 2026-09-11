<?php
require_once __DIR__ . '/config.php';
?>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand & Vision -->
        <div class="footer-brand">
          <a href="<?php echo url(''); ?>" aria-label="Ajath Infotech">
            <img src="<?php echo LOGO_URL; ?>" alt="Ajath Infotech Logo" class="logo-img" style="height: 38px;">
          </a>
          <p>
            Building modern mobile applications, AI-powered products and intelligent digital solutions for businesses.
          </p>
          <div style="display: flex; gap: 12px; margin-top: 16px;">
            <span class="tech-badge-item">🇬🇧 United Kingdom HQ</span>
            <span class="tech-badge-item">⚡ 24/7 AI Delivery</span>
          </div>
        </div>

        <!-- Navigation Links -->
        <div class="footer-col">
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo url(''); ?>">Home</a></li>
            <li><a href="<?php echo url('services'); ?>">Services</a></li>
            <li><a href="<?php echo url('ai-solutions'); ?>">AI Solutions</a></li>
            <li><a href="<?php echo url('work'); ?>">Our Work</a></li>
            <li><a href="<?php echo url('about'); ?>">About Us</a></li>
            <li><a href="<?php echo url('contact'); ?>">Contact</a></li>
          </ul>
        </div>

        <!-- Services Links -->
        <div class="footer-col">
          <h4 class="footer-col-title">Services</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo url('services#mobile'); ?>">Mobile App Development</a></li>
            <li><a href="<?php echo url('ai-solutions#apps'); ?>">AI Applications</a></li>
            <li><a href="<?php echo url('ai-solutions#agents'); ?>">AI Agents</a></li>
            <li><a href="<?php echo url('services#web'); ?>">Web Development</a></li>
            <li><a href="<?php echo url('services#automation'); ?>">Business Automation</a></li>
            <li><a href="<?php echo url('services#custom'); ?>">Custom Software</a></li>
          </ul>
        </div>

        <!-- Contact & Global Offices -->
        <div class="footer-col">
          <h4 class="footer-col-title">Contact & Offices</h4>
          <ul class="footer-links-list">
            <li>
              <span style="color:var(--text-muted); display:block; font-size:0.8rem;">UK & Global Email</span>
              <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color:var(--text-dark); font-weight:600;"><?php echo COMPANY_EMAIL; ?></a>
            </li>
            <li>
              <span style="color:var(--text-muted); display:block; font-size:0.8rem;">Phone Line</span>
              <a href="tel:<?php echo COMPANY_PHONE_RAW; ?>" style="color:var(--text-dark); font-weight:600;"><?php echo COMPANY_PHONE_DISPLAY; ?></a>
            </li>
            <li>
              <span style="color:var(--text-muted); display:block; font-size:0.8rem;">WhatsApp</span>
              <a href="<?php echo COMPANY_WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" style="color:#059669; font-weight:700; display:inline-flex; align-items:center; gap:6px;">
                <span>Chat on WhatsApp</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
              </a>
            </li>
            <li>
              <span style="color:var(--text-muted); display:block; font-size:0.8rem;">Locations</span>
              <div style="display:flex; flex-wrap:wrap; gap:6px; margin-top:4px;">
                <span class="p-tag">🇬🇧 UK HQ</span>
                <span class="p-tag">🇺🇸 USA</span>
                <span class="p-tag">🇦🇪 Dubai</span>
                <span class="p-tag">🇮🇳 India</span>
              </div>
            </li>
            <li style="margin-top: 6px;">
              <a href="<?php echo COMPANY_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer" style="color:var(--accent-cyan); display:inline-flex; align-items:center; gap:6px;">
                <span>View UK HQ on Maps</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                  <polyline points="15 3 21 3 21 9"></polyline>
                  <line x1="10" y1="14" x2="21" y2="3"></line>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom-bar">
        <div>
          © 2026 <?php echo COMPANY_NAME; ?>. All Rights Reserved.
        </div>
        <div class="footer-legal-links">
          <a href="#" data-open-modal="privacy-modal">Privacy Policy</a>
          <span>•</span>
          <a href="#" data-open-modal="terms-modal">Terms & Conditions</a>
          <span>•</span>
          <a href="#" data-open-modal="cookies-modal">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Mobile Sticky Bottom CTA Bar (Page 17 specification) -->
  <div class="mobile-sticky-cta-bar">
    <div style="display:flex; flex-direction:column;">
      <span style="font-size:0.75rem; color:var(--accent-cyan); font-weight:700; text-transform:uppercase;">UK AI & App Agency</span>
      <span style="font-size:0.88rem; font-weight:700; color:var(--text-dark);">Let's Talk</span>
    </div>
    <button type="button" class="btn btn-primary btn-sm" data-open-modal="consultation-modal">
      Start Your Project
    </button>
  </div>

  <!-- Modal 1: Get a Free Consultation / Start Your Project -->
  <div class="modal-backdrop" id="consultation-modal" role="dialog" aria-modal="true" aria-labelledby="modal-consult-title">
    <div class="modal-dialog">
      <button type="button" class="modal-close-btn" aria-label="Close modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      
      <div class="form-header">
        <div class="section-badge" style="margin-bottom: 8px;">Let's Connect</div>
        <h3 id="modal-consult-title">Start Your Project</h3>
        <p>Tell us about your mobile app, AI system, or custom software requirements.</p>
      </div>

      <form class="enquiry-form" data-enquiry-form>
        <div class="form-status"></div>
        <div class="form-row-2">
          <div class="form-group">
            <label for="m-name">Full Name *</label>
            <input type="text" id="m-name" name="fullName" class="form-input" placeholder="e.g. David Smith" required>
          </div>
          <div class="form-group">
            <label for="m-company">Company Name</label>
            <input type="text" id="m-company" name="companyName" class="form-input" placeholder="e.g. Acme Tech Ltd">
          </div>
        </div>

        <div class="form-row-2">
          <div class="form-group">
            <label for="m-email">Email Address *</label>
            <input type="email" id="m-email" name="email" class="form-input" placeholder="name@company.co.uk" required>
          </div>
          <div class="form-group">
            <label for="m-phone">Phone Number</label>
            <input type="tel" id="m-phone" name="phone" class="form-input" placeholder="+44 7123 456789">
          </div>
        </div>

        <div class="form-group">
          <label for="m-service">What are you looking for? *</label>
          <select id="m-service" name="service" class="form-select" required>
            <option value="" disabled selected>Select a solution area</option>
            <option value="Mobile App Development">Mobile App Development</option>
            <option value="AI Integrated App">AI Integrated App</option>
            <option value="AI Agent">AI Agent</option>
            <option value="Web Application">Web Application</option>
            <option value="Business Automation">Business Automation</option>
            <option value="Custom Software">Custom Software</option>
            <option value="Other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="m-message">Tell us about your project</label>
          <textarea id="m-message" name="message" class="form-textarea" placeholder="Briefly describe your objectives, target timeline, or tech preferences..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%;">
          Request a Free Consultation
        </button>

        <p class="form-privacy-note">
          We respect your privacy. Your information will only be used to contact you regarding your enquiry.
        </p>
      </form>
    </div>
  </div>

  <!-- Modal 2: Project Case Study Detail -->
  <div class="modal-backdrop" id="project-detail-modal" role="dialog" aria-modal="true" aria-labelledby="modal-project-title">
    <div class="modal-dialog">
      <button type="button" class="modal-close-btn" aria-label="Close modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>

      <div style="margin-bottom: 20px;">
        <span class="agent-badge-pill" id="modal-project-client" style="margin-bottom:8px;">Enterprise Case Study</span>
        <h3 id="modal-project-title" style="margin-top: 6px; font-size: 1.6rem; color: var(--text-dark);">Project Details</h3>
      </div>

      <img id="modal-project-img" src="" alt="Case Study Preview" style="width: 100%; height: 210px; object-fit: cover; border-radius: var(--radius-md); margin-bottom: 18px; border: 1px solid var(--border-subtle);">

      <p id="modal-project-desc" style="font-size: 0.98rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 18px;"></p>

      <!-- Deep Dive Blocks -->
      <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 20px; background: #f8fafc; border: 1px solid var(--border-subtle); border-radius: var(--radius-md); padding: 18px;">
        <div id="modal-project-problem-wrap">
          <div style="font-size: 0.75rem; text-transform: uppercase; color: #dc2626; font-weight: 700; letter-spacing: 0.05em; margin-bottom: 4px;">The Challenge</div>
          <p id="modal-project-problem" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.55; margin: 0;"></p>
        </div>
        <div id="modal-project-solution-wrap">
          <div style="font-size: 0.75rem; text-transform: uppercase; color: var(--accent-cyan); font-weight: 700; letter-spacing: 0.05em; margin-bottom: 4px;">The Engineering Solution</div>
          <p id="modal-project-solution" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.55; margin: 0;"></p>
        </div>
        <div id="modal-project-impact-wrap">
          <div style="font-size: 0.75rem; text-transform: uppercase; color: #059669; font-weight: 700; letter-spacing: 0.05em; margin-bottom: 4px;">Measurable Outcome</div>
          <p id="modal-project-impact" style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.55; margin: 0;"></p>
        </div>
      </div>

      <div style="background: rgba(2, 132, 199, 0.06); border: 1px solid rgba(2, 132, 199, 0.2); border-radius: var(--radius-md); padding: 16px; margin-bottom: 20px;">
        <div style="font-size: 0.75rem; text-transform: uppercase; color: var(--accent-cyan); font-weight: 700; letter-spacing: 0.05em; margin-bottom: 4px;">Delivered Impact & Metrics</div>
        <div id="modal-project-metrics" style="font-size: 1.05rem; font-weight: 700; color: var(--text-dark);"></div>
      </div>

      <div style="margin-bottom: 24px;">
        <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; margin-bottom: 10px;">Technologies Deployed</div>
        <div id="modal-project-tags" style="display: flex; flex-wrap: wrap; gap: 8px;"></div>
      </div>

      <div style="display: flex; gap: 14px;">
        <button type="button" class="btn btn-primary" style="flex: 1;" data-open-modal="consultation-modal" data-close-modal>
          Build Similar Product
        </button>
        <button type="button" class="btn btn-secondary" data-close-modal>
          Close
        </button>
      </div>
    </div>
  </div>

  <!-- Modal 3: Privacy Policy -->
  <div class="modal-backdrop" id="privacy-modal" role="dialog" aria-modal="true" aria-labelledby="privacy-modal-title">
    <div class="modal-dialog">
      <button type="button" class="modal-close-btn" aria-label="Close modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <h3 id="privacy-modal-title" style="margin-bottom: 16px;">Privacy Policy</h3>
      <div style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.6; display: flex; flex-direction: column; gap: 14px;">
        <p>At <strong>Ajath Infotech</strong>, registered in the United Kingdom, we are committed to protecting and respecting your privacy in full compliance with the UK General Data Protection Regulation (UK GDPR) and Data Protection Act 2018.</p>
        <p><strong>Information We Collect:</strong> When you submit an enquiry, request a consultation, or interact with our digital workforce simulations, we may collect your name, email address, company name, phone number, and project specifications.</p>
        <p><strong>How We Use Your Data:</strong> We exclusively use your information to respond to your direct queries, schedule discovery sessions, and evaluate software architecture suitability. We never sell or share your data with third-party advertisers.</p>
        <p><strong>Contact Data Controller:</strong> For inquiries regarding your personal information, reach out to our privacy officer at <a href="mailto:info@ajath.uk">info@ajath.uk</a>.</p>
      </div>
    </div>
  </div>

  <!-- Modal 4: Terms & Conditions -->
  <div class="modal-backdrop" id="terms-modal" role="dialog" aria-modal="true" aria-labelledby="terms-modal-title">
    <div class="modal-dialog">
      <button type="button" class="modal-close-btn" aria-label="Close modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <h3 id="terms-modal-title" style="margin-bottom: 16px;">Terms & Conditions</h3>
      <div style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.6; display: flex; flex-direction: column; gap: 14px;">
        <p>These terms govern the use of the Ajath Infotech website and preliminary consultancy discovery engagements.</p>
        <p><strong>Intellectual Property:</strong> All software engineering concepts, AI agent architecture models, proprietary visual mockups, and codebase structures produced by Ajath Infotech remain protected under UK and international copyright laws.</p>
        <p><strong>Client Project Agreements:</strong> Individual mobile application, AI agent, and custom web software contracts are subject to mutually executed Master Services Agreements (MSAs) and Statements of Work (SOWs).</p>
      </div>
    </div>
  </div>

  <!-- Modal 5: Cookie Policy -->
  <div class="modal-backdrop" id="cookies-modal" role="dialog" aria-modal="true" aria-labelledby="cookies-modal-title">
    <div class="modal-dialog">
      <button type="button" class="modal-close-btn" aria-label="Close modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
      <h3 id="cookies-modal-title" style="margin-bottom: 16px;">Cookie Policy</h3>
      <div style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.6; display: flex; flex-direction: column; gap: 14px;">
        <p>Ajath Infotech utilizes strictly necessary session cookies to maintain security, session state during form submissions, and user interface preferences.</p>
        <p>We prioritize minimal tracking to safeguard your privacy and ensure lightning-fast Core Web Vitals performance across all modern web browsers.</p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="/assets/js/workflow.js"></script>
  <script src="/assets/js/main.js"></script>
</body>
</html>
