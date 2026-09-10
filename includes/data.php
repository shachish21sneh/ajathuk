<?php
/**
 * Ajath Infotech - Global Data Repository
 * Centralized data for services, AI agents, portfolio projects, tech stack, and process steps.
 * Structured to be 100% editable and easily expandable.
 */

$servicesData = [
    [
        'id' => 'mobile-app-development',
        'title' => 'Mobile App Development',
        'icon' => 'smartphone',
        'tag' => 'Flagship Core',
        'description' => 'High-performance Android and iOS applications designed for excellent user experience, scalability and reliability.',
        'items' => [
            'Android Apps',
            'iOS Apps',
            'Flutter',
            'React Native',
            'Native Development',
            'App Store & Play Store Deployment'
        ],
        'cta_text' => 'Explore Mobile Development',
        'cta_link' => url('services#mobile')
    ],
    [
        'id' => 'ai-integrated-applications',
        'title' => 'AI Integrated Applications',
        'icon' => 'cpu',
        'tag' => 'Next-Gen AI',
        'description' => 'Transform traditional applications into intelligent products by integrating modern AI capabilities.',
        'items' => [
            'AI Chatbots',
            'AI Recommendations',
            'AI Content Generation',
            'AI Search',
            'Document Intelligence',
            'Voice AI',
            'Image & Vision AI',
            'OpenAI / LLM Integration'
        ],
        'cta_text' => 'Explore AI Solutions',
        'cta_link' => url('ai-solutions')
    ],
    [
        'id' => 'ai-agents',
        'title' => 'AI Agents',
        'icon' => 'bot',
        'tag' => 'Highlighted Service',
        'highlight' => true,
        'heading' => 'AI Agents That Work For Your Business',
        'description' => 'Build intelligent AI agents that can understand tasks, make decisions, interact with systems and automate repetitive business processes.',
        'items' => [
            'Customer Support Agents',
            'Sales Agents',
            'Lead Qualification',
            'Appointment Agents',
            'Internal Business Agents',
            'Data Analysis Agents',
            'Workflow Automation',
            'Multi-step AI Agents',
            'API & CRM Integrations'
        ],
        'cta_text' => 'Build an AI Agent',
        'cta_link' => url('ai-solutions#agents')
    ],
    [
        'id' => 'web-application-development',
        'title' => 'Web Application Development',
        'icon' => 'layout',
        'tag' => 'Scalable Platforms',
        'description' => 'Enterprise-grade, cloud-native web applications with reactive user interfaces and resilient backend systems.',
        'items' => [
            'SaaS Platforms',
            'Admin Dashboards',
            'CRM Platforms',
            'Marketplaces',
            'Booking Platforms',
            'Business Management Systems',
            'API Development'
        ],
        'cta_text' => 'Explore Web Apps',
        'cta_link' => url('services#web')
    ],
    [
        'id' => 'business-automation',
        'title' => 'Business Automation',
        'icon' => 'zap',
        'tag' => 'Efficiency & ROI',
        'description' => 'Show how AI and software automate repetitive business operations, accelerating workflow execution and slashing errors.',
        'items' => [
            'Customer Enquiries',
            'Lead Management',
            'Automated Notifications',
            'Data Processing',
            'Automated Reports',
            'Customer Support',
            'Internal Workflows'
        ],
        'cta_text' => 'Automate Workflows',
        'cta_link' => url('services#automation')
    ],
    [
        'id' => 'custom-software-development',
        'title' => 'Custom Software Development',
        'icon' => 'code-2',
        'tag' => 'Tailored Engineering',
        'description' => 'We develop custom digital solutions around your exact business requirements instead of forcing your business into a generic software product.',
        'items' => [
            'Tailored Software Architecture',
            'Legacy System Modernization',
            'Custom API Bridges',
            'Multi-tenant Cloud Systems',
            'Enterprise Security & Compliance',
            'Dedicated Dev Squads'
        ],
        'cta_text' => 'Discuss Custom Solution',
        'cta_link' => url('contact')
    ]
];

