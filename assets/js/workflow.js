/**
 * Ajath Infotech - Interactive AI Workflow & Agents Sandbox Controller
 */

document.addEventListener('DOMContentLoaded', () => {
  initWorkflowPipeline();
  initAgentsSandbox();
});

// -----------------------------------------------------------------------------
// 1. Interactive AI Pipeline Visualizer (User -> AI -> Business Logic -> APIs -> DB -> Action)
// -----------------------------------------------------------------------------
function initWorkflowPipeline() {
  const steps = [
    {
      id: 'step-user',
      title: 'User Input & Context',
      desc: 'User interacts via Mobile App, Web Portal, Voice or Messaging channels. Multimodal inputs and session context are captured in real-time.'
    },
    {
      id: 'step-ai',
      title: 'AI Intelligence & Intent Parsing',
      desc: 'State-of-the-art LLMs (GPT-4o, Claude 3.5, fine-tuned domain models) extract intent, entities, sentiment, and structured parameters.'
    },
    {
      id: 'step-logic',
      title: 'Business Logic & Security Guardrails',
      desc: 'Strict validation rules, permission controls, and compliance guardrails evaluate the request before any downstream execution.'
    },
    {
      id: 'step-apis',
      title: 'APIs & Tool Function Calling',
      desc: 'Autonomous agent triggers external APIs, microservices, payment gateways, CRM events, or third-party enterprise integrations.'
    },
    {
      id: 'step-db',
      title: 'Database & Vector Store Sync',
      desc: 'Retrieval-Augmented Generation (RAG) queries vector memory, while relational ACID transactions persist state securely.'
    },
    {
      id: 'step-action',
      title: 'Autonomous Action & Response',
      desc: 'End-to-end task completion: booking confirmed, invoice generated, support ticket closed, or real-time UI stream rendered to user.'
    }
  ];

  const nodes = document.querySelectorAll('.workflow-step-node');
  const titleEl = document.getElementById('inspector-step-title');
  const descEl = document.getElementById('inspector-step-desc');

  if (!nodes.length || !titleEl || !descEl) return;

  function setActiveStep(index) {
    nodes.forEach((node, idx) => {
      if (idx === index) {
        node.classList.add('active');
        titleEl.textContent = steps[idx].title;
        descEl.textContent = steps[idx].desc;
      } else {
        node.classList.remove('active');
      }
    });
  }

  nodes.forEach((node, idx) => {
    node.addEventListener('click', () => {
      setActiveStep(idx);
    });
  });

  // Auto-pulse cycle every 4 seconds unless hovered
  let currentIdx = 0;
  let autoCycle = setInterval(() => {
    currentIdx = (currentIdx + 1) % steps.length;
    setActiveStep(currentIdx);
  }, 4000);

  const container = document.querySelector('.workflow-container');
  if (container) {
    container.addEventListener('mouseenter', () => clearInterval(autoCycle));
  }
}

