@extends('website.layouts.app')

@section('title', 'Latest Updates — Conserve India | Awards, Blog & Publications')
@section('description', 'Stay updated with Conserve India: national and international awards, circular economy research blog, and downloadable annual reports and policy briefs.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Latest Updates
      </nav>
      <span class="ed-section-tag">NEWSROOM &amp; ARCHIVE</span>
      <h1 class="ed-page-title">Awards, Stories &amp; Publications</h1>
      <p class="ed-page-lead">
        Track our latest institutional milestones, field dispatches from artisan ateliers, and research publications shaping circular economy policies across India.
      </p>
    </div>
  </header>

  <!-- Section 1: Awards & Recognition -->
  <section class="ed-content-section" id="awards" style="background: #fff;">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">HONORS &amp; RECOGNITION</span>
        <h2 class="ed-section-title">Awards &amp; Accolades</h2>
        <p class="ed-section-desc mx-auto">
          Honored globally for material innovation, grassroots social inclusion, and sustainable enterprise leadership.
        </p>
      </div>

      <div class="row g-4">
        <!-- Award 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 10px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
                <i class="bi bi-trophy-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success small mb-2 px-2 py-1">Intellectual Property</span>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">WIPO &amp; Govt. Patent</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Patented technology for recycling waste plastic sheets (HRP) registered with WIPO and Govt. of India (2008).
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-light-subtle text-muted small">
              <i class="bi bi-calendar-check me-1"></i> Issued 2008
            </div>
          </div>
        </div>

        <!-- Award 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 10px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
                <i class="bi bi-star-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success small mb-2 px-2 py-1">Global Social Enterprise</span>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Cartier Women's Initiative</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Honored internationally for women-led sustainable entrepreneurship, empowering waste picking and refugee women.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-light-subtle text-muted small">
              <i class="bi bi-calendar-check me-1"></i> International Laureate
            </div>
          </div>
        </div>

        <!-- Award 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 10px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
                <i class="bi bi-heart-pulse-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success small mb-2 px-2 py-1">Crisis Response</span>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Top 50 Last-Mile Responders</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Project Sahyog recognized among India's top 50 community kitchen &amp; emergency relief networks during COVID-19.
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-light-subtle text-muted small">
              <i class="bi bi-calendar-check me-1"></i> National Recognition
            </div>
          </div>
        </div>

        <!-- Award 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 10px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
                <i class="bi bi-patch-check-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success small mb-2 px-2 py-1">Fair Trade Certified</span>
              <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">World Fair Trade Member</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Longstanding certified member of the World Fair Trade Organization (WFTO) and Fair Trade Forum India (FTF-I).
              </p>
            </div>
            <div class="mt-3 pt-3 border-top border-light-subtle text-muted small">
              <i class="bi bi-calendar-check me-1"></i> Certified WFTO Member
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Blog & Field Stories Spotlight -->
  <section class="ed-content-section" id="blog" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
          <span class="ed-section-tag">DISPATCHES &amp; ESSAYS</span>
          <h2 class="ed-section-title">Latest from Our Green Stories Blog</h2>
          <p class="ed-section-desc">Insights on material science, informal worker rights, and circular living.</p>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="{{ url('/green-stories') }}" class="btn-primary-forest text-nowrap">
            View All Blog Articles &rarr;
          </a>
        </div>
      </div>

      <div class="row g-4">
        <!-- Story 1 -->
        <div class="col-md-4">
          <div class="ed-work-card h-100 bg-white">
            <div class="ed-work-img-box">
              <img src="{{ asset('website/assets/images/story-textile.jpg') }}" alt="Textile Waste Crisis" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <span class="ed-work-meta">Material Lifecycle &middot; 6 Min Read</span>
              <h3 class="ed-work-title">Textile Waste: The Unnoticed Environmental Hazard</h3>
              <p class="ed-work-desc">Investigating why fabric scraps overwhelm landfills and how design-led cutting reduces virgin cotton demand.</p>
              <a href="{{ url('/green-stories#textile') }}" class="ed-work-card-link">Read Story &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Story 2 -->
        <div class="col-md-4">
          <div class="ed-work-card h-100 bg-white">
            <div class="ed-work-img-box">
              <img src="{{ asset('website/assets/images/circular-communities.jpg') }}" alt="Lifaffa Circular Economy" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <span class="ed-work-meta">Circular Economy &middot; 5 Min Read</span>
              <h3 class="ed-work-title">How Lifaffa Innovates Circular Retail</h3>
              <p class="ed-work-desc">Bridging zero-waste manufacturing with conscious urban consumers through everyday upcycled bags and organizers.</p>
              <a href="{{ url('/green-stories#lifaffa') }}" class="ed-work-card-link">Read Story &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Story 3 -->
        <div class="col-md-4">
          <div class="ed-work-card h-100 bg-white">
            <div class="ed-work-img-box">
              <img src="{{ asset('website/assets/images/story-farming.jpg') }}" alt="Soil-less Farming" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <span class="ed-work-meta">Eco-Agriculture &middot; 4 Min Read</span>
              <h3 class="ed-work-title">Soil-Less Farming: Rooftop Nutrition</h3>
              <p class="ed-work-desc">Testing organic hydroponics and micro-farming modules on workshop rooftops to bolster food sovereignty.</p>
              <a href="{{ url('/green-stories#farming') }}" class="ed-work-card-link">Read Story &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Annual Reports, Publications & Briefs (Teal Miro Box) -->
  <section class="ed-content-section" id="publications" style="background: #fff;">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="d-inline-block px-3 py-1 rounded-pill mb-2 fw-semibold small" style="background: #e2f5ee; color: #156649;">
          MIRO BLUEPRINT &middot; DOCUMENT REPOSITORY
        </div>
        <h2 class="ed-section-title">Annual Reports, Publications &amp; Briefs</h2>
        <p class="ed-section-desc mx-auto">
          Download our transparent annual audits, policy briefs on informal worker inclusion, and peer-reviewed material science briefs.
        </p>
      </div>

      <div class="row g-4">
        <!-- Pub 1: Annual Report -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 44px; height: 44px; border-radius: 8px; background: #1c3b2d; color: #fff; font-size: 20px;">
                <i class="bi bi-file-earmark-bar-graph"></i>
              </div>
              <span class="badge bg-secondary-subtle text-secondary small mb-2">Annual Audit</span>
              <h3 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Conserve Annual Impact Report</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Detailed audit of diverted tonnage, artisan living wage distributions, and greenhouse gas abatement metrics.
              </p>
            </div>
            <div class="pt-3 border-top border-light-subtle mt-3">
              <a href="contact-us.php?request=annual-report" class="btn btn-sm btn-outline-success w-100">
                <i class="bi bi-download me-1"></i> Request PDF
              </a>
            </div>
          </div>
        </div>

        <!-- Pub 2: Policy Brief on EPR -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 44px; height: 44px; border-radius: 8px; background: #1c3b2d; color: #fff; font-size: 20px;">
                <i class="bi bi-journal-text"></i>
              </div>
              <span class="badge bg-secondary-subtle text-secondary small mb-2">Policy Brief</span>
              <h3 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">EPR &amp; Informal Waste Pickers</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                A national policy roadmap for integrating informal ragpickers into statutory corporate Extended Producer Responsibility rules.
              </p>
            </div>
            <div class="pt-3 border-top border-light-subtle mt-3">
              <a href="contact-us.php?request=epr-brief" class="btn btn-sm btn-outline-success w-100">
                <i class="bi bi-download me-1"></i> Request PDF
              </a>
            </div>
          </div>
        </div>

        <!-- Pub 3: Patented HRP Science -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 44px; height: 44px; border-radius: 8px; background: #1c3b2d; color: #fff; font-size: 20px;">
                <i class="bi bi-file-earmark-medical"></i>
              </div>
              <span class="badge bg-secondary-subtle text-secondary small mb-2">Technical Brief</span>
              <h3 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Handmade Recycled Plastic (HRP)</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Technical monograph on mechanical recycling of low-density polyethylene (LDPE) without supplemental chemical additives.
              </p>
            </div>
            <div class="pt-3 border-top border-light-subtle mt-3">
              <a href="contact-us.php?request=hrp-whitepaper" class="btn btn-sm btn-outline-success w-100">
                <i class="bi bi-download me-1"></i> Request PDF
              </a>
            </div>
          </div>
        </div>

        <!-- Pub 4: Refugee Livelihoods Case Study -->
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-3 border border-light-subtle h-100 bg-light d-flex flex-column justify-content-between">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 44px; height: 44px; border-radius: 8px; background: #1c3b2d; color: #fff; font-size: 20px;">
                <i class="bi bi-file-earmark-person"></i>
              </div>
              <span class="badge bg-secondary-subtle text-secondary small mb-2">UNHCR Case Study</span>
              <h3 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Akseer: Refugee Economic Integration</h3>
              <p class="text-secondary small mb-0" style="line-height: 1.6;">
                Documentation of livelihood restoration for Afghan refugee craftswomen settled in New Delhi through fair trade ateliers.
              </p>
            </div>
            <div class="pt-3 border-top border-light-subtle mt-3">
              <a href="contact-us.php?request=akseer-study" class="btn btn-sm btn-outline-success w-100">
                <i class="bi bi-download me-1"></i> Request PDF
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
