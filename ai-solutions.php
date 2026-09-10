<?php
$pageTitle = "AI Solutions & Autonomous Agents | Ajath Infotech";
$pageDescription = "Deploy intelligent AI models, autonomous digital agents, LLM integrations, and process automation to supercharge your enterprise productivity.";
require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content" style="padding-top: calc(var(--header-height) + 40px); padding-bottom: 90px;">
    <!-- Page Header -->
    <section style="padding: 40px 0 60px 0; text-align: center;">
      <div class="container">
        <div class="section-badge ai-badge">AI Systems & Agents</div>
        <h1 style="margin-bottom: 16px;">
          Autonomous AI & <span class="text-gradient-ai">Digital Workforce</span>
        </h1>
        <p style="max-width: 720px; margin: 0 auto; font-size: 1.18rem;">
          We build custom AI agents that understand context, call enterprise tools, make decisions, and automate complex workflows — operating 24/7 with human-level accuracy.
        </p>
      </div>
    </section>

    <!-- Interactive AI Execution Pipeline -->
    <section class="container" style="margin-bottom: 80px;">
      <div class="workflow-container">
        <div class="workflow-header">
          <div class="section-badge" style="margin-bottom: 8px;">Architecture Blueprint</div>
          <h2 style="font-size: 1.8rem; color: #fff; margin-bottom: 6px;">End-to-End Autonomous AI Pipeline</h2>
          <p style="font-size: 0.95rem; color: var(--text-secondary);">Click any step to inspect the underlying security and execution layer</p>
        </div>

        <div class="workflow-steps-track">
          <div class="workflow-step-node active" data-step="0">
            <div class="node-badge">01</div>
            <div class="node-title">User</div>
            <div class="node-subtitle">Input & Event</div>
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
            <div class="node-subtitle">Guardrails & Auth</div>
          </div>
          <div class="workflow-connector"></div>

          <div class="workflow-step-node" data-step="3">
            <div class="node-badge">04</div>
            <div class="node-title">APIs</div>
            <div class="node-subtitle">Tool Integration</div>
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
            <div class="node-subtitle">Task Executed</div>
          </div>
        </div>

        <div class="workflow-inspector">
          <div class="inspector-text">
            <div class="inspector-title" id="inspector-step-title">User Input & Context</div>
            <div class="inspector-desc" id="inspector-step-desc">
              User interacts via Mobile App, Web Portal, Voice or Messaging channels. Multimodal inputs and session context are captured in real-time.
            </div>
          </div>
          <button type="button" class="btn btn-outline btn-sm" data-open-modal="consultation-modal">
            Build Custom AI Pipeline
          </button>
        </div>
      </div>
    </section>

    <!-- AI Agents Live Sandbox Simulator -->
    <section class="container" id="agents" style="margin-bottom: 80px;">
      <div class="section-header">
        <div class="section-badge ai-badge">Specialized Agents</div>
        <h2>Select an Agent to Test Live</h2>
        <p>Explore real-time dialogue scenarios and task completions handled by our autonomous agents.</p>
      </div>

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
              <div class="agent-metrics-tag">⚡ <?php echo htmlspecialchars($agent['metrics']); ?></div>
            </div>
            <span style="font-size: 0.8rem; color: var(--accent-cyan); font-weight:600;">Click to load simulation →</span>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="agent-sandbox-wrapper" style="margin-top: 36px;">
        <div class="sandbox-header">
          <div>
            <span style="font-size:0.75rem; color:#c084fc; text-transform:uppercase; font-weight:700;">Simulated Agent Terminal</span>
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
            ⚡ Grounded in private enterprise RAG with SOC2-grade security guardrails
          </span>
          <button type="button" class="btn btn-primary" data-open-modal="consultation-modal">
            Build This Agent For My Business
          </button>
        </div>
      </div>
    </section>

    <!-- Bottom CTA -->
    <section class="container">
      <div class="cta-banner-box">
        <h2>Bring Autonomous AI Into Your Organization</h2>
        <p>Eliminate manual operational bottlenecks with intelligent software agents tailored to your processes.</p>
        <button type="button" class="btn btn-primary btn-lg" data-open-modal="consultation-modal">
          Schedule AI Consultation
        </button>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