$aiAgentsData = [
    [
        'id' => 'support-agent',
        'title' => 'Customer Support Agent',
        'badge' => 'Instant 24/7 Resolution',
        'description' => 'Answers customer questions automatically, handles multi-turn dialogues, and resolves tier-1 tickets with human-level empathy.',
        'metrics' => '78% First Contact Resolution',
        'capabilities' => ['Omnichannel (Web, WhatsApp, Slack)', 'Context Memory & Knowledge Sync', 'Smart Human Agent Handover'],
        'sample_prompt' => '“How do I upgrade my team plan and invite 5 new engineers?”',
        'sample_response' => '“You can upgrade directly in Billing Settings. I have generated an upgrade preview link and staged 5 team invites for you!”'
    ],
    [
        'id' => 'sales-agent',
        'title' => 'Sales Agent',
        'badge' => 'Lead Qualification & Nurturing',
        'description' => 'Qualifies leads, responds in real-time, scores intent, and follows up with prospective clients to accelerate deal velocity.',
        'metrics' => '3.4x Pipeline Conversion',
        'capabilities' => ['B2B Lead Enrichment', 'Personalized Email Pitching', 'CRM Automatic Sync (Salesforce/HubSpot)'],
        'sample_prompt' => '“We are a 200-person logistics firm looking for a mobile app.”',
        'sample_response' => '“Great! Based on your logistics focus, our Enterprise Cross-Platform squad is ideal. Would 10:30 AM tomorrow suit for a live demo?”'
    ],
    [
        'id' => 'booking-agent',
        'title' => 'Booking Agent',
        'badge' => 'Autonomous Calendar Ops',
        'description' => 'Handles appointments, scheduling, timezone conversions, cancellations, and reschedules without any manual coordinator friction.',
        'metrics' => 'Zero Double-Bookings',
        'capabilities' => ['Google/Outlook Calendar Integration', 'Timezone Detection', 'SMS/WhatsApp Confirmations'],
        'sample_prompt' => '“Can I book a consultation call with your AI lead this Thursday?”',
        'sample_response' => '“Thursday at 2:00 PM BST is open. I’ve held this slot and sent calendar invitations with Google Meet details.”'
    ],
    [
        'id' => 'business-agent',
        'title' => 'Business Agent',
        'badge' => 'Internal Ops Automation',
        'description' => 'Automates internal business workflows across ERPs, spreadsheets, HR tools, and communication channels seamlessly.',
        'metrics' => '20+ Hours Saved / Week / Dept',
        'capabilities' => ['Multi-tool Function Calling', 'Approval Routing', 'Cross-System State Sync'],
        'sample_prompt' => '“Process invoice #4902 and verify purchase order matching.”',
        'sample_response' => '“Invoice #4902 verified against PO-1188. Discrepancy is 0.00%. Approved and routed to accounts payable.”'
    ],
    [
        'id' => 'data-agent',
        'title' => 'Data Agent',
        'badge' => 'Predictive Business Insights',
        'description' => 'Analyses business information, queries databases in natural language, spots anomalies, and generates actionable executive insights.',
        'metrics' => 'Real-Time SQL & BI Synthesis',
        'capabilities' => ['Natural Language SQL Querying', 'Anomaly Detection Alerts', 'Executive Visual Summaries'],
        'sample_prompt' => '“Which customer segment had the highest churn risk this quarter?”',
        'sample_response' => '“Mid-tier SaaS accounts with under 3 active weekly logins showed 14.2% risk. I have flagged 18 accounts for account managers.”'
    ],
    [
        'id' => 'custom-agent',
        'title' => 'Custom Agent',
        'badge' => 'Engineered For Your IP',
        'description' => 'Built specifically around the unique workflows, proprietary data models, and specialized operational requirements of your enterprise.',
        'metrics' => 'Bespoke Logic & Guardrails',
        'capabilities' => ['Fine-Tuned Domain LLMs', 'Private On-Prem / VPC Deployment', 'SOC2 / GDPR Strict Compliance'],
        'sample_prompt' => '“Deploy custom workflow matching our internal underwriting model.”',
        'sample_response' => '“Custom agent instantiated with private RAG pipeline, strict JSON output schema, and audit logging enabled.”'
    ]
];