// -----------------------------------------------------------------------------
// 2. Interactive AI Agents Sandbox Simulator
// -----------------------------------------------------------------------------
function initAgentsSandbox() {
  const agentCards = document.querySelectorAll('.agent-card');
  const sandboxWrapper = document.getElementById('agent-sandbox');
  const chatBox = document.getElementById('sandbox-chat-box');
  const activeAgentTitle = document.getElementById('sandbox-agent-title');
  const activeAgentBadge = document.getElementById('sandbox-agent-badge');
  const chipsList = document.getElementById('sandbox-chips-list');
  const promptForm = document.getElementById('sandbox-prompt-form');
  const userInput = document.getElementById('sandbox-user-input');

  if (!agentCards.length || !chatBox) return;

  // Render dialogue message bubbles with smooth reveal
  function renderDialogue(userText, agentText, agentName) {
    chatBox.innerHTML = `
      <div class="chat-bubble user" style="animation: slide-in-toast 0.25s ease;">
        <div style="font-size:0.75rem; color: var(--text-muted); margin-bottom: 4px; font-weight: 600;">Customer / User Query</div>
        ${userText}
      </div>
      <div class="chat-bubble agent" style="animation: slide-in-toast 0.35s ease;">
        <div style="font-size:0.75rem; color: var(--accent-cyan); margin-bottom: 4px; font-weight: 700; display:flex; align-items:center; gap:6px;">
          <span style="display:inline-block; width:6px; height:6px; border-radius:50%; background:var(--accent-cyan); box-shadow:0 0 6px var(--accent-cyan);"></span>
          ${agentName} (Active Autonomous Agent)
        </div>
        ${agentText}
      </div>
    `;
  }

  // Update chips for selected agent
  function updateChips(chipsJson, agentTitle) {
    if (!chipsList) return;
    try {
      const chips = typeof chipsJson === 'string' ? JSON.parse(chipsJson) : chipsJson;
      if (Array.isArray(chips) && chips.length > 0) {
        chipsList.innerHTML = chips.map(chip => `
          <button type="button" class="sandbox-chip" data-chip-text="${chip}">${chip}</button>
        `).join('');
        wireChipClicks(agentTitle);
      }
    } catch (e) {
      console.warn('Error parsing agent chips', e);
    }
  }

  // Wire click events on chips
  function wireChipClicks(agentTitle) {
    if (!chipsList) return;
    const chips = chipsList.querySelectorAll('.sandbox-chip');
    chips.forEach(chip => {
      chip.addEventListener('click', (e) => {
        e.preventDefault();
        const text = chip.getAttribute('data-chip-text') || chip.textContent;
        handleCustomQuery(text, agentTitle);
      });
    });
  }

  // Generate intelligent simulated response based on active agent
  function generateAgentResponse(query, agentTitle) {
    const q = query.toLowerCase();
    const title = agentTitle || 'Customer Support Agent';

    if (title.includes('Sales')) {
      if (q.includes('quote') || q.includes('price') || q.includes('cost')) {
        return `Based on your requirements, typical engineering sprints start at £5,000 with a 3–6 week delivery roadmap. Would you like a bespoke Statement of Work (SOW) draft?`;
      }
      if (q.includes('demo') || q.includes('call') || q.includes('meeting')) {
        return `I can arrange a 30-minute technical architecture walk-through with our lead UK director. Let me know what date works best for your team!`;
      }
      return `Thank you for sharing that project scope. Our enterprise squad can deliver this with scalable cloud architecture. Would you like to schedule an introductory discovery session?`;
    }

    if (title.includes('Booking')) {
      if (q.includes('reschedule') || q.includes('cancel')) {
        return `Your booking has been updated in Google & Outlook calendars. A confirmation notification has been dispatched to all attendees.`;
      }
      if (q.includes('timezone') || q.includes('hours') || q.includes('time')) {
        return `Our Northolt, London headquarters operates 09:00–18:00 BST. I seamlessly convert meeting invitations across US Eastern, Gulf Standard, and Indian Standard timezones.`;
      }
      return `Thursday at 2:00 PM BST is currently open. I have reserved this slot and generated secure video conference coordinates for your team.`;
    }

    if (title.includes('Business')) {
      if (q.includes('invoice') || q.includes('po') || q.includes('pay')) {
        return `Invoice verified against purchase order with 0.00% discrepancy. Automated approval chain passed and routed to accounts payable.`;
      }
      if (q.includes('sprint') || q.includes('report') || q.includes('summary')) {
        return `Weekly sprint metrics synthesized: 24 PRs merged, test coverage at 98.4%, and zero open blockers across Jira and GitHub repositories.`;
      }
      return `Automated business workflow executed across internal ERP, CRM, and Slack channels in 140 milliseconds with full audit trail logging.`;
    }

    if (title.includes('Data')) {
      if (q.includes('churn') || q.includes('risk')) {
        return `Anomaly model flagged 18 accounts with declining weekly API pings (14.2% churn risk). Notifications staged for customer success leads.`;
      }
      if (q.includes('mrr') || q.includes('revenue') || q.includes('growth')) {
        return `Q3 synthesized: Net Revenue Retention is 128%, customer lifetime value increased by 22.4%, and ARR run-rate is accelerating on track.`;
      }
      return `Natural language SQL query executed in 45ms across vector memory and Postgres database. Visual summary and trend chart generated successfully.`;
    }

    if (title.includes('Custom')) {
      return `Custom domain agent evaluated request with private vector RAG memory and strict SOC2 guardrails. Structured JSON schema generated and logged.`;
    }

    // Default Customer Support
    if (q.includes('password') || q.includes('reset') || q.includes('auth')) {
      return `A secure, one-time authentication reset link has been dispatched to your verified administrator email address. Valid for 15 minutes.`;
    }
    if (q.includes('limit') || q.includes('rate') || q.includes('api')) {
      return `Your API quota is currently at 34% of the monthly allocation (680,000 / 2,000,000 calls). Latency is optimal at 42ms.`;
    }
    return `Your request has been processed through our tier-1 automated resolution pipeline with 100% policy compliance. Next action dispatched successfully!`;
  }

  // Handle custom query submission
  function handleCustomQuery(promptText, agentTitle) {
    if (!promptText) return;
    const title = agentTitle || (activeAgentTitle ? activeAgentTitle.textContent : 'Customer Support Agent');

    // Show typing state
    chatBox.innerHTML = `
      <div class="chat-bubble user" style="animation: slide-in-toast 0.2s ease;">
        <div style="font-size:0.75rem; color: var(--text-muted); margin-bottom: 4px; font-weight: 600;">Customer / User Query</div>
        ${promptText}
      </div>
      <div class="chat-bubble agent" style="opacity: 0.7; animation: slide-in-toast 0.25s ease;">
        <div style="font-size:0.75rem; color: var(--accent-cyan); margin-bottom: 4px; font-weight: 700; display:flex; align-items:center; gap:6px;">
          <span style="display:inline-block; width:6px; height:6px; border-radius:50%; background:var(--accent-cyan); animation: wa-pulse 1s infinite;"></span>
          ${title} (Processing & executing tools...)
        </div>
        <div style="display:inline-flex; gap:4px; padding: 4px 0;">
          <span style="animation: wa-pulse 1s infinite;">●</span>
          <span style="animation: wa-pulse 1s infinite 0.2s;">●</span>
          <span style="animation: wa-pulse 1s infinite 0.4s;">●</span>
        </div>
      </div>
    `;

    setTimeout(() => {
      const response = generateAgentResponse(promptText, title);
      renderDialogue(promptText, response, title);
    }, 550);
  }

  // Card click handler
  function selectAgentCard(card, shouldScroll = true) {
    agentCards.forEach(c => c.classList.remove('selected-agent'));
    card.classList.add('selected-agent');

    const title = card.getAttribute('data-agent-title') || 'Customer Support Agent';
    const badge = card.getAttribute('data-agent-badge') || 'Instant 24/7 Resolution';
    const prompt = card.getAttribute('data-agent-prompt') || 'How can this agent help my business?';
    const response = card.getAttribute('data-agent-response') || 'This agent operates autonomously 24/7 with zero human latency.';
    const chipsJson = card.getAttribute('data-agent-chips');

    if (activeAgentTitle) activeAgentTitle.textContent = title;
    if (activeAgentBadge) activeAgentBadge.textContent = badge;

    updateChips(chipsJson, title);
    renderDialogue(prompt, response, title);

    if (sandboxWrapper) {
      sandboxWrapper.classList.remove('sandbox-pulse');
      void sandboxWrapper.offsetWidth; // trigger reflow
      sandboxWrapper.classList.add('sandbox-pulse');

      if (shouldScroll) {
        sandboxWrapper.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    }
  }

  // Attach event listeners to all agent cards and test buttons
  agentCards.forEach(card => {
    card.addEventListener('click', (e) => {
      // If clicking on build agent button, let modal handler do its job
      if (e.target.closest('.btn-build-agent')) {
        return;
      }
      selectAgentCard(card, true);
    });

    const testBtn = card.querySelector('[data-test-agent]');
    if (testBtn) {
      testBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        selectAgentCard(card, true);
      });
    }
  });

  // Handle custom query form submit
  if (promptForm && userInput) {
    promptForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const val = userInput.value.trim();
      if (!val) return;
      const currentTitle = activeAgentTitle ? activeAgentTitle.textContent : 'Customer Support Agent';
      handleCustomQuery(val, currentTitle);
      userInput.value = '';
    });
  }

  // Pre-wire default chips for initial selected card
  const initialCard = document.querySelector('.agent-card.selected-agent') || agentCards[0];
  if (initialCard) {
    const title = initialCard.getAttribute('data-agent-title');
    const chipsJson = initialCard.getAttribute('data-agent-chips');
    updateChips(chipsJson, title);
  }
}

