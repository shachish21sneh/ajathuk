<?php
$pageTitle = "Mobile App Development Company | Ajath Infotech";
$pageDescription = "Ajath Infotech builds powerful mobile applications, AI-integrated apps, AI agents, web applications and custom software solutions for modern businesses.";
$pageKeywords = "Mobile app development, Custom mobile app development, Mobile app developers, iOS app development, Android app development, AI app development, AI agents, Flutter development, React Native, UK software agency";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- =====================================================================
         1. HERO / TOP BANNER & HERO ENQUIRY FORM
         ===================================================================== -->
    <section class="hero-section">
      <div class="hero-glow-1"></div>
      <div class="hero-glow-2"></div>
      <div class="container">
        <div class="hero-grid">
          <!-- Left: Hero Headline + Description + CTAs + Trust Tech Badges -->
          <div class="hero-content">
            <div class="hero-badge-pill">
              <span class="pulse-dot"></span>
              <span>Next-Generation AI & Mobile App Engineering</span>
            </div>

            <h1 class="hero-title">
              Build Smarter Apps.<br>
              <span class="text-gradient">Power Your Business With AI.</span>
            </h1>

            <p class="hero-subtitle">
              Mobile apps, AI-powered applications and intelligent AI agents built to transform the way your business works.
            </p>

            <p class="hero-desc">
              Ajath Infotech helps businesses turn ideas into powerful mobile applications, AI-integrated products and intelligent automation solutions.
            </p>

            <div class="hero-actions">
              <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
                <span>Start Your Project</span>
                <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </button>
              <a href="#work" class="btn btn-secondary btn-lg">
                View Our Work
              </a>
            </div>

            <!-- Small trust / technology labels -->
            <div class="hero-tech-trust">
              <div class="hero-trust-label">Core Tech Stacks & Ecosystems</div>
              <div class="hero-tech-badges">
                <span class="tech-badge-item">🤖 Android</span>
                <span class="tech-badge-item">🍎 iOS</span>
                <span class="tech-badge-item">💙 Flutter</span>
                <span class="tech-badge-item">⚛️ React Native</span>
                <span class="tech-badge-item">🔺 Laravel</span>
                <span class="tech-badge-item">🧠 AI</span>
                <span class="tech-badge-item">✨ OpenAI</span>
                <span class="tech-badge-item">🔌 APIs</span>
              </div>
            </div>
          </div>

          <!-- Right: Premium Enquiry / Contact Form Card (Page 4) -->
          <div class="hero-form-wrapper">
            <div class="hero-form-card">
              <div class="form-header">
                <div class="section-badge" style="margin-bottom: 6px;">Instant Enquiry</div>
                <h3>Let's Build Something Amazing</h3>
                <p>Discuss your app idea or AI roadmap with our senior engineers.</p>
              </div>

              <form class="enquiry-form" data-enquiry-form>
                <div class="form-status"></div>
                <div class="form-row-2">
                  <div class="form-group">
                    <label for="h-name">Full Name *</label>
                    <input type="text" id="h-name" name="fullName" class="form-input" placeholder="e.g. Alex Morgan" required>
                  </div>
                  <div class="form-group">
                    <label for="h-company">Company Name</label>
                    <input type="text" id="h-company" name="companyName" class="form-input" placeholder="e.g. Nexus Tech">
                  </div>
                </div>

                <div class="form-row-2">
                  <div class="form-group">
                    <label for="h-email">Email Address *</label>
                    <input type="email" id="h-email" name="email" class="form-input" placeholder="name@company.co.uk" required>
                  </div>
                  <div class="form-group">
                    <label for="h-phone">Phone Number</label>
                    <input type="tel" id="h-phone" name="phone" class="form-input" placeholder="+44 7911 123456">
                  </div>
                </div>

                <div class="form-group">
                  <label for="h-service">What are you looking for? *</label>
                  <select id="h-service" name="service" class="form-select" required>
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
                  <label for="h-message">Tell us about your project</label>
                  <textarea id="h-message" name="message" class="form-textarea" placeholder="Tell us about your objectives, budget scope, or timeline..."></textarea>
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
        </div>
      </div>
    </section>

    <!-- =====================================================================
         STATS & CREDIBILITY STRIP
         ===================================================================== -->
    <div class="stats-ribbon">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-number text-gradient">99.8%</div>
            <div class="stat-label">On-Time Project Delivery</div>
          </div>
          <div class="stat-item">
            <div class="stat-number text-gradient">50+</div>
            <div class="stat-label">Mobile & AI Products Shipped</div>
          </div>
          <div class="stat-item">
            <div class="stat-number text-gradient">24/7</div>
            <div class="stat-label">Autonomous AI Agent Uptime</div>
          </div>
          <div class="stat-item">
            <div class="stat-number text-gradient">100%</div>
            <div class="stat-label">UK & Global Client Satisfaction</div>
          </div>
        </div>
      </div>
    </div>

    <!-- =====================================================================
         2. SERVICES SECTION (Pages 5-7)
         ===================================================================== -->
    <section class="services-section" id="services">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Core Capabilities</div>
          <h2>Technology Solutions Built For Your Business</h2>
          <p>
            "From mobile applications to intelligent AI agents, we build scalable digital products designed around your business goals."
          </p>
        </div>

        <div class="services-grid">
          <?php foreach ($servicesData as $svc): ?>
            <div class="glass-card service-card <?php echo !empty($svc['highlight']) ? 'highlight-card' : ''; ?>" id="<?php echo htmlspecialchars($svc['id']); ?>">
              <div class="service-header">
                <div class="service-icon-box">
                  <?php if ($svc['icon'] === 'smartphone'): ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                  <?php elseif ($svc['icon'] === 'cpu'): ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                  <?php elseif ($svc['icon'] === 'bot'): ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"></rect><circle cx="12" cy="5" r="2"></circle><path d="M12 7v4"></path><line x1="8" y1="16" x2="8.01" y2="16"></line><line x1="16" y1="16" x2="16.01" y2="16"></line></svg>
                  <?php elseif ($svc['icon'] === 'layout'): ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                  <?php elseif ($svc['icon'] === 'zap'): ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                  <?php else: ?>
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                  <?php endif; ?>
                </div>
                <div class="service-tag"><?php echo htmlspecialchars($svc['tag']); ?></div>
                <h3 class="service-title"><?php echo htmlspecialchars($svc['title']); ?></h3>
                <p class="service-desc"><?php echo htmlspecialchars($svc['description']); ?></p>
              </div>

              <ul class="service-list">
                <?php foreach ($svc['items'] as $item): ?>
                  <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span><?php echo htmlspecialchars($item); ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>

              <div class="service-footer">
                <a href="<?php echo htmlspecialchars($svc['cta_link']); ?>" class="btn <?php echo !empty($svc['highlight']) ? 'btn-primary' : 'btn-outline'; ?>" style="width: 100%;">
                  <span><?php echo htmlspecialchars($svc['cta_text']); ?></span>
                  <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         3. DEDICATED AI SECTION (Page 8)
         ===================================================================== -->
    <section class="ai-showcase-section" id="ai-section">
      <div class="container">
        <div class="section-header">
          <div class="section-badge ai-badge">Artificial Intelligence Architecture</div>
          <h2>Your Next Digital Product Should Be AI-Powered</h2>
          <p>
            "AI is no longer just a feature. It can become the intelligence behind your entire application."
          </p>
        </div>

        <!-- Interactive Visual Workflow Component (User -> AI -> Business Logic -> APIs -> DB -> Action) -->
        <div class="workflow-container">
          <div class="workflow-header">
            <h3 style="font-size: 1.4rem; color: var(--text-dark); margin-bottom: 6px;">Enterprise AI Execution Pipeline</h3>
            <p style="font-size: 0.92rem; color: var(--text-secondary);">Click each step to inspect the real-time processing layer</p>
          </div>

          <div class="workflow-steps-track">
            <div class="workflow-step-node active" data-step="0">
              <div class="node-badge">01</div>
              <div class="node-title">User</div>
              <div class="node-subtitle">Trigger / Intent</div>
            </div>
            <div class="workflow-connector"></div>

            <div class="workflow-step-node" data-step="1">
              <div class="node-badge">02</div>
              <div class="node-title">AI Engine</div>
              <div class="node-subtitle">LLM Reasoning</div>
            </div>
            <div class="workflow-connector"></div>

            <div class="workflow-step-node" data-step="2">
              <div class="node-badge">03</div>
              <div class="node-title">Business Logic</div>
              <div class="node-subtitle">Security & Rules</div>
            </div>
            <div class="workflow-connector"></div>

            <div class="workflow-step-node" data-step="3">
              <div class="node-badge">04</div>
              <div class="node-title">APIs</div>
              <div class="node-subtitle">Tool Integrations</div>
            </div>
            <div class="workflow-connector"></div>

            <div class="workflow-step-node" data-step="4">
              <div class="node-badge">05</div>
              <div class="node-title">Database</div>
              <div class="node-subtitle">Vector & State</div>
            </div>
            <div class="workflow-connector"></div>

            <div class="workflow-step-node" data-step="5">
              <div class="node-badge">06</div>
              <div class="node-title">Action</div>
              <div class="node-subtitle">Output Executed</div>
            </div>
          </div>

          <!-- Dynamic Step Inspector Panel -->
          <div class="workflow-inspector">
            <div class="inspector-text">
              <div class="inspector-title" id="inspector-step-title">User Input & Context</div>
              <div class="inspector-desc" id="inspector-step-desc">
                User interacts via Mobile App, Web Portal, Voice or Messaging channels. Multimodal inputs and session context are captured in real-time.
              </div>
            </div>
            <button type="button" class="btn btn-outline btn-sm" data-open-modal="consultation-modal">
              Design My AI Workflow
            </button>
          </div>
        </div>

        <!-- AI Capabilities 8-Grid (Page 8) -->
        <div style="text-align:center; margin-top:50px;">
          <h3 style="font-size: 1.5rem; margin-bottom: 8px;">AI Capabilities We Build & Integrate</h3>
          <p style="font-size: 0.95rem; color: var(--text-secondary);">Production-ready machine intelligence customized for your domain</p>
        </div>

        <div class="ai-examples-grid">
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">💬</div>
            <h4>AI Customer Support</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">📈</div>
            <h4>AI Sales Assistant</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">📅</div>
            <h4>AI Booking Assistant</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">🎯</div>
            <h4>AI Recommendation Engine</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">📄</div>
            <h4>AI Document Processing</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">⚡</div>
            <h4>AI Business Automation</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">🎙️</div>
            <h4>AI Voice Assistant</h4>
          </div>
          <div class="glass-card ai-example-card">
            <div class="ai-example-icon">🔍</div>
            <h4>AI-Powered Search</h4>
          </div>
        </div>

        <div style="text-align: center; margin-top: 48px;">
          <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
            <span>Talk To Our AI Team</span>
            <svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         4. AI AGENTS FEATURE SECTION (Pages 8-9)
         ===================================================================== -->
    <section class="ai-agents-section" id="ai-agents">
      <div class="container">
        <div class="section-header">
          <div class="section-badge ai-badge">Autonomous Digital Workforce</div>
          <h2>Meet Your Digital Workforce</h2>
          <p>
            "AI agents can handle repetitive tasks, interact with customers and systems, analyse information and execute workflows — 24/7."
          </p>
        </div>

        <!-- 6 Visual Agent Cards (Pages 8-9) -->
        <div class="agents-grid">
          <?php foreach ($aiAgentsData as $idx => $agent): ?>
            <div class="glass-card agent-card <?php echo $idx === 0 ? 'selected-agent' : ''; ?>"
                 data-agent-title="<?php echo htmlspecialchars($agent['title']); ?>"
                 data-agent-badge="<?php echo htmlspecialchars($agent['badge']); ?>"
                 data-agent-prompt="<?php echo htmlspecialchars($agent['sample_prompt']); ?>"
                 data-agent-response="<?php echo htmlspecialchars($agent['sample_response']); ?>">
              <div class="agent-header">
                <span class="agent-badge-pill"><?php echo htmlspecialchars($agent['badge']); ?></span>
                <h3 class="agent-title"><?php echo htmlspecialchars($agent['title']); ?></h3>
                <p class="agent-desc"><?php echo htmlspecialchars($agent['description']); ?></p>
                <div class="agent-metrics-tag">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                  <span><?php echo htmlspecialchars($agent['metrics']); ?></span>
                </div>
              </div>

              <div style="border-top: 1px solid var(--border-subtle); padding-top: 14px;">
                <span style="font-size: 0.8rem; color: var(--accent-cyan); font-weight: 600; display:flex; align-items:center; gap:6px;">
                  <span>Click to test simulation</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Interactive AI Agent Live Sandbox Simulator -->
        <div class="agent-sandbox-wrapper">
          <div class="sandbox-header">
            <div>
              <span style="font-size:0.75rem; color:#c084fc; text-transform:uppercase; font-weight:700; letter-spacing:0.06em;">Live Agent Sandbox</span>
              <h3 id="sandbox-agent-title" style="font-size:1.4rem; margin-top:2px;">Customer Support Agent</h3>
            </div>
            <div class="agent-badge-pill" id="sandbox-agent-badge" style="margin-bottom:0;">Instant 24/7 Resolution</div>
          </div>

          <div class="sandbox-chat-box" id="sandbox-chat-box">
            <div class="chat-bubble user">
              <div style="font-size:0.75rem; color: #94a3b8; margin-bottom: 4px; font-weight: 600;">Customer / User Input</div>
              “How do I upgrade my team plan and invite 5 new engineers?”
            </div>
            <div class="chat-bubble agent">
              <div style="font-size:0.75rem; color: #00f0ff; margin-bottom: 4px; font-weight: 600;">
                <span style="display:inline-block; width:6px; height:6px; border-radius:50%; background:#00f0ff; margin-right:4px;"></span>
                Customer Support Agent (Active Agent)
              </div>
              “You can upgrade directly in Billing Settings. I have generated an upgrade preview link and staged 5 team invites for you!”
            </div>
          </div>

          <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 14px;">
            <span style="font-size: 0.85rem; color: var(--text-muted);">
              ⚡ Powered by low-latency inference with custom business knowledge grounding
            </span>
            <button type="button" class="btn btn-primary btn-sm" data-open-modal="consultation-modal">
              Build Your AI Agent
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         5. OUR WORK / PORTFOLIO (Pages 9-10)
         ===================================================================== -->
    <section class="portfolio-section" id="work">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Client Success & Case Studies</div>
          <h2>Our Work</h2>
          <p>
            "Real-world digital solutions designed to solve real business problems."
          </p>
        </div>

        <!-- Filtering Buttons (Page 10) -->
        <div class="portfolio-filter-bar">
          <button type="button" class="filter-btn active" data-filter="all">All</button>
          <button type="button" class="filter-btn" data-filter="mobile">Mobile Apps</button>
          <button type="button" class="filter-btn" data-filter="ai">AI</button>
          <button type="button" class="filter-btn" data-filter="ai-agents">AI Agents</button>
          <button type="button" class="filter-btn" data-filter="web-apps">Web Apps</button>
          <button type="button" class="filter-btn" data-filter="automation">Automation</button>
        </div>

        <!-- Project Cards Grid -->
        <div class="portfolio-grid">
          <?php foreach ($portfolioProjects as $project): ?>
            <div class="glass-card project-card" data-category="<?php echo htmlspecialchars($project['category']); ?>">
              <div class="project-preview">
                <span class="project-badge-float"><?php echo htmlspecialchars($project['category_label']); ?></span>
                <img src="<?php echo htmlspecialchars($project['image']); ?>" 
                     alt="<?php echo htmlspecialchars($project['name']); ?>" 
                     class="project-preview-img" 
                     loading="lazy" 
                     width="600" 
                     height="338">
                <div class="project-preview-overlay"></div>
              </div>

              <div class="project-body">
                <h3 class="project-title"><?php echo htmlspecialchars($project['name']); ?></h3>
                <p class="project-summary"><?php echo htmlspecialchars($project['summary']); ?></p>

                <div class="project-metrics">
                  ⚡ <?php echo htmlspecialchars($project['metrics']); ?>
                </div>

                <div class="project-tags">
                  <?php foreach ($project['tags'] as $tag): ?>
                    <span class="p-tag"><?php echo htmlspecialchars($tag); ?></span>
                  <?php endforeach; ?>
                </div>

                <button type="button" 
                        class="btn btn-outline btn-sm" 
                        style="width: 100%;"
                        data-project-details
                        data-title="<?php echo htmlspecialchars($project['name']); ?>"
                        data-client="<?php echo htmlspecialchars($project['client']); ?>"
                        data-desc="<?php echo htmlspecialchars($project['summary']); ?>"
                        data-image="<?php echo htmlspecialchars($project['image']); ?>"
                        data-problem="<?php echo htmlspecialchars($project['problem'] ?? ''); ?>"
                        data-solution="<?php echo htmlspecialchars($project['solution'] ?? ''); ?>"
                        data-impact="<?php echo htmlspecialchars($project['impact'] ?? ''); ?>"
                        data-tags="<?php echo htmlspecialchars(implode(', ', $project['tags'])); ?>"
                        data-metrics="<?php echo htmlspecialchars($project['metrics']); ?>">
                  <span>View Case Study</span>
                  <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         6. MOBILE APP SHOWCASE (Pages 10-11)
         ===================================================================== -->
    <section class="mobile-showcase-section" id="mobile-showcase">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Native & Cross-Platform</div>
          <h2>From Idea To App Store</h2>
          <p>
            High-converting smartphone experiences engineered with Flutter, React Native, Swift and Kotlin.
          </p>
        </div>

        <!-- 3-5 Smartphone Mockups with Realistic Application Screens -->
        <div class="phone-mockups-carousel">
          <!-- Phone 1: Wheely Luxury Mobility -->
          <div class="phone-device-wrapper">
            <div class="phone-frame">
              <div class="phone-island"></div>
              <div class="phone-screen">
                <div class="mock-app-header">
                  <div style="font-weight:700; font-size:0.85rem; color:#fff;">Wheely Chauffeur</div>
                  <div style="width:8px; height:8px; border-radius:50%; background:#d4af37;"></div>
                </div>
                <div class="mock-app-body">
                  <div class="mock-card" style="background: linear-gradient(135deg, rgba(212,175,55,0.18), rgba(0,0,0,0.5)); border-color: rgba(212,175,55,0.4);">
                    <div style="font-size:0.75rem; color:#fef08a; font-weight:600;">Executive Ride Active</div>
                    <div style="font-size:1.3rem; font-weight:800; color:#fff;">Mayfair, London W1</div>
                    <div style="font-size:0.72rem; color:#94a3b8;">Mercedes E-Class • Chauffeur Arthur</div>
                  </div>
                  <div class="mock-card">
                    <div style="font-size:0.75rem; color:#cbd5e1; font-weight:600; margin-bottom:4px;">Sub-30s Dispatch</div>
                    <div style="font-size:0.72rem; color:#94a3b8;">Flight BA-1492 synced. Chauffeur staged at Heathrow Terminal 5.</div>
                  </div>
                  <div class="mock-card" style="background: rgba(212,175,55,0.08); border-color: rgba(212,175,55,0.25);">
                    <div style="display:flex; justify-content:space-between; font-size:0.72rem; color:#fde047; font-weight:600;">
                      <span>500K+ Completed Rides</span>
                      <span>4.9★ Rated</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="phone-label-title">Wheely Mobility</h4>
            <p class="phone-label-desc">On-Demand Chauffeur • GPS Telemetry</p>
          </div>

          <!-- Phone 2: Neo Stox FinTech & Trading -->
          <div class="phone-device-wrapper">
            <div class="phone-frame">
              <div class="phone-island"></div>
              <div class="phone-screen">
                <div class="mock-app-header">
                  <div style="font-weight:700; font-size:0.85rem; color:#fff;">Neo Stox Pro</div>
                  <div style="font-size:0.75rem; color:#10b981; font-weight:700;">LIVE FEED</div>
                </div>
                <div class="mock-app-body">
                  <div class="mock-card" style="background: linear-gradient(135deg, rgba(16,185,129,0.2), rgba(6,182,212,0.15)); border-color: rgba(16,185,129,0.4);">
                    <div style="font-size:0.75rem; color:#a7f3d0; font-weight:600;">Portfolio Equity (P&L)</div>
                    <div style="font-size:1.6rem; font-weight:800; color:#fff;">+28.4%</div>
                    <div style="font-size:0.72rem; color:#34d399;">Sub-100ms WebSocket Order Depth</div>
                  </div>
                  <div class="mock-card">
                    <div style="font-size:0.75rem; color:#cbd5e1; font-weight:600; margin-bottom:6px;">TradingView Charts</div>
                    <div style="display:flex; justify-content:space-between; font-size:0.72rem; color:#94a3b8;">
                      <span>SPX 4700 Call Option</span>
                      <span style="color:#10b981; font-weight:600;">$14.80 (+8.2%)</span>
                    </div>
                  </div>
                  <div class="mock-card">
                    <div style="font-size:0.72rem; color:#38bdf8; font-weight:600;">750K+ Active Market Traders</div>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="phone-label-title">Neo Stox Terminal</h4>
            <p class="phone-label-desc">Real-Time Simulator • Zero Lag</p>
          </div>

          <!-- Phone 3: Easy Food Hyperlocal Delivery -->
          <div class="phone-device-wrapper">
            <div class="phone-frame">
              <div class="phone-island"></div>
              <div class="phone-screen">
                <div class="mock-app-header">
                  <div style="font-weight:700; font-size:0.85rem; color:#fff;">Easy Food</div>
                  <div style="font-size:0.75rem; color:#f97316; font-weight:700;">ON ROUTE</div>
                </div>
                <div class="mock-app-body">
                  <div class="mock-card" style="background: linear-gradient(135deg, rgba(249,115,22,0.18), rgba(0,0,0,0.4)); border-color: rgba(249,115,22,0.35);">
                    <div style="font-size:0.75rem; color:#fdba74; font-weight:600;">Courier Tracking</div>
                    <div style="font-size:1.1rem; font-weight:800; color:#fff;">ETA: 12 Mins</div>
                    <div style="font-size:0.72rem; color:#cbd5e1;">Artisan Neapolitan Pizza & Bowls</div>
                  </div>
                  <div class="mock-card">
                    <div style="font-size:0.75rem; color:#cbd5e1; font-weight:600; margin-bottom:4px;">Smart Dispatch Engine</div>
                    <div style="font-size:0.72rem; color:#94a3b8;">Batch routing reduced delivery window by 35%.</div>
                  </div>
                  <div class="mock-card">
                    <div style="display:flex; justify-content:space-between; font-size:0.72rem; color:#cbd5e1;">
                      <span>Delivered Orders</span>
                      <span style="color:#f97316; font-weight:700;">1.2M+ Orders</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="phone-label-title">Easy Food Delivery</h4>
            <p class="phone-label-desc">Hyperlocal Tracking • 3-Sided App</p>
          </div>
        </div>

        <!-- Highlight Badges Grid (Pages 10-11) -->
        <div class="showcase-highlights-grid">
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
            <span>Modern UI/UX</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <span>Secure Backend</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            <span>API Integration</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
            <span>Push Notifications</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
            <span>Payment Integration</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <span>Location Services</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
            <span>Real-Time Features</span>
          </div>
          <div class="highlight-pill-card">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect></svg>
            <span>AI Integration</span>
          </div>
        </div>

        <div style="text-align:center;">
          <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
            <span>Discuss Your App Idea</span>
            <svg class="btn-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         7. WHY AJATH INFOTECH (Page 11)
         ===================================================================== -->
    <section class="why-us-section" id="why-us">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Engineering Excellence</div>
          <h2>Why Businesses Choose Ajath Infotech</h2>
          <p>
            We combine high-level technical ingenuity with strategic business understanding to build resilient digital assets.
          </p>
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
      </div>
    </section>

    <!-- =====================================================================
         8. TECHNOLOGIES SECTION (Pages 11-12)
         ===================================================================== -->
    <section class="tech-section" id="technologies">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Technology Stack</div>
          <h2>Modern Tech Stack for Scalable Products</h2>
          <p>
            Clean technology badges instead of clutter. We build with modern, production-grade tools.
          </p>
        </div>

        <div class="tech-categories-stack">
          <?php foreach ($techStack as $group): ?>
            <div class="tech-category-group">
              <div class="tech-group-title">
                <span>⚡ <?php echo htmlspecialchars($group['category']); ?></span>
              </div>
              <div class="tech-badges-grid">
                <?php foreach ($group['items'] as $item): ?>
                  <div class="tech-item-card">
                    <div class="tech-icon-container">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    </div>
                    <div class="tech-info">
                      <div class="tech-name"><?php echo htmlspecialchars($item['name']); ?></div>
                      <div class="tech-role"><?php echo htmlspecialchars($item['role']); ?></div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         9. DEVELOPMENT PROCESS (Pages 12-13)
         ===================================================================== -->
    <section class="process-section" id="process">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Proven Methodology</div>
          <h2>How We Build Your Product</h2>
          <p>
            A transparent, agile 8-step roadmap taking your vision from inception to global scale.
          </p>
        </div>

        <div class="process-grid">
          <?php foreach ($developmentProcess as $proc): ?>
            <div class="glass-card process-step-card">
              <div class="process-step-num"><?php echo htmlspecialchars($proc['step']); ?></div>
              <h3 class="process-step-title"><?php echo htmlspecialchars($proc['name']); ?></h3>
              <p class="process-step-desc"><?php echo htmlspecialchars($proc['desc']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         10. BOTTOM CTA CONVERSION SECTION (Page 13)
         ===================================================================== -->
    <section class="bottom-cta-section">
      <div class="container">
        <div class="cta-banner-box">
          <h2>Have An Idea? Let's Build It Together.</h2>
          <p>
            "Whether you're starting a new app, upgrading an existing platform or looking to introduce AI into your business, our team can help turn your idea into a working digital product."
          </p>
          <div class="cta-btn-group">
            <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
              <span>Start Your Project</span>
              <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="<?php echo url('contact'); ?>" class="btn btn-secondary btn-lg">
              Book a Consultation
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================================
         11. CONTACT SECTION & INTERACTIVE GOOGLE MAP (Pages 13-14)
         ===================================================================== -->
    <section class="contact-section" id="contact">
      <div class="container">
        <div class="section-header">
          <div class="section-badge">Get In Touch</div>
          <h2>Let's Talk About Your Project</h2>
          <p>
            Connect directly with our UK engineering leadership team in Northolt, London.
          </p>
        </div>

        <div class="contact-split-grid">
          <!-- Left: Contact Details & Google Maps Embed -->
          <div class="glass-card contact-info-card">
            <div>
              <h3 style="font-size:1.6rem; color:var(--text-dark);"><?php echo COMPANY_NAME; ?></h3>
              <p style="margin-top: 8px;">
                Leading UK AI systems & Mobile Application development agency.
              </p>

              <div class="contact-details-list">
                <div class="contact-detail-row">
                  <div class="detail-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                  </div>
                  <div class="detail-text">
                    <h4>Email Inquiries</h4>
                    <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                  </div>
                </div>

                <div class="contact-detail-row">
                  <div class="detail-icon-box">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                  </div>
                  <div class="detail-text">
                    <h4>Phone Line</h4>
                    <a href="tel:<?php echo COMPANY_PHONE_RAW; ?>"><?php echo COMPANY_PHONE_DISPLAY; ?></a>
                  </div>
                </div>

                <div class="contact-detail-row">
                  <div class="detail-icon-box" style="background: rgba(37, 211, 102, 0.1); border-color: rgba(37, 211, 102, 0.3); color: #25D366;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.97.54 1.777.82 2.796.82h.005c3.182 0 5.768-2.587 5.769-5.766.001-3.182-2.585-5.767-5.775-5.767zm3.387 8.243c-.144.405-.837.774-1.17.824-.312.045-.634.072-1.84-.426-1.542-.636-2.528-2.203-2.605-2.304-.077-.102-.625-.83-.625-1.585 0-.754.396-1.125.536-1.278.14-.153.307-.192.41-.192.102 0 .205.002.294.007.095.005.222-.036.347.265.128.307.436 1.062.474 1.139.038.077.064.167.013.269-.051.102-.077.166-.153.255-.077.09-.161.2-.23.269-.077.077-.157.161-.067.315.09.153.399.658.856 1.065.589.524 1.085.687 1.239.764.153.077.243.064.333-.038.09-.102.384-.448.486-.601.102-.153.205-.128.345-.077.14.051.896.422 1.049.499.153.077.256.115.294.179.038.064.038.371-.106.776z"/></svg>
                  </div>
                  <div class="detail-text">
                    <h4>WhatsApp Direct</h4>
                    <a href="<?php echo COMPANY_WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" style="color:#059669; font-weight:700;">Chat on WhatsApp ↗</a>
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

            <!-- Embedded Interactive Google Map -->
            <div>
              <div style="font-size:0.85rem; color:var(--text-muted); margin-bottom: 8px; font-weight:600; display:flex; justify-content:space-between;">
                <span>Northolt, Greater London Office Location</span>
                <a href="<?php echo COMPANY_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer" style="color:var(--accent-cyan);">Open Full Map ↗</a>
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

          <!-- Right: Contact Form -->
          <div class="hero-form-card" style="padding: 36px 32px;">
            <div class="form-header">
              <div class="section-badge" style="margin-bottom: 6px;">Direct Line</div>
              <h3>Send a Message</h3>
              <p>We typically respond within 2-4 business hours.</p>
            </div>

            <form class="enquiry-form" data-enquiry-form>
              <div class="form-status"></div>
              <div class="form-row-2">
                <div class="form-group">
                  <label for="c-name">Full Name *</label>
                  <input type="text" id="c-name" name="fullName" class="form-input" placeholder="Your name" required>
                </div>
                <div class="form-group">
                  <label for="c-company">Company Name</label>
                  <input type="text" id="c-company" name="companyName" class="form-input" placeholder="Organization name">
                </div>
              </div>

              <div class="form-row-2">
                <div class="form-group">
                  <label for="c-email">Email Address *</label>
                  <input type="email" id="c-email" name="email" class="form-input" placeholder="email@company.com" required>
                </div>
                <div class="form-group">
                  <label for="c-phone">Phone Number</label>
                  <input type="tel" id="c-phone" name="phone" class="form-input" placeholder="+44 ...">
                </div>
              </div>

              <div class="form-group">
                <label for="c-service">Service Area of Interest *</label>
                <select id="c-service" name="service" class="form-select" required>
                  <option value="" disabled selected>Select Service</option>
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
                <label for="c-message">Project Summary</label>
                <textarea id="c-message" name="message" class="form-textarea" placeholder="Tell us about the project requirements..."></textarea>
              </div>

              <button type="submit" class="btn btn-primary" style="width: 100%;">
                Send Enquiry
              </button>

              <p class="form-privacy-note">
                "We respect your privacy. Your information will only be used to contact you regarding your enquiry."
              </p>
            </form>
          </div>
        </div>

        <!-- Global Tech Hubs & Presence -->
        <div style="margin-top: 60px;">
          <div class="section-header" style="text-align: center; margin-bottom: 36px;">
            <div class="section-badge">Global Presence</div>
            <h3 style="font-size: 2rem; color: var(--text-dark); margin-bottom: 10px;">Our International Offices</h3>
            <p>Operating across 4 key tech hubs in the UK, USA, Dubai UAE, and India to deliver 24/7 engineering velocity.</p>
          </div>

          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
            <?php foreach (GLOBAL_OFFICES as $key => $office): ?>
              <div class="glass-card office-card" style="padding: 0; display: flex; flex-direction: column; overflow: hidden; border-radius: var(--radius-lg);">
                <div class="office-card-img-wrap">
                  <img src="<?php echo htmlspecialchars($office['image']); ?>" alt="<?php echo htmlspecialchars($office['country'] . ' ' . $office['role']); ?>" class="office-card-img" loading="lazy" width="400" height="225">
                  <div class="office-card-badge-overlay">
                    <span style="font-size: 1.4rem; line-height: 1;"><?php echo $office['flag']; ?></span>
                    <span class="tech-badge-item" style="font-size: 0.75rem; padding: 3px 10px;"><?php echo htmlspecialchars($office['role']); ?></span>
                  </div>
                </div>

                <div class="office-card-body" style="padding: 24px; display: flex; flex-direction: column; justify-content: space-between; flex: 1;">
                  <div>
                    <h4 style="font-size: 1.25rem; color: var(--text-dark); margin-bottom: 8px;"><?php echo htmlspecialchars($office['country']); ?></h4>
                    <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 18px;">
                      <?php echo htmlspecialchars($office['address']); ?>
                    </p>
                  </div>
                  <div style="padding-top: 16px; border-top: 1px solid var(--border-subtle); display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 0.88rem;">
                      <span style="color: var(--text-muted);">Email: </span>
                      <a href="mailto:<?php echo htmlspecialchars($office['email']); ?>" style="color: var(--accent-cyan); font-weight: 600;"><?php echo htmlspecialchars($office['email']); ?></a>
                    </div>
                    <div style="font-size: 0.88rem;">
                      <span style="color: var(--text-muted);">Phone: </span>
                      <a href="tel:<?php echo htmlspecialchars($office['phone_raw']); ?>" style="color: var(--text-dark); font-weight: 600;"><?php echo htmlspecialchars($office['phone']); ?></a>
                    </div>
                    <div style="font-size: 0.88rem; margin-top: 4px;">
                      <a href="<?php echo htmlspecialchars($office['website']); ?>" target="_blank" rel="noopener noreferrer" style="color: var(--accent-blue); font-weight: 600; display: inline-flex; align-items: center; gap: 4px;">
                        <span>Visit <?php echo parse_url($office['website'], PHP_URL_HOST) ?? $office['website']; ?></span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
