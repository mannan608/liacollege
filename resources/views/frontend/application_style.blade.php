<style>
  :root {
    --bg: #0a0c10;
    --surface: #111318;
    --surface-2: #181c24;
    --border: rgba(255,255,255,0.07);
    --border-active: rgba(99,179,237,0.45);
    --accent: #63b3ed;
    --accent-2: #4fd1c5;
    --accent-glow: rgba(99,179,237,0.15);
    --text-primary: #f0f4ff;
    --text-secondary: #8896b0;
    --text-muted: #4a5568;
    --error: #fc8181;
    --success: #68d391;
    --step-active: #63b3ed;
    --step-done: #4fd1c5;
    --step-inactive: #2d3748;
    --radius: 12px;
    --radius-sm: 8px;
    --font-display: 'Syne', sans-serif;
    --font-body: 'DM Sans', sans-serif;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    color: var(--text-primary);
    font-family: var(--font-body);
    min-height: 100vh;
    font-size: 14px;
    line-height: 1.6;
  }
  table#appliedCoursesGrid th {
    background-color: transparent;
  }
  input[type="checkbox"] {
    padding: 10px !important;
      width: auto !important;
  }
  /* ── Background atmosphere ── */
  .app-shell {
    min-height: 100vh;
    background:
      radial-gradient(ellipse 80% 50% at 20% -10%, rgba(99,179,237,0.08) 0%, transparent 60%),
      radial-gradient(ellipse 60% 40% at 80% 110%, rgba(79,209,197,0.06) 0%, transparent 55%),
      #e5e5e5;
    padding: 0 0 80px;
  }
  ul#unitDetailsList li {
    color: white;
  }
  div#unitAccordionContent{
    background: black;
  }

  /* ── Breadcrumb ── */
  .breadcrumb-bar {
    background: rgba(17,19,24,0.9);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
    padding: 14px 0;
    position: sticky;
    top: 0;
    z-index: 50;
  }
  .breadcrumb-inner {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    color: var(--text-secondary);
  }
  .breadcrumb-inner a { color: var(--text-secondary); text-decoration: none; transition: color .2s; }
  .breadcrumb-inner a:hover { color: var(--accent); }
  .breadcrumb-inner .sep { color: var(--text-muted); }
  .breadcrumb-inner .current { color: var(--accent); font-weight: 500; }

  /* ── Page header ── */
  .page-header {
    max-width: 900px;
    margin: 48px auto 0;
    padding: 0 24px;
  }
  .ref-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(99,179,237,0.08);
    border: 1px solid rgba(99,179,237,0.2);
    border-radius: 100px;
    padding: 4px 12px;
    font-size: 11px;
    color: var(--accent);
    font-weight: 500;
    letter-spacing: 0.03em;
    margin-bottom: 20px;
  }
  .ref-badge svg { width: 12px; height: 12px; opacity: 0.7; }
  .page-title {
    font-family: var(--font-display);
    font-size: clamp(26px, 4vw, 38px);
    font-weight: 800;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #4fd1c5 0%, #63b3ed 60%, #4fd1c5 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 8px;
  }
  .page-subtitle {
    color: var(--text-secondary);
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  .page-subtitle a { color: var(--accent); text-decoration: none; }

  /* ── Step progress ── */
  .stepper-wrap {
    max-width: 900px;
    margin: 36px auto 0;
    padding: 0 24px;
  }
  .stepper {
    display: flex;
    align-items: center;
    gap: 0;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 6px;
    overflow-x: auto;
    scrollbar-width: none;
  }
  .stepper::-webkit-scrollbar { display: none; }
  .step-item {
    flex: 1;
    min-width: 140px;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: all .25s ease;
    position: relative;
  }
  .step-item.active {
    background: rgba(99,179,237,0.1);
    border: 1px solid rgba(99,179,237,0.25);
  }
  .step-item.done { cursor: pointer; }
  .step-num {
    width: 28px; height: 28px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 11px;
    font-weight: 700;
    flex-shrink: 0;
    font-family: var(--font-display);
    transition: all .25s;
  }
  .step-item .step-num { background: var(--step-inactive); color: var(--text-muted); }
  .step-item.active .step-num { background: var(--accent); color: #0a0c10; }
  .step-item.done .step-num { background: var(--step-done); color: #0a0c10; }
  .step-label { font-size: 11px; line-height: 1.3; }
  .step-label .step-n { color: var(--text-muted); font-size: 10px; text-transform: uppercase; letter-spacing: 0.05em; }
  .step-label .step-name { font-weight: 500; color: var(--text-secondary); }
  .step-item.active .step-label .step-name { color: var(--text-primary); }
  .step-divider { width: 1px; height: 28px; background: var(--border); flex-shrink: 0; }

  /* ── Main form card ── */
  .form-card {
    max-width: 900px;
    margin: 24px auto 0;
    padding: 0 24px;
  }
  .form-panel {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 16px;
    overflow: hidden;
  }
  .panel-header {
    padding: 28px 32px 24px;
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    gap: 14px;
  }
  .panel-icon {
    width: 40px; height: 40px;
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    background: var(--accent-glow);
    border: 1px solid rgba(99,179,237,0.2);
  }
  .panel-icon svg { width: 20px; height: 20px; color: var(--accent); }
  .panel-title {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 700;
    color: var(--text-primary);
  }
  .panel-desc { font-size: 12px; color: var(--text-secondary); margin-top: 2px; }

  .panel-body { padding: 32px; }

  /* ── Section blocks ── */
  .form-section {
    margin-bottom: 40px;
  }
  .form-section:last-child { margin-bottom: 0; }
  .section-label {
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--accent);
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .preview-section h3, .preview-section h4 {
    color: white;
  }
  .section-label::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, rgba(99,179,237,0.3) 0%, transparent 100%);
  }

  /* ── Grid ── */
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .grid-3 { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; }
  .col-full { grid-column: 1 / -1; }

  @media (max-width: 640px) {
    .grid-2, .grid-3 { grid-template-columns: 1fr; }
    .panel-body { padding: 20px; }
    .panel-header { padding: 20px; }
    .step-item { min-width: 110px; }
  }

  /* ── Inputs ── */
  .field { display: flex; flex-direction: column; gap: 6px; }
  .field label {
    font-size: 12px;
    font-weight: 500;
    color: var(--text-secondary);
    letter-spacing: 0.02em;
  }
  .field label .req {
    color: var(--accent);
    margin-left: 2px;
  }
  .field input,
  .field select,
  .field textarea {
    background: var(--surface-2);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    color: var(--text-primary);
    font-family: var(--font-body);
    font-size: 13px;
    padding: 10px 14px;
    outline: none;
    transition: border-color .2s, box-shadow .2s, background .2s;
    width: 100%;
    -webkit-appearance: none;
    appearance: none;
  }
  .field select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%238896b0' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px;
    padding-right: 36px;
  }
  .field input:focus,
  .field select:focus,
  .field textarea:focus {
    border-color: var(--border-active);
    background: rgba(24,28,36,0.9);
    box-shadow: 0 0 0 3px var(--accent-glow);
  }
  .field input::placeholder { color: var(--text-muted); }
  .field input[type="date"] { color-scheme: dark; }

  /* ── Radio / Toggle group ── */
  .radio-group { display: flex; flex-wrap: wrap; gap: 8px; }
  .radio-pill {
    display: flex; align-items: center; gap: 7px;
    background: var(--surface-2);
    border: 1px solid var(--border);
    border-radius: 100px;
    padding: 7px 14px;
    cursor: pointer;
    transition: all .2s;
    font-size: 12px;
    font-weight: 500;
    color: var(--text-secondary);
    user-select: none;
  }
  .radio-pill input { display: none; }
  .radio-pill:hover { border-color: rgba(99,179,237,0.3); color: var(--text-primary); }
  .radio-pill.selected {
    background: rgba(99,179,237,0.12);
    border-color: rgba(99,179,237,0.45);
    color: var(--accent);
  }
  .radio-pill .dot {
    width: 7px; height: 7px;
    border-radius: 50%;
    background: var(--text-muted);
    transition: background .2s;
  }
  .radio-pill.selected .dot { background: var(--accent); }

  /* ── Checkbox ── */
  .check-row {
    display: flex; align-items: flex-start; gap: 10px;
    padding: 12px 14px;
    background: var(--surface-2);
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: border-color .2s;
    user-select: none;
  }
  .check-row:hover { border-color: rgba(99,179,237,0.3); }
  .check-row input[type="checkbox"] { display: none; }
  .check-box {
    width: 18px; height: 18px; min-width: 18px;
    border-radius: 5px;
    border: 1.5px solid var(--text-muted);
    background: transparent;
    display: flex; align-items: center; justify-content: center;
    transition: all .2s;
    margin-top: 1px;
  }
  .check-row.checked .check-box {
    background: var(--accent);
    border-color: var(--accent);
  }
  .check-box svg { width: 11px; height: 11px; color: #0a0c10; display: none; }
  .check-row.checked .check-box svg { display: block; }
  .check-text { font-size: 13px; color: var(--text-secondary); }
  .check-text strong { color: var(--text-primary); display: block; font-size: 13px; font-weight: 500; }

  /* ── Toggle ── */
  .toggle-field { display: flex; align-items: center; justify-content: space-between; padding: 12px 0; }
  .toggle-field .toggle-label { font-size: 13px; color: var(--text-secondary); font-weight: 400; }
  .toggle-field .toggle-label strong { color: var(--text-primary); display: block; font-weight: 500; }
  .toggle-switch { position: relative; width: 40px; height: 22px; flex-shrink: 0; }
  .toggle-switch input { display: none; }
  .toggle-track {
    position: absolute; inset: 0;
    background: var(--surface-2);
    border: 1px solid var(--border);
    border-radius: 100px;
    cursor: pointer;
    transition: all .25s;
  }
  .toggle-thumb {
    position: absolute;
    top: 3px; left: 3px;
    width: 14px; height: 14px;
    background: var(--text-muted);
    border-radius: 50%;
    transition: all .25s;
    pointer-events: none;
  }
  .toggle-switch input:checked ~ .toggle-track { background: rgba(99,179,237,0.2); border-color: rgba(99,179,237,0.5); }
  .toggle-switch input:checked ~ .toggle-thumb { left: 21px; background: var(--accent); }

  /* ── Info box ── */
  .info-box {
    background: rgba(99,179,237,0.06);
    border: 1px solid rgba(99,179,237,0.15);
    border-radius: var(--radius-sm);
    padding: 12px 16px;
    font-size: 12px;
    color: var(--text-secondary);
    display: flex; gap: 10px; align-items: flex-start;
  }
  .info-box svg { width: 15px; height: 15px; color: var(--accent); flex-shrink: 0; margin-top: 1px; }

  /* ── Course card ── */
  .course-card {
    background: var(--surface-2);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 20px;
    margin-top: 16px;
    transition: border-color .2s;
  }
  .course-card:hover { border-color: rgba(99,179,237,0.3); }
  .course-card-header {
    display: flex; align-items: flex-start; justify-content: space-between; gap: 16px;
    margin-bottom: 16px;
  }
  .course-code {
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    color: var(--accent);
    margin-bottom: 3px;
  }
  .course-name { font-size: 14px; font-weight: 500; color: var(--text-primary); }
  .course-fee {
    background: rgba(79,209,197,0.1);
    border: 1px solid rgba(79,209,197,0.25);
    border-radius: 8px;
    padding: 6px 12px;
    text-align: right;
    flex-shrink: 0;
  }
  .course-fee .fee-label { font-size: 10px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.05em; }
  .course-fee .fee-amount { font-family: var(--font-display); font-size: 18px; font-weight: 700; color: var(--accent-2); }
  .unit-list { list-style: none; display: flex; flex-direction: column; gap: 6px; }
  .unit-list li {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: var(--text-secondary);
  }
  .unit-list li::before {
    content: '';
    width: 4px; height: 4px;
    border-radius: 50%;
    background: var(--accent);
    flex-shrink: 0;
  }

  /* ── Collapsible section ── */
  .collapsible-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 14px 0;
    cursor: pointer;
    border-bottom: 1px solid var(--border);
  }
  .collapsible-header:first-child { border-top: none; }
  .collapsible-title { font-weight: 500; font-size: 13px; color: var(--text-primary); }
  .collapsible-icon {
    width: 24px; height: 24px;
    display: flex; align-items: center; justify-content: center;
    border-radius: 6px;
    background: var(--surface-2);
    transition: transform .25s, background .2s;
  }
  .collapsible-icon svg { width: 14px; height: 14px; color: var(--text-secondary); }
  .collapsible.open .collapsible-icon { transform: rotate(180deg); background: rgba(99,179,237,0.1); }
  .collapsible-body { padding: 16px 0; display: none; }
  .collapsible.open .collapsible-body { display: block; }

  /* ── Navigation buttons ── */
  .form-nav {
    padding: 24px 32px;
    border-top: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
  }
  .btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 10px 22px;
    border-radius: var(--radius-sm);
    font-family: var(--font-body);
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: all .2s;
    text-decoration: none;
    letter-spacing: 0.01em;
    white-space: nowrap;
  }
  .btn-ghost {
    background: transparent;
    color: var(--text-secondary);
    border: 1px solid var(--border);
  }
  .btn-ghost:hover { border-color: rgba(255,255,255,0.15); color: var(--text-primary); }
  .btn-primary {
    background: var(--accent);
    color: #0a0c10;
    box-shadow: 0 4px 15px rgba(99,179,237,0.25);
  }
  .btn-primary:hover { background: #90cdf4; box-shadow: 0 6px 20px rgba(99,179,237,0.35); transform: translateY(-1px); }
  .btn-primary:active { transform: translateY(0); }
  .btn-submit {
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-2) 100%);
    color: #0a0c10;
    box-shadow: 0 4px 20px rgba(99,179,237,0.3);
  }
  .btn-submit:hover { box-shadow: 0 6px 28px rgba(99,179,237,0.45); transform: translateY(-1px); }
  .btn-save {
    background: transparent;
    color: var(--text-secondary);
    font-size: 12px;
    padding: 8px 14px;
  }
  .btn-save:hover { color: var(--text-primary); }
  .btn-add {
    background: rgba(99,179,237,0.08);
    border: 1px dashed rgba(99,179,237,0.3);
    color: var(--accent);
    width: 100%;
    justify-content: center;
    margin-top: 12px;
    padding: 12px;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all .2s;
  }
  .btn-add:hover { background: rgba(99,179,237,0.14); border-color: rgba(99,179,237,0.5); }
  .btn svg { width: 16px; height: 16px; }

  /* ── Step panels ── */
  .step-panel { display: none; }
  .step-panel.active { display: block; }

  /* ── Divider ── */
  .h-divider { height: 1px; background: var(--border); margin: 24px 0; }

  /* ── Notification / AJAX console overlay ── */
  .ajax-console {
    position: fixed;
    bottom: 24px; right: 24px;
    width: 380px;
    max-height: 320px;
    background: rgba(10,12,16,0.95);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    overflow: hidden;
    z-index: 999;
    display: none;
    flex-direction: column;
    box-shadow: 0 25px 60px rgba(0,0,0,0.6);
    animation: slideUp .3s ease;
  }
  .ajax-console.show { display: flex; }
  @keyframes slideUp { from { opacity:0; transform: translateY(20px); } to { opacity:1; transform: translateY(0); } }
  .console-header {
    padding: 10px 14px;
    display: flex; align-items: center; justify-content: space-between;
    background: var(--surface-2);
    border-bottom: 1px solid var(--border);
  }
  .console-header .console-title {
    font-size: 11px; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.08em; color: var(--accent);
    display: flex; align-items: center; gap: 6px;
  }
  .console-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--accent); animation: pulse 1.5s infinite; }
  @keyframes pulse { 0%,100% { opacity:1; } 50% { opacity:0.3; } }
  .console-close { background: none; border: none; color: var(--text-muted); cursor: pointer; font-size: 16px; padding: 2px 6px; border-radius: 4px; }
  .console-close:hover { color: var(--text-primary); background: rgba(255,255,255,0.05); }
  .console-body { overflow-y: auto; padding: 12px 14px; flex: 1; font-size: 11px; font-family: 'SF Mono', 'Fira Code', monospace; }
  .console-body::-webkit-scrollbar { width: 4px; }
  .console-body::-webkit-scrollbar-track { background: transparent; }
  .console-body::-webkit-scrollbar-thumb { background: var(--border); border-radius: 2px; }
  .console-entry { margin-bottom: 6px; }
  .console-key { color: var(--accent-2); }
  .console-val { color: var(--text-secondary); }
  .console-str { color: #f6ad55; }
  .console-meta { color: var(--text-muted); font-size: 10px; margin-bottom: 8px; }

  /* ── Toast ── */
  .toast {
    position: fixed; top: 24px; right: 24px;
    background: rgba(17,19,24,0.97);
    border: 1px solid rgba(104,211,145,0.3);
    border-radius: var(--radius-sm);
    padding: 12px 16px;
    display: flex; align-items: center; gap: 10px;
    font-size: 13px; color: var(--text-primary);
    z-index: 1000; box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    transform: translateX(120%);
    transition: transform .35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .toast.show { transform: translateX(0); }
  .toast-icon { width: 24px; height: 24px; border-radius: 50%; background: rgba(104,211,145,0.15); display: flex; align-items: center; justify-content: center; }
  .toast-icon svg { width: 14px; height: 14px; color: var(--success); }

  /* ── Loading spinner ── */
  .spin { animation: spin .8s linear infinite; }
  @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

  /* ── USI info ── */
  .usi-link { color: var(--accent); text-decoration: none; font-size: 12px; transition: opacity .2s; }
  .usi-link:hover { opacity: 0.8; text-decoration: underline; }
</style>