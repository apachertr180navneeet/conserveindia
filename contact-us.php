<?php
$page_title = "Contact Us — Conserve India | Partner, Wholesale & Inquiries";
$page_description = "Get in touch with Conserve India for wholesale orders, corporate CSR collaborations, research partnerships, or general inquiries in New Delhi.";
$current_page = "contact";
require_once __DIR__ . '/includes/header.php';
?>

  <!-- Subpage Header Banner -->
  <div class="page-banner">
    <div class="container px-lg-4">
      <div class="breadcrumb-conserve">
        <a href="index.php">Home</a> <span>&bull;</span> Contact Us
      </div>
      <h1 class="page-banner-title">Let’s Work Together</h1>
      <p class="page-banner-desc">
        Whether you are an international buyer, corporate partner, researcher, or conscious consumer, we would love to collaborate with you.
      </p>
    </div>
  </div>

  <!-- Contact Form & Info Grid -->
  <section class="py-5 bg-white">
    <div class="container px-lg-4 py-3">
      <div class="row g-5">
        
        <!-- Left: Contact Form -->
        <div class="col-lg-7">
          <div class="content-card mb-0 shadow-sm">
            <div class="approach-tag">GET IN TOUCH</div>
            <h2 class="font-serif mb-4" style="font-size: 28px;">Send Us a Message</h2>

            <form onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent to the Conserve India team. We will respond promptly.');">
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Your Name *</label>
                  <input type="text" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Email Address *</label>
                  <input type="email" class="form-control" placeholder="name@domain.com" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Phone Number</label>
                  <input type="tel" class="form-control" placeholder="+91 / International Phone">
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-semibold">Organization / Company</label>
                  <input type="text" class="form-control" placeholder="Organization Name">
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Nature of Inquiry *</label>
                  <select class="form-select" required>
                    <option value="" selected disabled>Select an inquiry category</option>
                    <option value="wholesale">B2B Wholesale / Export Catalog</option>
                    <option value="corporate">Corporate Gifting / CSR Collaboration</option>
                    <option value="consulting">Sustainability Consulting &amp; Waste Audits</option>
                    <option value="research">Academic / Environmental Research</option>
                    <option value="general">General Feedback / Volunteer</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-semibold">Your Message *</label>
                  <textarea class="form-control" rows="5" placeholder="Share your project details, questions, or product interest..." required></textarea>
                </div>
                <div class="col-12 pt-2">
                  <button type="submit" class="btn-primary-forest px-4">Send Message &rarr;</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Right: Office Details & Direct Info -->
        <div class="col-lg-5">
          <div class="p-4 rounded-4 mb-4" style="background-color: #f7f5ed; border: 1px solid #eae5d6;">
            <h4 class="font-serif mb-4" style="color: var(--primary-forest);">Conserve India Headquarters</h4>
            
            <div class="d-flex align-items-start gap-3 mb-4">
              <div class="pillar-icon-box" style="width: 40px; height: 40px;">
                <i class="bi bi-geo-alt text-success fs-5"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Head Office &amp; Design Studio</strong>
                <span class="text-muted small">Conserve HRP, New Delhi, India</span>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-4">
              <div class="pillar-icon-box" style="width: 40px; height: 40px;">
                <i class="bi bi-envelope text-success fs-5"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Official Email</strong>
                <a href="mailto:info@conserveindia.org" class="text-success text-decoration-none small">info@conserveindia.org</a>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-4">
              <div class="pillar-icon-box" style="width: 40px; height: 40px;">
                <i class="bi bi-shop text-success fs-5"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Retail Consumer Store</strong>
                <a href="https://www.lifaffa.com" target="_blank" rel="noopener" class="text-success text-decoration-none small">www.lifaffa.com &nearr;</a>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="pillar-icon-box" style="width: 40px; height: 40px;">
                <i class="bi bi-clock text-success fs-5"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Operating Hours</strong>
                <span class="text-muted small">Monday – Saturday: 9:30 AM – 6:00 PM IST</span>
              </div>
            </div>
          </div>

          <!-- Social Connect -->
          <div class="p-4 rounded-4" style="background-color: #ffffff; border: 1px solid #eae5d6;">
            <h5 class="fw-bold mb-3" style="font-size: 16px; color: var(--primary-forest);">Connect on Social Channels</h5>
            <div class="d-flex gap-2">
              <a href="https://facebook.com" class="social-circle-link" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
              <a href="https://instagram.com" class="social-circle-link" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
              <a href="https://linkedin.com" class="social-circle-link" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
              <a href="https://youtube.com" class="social-circle-link" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Interactive FAQ Section -->
  <section class="py-5" style="background-color: #f7f5ed;">
    <div class="container px-lg-4 py-3">
      <div class="text-center mb-5">
        <div class="approach-tag justify-content-center">FREQUENTLY ASKED QUESTIONS</div>
        <h2 class="font-serif mb-0" style="font-size: clamp(2rem, 3.2vw, 2.5rem);">
          Common Questions &amp; Answers
        </h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="accordion accordion-flush bg-white rounded-4 p-4 border border-1 border-light-subtle shadow-sm" id="conserveFaqAccordion">
            
            <div class="accordion-item border-bottom">
              <h2 class="accordion-header" id="faq1">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  How does Conserve source its discarded plastic raw materials?
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#conserveFaqAccordion">
                <div class="accordion-body text-muted small" style="line-height: 1.6;">
                  We purchase waste plastic bags and polythene films directly from informal waste pickers (ragpickers) in and around Delhi. We pay rates well above typical scrap brokers, providing steady, reliable income while reclaiming low-grade plastic that would otherwise be burned or landfilled.
                </div>
              </div>
            </div>

            <div class="accordion-item border-bottom">
              <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  What makes Handmade Recycled Plastic (HRP) distinct from virgin leather?
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#conserveFaqAccordion">
                <div class="accordion-body text-muted small" style="line-height: 1.6;">
                  HRP is 100% cruelty-free, water-resistant, lightweight, and durable. Crucially, animal leather tanning is among the world's most chemical-intensive industries. By contrast, HRP uses zero toxic dyes, reusing the innate colors of recycled plastics through calibrated thermal compression.
                </div>
              </div>
            </div>

            <div class="accordion-item border-bottom">
              <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  Can corporations place custom orders with their own branding?
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#conserveFaqAccordion">
                <div class="accordion-body text-muted small" style="line-height: 1.6;">
                  Yes! We regularly produce custom laptop sleeves, conference folders, tote bags, and corporate gifts with company logos debossed, embroidered, or printed. Each piece comes with a verifiable impact certificate detailing the kilograms of plastic diverted and artisan hours supported.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  Where can retail consumers purchase individual bags?
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#conserveFaqAccordion">
                <div class="accordion-body text-muted small" style="line-height: 1.6;">
                  For retail and individual orders, you can shop directly through our dedicated retail platform at <a href="https://www.lifaffa.com" target="_blank" rel="noopener" class="text-success fw-bold">Lifaffa.com</a>, which ships across India and worldwide.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
