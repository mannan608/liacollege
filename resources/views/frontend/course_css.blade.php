<link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
<style>
        /* ============================================================
       CSS VARIABLES & RESET
       ============================================================ */
        :root {
            --ink: #0a0a12;
            --ink-2: #1c1c2e;
            --ink-3: #2e2e45;
            --surface: #f4f3ef;
            --surface-2: #eceae3;
            --surface-card: #ffffff;
            --accent: #2563ff;
            --accent-2: #1a3fbf;
            --accent-glow: rgba(37, 99, 255, 0.18);
            --gold: #e8a117;
            --gold-light: #fef3d7;
            --green: #16a34a;
            --green-light: #dcfce7;
            --red: #dc2626;
            --border: rgba(10, 10, 18, 0.1);
            --border-strong: rgba(10, 10, 18, 0.2);
            --radius: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.07), 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 16px rgba(0, 0, 0, 0.08), 0 1px 4px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 20px 60px rgba(0, 0, 0, 0.12), 0 8px 24px rgba(0, 0, 0, 0.08);
            --font-display: 'Bricolage Grotesque', sans-serif;
            --font-body: 'DM Sans', sans-serif;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .dlm-page {
            font-family: var(--font-body);
            color: var(--ink);
            background: var(--surface);
            line-height: 1.6;
        }

        /* ============================================================
       HERO
       ============================================================ */
        .dlm-hero {
            background: var(--ink-2);
            position: relative;
            overflow: hidden;
            padding: 100px 0 80px;
        }

        .dlm-hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 70% at 80% 50%, rgba(37, 99, 255, 0.22) 0%, transparent 60%),
                radial-gradient(ellipse 40% 50% at 10% 80%, rgba(232, 161, 23, 0.10) 0%, transparent 50%);
            pointer-events: none;
        }

        .dlm-hero::after {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(37, 99, 255, 0.12) 0%, transparent 70%);
            pointer-events: none;
        }

        .dlm-hero .noise-overlay {
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.03'/%3E%3C/svg%3E");
            opacity: 0.4;
            pointer-events: none;
        }

        .dlm-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(37, 99, 255, 0.2);
            border: 1px solid rgba(37, 99, 255, 0.4);
            color: #93b4ff;
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 24px;
            letter-spacing: 0.02em;
        }

        .dlm-hero-badge span.dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #4d82ff;
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.8);
            }
        }

        .dlm-hero h1 {
            font-family: var(--font-display);
            font-size: clamp(38px, 5vw, 62px);
            font-weight: 800;
            color: #fff;
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin-bottom: 20px;
        }

        .dlm-hero h1 em {
            font-style: normal;
            color: #4d82ff;
        }

        .dlm-hero .subtitle {
            color: rgba(255, 255, 255, 0.65);
            font-size: 17px;
            max-width: 540px;
            line-height: 1.7;
            margin-bottom: 36px;
        }

        .dlm-hero-stats {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
        }

        .dlm-hero-stat {
            display: flex;
            flex-direction: column;
        }

        .dlm-hero-stat strong {
            font-family: var(--font-display);
            font-size: 28px;
            font-weight: 800;
            color: #fff;
            line-height: 1;
        }

        .dlm-hero-stat span {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 4px;
        }

        .dlm-hero-divider {
            width: 1px;
            height: 40px;
            background: rgba(255, 255, 255, 0.15);
            align-self: center;
        }

        /* Hero right card */
        .dlm-hero-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: var(--radius-xl);
            padding: 32px;
            backdrop-filter: blur(20px);
        }

        .dlm-hero-card h5 {
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
        }

        .dlm-info-pill {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .dlm-info-pill .pill-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(37, 99, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .dlm-info-pill strong {
            color: #fff;
            font-weight: 600;
        }

        .dlm-cta-btn {
            width: 100%;
            padding: 15px 24px;
            background: var(--accent);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 16px;
            display: block;
            text-align: center;
            text-decoration: none;
            transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
            box-shadow: 0 4px 20px rgba(37, 99, 255, 0.4);
        }

        .dlm-cta-btn:hover {
            background: var(--accent-2);
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 8px 28px rgba(37, 99, 255, 0.5);
            text-decoration: none;
        }

        /* ============================================================
       PROGRESS NAV
       ============================================================ */
        .dlm-progress-nav {
            background: var(--surface-card);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
        }

        .dlm-progress-nav-inner {
            display: flex;
            overflow-x: auto;
            gap: 0;
            scrollbar-width: none;
        }

        .dlm-progress-nav-inner::-webkit-scrollbar {
            display: none;
        }

        .dlm-nav-step {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 14px 20px;
            color: rgba(10, 10, 18, 0.5);
            font-size: 13.5px;
            font-weight: 500;
            white-space: nowrap;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.2s;
            text-decoration: none;
        }

        .dlm-nav-step:hover,
        .dlm-nav-step.active {
            color: var(--accent);
            border-bottom-color: var(--accent);
            text-decoration: none;
        }

        .dlm-nav-step .step-num {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--surface-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .dlm-nav-step.active .step-num {
            background: var(--accent);
            color: #fff;
        }

        /* ============================================================
       MAIN LAYOUT
       ============================================================ */
        .dlm-main {
            padding: 60px 0 80px;
        }

        /* ============================================================
       SECTION HEADINGS
       ============================================================ */
        .dlm-section-label {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--accent);
            margin-bottom: 10px;
        }

        .dlm-section-label::before {
            content: '';
            width: 20px;
            height: 2px;
            background: var(--accent);
            border-radius: 2px;
        }

        .dlm-section-title {
            font-family: var(--font-display);
            font-size: clamp(24px, 3vw, 34px);
            font-weight: 800;
            color: var(--ink);
            line-height: 1.2;
            letter-spacing: -0.02em;
            margin-bottom: 12px;
        }

        .dlm-section-desc {
            color: rgba(10, 10, 18, 0.6);
            font-size: 16px;
            line-height: 1.7;
            max-width: 600px;
        }

        /* ============================================================
       SECTION: ABOUT
       ============================================================ */
        #about {
            scroll-margin-top: 60px;
        }

        .dlm-feature-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
            margin-top: 32px;
        }

        .dlm-feature-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            transition: box-shadow 0.2s, transform 0.2s, border-color 0.2s;
        }

        .dlm-feature-card:hover {
            box-shadow: var(--shadow);
            transform: translateY(-2px);
            border-color: rgba(37, 99, 255, 0.2);
        }

        .dlm-feature-card .fc-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--surface-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 14px;
        }

        .dlm-feature-card h6 {
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 6px;
        }

        .dlm-feature-card p {
            font-size: 13.5px;
            color: rgba(10, 10, 18, 0.55);
            line-height: 1.6;
            margin: 0;
        }

        /* ============================================================
       SECTION: WHO IT'S FOR
       ============================================================ */
        #audience {
            scroll-margin-top: 60px;
        }

        .dlm-audience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 12px;
            margin-top: 28px;
        }

        .dlm-audience-chip {
            display: flex;
            align-items: center;
            gap: 10px;
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 14px 16px;
            font-size: 14px;
            font-weight: 500;
            color: var(--ink);
            transition: all 0.2s;
        }

        .dlm-audience-chip:hover {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
            transform: translateY(-1px);
        }

        .dlm-audience-chip .chip-icon {
            font-size: 18px;
        }

        /* ============================================================
       SECTION: OUTCOMES - Steps style
       ============================================================ */
        #outcomes {
            scroll-margin-top: 60px;
        }

        .dlm-outcomes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin-top: 28px;
        }

        .dlm-outcome-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
            position: relative;
            overflow: hidden;
        }

        .dlm-outcome-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), #7bb3ff);
        }

        .dlm-outcome-card .oc-number {
            font-family: var(--font-display);
            font-size: 44px;
            font-weight: 800;
            color: var(--surface-2);
            line-height: 1;
            margin-bottom: 8px;
        }

        .dlm-outcome-card h6 {
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 6px;
        }

        .dlm-outcome-card p {
            font-size: 13.5px;
            color: rgba(10, 10, 18, 0.55);
            margin: 0;
        }

        /* Jobs strip */
        .dlm-jobs-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 28px;
        }

        .dlm-job-tag {
            display: flex;
            align-items: center;
            gap: 6px;
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 8px 14px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--ink);
        }

        .dlm-job-tag .tag-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--green);
        }

        /* ============================================================
       SECTION: UNITS - Accordion
       ============================================================ */
        #units {
            scroll-margin-top: 60px;
        }

        .dlm-unit-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 24px;
            background: var(--surface-2);
            padding: 4px;
            border-radius: 12px;
            width: fit-content;
        }

        .dlm-unit-tab {
            padding: 9px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            border: none;
            background: transparent;
            color: rgba(10, 10, 18, 0.5);
        }

        .dlm-unit-tab.active {
            background: var(--surface-card);
            color: var(--accent);
            box-shadow: var(--shadow-sm);
        }

        .dlm-unit-panel {
            display: none;
        }

        .dlm-unit-panel.active {
            display: block;
        }

        .dlm-unit-row {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 16px 20px;
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            margin-bottom: 8px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .dlm-unit-row:hover {
            border-color: rgba(37, 99, 255, 0.25);
            box-shadow: var(--shadow-sm);
        }

        .dlm-unit-row .unit-badge {
            font-size: 11px;
            font-weight: 500;
            color: var(--accent);
            background: rgba(37, 99, 255, 0.08);
            border: 1px solid rgba(37, 99, 255, 0.2);
            padding: 3px 9px;
            border-radius: 6px;
            white-space: nowrap;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .dlm-unit-row .unit-title {
            font-size: 14.5px;
            font-weight: 500;
            color: var(--ink);
            line-height: 1.4;
        }

        .dlm-core-badge .unit-badge {
            color: #16a34a;
            background: rgba(22, 163, 74, 0.08);
            border-color: rgba(22, 163, 74, 0.2);
        }

        /* ============================================================
       SECTION: ENTRY REQUIREMENTS - Steps
       ============================================================ */
        #entry {
            scroll-margin-top: 60px;
        }

        .dlm-steps {
            display: flex;
            flex-direction: column;
            gap: 0;
            margin-top: 28px;
            position: relative;
        }

        .dlm-step {
            display: flex;
            gap: 20px;
            position: relative;
            padding-bottom: 28px;
        }

        .dlm-step:last-child {
            padding-bottom: 0;
        }
        .dlm-step-content {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px 24px;
            flex: 1;
            margin-top: 4px;
        }

        .dlm-step-content h6 {
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 700;
            color: var(--ink);
            margin-bottom: 10px;
        }

        .dlm-step-content p,
        .dlm-step-content li {
            font-size: 14.5px;
            color: rgba(10, 10, 18, 0.65);
            line-height: 1.7;
        }

        .dlm-step-content ul {
            padding-left: 18px;
            margin: 8px 0 0;
        }

        .dlm-alert {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            background: rgba(220, 38, 38, 0.07);
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 13.5px;
            color: var(--red);
            margin-top: 10px;
            font-weight: 500;
        }

        /* ============================================================
       SECTION: DELIVERY MODES
       ============================================================ */
        #delivery {
            scroll-margin-top: 60px;
        }

        .dlm-delivery-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
            margin-top: 28px;
        }

        .dlm-delivery-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: all 0.25s;
            position: relative;
            overflow: hidden;
        }

        .dlm-delivery-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-3px);
            border-color: rgba(37, 99, 255, 0.3);
        }

        .dlm-delivery-card .dc-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: var(--accent);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            padding: 3px 9px;
            border-radius: 6px;
            letter-spacing: 0.04em;
        }

        .dlm-delivery-card .dc-icon-wrap {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            background: var(--surface-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 18px;
        }

        .dlm-delivery-card .dc-title {
            font-family: var(--font-display);
            font-size: 18px;
            font-weight: 800;
            color: var(--ink);
            margin-bottom: 10px;
        }

        .dlm-delivery-card p {
            font-size: 13.5px;
            color: rgba(10, 10, 18, 0.55);
            line-height: 1.7;
            margin-bottom: 14px;
        }

        .dlm-delivery-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dlm-delivery-card ul li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13.5px;
            color: rgba(10, 10, 18, 0.6);
            padding: 4px 0;
        }

        .dlm-delivery-card.featured ul li {
            color: rgba(255, 255, 255, 0.6);
        }

        .dlm-delivery-card ul li::before {
            content: '✓';
            color: var(--green);
            font-weight: 700;
            font-size: 13px;
        }

        /* ============================================================
       SECTION: PATHWAYS
       ============================================================ */
        #pathways {
            scroll-margin-top: 60px;
        }

        .dlm-pathway-flow {
            display: flex;
            align-items: center;
            gap: 0;
            margin-top: 28px;
            overflow-x: auto;
            padding-bottom: 8px;
        }

        .dlm-pathway-card {
            flex-shrink: 0;
            width: 22.8%;
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
        }

        .dlm-pathway-card.current {
            background: var(--accent);
            border-color: var(--accent);
            box-shadow: 0 8px 24px rgba(37, 99, 255, 0.35);
        }

        .dlm-pathway-card.current .pf-code {
            color: rgba(255, 255, 255, 0.7);
        }

        .dlm-pathway-card.current .pf-title {
            color: #fff;
        }

        .dlm-pathway-arrow {
            flex-shrink: 0;
            width: 36px;
            text-align: center;
            color: rgba(10, 10, 18, 0.3);
            font-size: 20px;
        }

        .dlm-pathway-card .pf-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .dlm-pathway-card .pf-code {
            font-size: 11px;
            font-weight: 700;
            color: var(--accent);
            letter-spacing: 0.06em;
            text-transform: uppercase;
            margin-bottom: 4px;
        }

        .dlm-pathway-card .pf-title {
            font-family: var(--font-display);
            font-size: 13.5px;
            font-weight: 700;
            color: var(--ink);
            line-height: 1.3;
        }

        /* ============================================================
       SECTION: ACCORDION - FAQ/Why Choose Us
       ============================================================ */
        #why {
            scroll-margin-top: 60px;
        }

        .dlm-accordion {
            margin-top: 28px;
        }

        .dlm-accordion-item {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            margin-bottom: 10px;
            overflow: hidden;
            transition: border-color 0.2s;
        }

        .dlm-accordion-item.open {
            border-color: rgba(37, 99, 255, 0.3);
            box-shadow: var(--shadow-sm);
        }

        .dlm-accordion-trigger {
            display: flex;
            align-items: center;
            gap: 14px;
            width: 100%;
            padding: 18px 24px;
            background: none;
            border: none;
            cursor: pointer;
            text-align: left;
        }

        .dlm-accordion-trigger .acc-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: var(--surface-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
            transition: background 0.2s;
        }

        .dlm-accordion-item.open .acc-icon {
            background: rgba(37, 99, 255, 0.1);
        }

        .dlm-accordion-trigger h6 {
            font-family: var(--font-display);
            font-size: 15.5px;
            font-weight: 700;
            color: var(--ink);
            flex: 1;
            margin: 0;
        }

        .dlm-accordion-trigger .acc-chevron {
            font-size: 12px;
            color: rgba(10, 10, 18, 0.4);
            transition: transform 0.25s;
        }

        .dlm-accordion-item.open .acc-chevron {
            transform: rotate(180deg);
        }

        .dlm-accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 24px 0 74px;
        }

        .dlm-accordion-item.open .dlm-accordion-body {
            max-height: 500px;
            padding-bottom: 20px;
        }

        .dlm-accordion-body p,
        .dlm-accordion-body li {
            font-size: 14.5px;
            color: rgba(10, 10, 18, 0.62);
            line-height: 1.7;
        }

        .dlm-accordion-body ul {
            padding-left: 18px;
            margin: 8px 0 0;
        }

        /* ============================================================
       SIDEBAR
       ============================================================ */
        .dlm-sidebar-sticky {
            position: sticky;
            top: 80px;
        }

        .dlm-sidebar-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
        }

        .dlm-sidebar-card-head {
            background: var(--ink-2);
            padding: 20px 24px;
            color: #fff;
        }

        .dlm-sidebar-card-head h5 {
            font-family: var(--font-display);
            font-size: 18px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 4px;
        }

        .dlm-sidebar-card-head p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.55);
            margin: 0;
        }

        .dlm-sidebar-form-wrap {
            padding: 4px;
        }

        .dlm-sidebar-programs h6 {
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            color: var(--ink);
            padding: 16px 20px 12px;
            border-bottom: 1px solid var(--border);
            margin: 0;
        }

        /* Trust badges */
        .dlm-trust-badges {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 20px;
        }

        .dlm-trust-badge {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            background: var(--surface);
            border-radius: 10px;
            font-size: 13.5px;
            font-weight: 500;
            color: var(--ink);
        }

        .dlm-trust-badge .tb-icon {
            font-size: 18px;
        }

        /* Google review card */
        .dlm-review-card {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: var(--shadow-sm);
        }

        .dlm-review-card .rc-head {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        .dlm-review-card .rc-stars {
            color: #e8a117;
            font-size: 16px;
        }

        .dlm-review-card .rc-count {
            font-size: 13px;
            color: rgba(10, 10, 18, 0.5);
        }

        .dlm-review-card .rc-title {
            font-family: var(--font-display);
            font-size: 22px;
            font-weight: 800;
            color: var(--ink);
            margin-bottom: 2px;
        }

        /* ============================================================
       TESTIMONIALS
       ============================================================ */
        .dlm-testimonials {
            background: var(--ink-2);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .dlm-testimonials::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse 70% 80% at 50% 50%, rgba(37, 99, 255, 0.1) 0%, transparent 60%);
        }

        .dlm-testimonials .dlm-section-label {
            color: #7bb3ff;
        }

        .dlm-testimonials .dlm-section-label::before {
            background: #7bb3ff;
        }

        .dlm-testimonials .dlm-section-title {
            color: #fff;
        }

        .dlm-testi-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 32px;
        }

        .dlm-testi-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: background 0.2s;
        }

        .dlm-testi-card:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .dlm-testi-card .tc-stars {
            color: var(--gold);
            font-size: 14px;
            margin-bottom: 14px;
        }

        .dlm-testi-card .tc-text {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .dlm-testi-card .tc-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dlm-testi-card .tc-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(37, 99, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-display);
            font-weight: 800;
            color: #fff;
            font-size: 15px;
            flex-shrink: 0;
        }

        .dlm-testi-card .tc-name {
            font-family: var(--font-display);
            font-size: 15px;
            font-weight: 700;
            color: #fff;
        }

        .dlm-testi-card .tc-role {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.45);
        }

        /* ============================================================
       CTA BANNER
       ============================================================ */
        .dlm-cta-banner {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-2) 100%);
            border-radius: var(--radius-xl);
            padding: 56px 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            flex-wrap: wrap;
            position: relative;
            overflow: hidden;
            margin: 60px 0;
        }

        .dlm-cta-banner::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
        }

        .dlm-cta-banner::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: 20%;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.04);
        }

        .dlm-cta-banner h3 {
            font-family: var(--font-display);
            font-size: clamp(22px, 3vw, 32px);
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            position: relative;
        }

        .dlm-cta-banner p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 8px;
            position: relative;
        }

        .dlm-cta-btn-white {
            background: #fff;
            color: var(--accent);
            padding: 15px 32px;
            border-radius: 12px;
            font-family: var(--font-display);
            font-size: 16px;
            font-weight: 800;
            text-decoration: none;
            white-space: nowrap;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            flex-shrink: 0;
        }

        .dlm-cta-btn-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.25);
            color: var(--accent);
            text-decoration: none;
        }

        /* ============================================================
       UTILITIES
       ============================================================ */
        .dlm-divider {
            height: 1px;
            background: var(--border);
            margin: 60px 0;
        }

        .dlm-section-gap {
            margin-top: 64px;
        }

        .dlm-industries {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 14px;
        }

        .dlm-industry-tag {
            background: var(--surface-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 6px 13px;
            font-size: 13px;
            color: rgba(10, 10, 18, 0.65);
            font-weight: 500;
        }

        /* ============================================================
       RESPONSIVE
       ============================================================ */
        @media (max-width: 991px) {
            .dlm-hero {
                padding: 70px 0 60px;
            }

            .dlm-hero-card {
                margin-top: 40px;
            }

            .dlm-pathway-flow {
                flex-wrap: wrap;
                gap: 12px;
            }

            .dlm-pathway-arrow {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .dlm-cta-banner {
                padding: 36px 28px;
            }

            .dlm-hero-stats {
                gap: 20px;
            }

            .dlm-hero-divider {
                display: none;
            }
        }
    </style>