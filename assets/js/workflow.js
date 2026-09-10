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
  const chatBox = document.getElementById('sandbox-chat-box');
  const activeAgentTitle = document.getElementById('sandbox-agent-title');
  const activeAgentBadge = document.getElementById('sandbox-agent-badge');

  if (!agentCards.length || !chatBox) return;

  agentCards.forEach(card => {
    card.addEventListener('click', () => {
      agentCards.forEach(c => c.classList.remove('selected-agent'));
      card.classList.add('selected-agent');

      const title = card.getAttribute('data-agent-title');
      const badge = card.getAttribute('data-agent-badge');
      const prompt = card.getAttribute('data-agent-prompt');
      const response = card.getAttribute('data-agent-response');

      if (activeAgentTitle) activeAgentTitle.textContent = title;
      if (activeAgentBadge) activeAgentBadge.textContent = badge;

      // Render animated simulation dialogue
      chatBox.innerHTML = `
        <div class="chat-bubble user">
          <div style="font-size:0.75rem; color: #94a3b8; margin-bottom: 4px; font-weight: 600;">Customer / User Input</div>
          ${prompt}
        </div>
        <div class="chat-bubble agent">
          <div style="font-size:0.75rem; color: #00f0ff; margin-bottom: 4px; font-weight: 600;">
            <span style="display:inline-block; width:6px; height:6px; border-radius:50%; background:#00f0ff; margin-right:4px;"></span>
            ${title} (Active Agent)
          </div>
          ${response}
        </div>
      `;
    });
  });
}
