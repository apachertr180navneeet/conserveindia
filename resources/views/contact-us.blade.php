@extends('layouts.app')

@section('title', 'Contact Us — Conserve India | Partner, Wholesale & Inquiries')
@section('description', 'Connect directly with Conserve India for international B2B wholesale, patented HRP material orders, corporate CSR collaborations, and circular economy consulting.')

@section('content')
<!-- Editorial Page Header -->
  <header class="cu-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/connect-with-us') }}">Connect With Us</a> <span>/</span> Contact
      </nav>
      <span class="ed-section-tag">CONNECT &amp; COLLABORATE</span>
      <h1 class="ed-page-title" style="max-width: 820px;">Let’s Engineer Circular Impact Together</h1>
      <p class="ed-page-lead" style="max-width: 760px;">
        Whether you are an international buyer seeking certified Fair Trade upcycled fashion, a corporation planning zero-waste audits, or a funder exploring artisan livelihoods, our Delhi team is ready to assist.
      </p>

      <!-- Reassurance Badges -->
      <div class="cu-pill-strip">
        <div class="cu-badge-pill">
          <i class="bi bi-patch-check-fill"></i>
          <span>Certified Fair Trade Ateliers</span>
        </div>
        <div class="cu-badge-pill">
          <i class="bi bi-clock-history"></i>
          <span>Direct Response Within 24&ndash;48 Hours</span>
        </div>
        <div class="cu-badge-pill">
          <i class="bi bi-globe-americas"></i>
          <span>Global B2B Export Logistics (US, UK &amp; EU)</span>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Contact Section -->
  <section class="ed-content-section" style="padding: 70px 0 90px; background-color: var(--warm-bg);">
    <div class="container px-lg-4">

      <!-- Quick Inquiry Intent Selector -->
      <div class="mb-4">
        <span class="text-uppercase fw-bold text-muted small" style="letter-spacing: 1.2px; font-size: 11px;">Select Your Primary Interest</span>
      </div>
      <div class="cu-intent-row">
        <!-- Intent 1 -->
        <div class="cu-intent-card is-selected" onclick="selectInquiryIntent('wholesale', this)">
          <div class="cu-intent-icon">
            <i class="bi bi-box-seam"></i>
          </div>
          <h3 class="cu-intent-title">B2B Wholesale &amp; Export</h3>
          <p class="cu-intent-desc">Upcycled bags, lifestyle accessories &amp; patented HRP sheets for retailers.</p>
        </div>

        <!-- Intent 2 -->
        <div class="cu-intent-card" onclick="selectInquiryIntent('corporate', this)">
          <div class="cu-intent-icon">
            <i class="bi bi-gift"></i>
          </div>
          <h3 class="cu-intent-title">Corporate Gifting</h3>
          <p class="cu-intent-desc">Custom-branded sustainable conference kits, laptop sleeves &amp; gifts.</p>
        </div>

        <!-- Intent 3 -->
        <div class="cu-intent-card" onclick="selectInquiryIntent('consulting', this)">
          <div class="cu-intent-icon">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h3 class="cu-intent-title">Waste Audits &amp; EPR</h3>
          <p class="cu-intent-desc">Campus audits, single-use plastic phaseout &amp; ESG compliance advisory.</p>
        </div>

        <!-- Intent 4 -->
        <div class="cu-intent-card" onclick="selectInquiryIntent('training', this)">
          <div class="cu-intent-icon">
            <i class="bi bi-people"></i>
          </div>
          <h3 class="cu-intent-title">Artisan CSR Programs</h3>
          <p class="cu-intent-desc">Grassroots waste picker and refugee women livelihood incubation.</p>
        </div>
      </div>

      <div class="row g-5 align-items-start">
        
        <!-- Left Column: Upgraded Inquiry Form -->
        <div class="col-lg-7">
          <div class="cu-form-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <span class="ed-section-tag mb-0">DIRECT INQUIRY</span>
              <span class="text-muted small"><span class="text-danger">*</span> Required fields</span>
            </div>
            <h2 class="ed-section-title" style="font-size: 26px; margin-bottom: 8px;">Send a Message to Our Leadership</h2>
            <p class="text-secondary small mb-4" style="line-height: 1.6;">
              Please provide project details, delivery expectations, or technical questions. Our directors review and respond to each inquiry personally.
            </p>

            <form id="contactPageForm" onsubmit="handleContactPageSubmit(event)">
              <div class="row g-3">
                <!-- Full Name -->
                <div class="col-md-6 cu-form-group mb-0">
                  <label for="cuName" class="cu-form-label">Your Name <span class="text-danger">*</span></label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-person cu-input-icon"></i>
                    <input type="text" class="cu-form-control" id="cuName" name="name" placeholder="Full Name" required>
                  </div>
                </div>

                <!-- Email Address -->
                <div class="col-md-6 cu-form-group mb-0">
                  <label for="cuEmail" class="cu-form-label">Email Address <span class="text-danger">*</span></label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-envelope cu-input-icon"></i>
                    <input type="email" class="cu-form-control" id="cuEmail" name="email" placeholder="name@company.com" required>
                  </div>
                </div>

                <!-- Phone / WhatsApp -->
                <div class="col-md-6 cu-form-group mb-0">
                  <label for="cuPhone" class="cu-form-label">Phone / WhatsApp</label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-telephone cu-input-icon"></i>
                    <input type="tel" class="cu-form-control" id="cuPhone" name="phone" placeholder="+91 / International number">
                  </div>
                </div>

                <!-- Company / Organization -->
                <div class="col-md-6 cu-form-group mb-0">
                  <label for="cuOrg" class="cu-form-label">Company or Organization</label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-building cu-input-icon"></i>
                    <input type="text" class="cu-form-control" id="cuOrg" name="organization" placeholder="Enterprise or Agency">
                  </div>
                </div>

                <!-- Inquiry Nature -->
                <div class="col-12 cu-form-group mb-0">
                  <label for="cuSubject" class="cu-form-label">Nature of Inquiry <span class="text-danger">*</span></label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-tag cu-input-icon"></i>
                    <select class="cu-form-select" id="cuSubject" name="subject" required>
                      <option value="" disabled>Select an inquiry area</option>
                      <option value="wholesale" selected>B2B Wholesale &amp; International Export</option>
                      <option value="corporate">Corporate Gifting &amp; Co-Branded Accessories</option>
                      <option value="consulting">Sustainability Consulting, Waste Audits &amp; EPR</option>
                      <option value="training">Artisan Capacity Building &amp; CSR Collaboration</option>
                      <option value="research">Academic / Environmental Material Science</option>
                      <option value="general">Press, Media &amp; General Inquiries</option>
                    </select>
                  </div>
                </div>

                <!-- Project Message -->
                <div class="col-12 cu-form-group mb-0">
                  <label for="cuMessage" class="cu-form-label">Project Scope &amp; Specifications <span class="text-danger">*</span></label>
                  <div class="cu-input-wrapper">
                    <i class="bi bi-chat-left-text cu-input-icon-textarea"></i>
                    <textarea class="cu-form-control" id="cuMessage" name="message" rows="5" placeholder="Please outline your product requirements, volume estimates, desired timelines, or corporate collaboration goals..." required></textarea>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="col-12 pt-2">
                  <button type="submit" id="cuSubmitBtn" class="cu-btn-submit-contact">
                    <span class="btn-text">Submit Inquiry &rarr;</span>
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                  </button>
                </div>
              </div>

              <!-- Inline Success Alert -->
              <div id="cuSuccessFeedback" class="alert alert-success mt-4 mb-0" style="display: none; border-radius: 10px;" role="alert">
                <div class="d-flex align-items-start gap-3">
                  <i class="bi bi-check-circle-fill text-success fs-4"></i>
                  <div>
                    <h4 class="h6 fw-bold mb-1">Inquiry Successfully Received</h4>
                    <p class="small mb-0" style="line-height: 1.5;">Thank you for contacting Conserve India. A representative from our team will review your specifications and reply via email within 24 to 48 business hours.</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Right Column: Headquarters, Retail & Quick FAQ -->
        <div class="col-lg-5">
          
          <!-- Headquarters & Atelier Card -->
          <div class="cu-sidebar-card dark-theme">
            <span class="badge bg-white text-dark mb-3 text-uppercase px-2 py-1" style="font-size: 10px; letter-spacing: 1px;">Headquarters &amp; Innovation Lab</span>
            <h3 class="h4 fw-bold text-white mb-2" style="font-family: var(--font-heading);">Conserve India Ateliers</h3>
            <p class="text-muted small mb-4" style="line-height: 1.6;">
              Our master production units, material thermocompression laboratories, and artisan training centers are based in the Delhi-NCR national capital region.
            </p>

            <div class="cu-info-item">
              <div class="cu-info-icon-box">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div class="small">
                <strong class="text-white d-block">Production Atelier &amp; Studio:</strong>
                <span class="text-muted">New Delhi / NCR, India</span><br>
                <span class="text-white-50" style="font-size: 11.5px;">Atelier tours &amp; visits welcome by prior appointment</span>
              </div>
            </div>

            <div class="cu-info-item">
              <div class="cu-info-icon-box">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div class="small">
                <strong class="text-white d-block">Official Inquiries &amp; Proposals:</strong>
                <a href="mailto:info@conserveindia.org" class="text-white fw-bold text-decoration-none">info@conserveindia.org</a>
              </div>
            </div>

            <div class="cu-info-item">
              <div class="cu-info-icon-box">
                <i class="bi bi-clock-fill"></i>
              </div>
              <div class="small">
                <strong class="text-white d-block">Operating Hours:</strong>
                <span class="text-muted">Monday &ndash; Saturday: 9:30 AM &ndash; 6:30 PM IST</span>
              </div>
            </div>

            <!-- Social Links inside Dark Card -->
            <div class="pt-3 mt-3 border-top border-secondary-subtle">
              <span class="text-white-50 small d-block mb-2">Connect via official social channels:</span>
              <div class="d-flex align-items-center gap-2">
                <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-pill px-3" style="font-size: 12px;">
                  <i class="bi bi-instagram me-1 text-warning"></i> Instagram
                </a>
                <a href="https://www.linkedin.com/company/conserve-india/" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-pill px-3" style="font-size: 12px;">
                  <i class="bi bi-linkedin me-1 text-info"></i> LinkedIn
                </a>
                <a href="https://www.facebook.com/conserveindia" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-light rounded-pill px-3" style="font-size: 12px;">
                  <i class="bi bi-facebook me-1 text-primary"></i> Facebook
                </a>
              </div>
            </div>
          </div>

          <!-- Retail Store Box -->
          <div class="cu-sidebar-card">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <span class="ed-section-tag mb-0">DIRECT RETAIL</span>
              <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">Consumer Orders</span>
            </div>
            <h4 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading); color: var(--primary-forest);">Lifaffa by Conserve</h4>
            <p class="text-muted small mb-3" style="line-height: 1.6;">
              Looking to purchase individual patented upcycled handbags, laptop folios, kitchen aprons, or home decor items for personal use? Visit our official e-commerce storefront.
            </p>
            <a href="https://www.lifaffa.com" target="_blank" rel="noopener noreferrer" class="ed-link-arrow">
              Shop Online at Lifaffa.com &nearr;
            </a>
          </div>

          <!-- Quick FAQ / Support Details -->
          <div class="cu-sidebar-card">
            <h4 class="fw-bold mb-3" style="font-size: 16px; font-family: var(--font-heading); color: var(--primary-forest);">Frequently Asked Questions</h4>
            
            <details class="cu-faq-toggle">
              <summary class="fw-semibold small" style="cursor: pointer; color: var(--text-primary);">
                Can we order material swatches or HRP samples?
              </summary>
              <p class="text-muted small mt-2 mb-0" style="line-height: 1.5;">
                Yes. We dispatch physical sample swatch booklets showcasing various colors and textures of patented HRP sheets for fashion and corporate buyers.
              </p>
            </details>

            <details class="cu-faq-toggle">
              <summary class="fw-semibold small" style="cursor: pointer; color: var(--text-primary);">
                What are typical minimum order quantities (MOQs)?
              </summary>
              <p class="text-muted small mt-2 mb-0" style="line-height: 1.5;">
                For custom corporate gifting, our MOQs generally start at 50&ndash;100 units. For international wholesale export, orders typically start at 250 units per design.
              </p>
            </details>

            <details class="cu-faq-toggle mb-0">
              <summary class="fw-semibold small" style="cursor: pointer; color: var(--text-primary);">
                Do you provide Extended Producer Responsibility (EPR) reports?
              </summary>
              <p class="text-muted small mt-2 mb-0" style="line-height: 1.5;">
                Yes. Our consulting team performs certified solid waste audits and provides traceable material recovery documentation suitable for corporate ESG disclosures.
              </p>
            </details>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Interactive Script for Form and Intent Selector -->
  <script>
    function selectInquiryIntent(intentKey, el) {
      // Highlight card
      document.querySelectorAll('.cu-intent-card').forEach(function(card) {
        card.classList.remove('is-selected');
      });
      el.classList.add('is-selected');

      // Update dropdown selection
      var subjectSelect = document.getElementById('cuSubject');
      if (subjectSelect) {
        subjectSelect.value = intentKey;
      }
    }

    function handleContactPageSubmit(e) {
      e.preventDefault();
      var form = document.getElementById('contactPageForm');
      var submitBtn = document.getElementById('cuSubmitBtn');
      var feedback = document.getElementById('cuSuccessFeedback');

      var btnText = submitBtn.querySelector('.btn-text');
      var spinner = submitBtn.querySelector('.spinner-border');

      btnText.textContent = 'Submitting Inquiry...';
      spinner.classList.remove('d-none');
      submitBtn.disabled = true;

      setTimeout(function() {
        btnText.textContent = 'Inquiry Sent!';
        spinner.classList.add('d-none');
        feedback.style.display = 'block';
        feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        form.reset();

        setTimeout(function() {
          btnText.textContent = 'Submit Inquiry →';
          submitBtn.disabled = false;
        }, 4000);
      }, 700);
    }
  </script>
@endsection
