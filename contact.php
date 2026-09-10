<?php
$pageTitle = "Contact Ajath Infotech | London UK Software & AI Studio";
$pageDescription = "Contact Ajath Infotech at our United Kingdom headquarters in Northolt, London. Email info@ajath.uk to start your mobile app or AI agent project.";
$pageKeywords = "Contact Ajath Infotech, hire mobile app developers, request software quote, AI consultation London, UK app development contact";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 40px); padding-bottom: 90px;">
    <!-- Subpage Hero -->
    <section style="padding: 40px 0 60px 0; text-align: center;">
      <div class="container">
        <div class="section-badge">Get In Touch</div>
        <h1 style="margin-bottom: 16px;">
          Let's Talk About <span class="text-gradient">Your Project</span>
        </h1>
        <p style="max-width: 680px; margin: 0 auto; font-size: 1.15rem;">
          Whether you're starting a new mobile app, integrating intelligent AI agents, or modernizing an enterprise platform, our UK team is here to help.
        </p>
      </div>
    </section>

    <!-- Main Contact Grid -->
    <section class="container" style="margin-bottom: 80px;">
      <div class="contact-split-grid">
        <!-- Left Column: Details & Google Map -->
        <div class="glass-card contact-info-card">
          <div>
            <span class="service-tag">Direct Inquiries</span>
            <h2 style="font-size: 1.8rem; color: #fff; margin: 6px 0 16px 0;"><?php echo COMPANY_NAME; ?></h2>
            <p>
              We partner with founders, CTOs, and product leaders to design and deliver high-impact digital solutions.
            </p>

            <div class="contact-details-list">
              <div class="contact-detail-row">
                <div class="detail-icon-box">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </div>
                <div class="detail-text">
                  <h4>Email Us</h4>
                  <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                </div>
              </div>

              <div class="contact-detail-row">
                <div class="detail-icon-box">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <div class="detail-text">
                  <h4>Phone Support</h4>
                  <a href="tel:<?php echo COMPANY_PHONE_RAW; ?>"><?php echo COMPANY_PHONE_DISPLAY; ?></a>
                </div>
              </div>

              <div class="contact-detail-row">
                <div class="detail-icon-box">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <div class="detail-text">
                  <h4>United Kingdom Office</h4>
                  <p><?php echo COMPANY_ADDRESS_STREET; ?><br><?php echo COMPANY_ADDRESS_CITY; ?>, <?php echo COMPANY_ADDRESS_POSTCODE; ?>, <?php echo COMPANY_ADDRESS_COUNTRY; ?></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Interactive Google Maps Card (Pages 13-14) -->
          <div>
            <div style="font-size:0.85rem; color:var(--text-muted); margin-bottom: 8px; font-weight:600; display:flex; justify-content:space-between;">
              <span>Interactive Location Map</span>
              <a href="<?php echo COMPANY_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer" style="color:var(--accent-cyan);">Open in Google Maps ↗</a>
            </div>
            <div class="map-embed-container">
              <iframe 
                title="Ajath Infotech UK Office Location"
                src="https://maps.google.com/maps?q=138+Hazelmere+Road,+Northolt,+UB5+6UW,+United+Kingdom&t=&z=15&ie=UTF8&iwloc=&output=embed"
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>

        <!-- Right Column: Interactive Form Card -->
        <div class="hero-form-card" style="padding: 36px 32px;">
          <div class="form-header">
            <div class="section-badge" style="margin-bottom: 6px;">Consultation Request</div>
            <h3>Let's Build Something Amazing</h3>
            <p>Fill out the details below and our lead engineer will get back to you promptly.</p>
          </div>

          <form class="enquiry-form" data-enquiry-form>
            <div class="form-status"></div>
            <div class="form-row-2">
              <div class="form-group">
                <label for="cp-name">Full Name *</label>
                <input type="text" id="cp-name" name="fullName" class="form-input" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <label for="cp-company">Company Name</label>
                <input type="text" id="cp-company" name="companyName" class="form-input" placeholder="Organization / Brand">
              </div>
            </div>

            <div class="form-row-2">
              <div class="form-group">
                <label for="cp-email">Email Address *</label>
                <input type="email" id="cp-email" name="email" class="form-input" placeholder="you@company.co.uk" required>
              </div>
              <div class="form-group">
                <label for="cp-phone">Phone Number</label>
                <input type="tel" id="cp-phone" name="phone" class="form-input" placeholder="+44 ...">
              </div>
            </div>

            <div class="form-group">
              <label for="cp-service">What are you looking for? *</label>
              <select id="cp-service" name="service" class="form-select" required>
                <option value="" disabled selected>Select an option</option>
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
              <label for="cp-message">Tell us about your project</label>
              <textarea id="cp-message" name="message" class="form-textarea" placeholder="Describe your objectives, current tech stack, or target go-live date..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%;">
              Request a Free Consultation
            </button>

            <p class="form-privacy-note">
              "We respect your privacy. Your information will only be used to contact you regarding your enquiry."
            </p>
          </form>
        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="container" style="max-width: 900px;">
      <div class="section-header">
        <div class="section-badge">Client FAQ</div>
        <h2>Frequently Asked Questions</h2>
        <p>Answers to common questions before starting a project with Ajath Infotech.</p>
      </div>

      <div style="display:flex; flex-direction:column; gap: 16px;">
        <div class="glass-card" style="padding: 24px;">
          <h4 style="color:#fff; margin-bottom: 8px;">How quickly can we kick off a new development sprint?</h4>
          <p style="font-size:0.95rem;">Following our initial discovery call and technical scoping workshop, we typically assemble your dedicated engineering squad and start sprint 0 within 5 to 7 business days.</p>
        </div>

        <div class="glass-card" style="padding: 24px;">
          <h4 style="color:#fff; margin-bottom: 8px;">Who owns the Intellectual Property (IP) of the software?</h4>
          <p style="font-size:0.95rem;">You retain 100% full intellectual property ownership and source code rights upon project milestones. All repositories, keys, and deployment assets belong entirely to your company.</p>
        </div>

        <div class="glass-card" style="padding: 24px;">
          <h4 style="color:#fff; margin-bottom: 8px;">Can you integrate AI into our existing legacy software systems?</h4>
          <p style="font-size:0.95rem;">Yes. We specialize in non-disruptive AI integrations, creating microservice API bridges and secure vector search pipelines that enhance your existing databases without requiring a risky total rewrite.</p>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
