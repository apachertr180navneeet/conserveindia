<?php
$page_title = "Contact Us — Conserve India | Partner, Wholesale & Inquiries";
$page_description = "Get in touch with Conserve India for wholesale orders, corporate CSR collaborations, research partnerships, or general inquiries in New Delhi.";
$current_page = "connect";
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="index.php">Home</a> <span>/</span> <a href="connect-with-us.php">Connect With Us</a> <span>/</span> Contact
      </nav>
      <span class="ed-section-tag">CONNECT &amp; COLLABORATE</span>
      <h1 class="ed-page-title">Let’s Work Together</h1>
      <p class="ed-page-lead">
        Whether you are seeking certified Fair Trade upcycled goods for international retail, planning corporate waste audits, or exploring community CSR initiatives, we welcome your inquiry.
      </p>
    </div>
  </header>

  <!-- Contact Form & Info Section -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row g-5">
        
        <!-- Left Column: Inquiry Form -->
        <div class="col-lg-7">
          <div class="ed-card p-4 p-md-5">
            <span class="ed-section-tag">MESSAGE OUR TEAM</span>
            <h2 class="ed-section-title" style="font-size: 24px; margin-bottom: 22px;">Send an Inquiry</h2>

            <form onsubmit="event.preventDefault(); alert('Thank you! Your message has been received by Conserve India. Our team will review your inquiry and follow up promptly.');">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Your Name *</label>
                  <input type="text" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Email Address *</label>
                  <input type="email" class="form-control" placeholder="name@organization.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Phone / WhatsApp</label>
                  <input type="tel" class="form-control" placeholder="+91 / International number">
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Organization / Company</label>
                  <input type="text" class="form-control" placeholder="Company or Organization">
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Nature of Inquiry *</label>
                  <select class="form-select" required>
                    <option value="" selected disabled>Select an inquiry area</option>
                    <option value="wholesale">B2B Wholesale &amp; International Export</option>
                    <option value="corporate">Corporate Gifting &amp; Co-Branded Accessories</option>
                    <option value="consulting">Sustainability Consulting, Waste Audits &amp; EPR</option>
                    <option value="training">Artisan Capacity Building &amp; CSR Collaboration</option>
                    <option value="research">Academic / Environmental Research</option>
                    <option value="general">General Inquiries &amp; Press</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Project Details &amp; Message *</label>
                  <textarea class="form-control" rows="5" placeholder="Please describe your project, volume expectations, delivery timeline, or questions..." required></textarea>
                </div>
                <div class="col-12 pt-2">
                  <button type="submit" class="ed-btn-primary">Send Inquiry &rarr;</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Right Column: Direct Info & Office Details -->
        <div class="col-lg-5">
          <!-- Office Box -->
          <div class="ed-card p-4 p-md-4 mb-4" style="background-color: #f8f7f3;">
            <span class="ed-section-tag">HEADQUARTERS &amp; ATELIER</span>
            <h3 class="fw-bold mb-3" style="font-size: 19px; font-family: var(--font-heading);">Conserve India</h3>
            
            <div class="d-flex flex-column gap-3 mb-4">
              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-geo-alt text-success fs-5"></i>
                <div class="text-secondary small" style="line-height: 1.55;">
                  <strong>Workshop &amp; Production Atelier:</strong><br>
                  New Delhi / NCR, India<br>
                  <span class="text-muted">Visits welcome by prior appointment</span>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-envelope text-success fs-5"></i>
                <div class="text-secondary small">
                  <strong>General &amp; Trade Inquiries:</strong><br>
                  <a href="mailto:info@conserveindia.org" class="text-decoration-none text-success fw-semibold">info@conserveindia.org</a>
                </div>
              </div>

              <div class="d-flex align-items-start gap-3">
                <i class="bi bi-clock text-success fs-5"></i>
                <div class="text-secondary small">
                  <strong>Operating Hours:</strong><br>
                  Monday &ndash; Saturday: 9:30 AM &ndash; 6:30 PM IST
                </div>
              </div>
            </div>

            <div class="border-top pt-3" style="border-color: var(--border-light) !important;">
              <span class="text-muted small d-block mb-2">Connect on social channels:</span>
              <div class="d-flex align-items-center gap-2">
                <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-btn-outline py-1 px-3" style="font-size: 12px;">
                  <i class="bi bi-instagram me-1 text-danger"></i> Instagram
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="ed-btn-outline py-1 px-3" style="font-size: 12px;">
                  <i class="bi bi-linkedin me-1 text-primary"></i> LinkedIn
                </a>
              </div>
            </div>
          </div>

          <!-- Retail Store Box -->
          <div class="ed-card p-4">
            <span class="ed-section-tag">CONSUMER RETAIL STORE</span>
            <h4 class="fw-bold mb-2" style="font-size: 17px; font-family: var(--font-heading);">Lifaffa by Conserve</h4>
            <p class="text-muted small mb-3" style="line-height: 1.6;">
              Looking to purchase individual upcycled bags, lifestyle organizers, or home accessories for personal use? Visit our official direct-to-consumer store.
            </p>
            <a href="https://www.lifaffa.com" target="_blank" rel="noopener noreferrer" class="ed-link-arrow">
              Visit Lifaffa.com &nearr;
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
