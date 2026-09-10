<?php
$pageTitle = "Case Studies & Work Portfolio | Ajath Infotech";
$pageDescription = "Explore our proven track record of shipping enterprise mobile applications, AI agents, and custom software systems for UK and global clients.";
$pageKeywords = "Mobile app portfolio, AI project case studies, custom software portfolio, mobile app developers UK, client success stories Ajath Infotech";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 40px); padding-bottom: 90px;">
    <!-- Subpage Hero -->
    <section style="padding: 40px 0 60px 0; text-align: center;">
      <div class="container">
        <div class="section-badge">Proven Results</div>
        <h1 style="margin-bottom: 16px;">
          Our Work & <span class="text-gradient">Case Studies</span>
        </h1>
        <p style="max-width: 700px; margin: 0 auto; font-size: 1.15rem;">
          "Real-world digital solutions designed to solve real business problems." Discover how our engineering transformed workflows and accelerated client growth.
        </p>
      </div>
    </section>

    <!-- Filter Bar & Projects Grid -->
    <section class="container" id="work-grid">
      <div class="portfolio-filter-bar">
        <button type="button" class="filter-btn active" data-filter="all">All Projects</button>
        <button type="button" class="filter-btn" data-filter="mobile">Mobile Apps</button>
        <button type="button" class="filter-btn" data-filter="ai">AI Applications</button>
        <button type="button" class="filter-btn" data-filter="ai-agents">AI Agents</button>
        <button type="button" class="filter-btn" data-filter="web-apps">Web Apps</button>
        <button type="button" class="filter-btn" data-filter="automation">Automation</button>
      </div>

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
                <span>View Full Case Study</span>
                <svg class="btn-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Bottom Conversion Banner -->
    <section class="container" style="margin-top: 80px;">
      <div class="cta-banner-box">
        <h2>Want To Build The Next Big Success Story?</h2>
        <p>Let's collaborate to engineer an exceptional digital product that sets you apart from competitors.</p>
        <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
          Start Your Project
        </button>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
