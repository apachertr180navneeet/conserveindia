@extends('layouts.app')

@section('title', 'Connect With Us — Conserve India | Contact, Volunteer, Partner & Donate')
@section('description', 'Connect with Conserve India: contact our Delhi atelier, volunteer your skills, explore institutional partnerships, or donate to support artisan livelihoods.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Connect With Us
      </nav>
      <span class="ed-section-tag">COLLABORATION &amp; SOLIDARITY</span>
      <h1 class="ed-page-title">Connect, Partner &amp; Support</h1>
      <p class="ed-page-lead">
        Whether you want to partner on circular supply chains, volunteer your creative talents, make a tax-deductible contribution, or visit our Delhi atelier, there is a place for you in our movement.
      </p>
    </div>
  </header>

  <!-- 4 Action Pathway Cards -->
  <section class="ed-content-section" style="background: #fff;">
    <div class="container px-lg-4">
      <div class="row g-4 mb-5">
        
        <!-- Pathway 1: Contact -->
        <div class="col-md-4">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between text-center">
            <div>
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-chat-dots-fill"></i>
              </div>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Contact Us</h3>
              <p class="text-secondary small mb-3">Direct message, showroom visits, media interviews, and general correspondence.</p>
            </div>
            <a href="{{ url('/contact-us') }}" class="btn btn-outline-success btn-sm w-100">Send Inquiry &rarr;</a>
          </div>
        </div>

        <!-- Pathway 2: Volunteer -->
        <div class="col-md-4">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between text-center">
            <div>
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-people-fill"></i>
              </div>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Volunteer With Us</h3>
              <p class="text-secondary small mb-3">Lend your skills in design, photography, teaching, field surveys, or community health.</p>
            </div>
            <a href="#volunteer" class="btn btn-outline-success btn-sm w-100">Volunteer Today &rarr;</a>
          </div>
        </div>

        <!-- Pathway 3: Partner -->
        <div class="col-md-4">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between text-center">
            <div>
              <div class="mx-auto mb-3 d-inline-flex align-items-center justify-content-center" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-briefcase-fill"></i>
              </div>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Partner With Us</h3>
              <p class="text-secondary small mb-3">Corporate ESG, B2B wholesale, corporate gifting, waste audits, and institutional CSR.</p>
            </div>
            <a href="#partner" class="btn btn-outline-success btn-sm w-100">Partner Details &rarr;</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Partner With Us (#partner) -->
  <section class="ed-content-section" id="partner" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">INSTITUTIONAL COLLABORATION</span>
          <h2 class="ed-section-title">Partner With Conserve India</h2>
          <p class="text-secondary small mb-3" style="line-height: 1.7;">
            We collaborate with global retailers, forward-thinking brands, FMCG conglomerates, and philanthropic foundations to pioneer high-integrity circular ecosystems.
          </p>
          <div class="d-flex flex-column gap-3 mb-4">
            <div class="p-3 bg-white rounded-3 border border-light-subtle">
              <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);"><i class="bi bi-cart4 text-success me-2"></i> B2B Wholesale &amp; Retail Export</h4>
              <p class="text-muted small mb-0">Custom upcycled HRP collections, certified Fair Trade accessories for international boutiques and supermarkets.</p>
            </div>
            <div class="p-3 bg-white rounded-3 border border-light-subtle">
              <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);"><i class="bi bi-recycle text-success me-2"></i> Extended Producer Responsibility (EPR)</h4>
              <p class="text-muted small mb-0">Auditable, ethical plastic waste recovery verified with grassroots worker dignity and compliance filings.</p>
            </div>
            <div class="p-3 bg-white rounded-3 border border-light-subtle">
              <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);"><i class="bi bi-gift text-success me-2"></i> Sustainable Corporate Gifting</h4>
              <p class="text-muted small mb-0">Conference portfolios, eco-friendly laptop sleeves, and customized upcycled items with your brand story.</p>
            </div>
          </div>
          <a href="contact-us.php?topic=partner" class="btn-primary-forest">Initiate a Partnership &rarr;</a>
        </div>
        <div class="col-lg-6">
          <div class="p-4 p-md-5 rounded-4 bg-white border border-light-subtle shadow-sm">
            <h3 class="h5 fw-bold mb-3" style="color: var(--primary-forest);">Partnership Request</h3>
            <form onsubmit="event.preventDefault(); alert('Thank you for reaching out to partner with Conserve India. We will review your organization\'s details and connect shortly.');">
              <div class="mb-3">
                <label class="form-label small fw-semibold">Contact Name *</label>
                <input type="text" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Work Email *</label>
                <input type="email" class="form-control" placeholder="name@company.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Organization / Brand *</label>
                <input type="text" class="form-control" placeholder="Organization Name" required>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Collaboration Scope *</label>
                <select class="form-select" required>
                  <option value="" selected disabled>Select partnership model</option>
                  <option value="b2b">Wholesale / Private Label Upcycled Goods</option>
                  <option value="corporate-gifting">Corporate Merchandising &amp; Gifting</option>
                  <option value="epr">EPR &amp; Plastic Waste Neutralization</option>
                  <option value="csr">CSR Grants &amp; Livelihood Incubation</option>
                  <option value="academic">Academic / University Immersion</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label small fw-semibold">Estimated Volume / Timeline</label>
                <input type="text" class="form-control" placeholder="e.g. 500 units, Q4 event, 10 tons plastic audit">
              </div>
              <button type="submit" class="btn-primary-forest w-100">Submit Partnership Request &rarr;</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Volunteer With Us (#volunteer) -->
  <section class="ed-content-section" id="volunteer" style="background: #fff;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <span class="ed-section-tag">COMMUNITY PARTICIPATION</span>
          <h2 class="ed-section-title">Volunteer With Conserve India</h2>
          <p class="text-secondary small mb-3" style="line-height: 1.7;">
            Whether you are a student, designer, educator, photographer, or environmental enthusiast, your time and talent can create real-world impact for Delhi's waste-picking community.
          </p>
          <div class="row g-3 mb-4">
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                <div class="text-success mb-1 fs-5"><i class="bi bi-palette"></i></div>
                <h5 class="fw-bold mb-1" style="font-size: 15px;">Design Mentorship</h5>
                <p class="text-muted small mb-0">Help train youth and artisans in modern accessory patterns, cutting techniques &amp; color matching.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                <div class="text-success mb-1 fs-5"><i class="bi bi-camera"></i></div>
                <h5 class="fw-bold mb-1" style="font-size: 15px;">Storytelling &amp; Media</h5>
                <p class="text-muted small mb-0">Document field stories, capture photography of artisan hands, and assist with digital outreach.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                <div class="text-success mb-1 fs-5"><i class="bi bi-book"></i></div>
                <h5 class="fw-bold mb-1" style="font-size: 15px;">Literacy &amp; Tutoring</h5>
                <p class="text-muted small mb-0">Teach basic Hindi/English, digital literacy, and smartphone skills to women recyclers and their children.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                <div class="text-success mb-1 fs-5"><i class="bi bi-heart-pulse"></i></div>
                <h5 class="fw-bold mb-1" style="font-size: 15px;">Health &amp; Welfare Camps</h5>
                <p class="text-muted small mb-0">Volunteer at community eye exams, tetanus immunization drives, and hygiene distribution days.</p>
              </div>
            </div>
          </div>
          <a href="contact-us.php?topic=volunteer" class="btn-primary-forest">Apply to Volunteer &rarr;</a>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3; border-radius: 16px; overflow: hidden;">
            <img src="{{ asset('assets/images/story-farming.jpg') }}" alt="Volunteers engaging in community education and training" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