$portfolioProjects = [
    [
        'id' => 'neuropulse-health',
        'name' => 'NeuroPulse Health AI',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['Flutter', 'iOS & Android', 'AI Diagnostics', 'HealthKit'],
        'summary' => 'AI-driven proactive health diagnostics companion app with real-time biometric tracking and clinical triage.',
        'metrics' => '250K+ Active Users • 4.9★ App Store',
        'client' => 'NeuroPulse MedTech UK',
        'color' => '#00F0FF',
        'mockup_type' => 'health'
    ],
    [
        'id' => 'apexpay-fintech',
        'name' => 'ApexPay Global FinTech',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['React Native', 'Laravel', 'REST APIs', 'Biometric Security'],
        'summary' => 'Next-gen cross-border mobile banking and instant multicurrency remittances for European and UK businesses.',
        'metrics' => '£85M+ Transacted • Zero Fraud Rate',
        'client' => 'Apex Financial Group London',
        'color' => '#3B82F6',
        'mockup_type' => 'fintech'
    ],
    [
        'id' => 'omniflow-agent',
        'name' => 'OmniFlow Autonomous B2B Sales Agent',
        'category' => 'ai-agents',
        'category_label' => 'AI Agents',
        'tags' => ['LangChain', 'OpenAI', 'Autonomous Workflows', 'HubSpot API'],
        'summary' => 'Multi-step AI agent that researches inbound leads, qualifies prospects, drafts custom proposals, and schedules calls.',
        'metrics' => '320% Increase in Qualified Meetings',
        'client' => 'OmniFlow SaaS',
        'color' => '#8B5CF6',
        'mockup_type' => 'agent'
    ],
    [
        'id' => 'optilogix-automation',
        'name' => 'OptiLogix Supply Chain Suite',
        'category' => 'automation',
        'category_label' => 'Automation',
        'tags' => ['Vue.js', 'Node.js', 'Google Maps API', 'IoT Telemetry'],
        'summary' => 'Fleet automation and dynamic dispatch platform cutting fuel burn and automating order handoffs.',
        'metrics' => '42% Reduction in Route Delays',
        'client' => 'OptiLogix Logistics UK',
        'color' => '#10B981',
        'mockup_type' => 'logistics'
    ],
    [
        'id' => 'docuintel-ai',
        'name' => 'DocuIntel Contract Intelligence',
        'category' => 'ai',
        'category_label' => 'AI',
        'tags' => ['OpenAI', 'Python FastAPI', 'Vector Embeddings', 'AWS'],
        'summary' => 'Enterprise semantic search and automated risk scoring across 100,000+ legal documents and vendor contracts.',
        'metrics' => '94% Faster Contract Audits',
        'client' => 'LexisBridge Legal Tech',
        'color' => '#EC4899',
        'mockup_type' => 'document'
    ],
    [
        'id' => 'vanguard-crm',
        'name' => 'Vanguard Cloud CRM & SaaS',
        'category' => 'web-apps',
        'category_label' => 'Web Apps',
        'tags' => ['React', 'Laravel', 'PHP', 'MySQL', 'WebSockets'],
        'summary' => 'Real-time multi-tenant business management and customer lifecycle web portal with integrated billing.',
        'metrics' => '10K+ Concurrent Enterprise Seats',
        'client' => 'Vanguard Group Europe',
        'color' => '#F59E0B',
        'mockup_type' => 'web'
    ]
];

