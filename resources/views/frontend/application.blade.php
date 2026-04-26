@extends('frontend.layouts.app')
@section('title', 'Application')
@section('content')

  {{-- Import Google Fonts --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap"
    rel="stylesheet">

  @include('frontend.application_style')

  <div class="app-shell"> 

    {{-- Breadcrumb --}}
    <div class="breadcrumb-bar">
      <div class="breadcrumb-inner">
        <a href="#">Home</a>
        <span class="sep">›</span>
        <span class="current">Application</span>
      </div>
    </div>

    {{-- Page Header --}}
    <div class="page-header">
      <div class="ref-badge">
        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path
            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        Ref: 0821217482
      </div>
      <h1 class="page-title">Student Online Application</h1>
      <p class="page-subtitle">
        <svg width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path
            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        <a href="mailto:admission@liacollege.edu.au">admission@liacollege.edu.au</a>
      </p>
    </div>

    {{-- Stepper --}}
    <div class="stepper-wrap">
      <div class="stepper" id="stepper">
        <div class="step-item active" data-step="1" onclick="goToStep(1)">
          <div class="step-num">1</div>
          <div class="step-label">
            <div class="step-n">Step 01</div>
            <div class="step-name">Personal</div>
          </div>
        </div>
        <div class="step-divider"></div>
        <div class="step-item" data-step="2" onclick="goToStep(2)">
          <div class="step-num">2</div>
          <div class="step-label">
            <div class="step-n">Step 02</div>
            <div class="step-name">Language & Education</div>
          </div>
        </div>
        <div class="step-divider"></div>
        <div class="step-item" data-step="3" onclick="goToStep(3)">
          <div class="step-num">3</div>
          <div class="step-label">
            <div class="step-n">Step 03</div>
            <div class="step-name">Enrolment</div>
          </div>
        </div>
        <div class="step-divider"></div>
        <div class="step-item" data-step="4" onclick="goToStep(4)">
          <div class="step-num">4</div>
          <div class="step-label">
            <div class="step-n">Step 04</div>
            <div class="step-name">Preview</div>
          </div>
        </div>
      </div>
    </div>

    {{-- Form --}}
    <div class="form-card">
      <form id="applicationForm" novalidate onsubmit="submitApplication(event)">
        @csrf

        {{-- ════════════════════════════════════════
        STEP 1: Personal Information
        ════════════════════════════════════════ --}}
        <div class="step-panel active" id="step-1">
          <div class="form-panel">
            <div class="panel-header">
              <div class="panel-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
              </div>
              <div>
                <div class="panel-title">Student Type & Personal Information</div>
                <div class="panel-desc">Tell us about yourself and your student status</div>
              </div>
            </div>
            <div class="panel-body">

              {{-- Student Type --}}
              <div class="form-section">
                <div class="section-label">Student Type</div>
                <div class="radio-group">
                  <label class="radio-pill selected" id="pill-citizen">
                    <input type="radio" name="student_type" value="australian_citizen" checked
                      onchange="updatePills('student_type', this)">
                    <span class="dot"></span> Australian Citizen
                  </label>
                  <label class="radio-pill" id="pill-pr">
                    <input type="radio" name="student_type" value="permanent_resident"
                      onchange="updatePills('student_type', this)">
                    <span class="dot"></span> Permanent Resident
                  </label>
                  <label class="radio-pill" id="pill-other">
                    <input type="radio" name="student_type" value="other" onchange="updatePills('student_type', this)">
                    <span class="dot"></span> Other
                  </label>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Personal Info --}}
              <div class="form-section">
                <div class="section-label">Personal Details</div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Title</label>
                    <select name="title">
                      <option value="">Not Specified</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
                      <option value="Miss">Miss</option>
                      <option value="Ms">Ms</option>
                      <option value="Dr">Dr</option>
                      <option value="Rev">Rev</option>
                      <option value="Hon">Hon</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Nickname</label>
                    <input type="text" name="nickname" placeholder="Preferred name">
                  </div>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>First Name <span class="req">*</span></label>
                    <input type="text" name="first_name" placeholder="First name" required>
                  </div>
                  <div class="field">
                    <label>Middle Name</label>
                    <input type="text" name="middle_name" placeholder="Middle name">
                  </div>
                  <div class="field">
                    <label>Family Name <span class="req">*</span></label>
                    <input type="text" name="family_name" placeholder="Family name" required>
                  </div>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Gender</label>
                    <select name="gender">
                      <option value="">Select gender</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other/Not specified</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Date of Birth <span class="req">*</span></label>
                    <input type="date" name="date_of_birth" required>
                  </div>
                  <div class="field">
                    <label>Email <span class="req">*</span></label>
                    <input type="email" name="email" placeholder="your@email.com" required>
                  </div>
                </div>
                <div class="grid-2">
                  <div class="field">
                    <label>Birthplace (City)</label>
                    <input type="text" name="birthplace_city" placeholder="City of birth">
                  </div>
                  <div class="field">
                    <label>Country of Birth</label>
                    <select name="country_of_birth">
                      <option value="">Select country</option>
                      @foreach ($countries as $country)
                        <option value="{{ $country }}" @selected(old('country_of_birth', $data['country_of_birth'] ?? '') === $country)>
                          {{ $country }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Nationality & ID --}}
              <div class="form-section">
                <div class="section-label">Identity & Nationality</div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Nationality</label>
                    <select name="nationality">
                      <option value="">Select country</option>
                      @foreach ($countries as $country)
                        <option value="{{ $country }}" @selected(old('country_of_birth', $data['country_of_birth'] ?? '') === $country)>
                          {{ $country }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="field">
                    <label>Identification No.</label>
                    <input type="text" name="identification_no" placeholder="ID number">
                  </div>
                  <div class="field">
                    <label>
                      USI - Unique Student Identifier
                      <a href="http://www.usi.gov.au/About/Pages/default.aspx" target="_blank" class="usi-link"
                        style="margin-left:6px;">What is USI?</a>
                      |<a href="http://www.usi.gov.au/Students/Pages/steps-to-create-your-USI.aspx" target="_blank"
                        class="usi-link" style="margin-left:6px;">Steps to Create your own USI</a>
                    </label>
                    <input type="text" name="usi" placeholder="Leave blank if not available">
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Contact Details --}}
              <div class="form-section">
                <div class="section-label">Contact Details</div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Building / Property Name</label>
                    <input type="text" name="cd_building_name" placeholder="Building or property name">
                  </div>
                  <div class="field">
                    <label>Flat / Unit Details</label>
                    <input type="text" name="cd_flat_unit" placeholder="Unit number">
                  </div>
                </div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Street Number <span class="req">*</span></label>
                    <input type="text" name="cd_street_number" placeholder="Street number" required>
                  </div>
                  <div class="field">
                    <label>Street Name <span class="req">*</span></label>
                    <input type="text" name="cd_street_name" placeholder="Street name" required>
                  </div>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>City / Town / Suburb <span class="req">*</span></label>
                    <input type="text" name="cd_city" placeholder="Suburb or city" required>
                  </div>
                  <div class="field">
                    <label>State</label>
                    <select name="cd_state">
                      <option value="ACT">ACT</option>
                      <option selected="selected" value="NSW">NSW</option>
                      <option value="NT">NT</option>
                      <option value="QLD">QLD</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                      <option value="VIC">VIC</option>
                      <option value="WA">WA</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Postcode <span class="req">*</span></label>
                    <input type="text" name="cd_postcode" placeholder="Postcode" required>
                  </div>
                </div>
                <div class="field" style="margin-bottom:16px;">
                  <label>Country</label>
                  <select name="cd_country">
                    <option>Australia</option>
                  </select>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Primary Contact</label>
                    <input type="tel" name="cd_primary_contact" placeholder="Primary phone">
                  </div>
                  <div class="field">
                    <label>Alternate Contact</label>
                    <input type="tel" name="cd_alternate_contact" placeholder="Alternate phone">
                  </div>
                  <div class="field">
                    <label>Mobile Phone <span class="req">*</span></label>
                    <input type="tel" name="cd_mobile_phone" placeholder="Mobile number" required>
                  </div>
                </div>

                {{-- Toggle: different mailing address --}}
                <div
                  style="background:var(--surface-2);border:1px solid var(--border);border-radius:var(--radius-sm);padding:4px 14px;margin-bottom:8px;">
                  <div class="toggle-field">
                    <div class="toggle-label">
                      <strong>Different Mailing Address?</strong>
                      <span>Use a separate address for mail</span>
                    </div>
                    <label class="toggle-switch">
                      <input type="checkbox" name="different_mailing" id="toggle-mailing" value="1">
                      <div class="toggle-track"></div>
                      <div class="toggle-thumb"></div>
                    </label>
                  </div>
                </div>
                <div
                  style="background:var(--surface-2);border:1px solid var(--border);border-radius:var(--radius-sm);padding:4px 14px;">
                  <div class="toggle-field">
                    <div class="toggle-label">
                      <strong>Overseas / Permanent Address?</strong>
                      <span>Add an overseas or permanent address</span>
                    </div>
                    <label class="toggle-switch">
                      <input type="checkbox" name="overseas_address" id="toggle-overseas" value="1">
                      <div class="toggle-track"></div>
                      <div class="toggle-thumb"></div>
                    </label>
                  </div>
                </div>
              </div>

              {{-- Postal Address --}}
              <div class="form-section d-none" id="postal_address_div">
                <div class="section-label">Postal Address</div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Building / Property Name</label>
                    <input type="text" name="pa_building_name" placeholder="Building or property name">
                  </div>
                  <div class="field">
                    <label>Flat / Unit Details</label>
                    <input type="text" name="pa_flat_unit" placeholder="Unit number">
                  </div>
                </div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Street Number <span class="req">*</span></label>
                    <input type="text" name="pa_street_number" placeholder="Street number" required>
                  </div>
                  <div class="field">
                    <label>Street Name <span class="req">*</span></label>
                    <input type="text" name="pa_street_name" placeholder="Street name" required>
                  </div>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>City / Town / Suburb <span class="req">*</span></label>
                    <input type="text" name="pa_city" placeholder="Suburb or city" required>
                  </div>
                  <div class="field">
                    <label>State</label>
                    <select name="pa_state">
                      <option value="ACT">ACT</option>
                      <option selected="selected" value="NSW">NSW</option>
                      <option value="NT">NT</option>
                      <option value="QLD">QLD</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                      <option value="VIC">VIC</option>
                      <option value="WA">WA</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Postcode <span class="req">*</span></label>
                    <input type="text" name="pa_postcode" placeholder="Postcode" required>
                  </div>
                </div>
                <div class="field" style="margin-bottom:16px;">
                  <label>Country</label>
                  <select name="pa_country">
                    <option>Australia</option>
                  </select>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Primary Contact</label>
                    <input type="tel" name="pa_primary_contact" placeholder="Primary phone">
                  </div>
                  <div class="field">
                    <label>Alternate Contact</label>
                    <input type="tel" name="pa_alternate_contact" placeholder="Alternate phone">
                  </div>
                  <div class="field">
                    <label>Mobile Phone <span class="req">*</span></label>
                    <input type="tel" name="pa_mobile_phone" placeholder="Mobile number" required>
                  </div>
                </div>
              </div>

              {{-- Overseas/Permanent Address --}}
              <div class="form-section d-none" id="overseas_permanent_address_div">
                <div class="section-label">Overseas/Permanent Address</div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Building / Property Name</label>
                    <input type="text" name="opa_building_name" placeholder="Building or property name">
                  </div>
                  <div class="field">
                    <label>Flat / Unit Details</label>
                    <input type="text" name="opa_flat_unit" placeholder="Unit number">
                  </div>
                </div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Street Number <span class="req">*</span></label>
                    <input type="text" name="opa_street_number" placeholder="Street number" required>
                  </div>
                  <div class="field">
                    <label>Street Name <span class="req">*</span></label>
                    <input type="text" name="opa_street_name" placeholder="Street name" required>
                  </div>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>City / Town / Suburb <span class="req">*</span></label>
                    <input type="text" name="opa_city" placeholder="Suburb or city" required>
                  </div>
                  <div class="field">
                    <label>State</label>
                    <select name="opa_state">
                      <option value="ACT">ACT</option>
                      <option selected="selected" value="NSW">NSW</option>
                      <option value="NT">NT</option>
                      <option value="QLD">QLD</option>
                      <option value="SA">SA</option>
                      <option value="TAS">TAS</option>
                      <option value="VIC">VIC</option>
                      <option value="WA">WA</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Postcode <span class="req">*</span></label>
                    <input type="text" name="opa_postcode" placeholder="Postcode" required>
                  </div>
                </div>
                <div class="field" style="margin-bottom:16px;">
                  <label>Country</label>
                  <select name="opa_country">
                    <option>Australia</option>
                  </select>
                </div>
                <div class="grid-3" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Primary Contact</label>
                    <input type="tel" name="opa_primary_contact" placeholder="Primary phone">
                  </div>
                  <div class="field">
                    <label>Alternate Contact</label>
                    <input type="tel" name="opa_alternate_contact" placeholder="Alternate phone">
                  </div>
                  <div class="field">
                    <label>Mobile Phone <span class="req">*</span></label>
                    <input type="tel" name="opa_mobile_phone" placeholder="Mobile number" required>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-nav">
              <button type="button" class="btn btn-ghost btn-save">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                </svg>
                Save for later
              </button>
              <button type="button" class="btn btn-primary" onclick="nextStep()">
                Continue
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        {{-- ════════════════════════════════════════
        STEP 2: Language & Education
        ════════════════════════════════════════ --}}
        <div class="step-panel" id="step-2">
          <div class="form-panel">
            <div class="panel-header">
              <div class="panel-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                </svg>
              </div>
              <div>
                <div class="panel-title">Language, Cultural Diversity & Education</div>
                <div class="panel-desc">Background information to support your enrolment</div>
              </div>
            </div>
            <div class="panel-body">

              {{-- Cultural Diversity --}}
              <div class="form-section">
                <div class="section-label">Cultural Diversity</div>
                <div class="field" style="margin-bottom:16px;">
                  <label>Are you of Australian Aboriginal or Torres Strait Islander origin?</label>
                  <div class="radio-group" style="margin-top:8px;">
                    <label class="radio-pill selected">
                      <input type="radio" name="aboriginal" value="not_stated" checked
                        onchange="updatePills('aboriginal', this)">
                      <span class="dot"></span> Not stated / Prefer not to say
                    </label>
                    <label class="radio-pill">
                      <input type="radio" name="aboriginal" value="no" onchange="updatePills('aboriginal', this)">
                      <span class="dot"></span> No
                    </label>
                    <label class="radio-pill">
                      <input type="radio" name="aboriginal" value="aboriginal_only"
                        onchange="updatePills('aboriginal', this)">
                      <span class="dot"></span> Yes, only Aboriginal
                    </label>
                    <label class="radio-pill">
                      <input type="radio" name="aboriginal" value="tsi_only" onchange="updatePills('aboriginal', this)">
                      <span class="dot"></span> Yes, only Torres Strait Islander
                    </label>
                    <label class="radio-pill">
                      <input type="radio" name="aboriginal" value="both" onchange="updatePills('aboriginal', this)">
                      <span class="dot"></span> Yes, both
                    </label>
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Language --}}
              <div class="form-section">
                <div class="section-label">Language</div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Is English your main language?</label>
                    <div class="radio-group" style="margin-top:8px;">
                      <label class="radio-pill selected">
                        <input type="radio" name="english_main" value="yes" checked
                          onchange="updatePills('english_main', this); toggleMainLang(false)">
                        <span class="dot"></span> Yes
                      </label>
                      <label class="radio-pill">
                        <input type="radio" name="english_main" value="no"
                          onchange="updatePills('english_main', this); toggleMainLang(true)">
                        <span class="dot"></span> No
                      </label>
                    </div>
                  </div>
                  <div class="field" id="main-lang-field" style="display:none;">
                    <label>Main language spoken at home</label>
                    <select name="main_language">
                      <option value="">Select country</option>
                      @foreach ($languages as $language)
                        <option value="{{ $language }}" @selected(old('main_language', $data['main_language'] ?? '') === $language)>
                          {{ $language }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Was English the language of instruction in previous studies?</label>
                    <div class="radio-group" style="margin-top:8px;">
                      <label class="radio-pill selected">
                        <input type="radio" name="english_instruction" value="yes" checked
                          onchange="updatePills('english_instruction', this)">
                        <span class="dot"></span> Yes
                      </label>
                      <label class="radio-pill">
                        <input type="radio" name="english_instruction" value="no"
                          onchange="updatePills('english_instruction', this)">
                        <span class="dot"></span> No
                      </label>
                    </div>
                  </div>
                  <div class="field">
                    <label>Completed a test of English proficiency?</label>
                    <div class="radio-group" style="margin-top:8px;">
                      <label class="radio-pill">
                        <input type="radio" name="english_test" value="yes" class="english_test">
                        <span class="dot"></span> Yes
                      </label>
                      <label class="radio-pill selected">
                        <input type="radio" name="english_test" value="no" class="english_test">
                        <span class="dot"></span> No
                      </label>
                    </div>
                  </div>
                </div>

                {{-- English Test Section --}}
                <div class="form-section d-none" id="englishTestSection">
                  <div class="section-label">English Test</div>

                  <div
                    style="background:var(--surface-2); border:1px solid var(--border); border-radius:var(--radius-sm); padding:20px; margin-top:10px;">

                    {{-- Test Type Selection --}}
                    <div class="grid-2" style="margin-bottom:16px;">
                      <div class="field">
                        <label class="rlabel">If Yes, what test did you sit?</label>
                        <select name="english_test_type" id="englishTestType" onchange="toggleTestFields()">
                          <option value="IELTS" selected>IELTS</option>
                          <option value="TOEIC">TOEIC</option>
                          <option value="TOEFL">TOEFL</option>
                          <option value="OTHER">OTHER</option>
                        </select>
                      </div>

                      {{-- Test Date --}}
                      <div class="field">
                        <label class="rlabel">Test Date</label>
                        <input type="date" name="english_test_date" id="englishTestDate" class="date-input"
                          value="2026-02-19">
                        <small style="color:var(--text-secondary); display:block; margin-top:4px;">DD/MM/YYYY</small>
                      </div>
                    </div>

                    {{-- Score Type --}}
                    {{-- <div class="field" style="margin-bottom:16px;">
                      <label class="rlabel">Score type</label>
                      <div class="radio-group" style="margin-top:8px;">
                        <label class="radio-pill selected" id="score-type-4skills">
                          <input type="radio" name="score_type" value="4_skills" checked
                            onchange="updatePills('score_type', this); toggleScoreFields('4_skills')">
                          <span class="dot"></span> 4 skills
                        </label>
                        <label class="radio-pill" id="score-type-overall">
                          <input type="radio" name="score_type" value="overall_only"
                            onchange="updatePills('score_type', this); toggleScoreFields('overall_only')">
                          <span class="dot"></span> Overall only
                        </label>
                      </div>
                    </div> --}}

                    {{-- Score Fields --}}
                    <div style="margin-top:20px;">
                      <table style="width:100%; border-collapse:collapse;">
                        <thead>
                          <tr>
                            <th
                              style="text-align:left; padding-bottom:10px; font-weight:600; color:var(--text-secondary);">
                              Skill</th>
                            <th
                              style="text-align:left; padding-bottom:10px; font-weight:600; color:var(--text-secondary);">
                              Score</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{-- Listening Score --}}
                          <tr id="listeningScoreRow">
                            <td style="padding:8px 0;">
                              <label class="rlabel">Listening</label>
                            </td>
                            <td style="padding:8px 0;">
                              <div class="field" style="margin:0; max-width:120px;">
                                <input type="text" name="listening_score" id="listeningScore" value="0"
                                  style="width:80px;" placeholder="0.0">
                              </div>
                            </td>
                          </tr>

                          {{-- Reading Score --}}
                          <tr id="readingScoreRow">
                            <td style="padding:8px 0;">
                              <label class="rlabel">Reading</label>
                            </td>
                            <td style="padding:8px 0;">
                              <div class="field" style="margin:0; max-width:120px;">
                                <input type="text" name="reading_score" id="readingScore" value="0" style="width:80px;"
                                  placeholder="0.0">
                              </div>
                            </td>
                          </tr>

                          {{-- Writing Score --}}
                          <tr id="writingScoreRow">
                            <td style="padding:8px 0;">
                              <label class="rlabel">Writing</label>
                            </td>
                            <td style="padding:8px 0;">
                              <div class="field" style="margin:0; max-width:120px;">
                                <input type="text" name="writing_score" id="writingScore" value="0" style="width:80px;"
                                  placeholder="0.0">
                              </div>
                            </td>
                          </tr>

                          {{-- Speaking Score --}}
                          <tr id="speakingScoreRow">
                            <td style="padding:8px 0;">
                              <label class="rlabel">Speaking</label>
                            </td>
                            <td style="padding:8px 0;">
                              <div class="field" style="margin:0; max-width:120px;">
                                <input type="text" name="speaking_score" id="speakingScore" value="0" style="width:80px;"
                                  placeholder="0.0">
                              </div>
                            </td>
                          </tr>

                          {{-- Overall Score (always visible) --}}
                          <tr>
                            <td style="padding:8px 0; border-top:1px solid var(--border);">
                              <label class="rlabel" style="font-weight:600;">Overall</label>
                            </td>
                            <td style="padding:8px 0; border-top:1px solid var(--border);">
                              <div class="field" style="margin:0; max-width:120px;">
                                <input type="text" name="overall_score" id="overallScore" value="0" style="width:80px;"
                                  placeholder="0.0">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    {{-- Help text --}}
                    <p
                      style="color:var(--text-secondary); font-size:0.85rem; margin-top:15px; padding-top:10px; border-top:1px dashed var(--border);">
                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        style="display:inline; margin-right:5px;">
                        <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" />
                      </svg>
                      Enter your test scores. For "Overall only" mode, only the overall score is required.
                    </p>
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Education --}}
              <div class="form-section">
                <div class="section-label">Education</div>
                <div class="grid-2">
                  <div class="field">
                    <label>Secondary School Level</label>
                    <select name="secondary_school_level" id="secondary_school_level">
                      <option value="02 -Did not go to school">02 -Did not go to school</option>
                      <option value="08 -Year 8 or below">08 -Year 8 or below</option>
                      <option value="09 -Year 9 or equivalent">09 -Year 9 or equivalent</option>
                      <option value="10 -Completed Year 10">10 -Completed Year 10</option>
                      <option value="11 -Completed Year 11">11 -Completed Year 11</option>
                      <option value="12 -Completed Year 12">12 -Completed Year 12</option>
                      <option value="Not Specified">Not Specified</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Still attending secondary school?</label>
                    <div class="radio-group" style="margin-top:8px;">
                      <label class="radio-pill">
                        <input type="radio" name="still_attending" class="still_attending" value="yes">
                        <span class="dot"></span> Yes
                      </label>
                      <label class="radio-pill">
                        <input type="radio" name="still_attending" class="still_attending" value="no">
                        <span class="dot"></span> No
                      </label>
                    </div>
                  </div>
                  <div class="field d-none" id="secondary_school_type_div">
                    <label>Please select school type:</label>
                    <select name="secondary_school_type" id="secondary_school_type">
                      <option value="">Select</option>
                      <option value="21 - School (Government)">21 - School (Government)</option>
                      <option value="25 - School (Catholic)">25 - School (Catholic)</option>
                      <option value="27 - School (Independent)">27 - School (Independent)</option>
                      <option value="31 - Technical and Further Education institute">31 - Technical and Further Education
                        institute</option>
                      <option value="61 - Community-based adult education provider">61 - Community-based adult education
                        provider</option>
                      <option value="91 - Privately operated registered training organization">91 - Privately operated
                        registered training organization</option>
                      <option value="92 - Home school arrangement">92 - Home school arrangement</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-section">
                <div class="section-label">Further Education</div>

                {{-- Main checkbox with heading --}}
                <strong style="color: var(--text-primary); display: block; font-weight: 500;">
                  <input type="checkbox" id="add_qualifications" name="add_qualifications" value="1">
                  <label for="add_qualifications"> I would like to add Previous Qualifications Achieved</label>
                </strong>

                {{-- Qualification Entry Panel --}}
                <div id="qualificationPanel" class="d-none">
                  <p style="color: var(--accent); margin:0 0 20px 0; font-size:0.95rem;">
                    List your latest educational qualification by filling in the form below;
                  </p>

                  {{-- Qualification Entry Form --}}
                  <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:20px;">
                    <div class="grid-2">
                      <div class="field">
                        <label class="rlabel">Qualification level</label>
                        <select name="edu_level" id="eduLevel">
                          <option value="008">Bachelor Degree or Higher Degree Level</option>
                          <option selected="selected" value="410">Advanced Diploma or Associate Degree Level</option>
                          <option value="420">Diploma Level</option>
                          <option value="511">Certificate IV</option>
                          <option value="514">Certificate III</option>
                          <option value="521">Certificate II</option>
                          <option value="524">Certificate I</option>
                          <option value="990">Miscellaneous Education</option>
                        </select>
                      </div>
                      <div class="field">
                        <label class="rlabel">Qualification name</label>
                        <input type="text" name="edu_qual_name" id="eduQualName" maxlength="200"
                          placeholder="e.g. Diploma of Business">
                      </div>
                    </div>

                    <div class="grid-2">
                      <div class="field">
                        <label class="rlabel">School/Institution name</label>
                        <input type="text" name="edu_school_name" id="eduSchoolName" maxlength="100"
                          placeholder="Institution name">
                      </div>
                      <div class="field">
                        <label class="rlabel">State/Country</label>
                        <input type="text" name="edu_state_country" id="eduStateCountry" maxlength="100"
                          placeholder="State or Country">
                      </div>
                    </div>

                    <div class="grid-2">
                      <div class="field">
                        <label class="rlabel">Year completed</label>
                        <input type="text" name="edu_year_completed" id="eduYearCompleted" maxlength="4"
                          placeholder="YYYY" pattern="\d*" style="width:100px;">
                        <small style="color:var(--text-secondary); display:block; margin-top:4px;">Digits only</small>
                      </div>
                      <div class="field" style="display:flex; align-items:flex-end; gap:10px;">
                        <button type="button" class="btn btn-add" id="addEduBtn" onclick="addQualification()"
                          style="margin-right:8px;">
                          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M12 4v16m8-8H4" />
                          </svg>
                          Add New
                        </button>
                        <button type="button" class="btn btn-ghost" id="clearEduBtn" onclick="clearQualificationForm()">
                          Clear
                        </button>
                      </div>
                    </div>
                  </div>

                  {{-- Education History Grid --}}
                  <div style="margin-top:25px;">
                    <table class="data-items" id="educationGrid"
                      style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                      <label
                        style="caption-side:bottom; margin-top:8px; color:var(--text-secondary); font-size:0.85rem;">Education
                        History</label>
                      <thead>
                        <tr style="background:var(--surface-3);">
                          <th style="padding:12px; text-align:left; font-weight:600;">Qualification Level</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">Qualification Name</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">School Name</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">State/Country</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">Year Completed</th>
                          <th style="padding:12px; text-align:center; font-weight:600;">Delete</th>
                        </tr>
                      </thead>
                      <tbody id="educationGridBody">
                        {{-- Sample row showing format --}}
                        <tr class="odd" style="background:var(--surface-2);">
                          <td style="padding:10px 12px;">Bachelor Degree or Higher Degree Level</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">—</td>
                          <td style="padding:10px 12px; text-align:center;">
                            <button type="button" class="delete-qual-btn" title="Delete the selected row?"
                              style="background:none; border:none; cursor:pointer;">
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e"
                                stroke-width="2">
                                <path
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                          </td>
                        </tr>
                        <tr class="even">
                          <td style="padding:10px 12px;">Advanced Diploma or Associate Degree Level</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">Not Specified</td>
                          <td style="padding:10px 12px;">—</td>
                          <td style="padding:10px 12px; text-align:center;">
                            <button type="button" class="delete-qual-btn" title="Delete the selected row?"
                              style="background:none; border:none; cursor:pointer;">
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e"
                                stroke-width="2">
                                <path
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              {{-- Employment Section --}}
              <div class="form-section">
                <div class="section-label">Current Employment</div>

                {{-- Employment Status --}}
                <div class="field" style="margin-bottom:16px;">
                  <label>Which BEST describes your current employment status?</label>
                  <select name="employment_status" id="employmentStatus" style="margin-top:8px;">
                    <option value="">--Select current employment status--</option>
                    <option value="01">01: Full-time employee</option>
                    <option value="02">02: Part-time employee</option>
                    <option value="03" selected>03: Self-employed - not employing others</option>
                    <option value="04">04: Self employed - employing others</option>
                    <option value="05">05: Employed - unpaid worker in a family business</option>
                    <option value="06">06: Unemployed - seeking full-time work</option>
                    <option value="07">07: Unemployed - seeking part-time work</option>
                    <option value="08">08: Not employed - not seeking employment</option>
                    <option value="@@">@@ - Not Specified</option>
                  </select>
                </div>

                {{-- Add Employment Checkbox --}}
                <strong style="color: var(--text-primary); display: block; font-weight: 500;">
                  <input type="checkbox" id="add_employment" name="add_employment" value="1">
                  <label for="add_employment"> Yes! I would like to add my Employment</label>
                </strong>

                {{-- Employment History Panel --}}
                <div id="employmentPanel" class="d-none">
                  <p style="color: var(--accent); margin:0 0 20px 0; font-size:0.95rem;">
                    Please list your current employer
                  </p>

                  {{-- Employment Entry Form --}}
                  <div style="display:flex; flex-direction:column; gap:12px; margin-bottom:20px;">
                    <div class="grid-2">
                      <div class="field">
                        <label class="rlabel">Employer <span class="req">*</span></label>
                        <input type="text" name="employer_name" id="employerName" maxlength="100"
                          placeholder="Employer name">
                      </div>
                      <div class="field">
                        <label class="rlabel">Occupation/Job Title <span class="req">*</span></label>
                        <input type="text" name="occupation_title" id="occupationTitle" maxlength="100"
                          placeholder="Job title">
                      </div>
                    </div>

                    <div class="grid-2">
                      <div class="field">
                        <label class="rlabel">Duration from</label>
                        <input type="date" name="employment_from" id="employmentFrom" class="date-input">
                        <small style="color:var(--text-secondary); display:block; margin-top:4px;">DD/MM/YYYY</small>
                      </div>
                      <div class="field">
                        <label class="rlabel">Duration to</label>
                        <input type="date" name="employment_to" id="employmentTo" class="date-input">
                        <small style="color:var(--text-secondary); display:block; margin-top:4px;">DD/MM/YYYY</small>
                      </div>
                    </div>

                    <div class="field">
                      <label class="rlabel">Duties <span class="req">*</span></label>
                      <textarea name="employment_duties" id="employmentDuties" rows="3" cols="20"
                        style="width:100%; max-width:400px;" placeholder="Describe your duties"></textarea>
                    </div>

                    <div style="display:flex; gap:10px; margin-top:5px;">
                      <button type="button" class="btn btn-add" id="addEmploymentBtn" onclick="addEmployment()">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path d="M12 4v16m8-8H4" />
                        </svg>
                        Add New
                      </button>
                      <button type="button" class="btn btn-ghost" id="clearEmploymentBtn" onclick="clearEmploymentForm()">
                        Clear
                      </button>
                    </div>
                  </div>

                  {{-- Employment History Grid --}}
                  <div style="margin-top:25px;">
                    <table class="data-items" id="employmentGrid"
                      style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                      <label
                        style="caption-side:bottom; margin-top:8px; color:var(--text-secondary); font-size:0.85rem;">Employment
                        History</label>
                      <thead>
                        <tr style="background:var(--surface-3);">
                          <th style="padding:12px; text-align:left; font-weight:600;">Employer Name</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">Occupation/Job Title</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">From</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">To</th>
                          <th style="padding:12px; text-align:left; font-weight:600;">Duties</th>
                          <th style="padding:12px; text-align:center; font-weight:600;">Delete</th>
                        </tr>
                      </thead>
                      <tbody id="employmentGridBody">
                        {{-- Sample row showing format --}}
                        <tr class="odd" style="background:var(--surface-2);">
                          <td style="padding:10px 12px;">ds</td>
                          <td style="padding:10px 12px;">sdfgv</td>
                          <td style="padding:10px 12px;">01/01/2025</td>
                          <td style="padding:10px 12px;">01/01/2026</td>
                          <td style="padding:10px 12px;">dvgdf</td>
                          <td style="padding:10px 12px; text-align:center;">
                            <button type="button" class="delete-emp-btn" title="Delete the selected row?"
                              style="background:none; border:none; cursor:pointer;">
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e"
                                stroke-width="2">
                                <path
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="h-divider"></div>

              <div class="form-section">
                <div class="section-label">Disability & Accessibility</div>

                <div class="field" style="margin-bottom:16px;">
                  <label>
                    Do you consider yourself to have a disability, impairment or long-term condition?<br>
                    <small style="color:var(--text-secondary); font-weight:normal;">N.B. Some disabilities may prevent you
                      from participating in certain activities within a course. Alternative forms of assessment may be
                      required.</small>
                  </label>

                  <div class="radio-group" style="margin-top:12px; margin-bottom:16px;">
                    <label class="radio-pill selected" id="disability-yes">
                      <input type="radio" name="disability" value="yes"
                        onchange="updatePills('disability', this); toggleDisabilityFields(true)">
                      <span class="dot"></span> YES
                    </label>
                    <label class="radio-pill" id="disability-no">
                      <input type="radio" name="disability" value="no" checked
                        onchange="updatePills('disability', this); toggleDisabilityFields(false)">
                      <span class="dot"></span> NO
                    </label>
                    <label class="radio-pill" id="disability-not-stated">
                      <input type="radio" name="disability" value="not_stated"
                        onchange="updatePills('disability', this); toggleDisabilityFields(false)">
                      <span class="dot"></span> Not Stated/Prefer Not to Say
                    </label>
                  </div>
                </div>

                {{-- Disability Areas Panel --}}
                <div id="disabilityAreasPanel">
                  <div class="field">
                    <label>
                      If YES, indicate the areas of disability, impairment or long-term condition:<br>
                      <small style="color:var(--text-secondary);">(You may indicate more than one area.)</small>
                    </label>

                    <div
                      style="display:flex; flex-wrap:wrap; gap:20px; margin-top:15px; background:var(--surface-2); padding:20px; border-radius:var(--radius-sm); border:1px solid var(--border);">
                      <div style="display:flex; flex-direction:column; gap:12px; min-width:200px;">
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="11">
                          <span>11 - Hearing/Deaf</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="12">
                          <span>12 - Physical</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="13">
                          <span>13 - Intellectual</span>
                        </label>
                      </div>
                      <div style="display:flex; flex-direction:column; gap:12px; min-width:200px;">
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="14">
                          <span>14 - Learning</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="15">
                          <span>15 - Mental Illness</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="16">
                          <span>16 - Acquired Brain Impairment</span>
                        </label>
                      </div>
                      <div style="display:flex; flex-direction:column; gap:12px; min-width:200px;">
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="17">
                          <span>17 - Vision</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="18">
                          <span>18 - Medical Condition</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="19">
                          <span>19 - Other</span>
                        </label>
                        <label class="check-row-simple" style="display:flex; align-items:center; gap:8px;">
                          <input type="checkbox" name="impairment[]" value="99">
                          <span>99 - Not Specified</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Custom Fields --}}
              <div class="form-section">
                <div class="section-label">Additional Fields</div>
                <div class="grid-2">
                  <div class="field">
                    <label>City of Birth <span class="req">*</span></label>
                    <input type="text" name="city_of_birth" placeholder="City of birth" required>
                  </div>
                  <div class="field">
                    <label>Student Study Mode <span class="req">*</span></label>
                    <select name="study_mode" required>
                      <option value="">-- Select item --</option>
                      <option value="1">1. Distance</option>
                      <option value="2">2. Blended</option>
                    </select>
                  </div>
                </div>
              </div>

            </div>
            <div class="form-nav">
              <button type="button" class="btn btn-ghost" onclick="prevStep()">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M15 19l-7-7 7-7" />
                </svg>
                Back
              </button>
              <div style="display:flex;gap:10px;align-items:center;">
                <button type="button" class="btn btn-ghost btn-save">
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path
                      d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                  </svg>
                  Save for later
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">
                  Continue
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        {{-- ════════════════════════════════════════
        STEP 3: Enrolment Details
        ════════════════════════════════════════ --}}
        <div class="step-panel" id="step-3">
          <div class="form-panel">
            <div class="panel-header">
              <div class="panel-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                </svg>
              </div>
              <div>
                <div class="panel-title">Enrolment Details</div>
                <div class="panel-desc">Current employment status and accessibility information</div>
              </div>
            </div>
            <div class="panel-body">

              <div class="form-section">
                <div class="section-label">Course Selection</div>

                <p style="color: var(--accent); margin:0 0 20px 0; font-size:0.95rem;">
                  Please choose your course of interest, preferred start date and click Add Course.
                </p>

                {{-- Intake Year and Course Selection --}}
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Intake Year</label>
                    <select name="intake_year" id="intakeYear" onchange="updateCourseDetails()">
                      <option value="2026" selected>2026</option>
                    </select>
                  </div>
                  <div class="field">
                    <label>Select Course <span class="req">*</span></label>
                    <select name="course_code" id="courseSelect" onchange="updateCourseDetails()" required>
                      <option value="">-- Select a course --</option>
                      <option value="CHC33021-A" data-code="CHC33021"
                        data-name="Certificate III in Individual Support (Ageing)">CHC33021-A - Certificate III in
                        Individual Support (Ageing)</option>
                      <option value="CHC33021-D" data-code="CHC33021"
                        data-name="Certificate III in Individual Support (Disability)">CHC33021-D - Certificate III in
                        Individual Support (Disability)</option>
                      <option value="CHC43015" data-code="CHC43015" data-name="Certificate IV in Ageing Support">CHC43015
                        - Certificate IV in Ageing Support</option>
                      <option value="CHC43121" data-code="CHC43121" data-name="Certificate IV in Disability Support">
                        CHC43121 - Certificate IV in Disability Support</option>
                      <option value="HLTAID009" data-code="HLTAID009" data-name="Provide cardiopulmonary resuscitation">
                        HLTAID009 - Provide cardiopulmonary resuscitation</option>
                      <option value="HLTAID011" data-code="HLTAID011" data-name="Provide First Aid">HLTAID011 - Provide
                        First Aid</option>
                    </select>
                  </div>
                </div>

                {{-- Study Type --}}
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Study Type</label>
                    <div class="radio-group" style="margin-top:8px;">
                      <label class="radio-pill selected">
                        <input type="radio" name="study_type" value="Public" checked
                          onchange="updatePills('study_type', this)">
                        <span class="dot"></span> Public
                      </label>
                    </div>
                  </div>

                  {{-- Intake Date --}}
                  <div class="field">
                    <label>Intake Date <span class="req">*</span></label>
                    <select name="intake_date" id="intakeDate" required>
                      <option value="23/02/2026" selected>23/02/2026</option>
                    </select>
                  </div>
                </div>

                {{-- Course Offer Location --}}
                <div class="grid-2" style="margin-bottom:16px;">
                  <div class="field">
                    <label>Course Offer Location</label>
                    <select name="course_location" id="courseLocation">
                      <option value="C3A_4th_Week_Feb_2026" selected>ANC_HO, NSW</option>
                    </select>
                  </div>

                  {{-- Course Fee --}}
                  <div class="field">
                    <label>Course Fee</label>
                    <div
                      style="background:var(--surface-2); padding:10px 15px; border-radius:var(--radius-sm); border:1px solid var(--border); font-weight:600;">
                      <span id="courseFee">$1,600.00</span>
                    </div>
                  </div>
                </div>

                {{-- Unit Details (Accordion) --}}
                <div class="field" style="margin-bottom:16px;">
                  <div class="accordion-item"
                    style="border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                    <div class="accordion-header" id="unitAccordionHeader" onclick="toggleAccordion()"
                      style="background:var(--surface-2); padding:12px 16px; cursor:pointer; display:flex; justify-content:space-between; align-items:center;">
                      <h3 style="margin:0; font-size:1rem; font-weight:600;color:white;">Unit Details <span
                          style="font-weight:normal; color:var(--text-secondary); margin-left:8px;">(Click to expand or
                          collapse)</span></h3>
                      <svg id="accordionIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M19 9l-7 7-7-7" />
                      </svg>
                    </div>
                    <div id="unitAccordionContent" class="accordion-content"
                      style="display:none; padding:16px; border-top:1px solid var(--border);">
                      <ul id="unitDetailsList" class="green"
                        style="margin:0; padding-left:20px; columns:2; column-gap:30px;">
                        <li>CHCAGE011: Provide support to people living with dementia</li>
                        <li>CHCAGE013: Work effectively in aged care</li>
                        <li>CHCCCS031: Provide individualised support</li>
                        <li>CHCCCS038: Facilitate the empowerment of people receiving support</li>
                        <li>CHCCCS040: Support independence and wellbeing</li>
                        <li>CHCCCS041: Recognise healthy body systems</li>
                        <li>CHCCOM005: Communicate and work in health or community services</li>
                        <li>CHCDIS011: Contribute to ongoing skills development using a strengths-based approach</li>
                        <li>CHCDIS020: Work effectively in disability support</li>
                        <li>CHCDIV001: Work with diverse people</li>
                        <li>CHCLEG001: Work legally and ethically</li>
                        <li>CHCPAL003: Deliver Care services using a palliative approach</li>
                        <li>HLTAID011: Provide First Aid</li>
                        <li>HLTINF006: Apply basic principles and practices of infection prevention and control</li>
                        <li>HLTWHS002: Follow safe work practices for direct client care</li>
                      </ul>
                    </div>
                  </div>
                </div>

                {{-- Study Reason --}}
                <div class="field" style="margin-bottom:20px;">
                  <label>Study Reason</label>
                  <select name="study_reason" id="studyReason">
                    <option value="01">01 - To get a job (Job related)</option>
                    <option value="02">02 - To develop my existing business (Job related)</option>
                    <option value="03">03 - To start my own business (Job related)</option>
                    <option value="04">04 - To try for a different career (Job related)</option>
                    <option value="05">05 - To get a better job or promotion (Job related)</option>
                    <option value="06">06 - It was a requirement of my job (Job related)</option>
                    <option value="07">07 - I wanted extra skills for my job (Job related)</option>
                    <option value="08">08 - To get into another course of study (Further study)</option>
                    <option value="11">11 - Other reasons (Other)</option>
                    <option value="12">12 - For personal interest or self-development (Other)</option>
                    <option value="13">13 - To get skills for community/voluntary work (other)</option>
                    <option value="@@" selected>Not specified</option>
                  </select>
                </div>

                {{-- Add Course Button --}}
                <button type="button" class="btn btn-add" id="addCourseBtn" onclick="addCourse()"
                  style="margin-bottom:25px;">
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M12 4v16m8-8H4" />
                  </svg>
                  Add Course
                </button>

                {{-- Applied Courses Grid --}}
                <div style="margin-top:15px;">
                  <table class="data-items" id="appliedCoursesGrid"
                    style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                    <label
                      style="caption-side:bottom; margin-top:8px; color:var(--text-secondary); font-size:0.85rem;">Applied
                      Course(s) List</label>
                    <thead>
                      <tr style="background:var(--surface-3);">
                        <th style="padding:12px; text-align:left; font-weight:600;">Course ID</th>
                        <th style="padding:12px; text-align:left; font-weight:600;">Course Name</th>
                        <th style="padding:12px; text-align:left; font-weight:600;">Start Date</th>
                        <th style="padding:12px; text-align:left; font-weight:600;">Finish Date</th>
                        <th style="padding:12px; text-align:left; font-weight:600;">Status</th>
                        <th style="padding:12px; text-align:center; font-weight:600;">Module Enrolment?</th>
                        <th style="padding:12px; text-align:center; font-weight:600;">Actions</th>
                      </tr>
                    </thead>
                    <tbody id="appliedCoursesBody">
                      {{-- Sample row --}}
                      <tr class="odd" style="background:var(--surface-2);" align="center" valign="top">
                        <td style="padding:10px 12px;">CHC33021</td>
                        <td style="padding:10px 12px;">Certificate III in Individual Support (Ageing & Disability)</td>
                        <td style="padding:10px 12px;">23 Feb 2026</td>
                        <td style="padding:10px 12px;">22 Feb 2027</td>
                        <td style="padding:10px 12px;">New Application Request</td>
                        <td style="padding:10px 12px; text-align:center;">
                          <input type="checkbox" disabled style="opacity:0.5;">
                        </td>
                        <td style="padding:10px 12px; text-align:center;">
                          <div style="display:flex; gap:8px; justify-content:center;">
                            <button type="button" class="icon-btn delete-course-btn" title="Delete the selected row?"
                              style="background:none; border:none; cursor:pointer;">
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e"
                                stroke-width="2">
                                <path
                                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                              </svg>
                            </button>
                            <button type="button" class="icon-btn view-fields-btn"
                              title="View additional fields for selected course"
                              style="background:none; border:none; cursor:pointer;">
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4299e1"
                                stroke-width="2">
                                <path
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                              </svg>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="h-divider"></div>

            </div>
            <div class="form-nav">
              <button type="button" class="btn btn-ghost" onclick="prevStep()">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M15 19l-7-7 7-7" />
                </svg>
                Back
              </button>
              <div style="display:flex;gap:10px;align-items:center;">
                <button type="button" class="btn btn-ghost btn-save">
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path
                      d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                  </svg>
                  Save for later
                </button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">
                  Continue
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        {{-- ════════════════════════════════════════
        STEP 4: Preview
        ════════════════════════════════════════ --}}
        <div class="step-panel" id="step-4">
          <div class="form-panel">
            <div class="panel-header">
              <div class="panel-icon">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
              </div>
              <div>
                <div class="panel-title">Preview Application</div>
                <div class="panel-desc">Review your application details before submission</div>
              </div>
            </div>
            <div class="panel-body">

              {{-- Personal Information Section --}}
              <div class="preview-section"
                style="margin-bottom:30px; border:1px solid var(--border); border-radius:var(--radius-lg); overflow:hidden;">
                <div class="preview-header"
                  style="background:var(--surface-2); padding:15px 20px; display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border);">
                  <div style="display:flex; align-items:center; gap:10px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                      <path
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <h3 style="margin:0; font-size:1.2rem;">Personal Information</h3>
                  </div>
                  <button type="button" class="btn btn-ghost btn-sm" onclick="goToStep(1)"
                    style="padding:5px 12px; font-size:0.9rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      style="margin-right:5px;">
                      <path
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                  </button>
                </div>

                <div class="preview-body" style="padding:20px;">
                  {{-- Personal Details Grid --}}
                  <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:20px; margin-bottom:20px;">
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Application ID:
                      </div>
                      <div style="font-weight:500;" id="preview_app_id">9425786257</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Full name:</div>
                      <div style="font-weight:500;" id="preview_full_name">Wallace Dominic Carver</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Nickname:</div>
                      <div id="preview_nickname">Sheila Byers</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Date of birth:</div>
                      <div id="preview_dob">1/01/1995</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Gender:</div>
                      <div id="preview_gender">F</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Country of birth:
                      </div>
                      <div id="preview_country_birth">Monaco</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Nationality:</div>
                      <div id="preview_nationality">Monacan</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Residential status:
                      </div>
                      <div id="preview_residential_status">Overseas Resident</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Identification No.:
                      </div>
                      <div id="preview_identification">Eius necessitat</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem; margin-bottom:4px;">Contact Email:</div>
                      <div id="preview_email">racywys@mailinator.com</div>
                    </div>
                  </div>

                  {{-- Contact Details --}}
                  <div style="margin-top:15px; padding-top:15px; border-top:1px solid var(--border);">
                    <h4 style="margin:0 0 15px 0; font-size:1rem;">Contact Details</h4>
                    <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:15px;">
                      <div>
                        <div style="color:var(--text-secondary); font-size:0.85rem;">Current Street Address:</div>
                        <div id="preview_address">Keelie Park, Recusandae Dolores qui minim/532 Frances Watson</div>
                        <div id="preview_city_state">Est est consectetur et p QLD</div>
                        <div id="preview_country">Australia, Blanditiis</div>
                      </div>
                      <div>
                        <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px;">
                          <div>
                            <div style="color:var(--text-secondary); font-size:0.85rem;">Primary contact:</div>
                            <div id="preview_primary_contact">+1 (292) 671-7541</div>
                          </div>
                          <div>
                            <div style="color:var(--text-secondary); font-size:0.85rem;">Alternate contact:</div>
                            <div id="preview_alternate_contact">+1 (875) 594-7699</div>
                          </div>
                          <div>
                            <div style="color:var(--text-secondary); font-size:0.85rem;">Mobile:</div>
                            <div id="preview_mobile">Vel necessitatibus cillum</div>
                          </div>
                          <div>
                            <div style="color:var(--text-secondary); font-size:0.85rem;">Fax:</div>
                            <div id="preview_fax">-</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Language, Cultural Diversity, Education, Employment Section --}}
              <div class="preview-section"
                style="margin-bottom:30px; border:1px solid var(--border); border-radius:var(--radius-lg); overflow:hidden;">
                <div class="preview-header"
                  style="background:var(--surface-2); padding:15px 20px; display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border);">
                  <div style="display:flex; align-items:center; gap:10px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                      <path
                        d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                    </svg>
                    <h3 style="margin:0; font-size:1.2rem;">Language, Cultural Diversity, Education & Employment</h3>
                  </div>
                  <button type="button" class="btn btn-ghost btn-sm" onclick="goToStep(2)"
                    style="padding:5px 12px; font-size:0.9rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      style="margin-right:5px;">
                      <path
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                  </button>
                </div>

                <div class="preview-body" style="padding:20px;">
                  {{-- Language and Cultural Diversity --}}
                  <h4 style="margin:0 0 15px 0; font-size:1rem;">Language and Cultural Diversity</h4>
                  <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:15px; margin-bottom:20px;">
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Are you of Australian Aboriginal or
                        Torres Strait Islander origin?</div>
                      <div id="preview_aboriginal">No</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">First language:</div>
                      <div id="preview_first_language">English</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">English was the language of instruction
                        in previous studies?</div>
                      <div id="preview_english_instruction">No</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">English Language Proficiency Test:
                      </div>
                      <div id="preview_english_test">Not specified</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">When:</div>
                      <div id="preview_test_date">Not specified</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Score:</div>
                      <div id="preview_test_score">Not specified</div>
                    </div>
                  </div>

                  {{-- Education --}}
                  <h4 style="margin:15px 0 15px 0; font-size:1rem;">Education</h4>
                  <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:15px; margin-bottom:20px;">
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">What is your highest COMPLETED school
                        level?</div>
                      <div id="preview_school_level">12 - Completed Year 12</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Are you still attending secondary
                        school?</div>
                      <div id="preview_still_attending">Yes</div>
                    </div>
                  </div>

                  {{-- Further Education Table --}}
                  <div style="margin-bottom:20px;">
                    <h4 style="margin:0 0 10px 0; font-size:1rem;">Further Education</h4>
                    <table
                      style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                      <thead>
                        <tr style="background:var(--surface-3);">
                          <th style="padding:10px; text-align:left;">Name of Qualification</th>
                          <th style="padding:10px; text-align:left;">School/Institution</th>
                          <th style="padding:10px; text-align:left;">State/Country</th>
                          <th style="padding:10px; text-align:left;">Year Completed</th>
                        </tr>
                      </thead>
                      <tbody id="preview_education_table">
                        <tr>
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">—</td>
                        </tr>
                        <tr style="background:var(--surface-2);">
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">Not Specified</td>
                          <td style="padding:8px 10px;">—</td>
                        </tr>
                        <tr>
                          <td style="padding:8px 10px;">sefg</td>
                          <td style="padding:8px 10px;">segr</td>
                          <td style="padding:8px 10px;">sergttr</td>
                          <td style="padding:8px 10px;">2222</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  {{-- Employment --}}
                  <h4 style="margin:15px 0 10px 0; font-size:1rem;">Employment</h4>
                  <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:15px; margin-bottom:15px;">
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Which BEST describes your current
                        employment status?</div>
                      <div id="preview_employment_status">03: Self-employed - not employing others</div>
                    </div>
                  </div>

                  <div style="margin-bottom:20px;">
                    <h5 style="margin:0 0 10px 0; font-size:0.95rem;">Employment History</h5>
                    <table
                      style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                      <thead>
                        <tr style="background:var(--surface-3);">
                          <th style="padding:10px; text-align:left;">Employer</th>
                          <th style="padding:10px; text-align:left;">Occupation</th>
                          <th style="padding:10px; text-align:left;">From</th>
                          <th style="padding:10px; text-align:left;">To</th>
                          <th style="padding:10px; text-align:left;">Duties</th>
                        </tr>
                      </thead>
                      <tbody id="preview_employment_table">
                        <tr>
                          <td style="padding:8px 10px;" colspan="5" class="text-center"
                            style="color:var(--text-secondary);">No Employment History</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  {{-- Disability --}}
                  <div style="margin-top:15px; padding-top:15px; border-top:1px solid var(--border);">
                    <h4 style="margin:0 0 10px 0; font-size:1rem;">Disability</h4>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Do you consider yourself to have a
                        disability, impairment or long-term condition?</div>
                      <div id="preview_disability">No</div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Student Specific Info Section --}}
              <div class="preview-section"
                style="margin-bottom:30px; border:1px solid var(--border); border-radius:var(--radius-lg); overflow:hidden;">
                <div class="preview-header"
                  style="background:var(--surface-2); padding:15px 20px; border-bottom:1px solid var(--border);">
                  <div style="display:flex; align-items:center; gap:10px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                      <path
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342" />
                    </svg>
                    <h3 style="margin:0; font-size:1.2rem;">Student Specific Info</h3>
                  </div>
                </div>

                <div class="preview-body" style="padding:20px;">
                  <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:15px;">
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">City of Birth</div>
                      <div id="preview_city_of_birth">Dhaka</div>
                    </div>
                    <div>
                      <div style="color:var(--text-secondary); font-size:0.85rem;">Student Study Mode</div>
                      <div id="preview_study_mode">1. Distance</div>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Enrolment Details Section --}}
              <div class="preview-section"
                style="margin-bottom:20px; border:1px solid var(--border); border-radius:var(--radius-lg); overflow:hidden;">
                <div class="preview-header"
                  style="background:var(--surface-2); padding:15px 20px; display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid var(--border);">
                  <div style="display:flex; align-items:center; gap:10px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                      <path
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342" />
                    </svg>
                    <h3 style="margin:0; font-size:1.2rem;">Enrolment Details</h3>
                  </div>
                  <button type="button" class="btn btn-ghost btn-sm" onclick="goToStep(3)"
                    style="padding:5px 12px; font-size:0.9rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      style="margin-right:5px;">
                      <path
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                  </button>
                </div>

                <div class="preview-body" style="padding:20px;">
                  <div style="overflow-x:auto;">
                    <table
                      style="width:100%; border-collapse:collapse; border:1px solid var(--border); border-radius:var(--radius-sm); overflow:hidden;">
                      <thead>
                        <tr style="background:var(--surface-3);">
                          <th style="padding:12px; text-align:left;">Course ID</th>
                          <th style="padding:12px; text-align:left;">Course Name</th>
                          <th style="padding:12px; text-align:left;">Consultant Name</th>
                          <th style="padding:12px; text-align:left;">Year</th>
                          <th style="padding:12px; text-align:left;">Start Date</th>
                          <th style="padding:12px; text-align:left;">Finish Date</th>
                          <th style="padding:12px; text-align:left;">Status</th>
                          <th style="padding:12px; text-align:left;">Course Fee</th>
                          <th style="padding:12px; text-align:left;">Special Condition</th>
                        </tr>
                      </thead>
                      <tbody id="preview_courses_table">
                        <tr>
                          <td style="padding:10px;">CHC33021</td>
                          <td style="padding:10px;">Certificate III in Individual Support (Ageing & Disability)</td>
                          <td style="padding:10px;">Advance College (Direct)</td>
                          <td style="padding:10px;">—</td>
                          <td style="padding:10px;">23 Feb 2026</td>
                          <td style="padding:10px;">22 Feb 2027</td>
                          <td style="padding:10px;">New Application Request</td>
                          <td style="padding:10px;">$1,700.00</td>
                          <td style="padding:10px;">—</td>
                        </tr>
                        <tr style="background:var(--surface-2);">
                          <td style="padding:10px;">CHC33021-A</td>
                          <td style="padding:10px;">Certificate III in Individual Support (Ageing)</td>
                          <td style="padding:10px;">Advance College (Direct)</td>
                          <td style="padding:10px;">—</td>
                          <td style="padding:10px;">23 Feb 2026</td>
                          <td style="padding:10px;">22 Feb 2027</td>
                          <td style="padding:10px;">New Application Request</td>
                          <td style="padding:10px;">$1,600.00</td>
                          <td style="padding:10px;">—</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              {{-- Declaration --}}
              <div class="preview-section"
                style="margin-bottom:20px; border:1px solid var(--border); border-radius:var(--radius-lg); background:var(--surface-2);">
                <div class="preview-body" style="padding:20px;">
                  <label class="check-row" style="margin:0;">
                    <input type="checkbox" name="declaration" id="declarationCheck" value="1"
                      onchange="toggleCheck(this)">

                    <div class="check-box">
                      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </div>

                    <div class="check-text">
                      <strong>I declare that the information provided is true and correct</strong>
                      <span style="color:var(--text-secondary); font-size:0.9rem;">
                        I understand that providing false information may affect my application
                      </span>
                    </div>
                  </label>
                </div>
              </div>

            </div>
            <div class="form-nav">
              <button type="button" class="btn btn-ghost" onclick="prevStep()">
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M15 19l-7-7 7-7" />
                </svg>
                Back
              </button>
              <div style="display:flex;gap:10px;align-items:center;">
                <button type="button" class="btn btn-ghost btn-save">
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path
                      d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                  </svg>
                  Save for later
                </button>
                <button type="submit" class="btn btn-submit" id="submitBtn">
                  <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- Toast Container (place this at the bottom of your body, before closing </body> tag) -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex justify-content-between w-100">
        <div class="toast-body" id="toastMsg">
          Hello, world! This is a toast message.
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
  <script>
    /* ── State ── */
    let currentStep = 1;
    const totalSteps = 4;

    function populatePreview() {
      const formData = collectFormData();

      // Personal Information
      $('#preview_full_name').text(`${formData.first_name || ''} ${formData.middle_name || ''} ${formData.family_name || ''}`.trim() || 'Not specified');
      $('#preview_nickname').text(formData.nickname || 'Not specified');
      $('#preview_dob').text(formData.date_of_birth ? new Date(formData.date_of_birth).toLocaleDateString('en-AU') : 'Not specified');
      $('#preview_gender').text(formData.gender || 'Not specified');
      $('#preview_country_birth').text(formData.country_of_birth || 'Not specified');
      $('#preview_nationality').text(formData.nationality || 'Not specified');
      $('#preview_residential_status').text(formData.student_type === 'australian_citizen' ? 'Australian Citizen' :
        formData.student_type === 'permanent_resident' ? 'Permanent Resident' : 'Overseas Resident');
      $('#preview_identification').text(formData.identification_no || 'Not specified');
      $('#preview_email').text(formData.email || 'Not specified');

      // Contact Details
      $('#preview_address').text(`${formData.cd_building_name || ''} ${formData.cd_flat_unit || ''} ${formData.cd_street_number || ''} ${formData.cd_street_name || ''}`.trim() || 'Not specified');
      $('#preview_city_state').text(`${formData.cd_city || ''} ${formData.cd_state || ''}`.trim() || 'Not specified');
      $('#preview_country').text(`${formData.cd_country || 'Australia'}`.trim());
      $('#preview_primary_contact').text(formData.cd_primary_contact || 'Not specified');
      $('#preview_alternate_contact').text(formData.cd_alternate_contact || 'Not specified');
      $('#preview_mobile').text(formData.cd_mobile_phone || 'Not specified');

      // Language & Cultural
      const aboriginalMap = {
        'not_stated': 'Not stated / Prefer not to say',
        'no': 'No',
        'aboriginal_only': 'Yes, only Aboriginal',
        'tsi_only': 'Yes, only Torres Strait Islander',
        'both': 'Yes, both'
      };
      $('#preview_aboriginal').text(aboriginalMap[formData.aboriginal] || 'Not specified');
      $('#preview_first_language').text(formData.main_language || 'English');
      $('#preview_english_instruction').text(formData.english_instruction === 'yes' ? 'Yes' : 'No');

      // English Test
      if (formData.english_test === 'yes' && formData.english_test_details) {
        const test = formData.english_test_details;
        $('#preview_english_test').text(test.test_type || 'Not specified');
        $('#preview_test_date').text(test.test_date ? new Date(test.test_date).toLocaleDateString('en-AU') : 'Not specified');

        if (test.score_type === '4_skills') {
          $('#preview_test_score').text(`L:${test.listening || 0} R:${test.reading || 0} W:${test.writing || 0} S:${test.speaking || 0} O:${test.overall_score || 0}`);
        } else {
          $('#preview_test_score').text(`Overall: ${test.overall_score || 0}`);
        }
      } else {
        $('#preview_english_test, #preview_test_date, #preview_test_score').text('Not specified');
      }

      // Education
      $('#preview_school_level').text(formData.secondary_school_level || 'Not specified');
      $('#preview_still_attending').text(formData.still_attending === 'yes' ? 'Yes' : 'No');

      // Education Table
      if (formData.education_history && formData.education_history.length > 0) {
        let html = '';
        formData.education_history.forEach((edu, index) => {
          html += `<tr${index % 2 === 1 ? ' style="background:var(--surface-2);"' : ''}>
          <td style="padding:8px 10px;">${edu.qualification || 'Not Specified'}</td>
          <td style="padding:8px 10px;">${edu.school || 'Not Specified'}</td>
          <td style="padding:8px 10px;">${edu.location || 'Not Specified'}</td>
          <td style="padding:8px 10px;">${edu.year || '—'}</td>
        </tr>`;
        });
        $('#preview_education_table').html(html);
      }

      // Employment
      const empStatusMap = {
        '01': '01: Full-time employee',
        '02': '02: Part-time employee',
        '03': '03: Self-employed - not employing others',
        '04': '04: Self employed - employing others',
        '05': '05: Employed - unpaid worker in a family business',
        '06': '06: Unemployed - seeking full-time work',
        '07': '07: Unemployed - seeking part-time work',
        '08': '08: Not employed - not seeking employment',
        '@@': '@@ - Not Specified'
      };
      $('#preview_employment_status').text(empStatusMap[formData.employment_status] || 'Not specified');

      // Employment Table
      if (formData.employment_history && formData.employment_history.length > 0) {
        let html = '';
        formData.employment_history.forEach((emp, index) => {
          html += `<tr${index % 2 === 1 ? ' style="background:var(--surface-2);"' : ''}>
          <td style="padding:8px 10px;">${emp.employer || ''}</td>
          <td style="padding:8px 10px;">${emp.occupation || ''}</td>
          <td style="padding:8px 10px;">${emp.from_date || '—'}</td>
          <td style="padding:8px 10px;">${emp.to_date || '—'}</td>
          <td style="padding:8px 10px;">${emp.duties || ''}</td>
        </tr>`;
        });
        $('#preview_employment_table').html(html);
      }

      // Disability
      const disabilityMap = {
        'yes': 'Yes',
        'no': 'No',
        'not_stated': 'Not Stated/Prefer Not to Say'
      };
      $('#preview_disability').text(disabilityMap[formData.disability] || 'Not specified');

      // Student Specific Info
      $('#preview_city_of_birth').text(formData.city_of_birth || 'Not specified');
      $('#preview_study_mode').text(formData.study_mode === '1' ? '1. Distance' : '2. Blended');

      // Courses Table
      if (formData.applied_courses && formData.applied_courses.length > 0) {
        let html = '';
        formData.applied_courses.forEach((course, index) => {
          html += `<tr${index % 2 === 1 ? ' style="background:var(--surface-2);"' : ''}>
          <td style="padding:10px;">${course.course_id || ''}</td>
          <td style="padding:10px;">${course.course_name || ''}</td>
          <td style="padding:10px;">Advance College (Direct)</td>
          <td style="padding:10px;">—</td>
          <td style="padding:10px;">${course.start_date || ''}</td>
          <td style="padding:10px;">${course.finish_date || ''}</td>
          <td style="padding:10px;">${course.status || 'New Application Request'}</td>
          <td style="padding:10px;">$${course.fee || '0.00'}</td>
          <td style="padding:10px;">—</td>
        </tr>`;
        });
        $('#preview_courses_table').html(html);
      }
    }

    /* ── Step navigation ── */
    function goToStep(n) {
      if (n < 1 || n > totalSteps) return;
      if (n == 4) {
        populatePreview();
      }
      document.getElementById('step-' + currentStep).classList.remove('active');
      document.querySelectorAll('.step-item').forEach(el => {
        const s = parseInt(el.dataset.step);
        el.classList.remove('active', 'done');
        if (s < n) el.classList.add('done');
        else if (s === n) el.classList.add('active');
      });
      currentStep = n;
      document.getElementById('step-' + currentStep).classList.add('active');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function nextStep() {
      if (!validateStep(currentStep - 1)) {
          window.scrollTo({ top: 0, behavior: 'smooth' });
          return;
      }
      goToStep(currentStep + 1);
    }
    function prevStep() { goToStep(currentStep - 1); }

    function validateStep(stepIndex) {
        const stepContents = document.querySelectorAll('.step-panel');
        const totalSteps = stepContents.length;
        let currentStep = 1;
        const step = stepContents[stepIndex];
        let isValid = true;

        // Remove old errors
        step.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        step.querySelectorAll('.invalid-feedback').forEach(el => el.remove());

        const requiredFields = step.querySelectorAll('[required]');

        requiredFields.forEach(field => {

            // Ignore hidden fields
            if (field.closest('.d-none')) return;

            let fieldValid = true;

            // Checkbox
            if (field.type === 'checkbox') {
                fieldValid = field.checked;
            }

            // Radio group
            else if (field.type === 'radio') {
                const group = step.querySelectorAll(`input[name="${field.name}"]`);
                fieldValid = [...group].some(r => r.checked);
            }

            // Other inputs
            else {
                fieldValid = field.value.trim() !== '';
            }

            if (!fieldValid) {
                isValid = false;
                field.classList.add('is-invalid');

                // Error message
                if (!field.nextElementSibling || !field.nextElementSibling.classList.contains('invalid-feedback')) {
                    const error = document.createElement('div');
                    error.className = 'invalid-feedback';
                    error.textContent = 'This field is required';
                    field.parentNode.appendChild(error);
                }
            }
        });

        return isValid;
    }

    /* ── Radio pill UX ── */
    function updatePills(name, el) {
      document.querySelectorAll(`[name="${name}"]`).forEach(r => {
        r.closest('.radio-pill').classList.toggle('selected', r === el);
      });
    }

    /* ── Toggle switch ── */
    function toggleSwitch(track) {
      const input = track.parentElement.querySelector('input[type="checkbox"]');
      input.checked = !input.checked;
      track.style.background = input.checked ? 'rgba(99,179,237,0.2)' : '';
      track.style.borderColor = input.checked ? 'rgba(99,179,237,0.5)' : '';
      const thumb = track.parentElement.querySelector('.toggle-thumb');
      thumb.style.left = input.checked ? '21px' : '3px';
      thumb.style.background = input.checked ? 'var(--accent)' : '';
    }

    /* ── Checkbox row ── */
    function toggleCheck(input) {
      input.closest('.check-row')
        .classList.toggle('checked', input.checked);
    }

    /* ── Toggle main language field ── */
    function toggleMainLang(show) {
      document.getElementById('main-lang-field').style.display = show ? 'flex' : 'none';
    }

    /* ── Course card ── */
    const courseData = {
      'CHC33021': {
        name: 'Certificate III in Individual Support (Ageing & Disability)',
        fee: '$1,700.00',
        units: [
          'CHCAGE011: Provide support to people living with dementia',
          'CHCAGE013: Work effectively in aged care',
          'CHCCCS031: Provide individualised support',
          'HLTWHS002: Follow safe work practices'
        ]
      },
      'CHC43015': {
        name: 'Certificate IV in Ageing Support',
        fee: '$2,100.00',
        units: [
          'CHCAGE001: Facilitate the empowerment of older people',
          'CHCAGE003: Coordinate services for older people',
          'CHCPAL001: Deliver care services using a palliative approach',
          'HLTWHS002: Follow safe work practices'
        ]
      },
      'HLTAID011': {
        name: 'Provide First Aid',
        fee: '$165.00',
        units: [
          'HLTAID009: Provide cardiopulmonary resuscitation',
          'HLTAID010: Provide basic emergency life support',
          'HLTAID011: Provide first aid'
        ]
      }
    };

    function updateCourseInfo() {
      const val = document.getElementById('courseSelect').value;
      const card = document.getElementById('courseCard');
      if (!val || !courseData[val]) { card.style.display = 'none'; return; }
      const d = courseData[val];
      document.getElementById('cc-code').textContent = val;
      document.getElementById('cc-name').textContent = d.name;
      document.getElementById('cc-fee').textContent = d.fee;
      const ul = document.getElementById('cc-units');
      ul.innerHTML = d.units.map(u => `<li>${u}</li>`).join('');
      card.style.display = 'block';
    }

    function addCourse() {
      const val = document.getElementById('courseSelect').value;
      if (!val) { showToast('Please select a course first.', false); return; }
      showToast('Course added to your application!');
    }

    /* ── Collect all form values ── */
    function collectFormData() {
      const form = document.getElementById('applicationForm');
      const data = {};
      const elements = form.elements;

      for (let el of elements) {
        if (!el.name || el.name === '_token') continue;
        if (el.type === 'radio') {
          if (el.checked) data[el.name] = el.value;
        } else if (el.type === 'checkbox') {
          data[el.name] = el.checked ? el.value : false;
        } else {
          if (el.value !== '') data[el.name] = el.value;
        }
      }

      // CSRF token for Laravel
      const csrfMeta = document.querySelector('meta[name="csrf-token"]');
      if (csrfMeta) data['_token'] = csrfMeta.getAttribute('content');

      return data;
    }

    /* ── Submit via AJAX ── */
    async function submitApplication(e) {
      e.preventDefault();
      const btn = document.getElementById('submitBtn');
      btn.innerHTML = `<svg class="spin" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg> Submitting...`;
      btn.disabled = true;
      const payload = collectFormData();
      console.log('payload', payload);
      try {
        const response = await fetch('{{ route("application.store") ?? "/application" }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content ?? '{{ csrf_token() }}',
            'Accept': 'application/json',
          },
          body: JSON.stringify(payload)
        });

        const result = await response.json();
        console.log('%c✅ Server Response:', 'color:#68d391;font-weight:600;', result);
        if(result && result.success){
          showToast('Application submitted successfully!', 'success');
        } else {
          showToast(result.message || 'Application submission failed.', 'danger');
        }
      } catch (err) {
        console.warn('%c⚠️ Network or server error (payload still logged above):', 'color:#f6ad55;font-weight:600;', err.message);
        showToast('Payload logged to console (check Network tab)', false);
      } finally {
        btn.innerHTML = `<svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Submit`;
        btn.disabled = false;
      }
    }

    function closeConsole() {
      document.getElementById('ajaxConsole').classList.remove('show');
    }

    /* ── Toast ── */
    let toastInstance = null;

    function showToast(msg, type = 'success', duration = 3500) {
      // Get the toast element
      const toastEl = document.getElementById('liveToast');
      
      // Set message
      document.getElementById('toastMsg').textContent = msg;
      
      // Remove existing color classes
      toastEl.classList.remove('text-bg-primary', 'text-bg-success', 'text-bg-danger', 'text-bg-warning', 'text-bg-info');
      
      // Set appropriate color based on type
      switch(type) {
        case 'success':
          toastEl.classList.add('text-bg-success');
          break;
        case 'error':
        case 'danger':
          toastEl.classList.add('text-bg-danger');
          break;
        case 'warning':
          toastEl.classList.add('text-bg-warning');
          break;
        case 'info':
          toastEl.classList.add('text-bg-info');
          break;
        default:
          toastEl.classList.add('text-bg-primary');
      }
      
      // Initialize or reuse toast instance
      if (!toastInstance) {
        toastInstance = new bootstrap.Toast(toastEl, {
          animation: true,
          autohide: true,
          delay: duration
        });
      } else {
        toastInstance._config.delay = duration;
      }
      
      // Show the toast
      toastInstance.show();
    }

    // Education History functions - jQuery version
    function addQualification() {
      const $level = $('#eduLevel');
      const levelText = $level.find('option:selected').text();
      const qualName = $('#eduQualName').val() || 'Not Specified';
      const schoolName = $('#eduSchoolName').val() || 'Not Specified';
      const stateCountry = $('#eduStateCountry').val() || 'Not Specified';
      const yearCompleted = $('#eduYearCompleted').val() || '—';

      // Simple validation for year field
      if ($('#eduYearCompleted').val() && !/^\d+$/.test($('#eduYearCompleted').val())) {
        showToast('Year must contain only digits', false);
        return;
      }

      const $tbody = $('#educationGridBody');
      const rowCount = $tbody.children().length;

      // Create new row
      const $row = $('<tr>').addClass(rowCount % 2 === 0 ? 'even' : 'odd');
      if (rowCount % 2 === 0) {
        $row.css('background', 'var(--surface-2)');
      }

      $row.html(`
      <td style="padding:10px 12px;">${escapeHtml(levelText)}</td>
      <td style="padding:10px 12px;">${escapeHtml(qualName)}</td>
      <td style="padding:10px 12px;">${escapeHtml(schoolName)}</td>
      <td style="padding:10px 12px;">${escapeHtml(stateCountry)}</td>
      <td style="padding:10px 12px;">${escapeHtml(yearCompleted)}</td>
      <td style="padding:10px 12px; text-align:center;">
        <button type="button" class="icon-btn delete-qual-btn" title="Delete the selected row?" style="background:none; border:none; cursor:pointer;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e" stroke-width="2">
            <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
          </svg>
        </button>
      </td>
    `);

      $tbody.append($row);
      clearQualificationForm();
      showToast('Qualification added successfully!');

      // Ensure the main checkbox reflects that we have qualifications
      $('input[name="add_qualifications"]').prop('checked', true);
    }

    // Event delegation for delete buttons
    $(document).on('click', '.delete-qual-btn', function () {
      const $row = $(this).closest('tr');
      if ($row.length && $row.parent().children().length > 0) {
        $row.remove();
        showToast('Qualification removed');

        // Re-stripe rows
        $('#educationGridBody tr').each(function (index) {
          const $r = $(this);
          $r.removeClass('even odd');
          if (index % 2 === 0) {
            $r.addClass('even').css('background', 'var(--surface-2)');
          } else {
            $r.addClass('odd').css('background', '');
          }
        });
      }
    });

    function deleteQualificationRow(btn) {
      // Legacy support for onclick attribute
      $(btn).closest('tr').remove();
      showToast('Qualification removed');

      // Re-stripe rows
      $('#educationGridBody tr').each(function (index) {
        const $r = $(this);
        $r.removeClass('even odd');
        if (index % 2 === 0) {
          $r.addClass('even').css('background', 'var(--surface-2)');
        } else {
          $r.addClass('odd').css('background', '');
        }
      });
    }

    function clearQualificationForm() {
      $('#eduQualName, #eduSchoolName, #eduStateCountry, #eduYearCompleted').val('');
      // Reset to default selection if desired
      // $('#eduLevel').prop('selectedIndex', 1);
    }

    // Helper to escape HTML for security
    function escapeHtml(unsafe) {
      return String(unsafe)
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }

    // Update the collectFormData function to include education grid data - jQuery version
    const originalCollectFormData = collectFormData;
    collectFormData = function () {
      const data = originalCollectFormData();

      // Add education history from grid
      const educationRows = [];
      $('#educationGridBody tr').each(function () {
        const $cells = $(this).children('td');
        if ($cells.length >= 5) {
          educationRows.push({
            level: $cells.eq(0).text().trim(),
            qualification: $cells.eq(1).text().trim(),
            school: $cells.eq(2).text().trim(),
            location: $cells.eq(3).text().trim(),
            year: $cells.eq(4).text().trim() !== '—' ? $cells.eq(4).text().trim() : ''
          });
        }
      });

      if (educationRows.length > 0) {
        data['education_history'] = educationRows;
      }

      return data;
    };

    // Update the HTML to use jQuery-friendly attributes
    // Replace the delete button in the grid with a class-based approach
    $(document).ready(function () {
      $('#toggle-mailing').click(() => {
        $('#postal_address_div').toggleClass('d-none');
      });
      $('#toggle-overseas').click(() => {
        $('#overseas_permanent_address_div').toggleClass('d-none');
      });
      $('#secondary_school_level').on('change', function () {
        const disable =
          this.value === '02 -Did not go to school' ||
          this.value === 'Not Specified';

        if (disable) {
          // uncheck radios
          $('.still_attending')
            .prop('checked', false)
            .prop('disabled', true);

          // remove UI selected state
          $('.radio-pill').removeClass('selected');

          // hide dependent section
          $('#secondary_school_type_div').addClass('d-none');
        } else {
          // re-enable radios when valid level selected
          $('.still_attending').prop('disabled', false);
        }
      });

      $('.still_attending').on('change', function () {
        $('.radio-pill').removeClass('selected');
        $(this).closest('.radio-pill').addClass('selected');
        $('#secondary_school_type').val('');
        if (this.value == 'yes') {
          $('#secondary_school_type_div').removeClass('d-none');
        } else {
          $('#secondary_school_type_div').addClass('d-none');
        }
      });

      $('.english_test').on('change', function () {
        $('.radio-pill').removeClass('selected');
        $(this).closest('.radio-pill').addClass('selected');
        if (this.value == 'yes') {
          $('#englishTestSection').removeClass('d-none');
        } else {
          $('#englishTestSection').addClass('d-none');
        }
      });
    });
    // Toggle disability fields based on selection
    function toggleDisabilityFields(show) {
      if (show) {
        $('#disabilityAreasPanel').show();
      } else {
        $('#disabilityAreasPanel').hide();
        // Uncheck all impairment checkboxes when hiding
        $('input[name="impairment[]"]').prop('checked', false);
      }
    }

    // Employment functions
    function addEmployment() {
      // Validation
      const employer = $('#employerName').val();
      const occupation = $('#occupationTitle').val();
      const duties = $('#employmentDuties').val();

      if (!employer) {
        showToast('Employer name is required', false);
        return;
      }
      if (!occupation) {
        showToast('Occupation/Job title is required', false);
        return;
      }
      if (!duties) {
        showToast('Duties description is required', false);
        return;
      }

      // Get dates
      let fromDate = $('#employmentFrom').val();
      let toDate = $('#employmentTo').val();

      // Format dates if they exist
      if (fromDate) {
        const date = new Date(fromDate);
        fromDate = date.toLocaleDateString('en-AU'); // DD/MM/YYYY format
      } else {
        fromDate = '—';
      }

      if (toDate) {
        const date = new Date(toDate);
        toDate = date.toLocaleDateString('en-AU');
      } else {
        toDate = '—';
      }

      // Validate date order if both dates exist
      if ($('#employmentFrom').val() && $('#employmentTo').val()) {
        if (new Date($('#employmentFrom').val()) > new Date($('#employmentTo').val())) {
          showToast('Start date must be before finish date!', false);
          return;
        }
      }

      const $tbody = $('#employmentGridBody');
      const rowCount = $tbody.children().length;

      const $row = $('<tr>').addClass(rowCount % 2 === 0 ? 'even' : 'odd');
      if (rowCount % 2 === 0) {
        $row.css('background', 'var(--surface-2)');
      }

      $row.html(`
      <td style="padding:10px 12px;">${escapeHtml(employer)}</td>
      <td style="padding:10px 12px;">${escapeHtml(occupation)}</td>
      <td style="padding:10px 12px;">${escapeHtml(fromDate)}</td>
      <td style="padding:10px 12px;">${escapeHtml(toDate)}</td>
      <td style="padding:10px 12px;">${escapeHtml(duties)}</td>
      <td style="padding:10px 12px; text-align:center;">
        <button type="button" class="delete-emp-btn" title="Delete the selected row?" style="background:none; border:none; cursor:pointer;">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e" stroke-width="2">
            <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
          </svg>
        </button>
      </td>
    `);

      $tbody.append($row);
      clearEmploymentForm();
      showToast('Employment added successfully!');

      // Ensure the main checkbox reflects that we have employment
      $('input[name="add_employment"]').prop('checked', true);
    }

    function clearEmploymentForm() {
      $('#employerName, #occupationTitle, #employmentDuties').val('');
      $('#employmentFrom, #employmentTo').val('');
    }

    // Event delegation for employment delete buttons
    $(document).on('click', '.delete-emp-btn', function () {
      const $row = $(this).closest('tr');
      if ($row.length && $row.parent().children().length > 0) {
        $row.remove();
        showToast('Employment removed');

        // Re-stripe rows
        $('#employmentGridBody tr').each(function (index) {
          const $r = $(this);
          $r.removeClass('even odd');
          if (index % 2 === 0) {
            $r.addClass('even').css('background', 'var(--surface-2)');
          } else {
            $r.addClass('odd').css('background', '');
          }
        });
      }
    });

    // Event delegation for qualification delete buttons (from previous)
    $(document).on('click', '.delete-qual-btn', function () {
      const $row = $(this).closest('tr');
      if ($row.length && $row.parent().children().length > 0) {
        $row.remove();
        showToast('Qualification removed');

        // Re-stripe rows
        $('#educationGridBody tr').each(function (index) {
          const $r = $(this);
          $r.removeClass('even odd');
          if (index % 2 === 0) {
            $r.addClass('even').css('background', 'var(--surface-2)');
          } else {
            $r.addClass('odd').css('background', '');
          }
        });
      }
    });

    // Update collectFormData to include employment and disability data
    const originalCollectFormData2 = collectFormData;
    collectFormData = function () {
      const data = originalCollectFormData2();

      // Add employment history from grid
      const employmentRows = [];
      $('#employmentGridBody tr').each(function () {
        const $cells = $(this).children('td');
        if ($cells.length >= 5) {
          employmentRows.push({
            employer: $cells.eq(0).text().trim(),
            occupation: $cells.eq(1).text().trim(),
            from_date: $cells.eq(2).text().trim() !== '—' ? $cells.eq(2).text().trim() : '',
            to_date: $cells.eq(3).text().trim() !== '—' ? $cells.eq(3).text().trim() : '',
            duties: $cells.eq(4).text().trim()
          });
        }
      });

      if (employmentRows.length > 0) {
        data['employment_history'] = employmentRows;
      }

      // Add disability impairment selections
      const impairments = [];
      $('input[name="impairment[]"]:checked').each(function () {
        impairments.push($(this).val());
      });

      if (impairments.length > 0) {
        data['impairment_areas'] = impairments;
      }

      // Add education history from grid (preserve from previous)
      const educationRows = [];
      $('#educationGridBody tr').each(function () {
        const $cells = $(this).children('td');
        if ($cells.length >= 5) {
          educationRows.push({
            level: $cells.eq(0).text().trim(),
            qualification: $cells.eq(1).text().trim(),
            school: $cells.eq(2).text().trim(),
            location: $cells.eq(3).text().trim(),
            year: $cells.eq(4).text().trim() !== '—' ? $cells.eq(4).text().trim() : ''
          });
        }
      });

      if (educationRows.length > 0) {
        data['education_history'] = educationRows;
      }

      return data;
    };

    // Initialize disability panel state
    $(document).ready(function () {
      if ($('input[name="disability"]:checked').val() !== 'yes') {
        $('#disabilityAreasPanel').hide();
      }
      $('#add_qualifications').change(function () {
        $('#qualificationPanel').toggleClass('d-none');
      });
      $('#add_employment').change(function () {
        $('#employmentPanel').toggleClass('d-none');
      });
    });
    // Course data for unit details and fees
    const courseDetails = {
      'CHC33021-A': {
        code: 'CHC33021',
        name: 'Certificate III in Individual Support (Ageing)',
        fee: '1600.00',
        finishDate: '22 Feb 2027',
        units: [
          'CHCAGE011: Provide support to people living with dementia',
          'CHCAGE013: Work effectively in aged care',
          'CHCCCS031: Provide individualised support',
          'CHCCCS038: Facilitate the empowerment of people receiving support',
          'CHCCCS040: Support independence and wellbeing',
          'CHCCCS041: Recognise healthy body systems',
          'CHCCOM005: Communicate and work in health or community services',
          'CHCDIS011: Contribute to ongoing skills development using a strengths-based approach',
          'CHCDIS020: Work effectively in disability support',
          'CHCDIV001: Work with diverse people',
          'CHCLEG001: Work legally and ethically',
          'CHCPAL003: Deliver Care services using a palliative approach',
          'HLTAID011: Provide First Aid',
          'HLTINF006: Apply basic principles and practices of infection prevention and control',
          'HLTWHS002: Follow safe work practices for direct client care'
        ]
      },
      'CHC33021-D': {
        code: 'CHC33021',
        name: 'Certificate III in Individual Support (Disability)',
        fee: '1600.00',
        finishDate: '22 Feb 2027',
        units: [
          'CHCDIS011: Contribute to ongoing skills development using a strengths-based approach',
          'CHCDIS020: Work effectively in disability support',
          'CHCCCS031: Provide individualised support',
          'HLTWHS002: Follow safe work practices for direct client care'
        ]
      },
      'CHC43015': {
        code: 'CHC43015',
        name: 'Certificate IV in Ageing Support',
        fee: '2100.00',
        finishDate: '22 Feb 2027',
        units: [
          'CHCAGE001: Facilitate the empowerment of older people',
          'CHCAGE003: Coordinate services for older people',
          'CHCPAL001: Deliver care services using a palliative approach',
          'HLTWHS002: Follow safe work practices'
        ]
      },
      'CHC43121': {
        code: 'CHC43121',
        name: 'Certificate IV in Disability Support',
        fee: '2100.00',
        finishDate: '22 Feb 2027',
        units: [
          'CHCDIS015: Develop and provide person-centred service responses',
          'CHCDIS017: Facilitate community participation and social inclusion',
          'CHCDIS018: Facilitate ongoing skills development using a person-centred approach',
          'HLTWHS002: Follow safe work practices'
        ]
      },
      'HLTAID009': {
        code: 'HLTAID009',
        name: 'Provide cardiopulmonary resuscitation',
        fee: '65.00',
        finishDate: '1 year from start',
        units: ['HLTAID009: Provide cardiopulmonary resuscitation']
      },
      'HLTAID011': {
        code: 'HLTAID011',
        name: 'Provide First Aid',
        fee: '165.00',
        finishDate: '3 years from start',
        units: ['HLTAID009: Provide CPR', 'HLTAID010: Provide basic emergency life support', 'HLTAID011: Provide First Aid']
      }
    };

    // Toggle accordion
    function toggleAccordion() {
      const content = $('#unitAccordionContent');
      const icon = $('#accordionIcon');

      if (content.is(':visible')) {
        content.slideUp(300);
        icon.html('<path d="M19 9l-7 7-7-7"/>');
      } else {
        content.slideDown(300);
        icon.html('<path d="M19 15l-7-7-7 7"/>');
      }
    }

    // Update course details when selection changes
    function updateCourseDetails() {
      const courseVal = $('#courseSelect').val();
      const feeSpan = $('#courseFee');
      const unitsList = $('#unitDetailsList');

      if (courseVal && courseDetails[courseVal]) {
        const details = courseDetails[courseVal];
        feeSpan.text(`$${parseFloat(details.fee).toFixed(2)}`);

        // Update units
        unitsList.empty();
        details.units.forEach(unit => {
          unitsList.append(`<li>${unit}</li>`);
        });
      } else {
        feeSpan.text('$0.00');
        unitsList.html(`<li>Select a course to view units</li>
        <li>CHCAGE011:Provide support to people living with dementia</li><li>CHCAGE013:Work effectively in aged care</li><li>CHCCCS031:Provide individualised support</li><li>CHCCCS038:Facilitate the empowerment of people receiving support</li><li>CHCCCS040:Support independence and wellbeing</li><li>CHCCCS041:Recognise healthy body systems</li><li>CHCCOM005:Communicate and work in health or community services</li><li>CHCDIS011:Contribute to ongoing skills development using a strengths-based approach</li><li>CHCDIS020:Work effectively in disability support</li><li>CHCDIV001:Work with diverse people</li><li>CHCLEG001:Work legally and ethically</li><li>CHCPAL003:Deliver Care services using a palliative approach</li><li>HLTAID011:Provide First Aid</li><li>HLTINF006:Apply basic principles and practices of infection prevention and control</li><li>HLTWHS002:Follow safe work practices for direct client care</li>
      `);
      }
    }

    // Add course to applied grid
    function addCourse() {
      const courseVal = $('#courseSelect').val();
      const courseOption = $('#courseSelect option:selected');

      if (!courseVal) {
        showToast('Please select a course first.', false);
        return;
      }

      const details = courseDetails[courseVal];
      if (!details) {
        showToast('Course details not found.', false);
        return;
      }

      const startDate = $('#intakeDate option:selected').text();
      const finishDate = details.finishDate || '22 Feb 2027';
      const tbody = $('#appliedCoursesBody');
      const rowCount = tbody.children().length;

      const $row = $('<tr>').addClass(rowCount % 2 === 0 ? 'odd' : 'even');
      if (rowCount % 2 === 0) {
        $row.css('background', 'var(--surface-2)');
      }

      $row.attr('data-course-code', details.code);
      $row.attr('data-course-value', courseVal);

      $row.html(`
      <td style="padding:10px 12px;">${details.code}</td>
      <td style="padding:10px 12px;">${details.name}</td>
      <td style="padding:10px 12px;">${startDate}</td>
      <td style="padding:10px 12px;">${finishDate}</td>
      <td style="padding:10px 12px;">New Application Request</td>
      <td style="padding:10px 12px; text-align:center;">
        <input type="checkbox" class="module-enrolment" style="opacity:0.5;" disabled>
      </td>
      <td style="padding:10px 12px; text-align:center;">
        <div style="display:flex; gap:8px; justify-content:center;">
          <button type="button" class="delete-course-btn" title="Delete the selected row?" style="background:none; border:none; cursor:pointer;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#e53e3e" stroke-width="2">
              <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
            </svg>
          </button>
          <button type="button" class="view-fields-btn" title="View additional fields for selected course" style="background:none; border:none; cursor:pointer;" onclick="openModal(this)">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4299e1" stroke-width="2">
              <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
          </button>
        </div>
      </td>
    `);

      tbody.append($row);
      showToast('Course added successfully!');
    }

    // Event delegation for delete buttons
    $(document).on('click', '.delete-course-btn', function () {
      const $row = $(this).closest('tr');
      if ($row.length && $row.parent().children().length > 0) {
        $row.remove();
        showToast('Course removed');

        // Re-stripe rows
        $('#appliedCoursesBody tr').each(function (index) {
          const $r = $(this);
          $r.removeClass('odd even');
          if (index % 2 === 0) {
            $r.addClass('odd').css('background', 'var(--surface-2)');
          } else {
            $r.addClass('even').css('background', '');
          }
        });
      }
    });

    // Modal functions
    function openModal(btn) {
      const $row = $(btn).closest('tr');
      const courseCode = $row.data('course-code') || 'CHC33021';
      const courseName = $row.find('td:eq(1)').text();

      $('#modalAdditionalFields').html(`
      <div style="padding:10px;">
        <p><strong>Course:</strong> ${courseName}</p>
        <p><strong>Code:</strong> ${courseCode}</p>
        <table class="grid-custom-fields" style="width:100%; margin-top:15px;">
          <tbody>
            <tr>
              <td colspan="3" style="padding:20px; text-align:center; color:var(--text-secondary);">
                No additional fields available for this course
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    `);

      $('#additionalFieldsModal, #modalBackdrop').fadeIn(300);
    }

    function closeModal() {
      $('#additionalFieldsModal, #modalBackdrop').fadeOut(300);
    }

    // Save for later function
    function saveForLater() {
      showToast('Application saved! You can complete it later.');
      // Add your save logic here
    }

    // Update collectFormData to include enrolment data
    const originalCollectFormData4 = collectFormData;
    collectFormData = function () {
      const data = originalCollectFormData4();

      // Add applied courses
      const courses = [];
      $('#appliedCoursesBody tr').each(function () {
        const $cells = $(this).children('td');
        if ($cells.length >= 7) {
          courses.push({
            course_id: $cells.eq(0).text().trim(),
            course_name: $cells.eq(1).text().trim(),
            start_date: $cells.eq(2).text().trim(),
            finish_date: $cells.eq(3).text().trim(),
            status: $cells.eq(4).text().trim(),
            module_enrolment: $cells.eq(5).find('input').is(':checked')
          });
        }
      });

      if (courses.length > 0) {
        data['applied_courses'] = courses;
      }

      // Add current course selection
      data['current_course'] = {
        intake_year: $('#intakeYear').val(),
        course_code: $('#courseSelect').val(),
        study_type: $('input[name="study_type"]:checked').val(),
        intake_date: $('#intakeDate').val(),
        location: $('#courseLocation').val(),
        study_reason: $('#studyReason').val()
      };

      return data;
    };

    // Initialize on document ready
    $(document).ready(function () {
      // Hide modal on backdrop click
      $('#modalBackdrop').click(closeModal);

      // Close modal with Escape key
      $(document).keyup(function (e) {
        if (e.key === 'Escape' && $('#additionalFieldsModal').is(':visible')) {
          closeModal();
        }
      });

      // Initialize course details
      updateCourseDetails();
    });
  </script>

@endsection