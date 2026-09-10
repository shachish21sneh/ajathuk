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
        'description' => 'From disruptive consumer apps to enterprise-grade mobility ecosystems, we engineer bespoke iOS, Android, and cross-platform apps that combine intuitive UI/UX with bulletproof cloud backends.',
        'items' => [
            'Native iOS Apps (Swift & SwiftUI)',
            'Native Android Apps (Kotlin & Jetpack)',
            'Cross-Platform Flutter Development',
            'React Native High-Velocity Apps',
            'AI-Powered Mobile Integrations',
            'Offline-First & Real-Time WebSockets',
            'Biometric Security & Mobile Payments',
            'App Store & Google Play Launch & ASO'
        ],
        'cta_text' => 'Build Your Mobile App',
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
        'id' => 'wheely-mobility',
        'name' => 'Wheely Luxury Mobility & Chauffeur App',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['Flutter', 'Swift', 'Node.js', 'Google Maps API', 'WebSockets', 'Stripe'],
        'summary' => 'On-demand luxury chauffeur and executive ride-hailing platform with sub-second dispatch, live vehicle telemetry, and corporate travel billing.',
        'metrics' => '500K+ Completed Rides • 4.9★ App Store Rating • < 30s Dispatch',
        'client' => 'Wheely Technologies Ltd',
        'color' => '#D4AF37',
        'image' => '/assets/images/portfolio/wheely-mockup.jpg',
        'problem' => 'High-net-worth riders and executive corporate travel desks demanded a guaranteed punctual ride-hailing experience with verified elite chauffeurs, frictionless corporate expense billing, and zero telemetry delay.',
        'solution' => 'Engineered native-grade Flutter mobile apps for iOS and Android featuring custom vector mapping, automated chauffeur matchmaking, in-app corporate expense billing, encrypted biometric authentication, and live flight tracker sync.',
        'impact' => 'Scaled smoothly to 500K+ luxury bookings across London, Paris, and Dubai with a verified 99.8% on-time pickup rate and enterprise SLA compliance.'
    ],
    [
        'id' => 'easy-food-delivery',
        'name' => 'Easy Food Hyperlocal Ordering Platform',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['React Native', 'Kotlin', 'Express', 'Redis', 'Live GPS Tracking'],
        'summary' => 'Hyperlocal food ordering, restaurant kitchen display, and multi-tier courier dispatch ecosystem with real-time order tracking and dynamic surge pricing.',
        'metrics' => '1.2M+ Orders Delivered • 35% Faster Delivery Dispatch',
        'client' => 'Easy Food Global',
        'color' => '#F97316',
        'image' => '/assets/images/portfolio/easyfood-mockup.jpg',
        'problem' => 'Independent local restaurants faced exorbitant aggregator commission rates and unreliable third-party courier dispatch during peak evening dining hours.',
        'solution' => 'Developed a high-velocity 3-sided mobile ecosystem comprising customer app, restaurant kitchen display app, and courier navigation app with real-time batch dispatch algorithms and zero-lag push notifications.',
        'impact' => 'Reduced kitchen-to-doorstep delivery cycle times by 35% and successfully onboarded over 2,500 active restaurants across regional metro zones.'
    ],
    [
        'id' => 'licious-d2c-groceries',
        'name' => 'Licious Gourmet Meat & Cold-Chain D2C App',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['Flutter', 'iOS & Android', 'Cold-Chain IoT', 'GraphQL', 'Microservices'],
        'summary' => 'End-to-end farm-to-fork D2C grocery and gourmet meat mobile app featuring real-time temperature tracking, flash inventory, and 90-minute express delivery.',
        'metrics' => '4M+ Downloads • +40% Repeat Customer Retention',
        'client' => 'Licious D2C Brands',
        'color' => '#E11D48',
        'image' => '/assets/images/portfolio/licious-mockup.jpg',
        'problem' => 'Maintaining farm-fresh perishable quality required an infallible digital inventory chain, sub-second checkout, and dynamic stock allocation across automated temperature-controlled micro-hubs.',
        'solution' => 'Built a high-performance cross-platform mobile shopping experience with intelligent personalized recommendations, scheduled delivery slots, integrated payment gateways, and cold-chain compliance telemetry.',
        'impact' => 'Elevated checkout speed to under 2 seconds and powered over 4 million downloads with an industry-leading 40% boost in 30-day repeat retention.'
    ],
    [
        'id' => 'neostox-fintech-trading',
        'name' => 'Neo Stox Virtual Trading Terminal',
        'category' => 'mobile',
        'category_label' => 'FinTech App',
        'tags' => ['Swift', 'Kotlin', 'High-Frequency WebSockets', 'AI Analytics', 'TradingView'],
        'summary' => 'Institutional-grade virtual options and equity trading simulator with sub-millisecond market feed streaming, options chain calculator, and algorithmic risk profiling.',
        'metrics' => '750K+ Active Traders • Sub-100ms Chart Latency',
        'client' => 'Neo Stox FinTech',
        'color' => '#10B981',
        'image' => '/assets/images/portfolio/neostox-mockup.jpg',
        'problem' => 'Retail traders and market analysts lacked an authentic, zero-risk simulation environment with genuine market depth, live tick feeds, option Greeks calculation, and instant order execution.',
        'solution' => 'Architected native iOS & Android applications using custom WebSocket binary streams, interactive multi-indicator TradingView charts, virtual paper portfolios, and AI pattern recognition trade signals.',
        'impact' => 'Expanded to 750,000 active traders with zero order latency dropouts during extreme market volatility and a 4.8★ app rating.'
    ],
    [
        'id' => 'avis-smart-rental',
        'name' => 'Avis Digital Key & Fleet Booking App',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['React Native', 'Bluetooth BLE', 'IoT Keyless Unlock', 'AWS Cloud', 'Stripe'],
        'summary' => 'Contactless vehicle reservation, digital Bluetooth key unlock, and automated return inspection app deployed across international airport hubs.',
        'metrics' => '60% Reduction in Counter Wait Times • 100K+ Smart Unlocks',
        'client' => 'Avis Fleet Solutions',
        'color' => '#DC2626',
        'image' => '/assets/images/portfolio/avis-mockup.jpg',
        'problem' => 'Lengthy rental counter queues, paper contracts, and manual key handovers caused significant customer friction and drop-off at busy international airport terminals.',
        'solution' => 'Engineered a keyless digital mobile app with secure Bluetooth Low Energy (BLE) vehicle unlocking, instant digital driving license verification, and automated fuel/damage inspections via smartphone camera.',
        'impact' => 'Cut airport counter pickup wait times from 25 minutes down to zero-queue direct-to-vehicle drive-aways, with over 100,000 contactless smart unlocks completed.'
    ],
    [
        'id' => 'rekhta-literature-audio',
        'name' => 'Rekhta Cultural Literature & Audio Streaming',
        'category' => 'mobile',
        'category_label' => 'Mobile Apps',
        'tags' => ['Flutter', 'Custom Typography Engine', 'Audio Streaming', 'Offline Cache', 'ElasticSearch'],
        'summary' => 'World’s premier digital repository of Urdu poetry and literature featuring synchronized audio recitations, trilingual dictionary, and offline reader.',
        'metrics' => '3M+ App Installs • 22 mins Daily User Engagement',
        'client' => 'Rekhta Foundation',
        'color' => '#F59E0B',
        'image' => '/assets/images/portfolio/rekhta-mockup.jpg',
        'problem' => 'Rendering complex calligraphic Nastaliq typography with smooth bidirectional scrolling across diverse Android and iOS devices presented major font rendering bottlenecks.',
        'solution' => 'Developed custom Flutter font rendering shaders, an offline audio recitation streamer with lyric-synced highlighting, and instantaneous multi-script search across 50,000+ literary works.',
        'impact' => 'Achieved over 3 million downloads and an extraordinary average daily active session duration of 22 minutes.'
    ],
    [
        'id' => 'grg-health-telemedicine',
        'name' => 'GRG Health Telemedicine & AI Triage App',
        'category' => 'ai',
        'category_label' => 'HealthTech AI',
        'tags' => ['WebRTC', 'HIPAA Compliant', 'Swift', 'Kotlin', 'AI Diagnostic Assistant'],
        'summary' => 'HIPAA-compliant digital clinic app connecting patients with top UK specialists via HD video, wearable vitals sync, and smart prescription management.',
        'metrics' => '98.6% Diagnostic Satisfaction • 150K+ Consultations',
        'client' => 'GRG Healthcare Network',
        'color' => '#06B6D4',
        'image' => '/assets/images/portfolio/grghealth-mockup.jpg',
        'problem' => 'Overburdened outpatient clinics caused delayed patient consultations and fragmented health record exchange between general practitioners and specialists.',
        'solution' => 'Built an end-to-end encrypted telehealth mobile platform featuring low-bandwidth WebRTC video consultations, Apple HealthKit/Google Fit biometric sync, and AI clinical summaries for doctors.',
        'impact' => 'Processed over 150,000 consultations with zero compliance violations and a 4.9-star patient satisfaction score.'
    ],
    [
        'id' => 'suzuki-ar-showroom',
        'name' => 'Suzuki 3D Showroom & AR Experience',
        'category' => 'automation',
        'category_label' => 'Automotive AR',
        'tags' => ['Unity ARKit/ARCore', 'Flutter', 'Dealer CRM Integration', '3D Visualizer'],
        'summary' => 'Augmented reality mobile showroom allowing buyers to customize vehicles in true-to-life 3D, book test rides, and schedule automated maintenance.',
        'metrics' => '+23% Sales Conversion • 450K+ Virtual AR Test Drives',
        'client' => 'Suzuki Motorcycle Limited',
        'color' => '#2563EB',
        'image' => '/assets/images/portfolio/suzuki-mockup.jpg',
        'problem' => 'Physical dealership footprints could not display every vehicle variant, colorway, and custom accessory combination to prospective motorcycle buyers.',
        'solution' => 'Engineered an interactive AR visualizer app embedding photorealistic 3D vehicle models into real environments, integrated with localized dealer stock inventory and digital service appointment booking.',
        'impact' => 'Generated a verified 23% uplift in dealership vehicle inquiries and over 450,000 augmented reality custom vehicle configurations.'
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