$techStack = [
    [
        'category' => 'Mobile Engineering',
        'items' => [
            ['name' => 'Flutter', 'role' => 'Cross-Platform App UI', 'icon' => 'flutter'],
            ['name' => 'React Native', 'role' => 'Native Cross-Platform', 'icon' => 'react'],
            ['name' => 'Android (Kotlin)', 'role' => 'Native Android Apps', 'icon' => 'android'],
            ['name' => 'iOS (Swift)', 'role' => 'Native Apple iOS', 'icon' => 'apple']
        ]
    ],
    [
        'category' => 'AI, LLM & Machine Learning',
        'items' => [
            ['name' => 'OpenAI / GPT-4o', 'role' => 'LLM Engine & Reasoning', 'icon' => 'openai'],
            ['name' => 'AI Agents & LangChain', 'role' => 'Autonomous Multi-step Execution', 'icon' => 'bot'],
            ['name' => 'Vector Databases', 'role' => 'RAG & Semantic Memory', 'icon' => 'database'],
            ['name' => 'Vision & Voice AI', 'role' => 'Speech & Multimodal Models', 'icon' => 'mic']
        ]
    ],
    [
        'category' => 'Backend, APIs & Cloud',
        'items' => [
            ['name' => 'Laravel', 'role' => 'Robust Enterprise Backend', 'icon' => 'laravel'],
            ['name' => 'PHP 8+', 'role' => 'High-Performance Web Engine', 'icon' => 'php'],
            ['name' => 'Node.js', 'role' => 'Event-Driven Realtime APIs', 'icon' => 'nodejs'],
            ['name' => 'REST & GraphQL APIs', 'role' => 'Scalable Integration Layers', 'icon' => 'api'],
            ['name' => 'Firebase', 'role' => 'Realtime DB & Auth', 'icon' => 'firebase'],
            ['name' => 'MySQL & PostgreSQL', 'role' => 'ACID Relational Storage', 'icon' => 'mysql'],
            ['name' => 'Cloud (AWS / GCP)', 'role' => 'Containerized Cloud Infra', 'icon' => 'cloud']
        ]
    ],
    [
        'category' => 'Frontend & Web Applications',
        'items' => [
            ['name' => 'React.js', 'role' => 'Dynamic Modern Frontends', 'icon' => 'react'],
            ['name' => 'Vue.js', 'role' => 'Progressive Reactive Web', 'icon' => 'vue'],
            ['name' => 'Modern JavaScript / TS', 'role' => 'Type-Safe Logic', 'icon' => 'js'],
            ['name' => 'Modern CSS3 & Web Standards', 'role' => 'Responsive & Glassmorphism UI', 'icon' => 'css']
        ]
    ]
];

$whyChooseUs = [
    [
        'title' => 'Business-Focused Development',
        'description' => 'We understand the business objective behind the technology. We build digital assets focused on ROI, lead conversion, and user retention.',
        'icon' => 'trending-up'
    ],
    [
        'title' => 'AI-First Thinking',
        'description' => 'We identify opportunities where AI creates real business value — not just hype, but measurable productivity gains and intelligence.',
        'icon' => 'sparkles'
    ],
    [
        'title' => 'Scalable Architecture',
        'description' => 'Solutions are designed to grow with your business, handling millions of requests with zero downtime and rock-solid stability.',
        'icon' => 'layers'
    ],
    [
        'title' => 'Modern Technology',
        'description' => 'We use modern frameworks, APIs, cloud services and AI technologies to build future-proof, maintainable software.',
        'icon' => 'cpu'
    ],
    [
        'title' => 'User-Centric Design',
        'description' => 'Beautiful interfaces combined with simple and intuitive experiences that delight users and drive engagement.',
        'icon' => 'smile'
    ],
    [
        'title' => 'Long-Term Partnership',
        'description' => 'We don’t just build software; we help businesses continuously improve, optimize, and scale their digital products.',
        'icon' => 'shield-check'
    ]
];

$developmentProcess = [
    ['step' => '01', 'name' => 'Discover', 'desc' => 'Understand your business, users, workflows, and strategic goals.'],
    ['step' => '02', 'name' => 'Strategy', 'desc' => 'Define the product roadmap, technology architecture, and high-impact AI opportunities.'],
    ['step' => '03', 'name' => 'Design', 'desc' => 'Create intuitive UI/UX design systems, user journeys, and interactive prototypes.'],
    ['step' => '04', 'name' => 'Develop', 'desc' => 'Build high-performance native/cross-platform mobile apps and resilient backend systems.'],
    ['step' => '05', 'name' => 'Integrate AI', 'desc' => 'Add custom AI models, intelligent agents, automation pipelines, and third-party integrations.'],
    ['step' => '06', 'name' => 'Test', 'desc' => 'Perform rigorous functional, security, latency, and end-to-end performance testing.'],
    ['step' => '07', 'name' => 'Launch', 'desc' => 'Deploy to Google Play, Apple App Store, and production cloud environments.'],
    ['step' => '08', 'name' => 'Scale', 'desc' => 'Continuous improvements, proactive monitoring, telemetry analytics, and feature additions.']
];
