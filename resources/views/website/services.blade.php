@extends('website.layouts.app')

@section('title', 'Our Services — Conserve India | Consulting, Outreach, Training & Immersion Tours')
@section('description', 'Conserve India offers circular economy consulting, events and outreach campaigns, youth and artisan education & training, and immersive Stay & Learn tours.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Our Services
      </nav>
      <span class="ed-section-tag">CIRCULAR CAPABILITIES</span>
      <h1 class="ed-page-title">Services &amp; Advisory Solutions</h1>
      <p class="ed-page-lead">
        Partnering with corporations, academic institutions, municipal bodies, and eco-conscious travelers to deliver circular innovation, vocational education, and high-impact immersion experiences.
      </p>
    </div>
  </header>

  <!-- ========================================================
       SECTION: VISUAL ACTION CARDS (Ref: Charity:Water)
       Identical to home page services section (avoiding text-heaviness)
       ======================================================== -->
  <section class="ed-services-section" style="padding: 70px 0 85px;">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">CORE CAPABILITIES</span>
        <h2 class="ed-section-title">Ready to Take Action?</h2>
        <p class="ed-section-desc mx-auto">
          Explore our four dedicated service offerings designed to accelerate circularity, build grassroots skills, and engage global changemakers.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1: Consulting & Strategic Advisory -->
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#consulting" class="ed-action-card" aria-label="View Consulting & Advisory Details">
            <div class="ed-action-img-box">
              <img src="{{ asset('website/assets/images/plastic-bottles-sorting.jpg') }}" alt="Diagnostic corporate waste stream audits and circular consulting" class="ed-action-img" loading="lazy">
              <div class="ed-action-scrim"></div>
              <span class="ed-action-tag">ADVISORY</span>
              <div class="ed-action-bar">
                <div class="ed-action-icon-circle">
                  <i class="bi bi-clipboard2-data-fill"></i>
                </div>
                <span class="ed-action-label">Consulting &amp; Advisory</span>
                <i class="bi bi-arrow-right ed-action-chevron"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- Service 2: Events, Campaigns & Outreach -->
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#events-outreach" class="ed-action-card" aria-label="View Events & Outreach Details">
            <div class="ed-action-img-box">
              <img src="{{ asset('website/assets/images/story-farming.jpg') }}" alt="Community environmental campaigns, corporate zero-waste days, and workshops" class="ed-action-img" loading="lazy">
              <div class="ed-action-scrim"></div>
              <span class="ed-action-tag">OUTREACH</span>
              <div class="ed-action-bar">
                <div class="ed-action-icon-circle">
                  <i class="bi bi-megaphone-fill"></i>
                </div>
                <span class="ed-action-label">Events &amp; Outreach</span>
                <i class="bi bi-arrow-right ed-action-chevron"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- Service 3: Education & Training Incubator -->
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#education-training" class="ed-action-card" aria-label="View Education & Training Details">
            <div class="ed-action-img-box">
              <img src="{{ asset('website/assets/images/artisan-livelihoods.jpg') }}" alt="Youth design incubator, artisan stitching and financial literacy training" class="ed-action-img" loading="lazy">
              <div class="ed-action-scrim"></div>
              <span class="ed-action-tag">INCUBATOR</span>
              <div class="ed-action-bar">
                <div class="ed-action-icon-circle">
                  <i class="bi bi-mortarboard-fill"></i>
                </div>
                <span class="ed-action-label">Education &amp; Training</span>
                <i class="bi bi-arrow-right ed-action-chevron"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- Service 4: Stay & Learn: Immersion Tours -->
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#immersion-tours" class="ed-action-card" aria-label="View Stay & Learn Tour Details">
            <div class="ed-action-img-box">
              <img src="{{ asset('website/assets/images/circular-communities.jpg') }}" alt="Stay & Learn circular immersion tours, waste mapping, and eco-stay" class="ed-action-img" loading="lazy">
              <div class="ed-action-scrim"></div>
              <span class="ed-action-tag">IMMERSION</span>
              <div class="ed-action-bar">
                <div class="ed-action-icon-circle">
                  <i class="bi bi-compass-fill"></i>
                </div>
                <span class="ed-action-label">Stay &amp; Learn Tours</span>
                <i class="bi bi-arrow-right ed-action-chevron"></i>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       STREAMLINED DETAIL SECTIONS (CLEAN, FOCUSED, NOT TEXT-HEAVY)
       ======================================================== -->

  <!-- Service 1: Consulting & Advisory -->
  <section class="ed-content-section" id="consulting" style="background: #ffffff; padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">SERVICE 01 &middot; STRATEGIC ADVISORY</span>
          <h2 class="ed-section-title">Circularity &amp; ESG Consulting</h2>
          <p class="text-secondary mb-3" style="line-height: 1.7; font-size: 15px;">
            Partnering with corporate leadership to audit packaging waste streams, fulfill statutory Extended Producer Responsibility (EPR), and develop verifiable closed-loop recycling roadmaps.
          </p>
          <ul class="ed-service-deliverables mb-4">
            <li><i class="bi bi-check2-circle"></i> <strong>Waste Stream Diagnostic Audits:</strong> Complete campus and factory waste diagnostics.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Statutory EPR Compliance:</strong> Verifiable chain-of-custody and informal recycler inclusion.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Circular Procurement:</strong> Replacing single-use items with patented upcycled alternatives.</li>
          </ul>
          <div class="d-flex flex-wrap gap-3">
            <a href="{{ url('/connect-with-us#partner') }}" class="btn-primary-forest text-nowrap">Inquire for Advisory &rarr;</a>
            <a href="{{ url('/connect-with-us#partner') }}" class="ed-btn-outline">Book Waste Audit</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.06);">
            <img src="{{ asset('website/assets/images/plastic-bottles-sorting.jpg') }}" alt="Conserve India corporate waste audit and consulting session" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service 2: Events and Outreach -->
  <section class="ed-content-section" id="events-outreach" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle); padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <span class="ed-section-tag">SERVICE 02 &middot; PUBLIC ENGAGEMENT</span>
          <h2 class="ed-section-title">Events, Campaigns &amp; Outreach</h2>
          <p class="text-secondary mb-3" style="line-height: 1.7; font-size: 15px;">
            Designing vibrant environmental campaigns, corporate zero-waste days, community hackathons, and design exhibitions that bring circular living into everyday awareness.
          </p>
          <ul class="ed-service-deliverables mb-4">
            <li><i class="bi bi-check2-circle"></i> <strong>Corporate Workshops:</strong> Hands-on employee waste segregation and circular design sessions.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Community Drives:</strong> Neighborhood plastic recovery drives and public awareness campaigns.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Exhibitions &amp; Pop-ups:</strong> Design installations showcasing patented HRP textiles at summits.</li>
          </ul>
          <a href="{{ url('/connect-with-us#partner') }}" class="btn-primary-forest text-nowrap">
            Plan an Outreach Event &rarr;
          </a>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.06);">
            <img src="{{ asset('website/assets/images/story-farming.jpg') }}" alt="Conserve community outreach and ecological training event" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service 3: Education and Training -->
  <section class="ed-content-section" id="education-training" style="background: #ffffff; padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">SERVICE 03 &middot; CAPACITY BUILDING</span>
          <h2 class="ed-section-title">Education &amp; Training Incubator</h2>
          <p class="text-secondary mb-3" style="line-height: 1.7; font-size: 15px;">
            Combining design thinking with certified vocational skills. Equipping underprivileged youth, waste-picker communities, and refugee women with high-value tailoring and enterprise capabilities.
          </p>
          <ul class="ed-service-deliverables mb-4">
            <li><i class="bi bi-check2-circle"></i> <strong>Youth Design Incubator:</strong> CAD drafting, master tailoring, and upcycled product engineering.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Women's Livelihood Cohorts:</strong> Financial literacy, bank accounts, and fair living wage production.</li>
            <li><i class="bi bi-check2-circle"></i> <strong>Micro-Enterprise Incubation:</strong> Incubation of grassroots artisan brands with retail market access.</li>
          </ul>
          <a href="{{ url('/capacity-building') }}" class="btn-primary-forest text-nowrap">
            Explore Training Programs &rarr;
          </a>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.06);">
            <img src="{{ asset('website/assets/images/artisan-livelihoods.jpg') }}" alt="Artisan youth education and vocational training session" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service 4: Stay & Learn: Immersion Tours -->
  <section class="ed-content-section" id="immersion-tours" style="background: #f7f9f7; border-top: 1px solid var(--border-subtle); padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <span class="ed-section-tag">SERVICE 04 &middot; EXPERIENTIAL IMMERSION</span>
          <h2 class="ed-section-title">Stay &amp; Learn: Circular Immersion Tours</h2>
          <p class="text-secondary mb-4" style="line-height: 1.7; font-size: 15px;">
            A multi-day, hands-on journey through the life cycle of upcycled materials for university students, researchers, ESG executives, and eco-conscious travelers.
          </p>
          
          <div class="row g-3 mb-4">
            <div class="col-sm-6">
              <div class="bg-white p-3 rounded-3 border border-light-subtle h-100">
                <div class="text-success fs-5 mb-2"><i class="bi bi-binoculars-fill"></i></div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Field Waste Mapping</h4>
                <p class="text-muted small mb-0">Learn informal supply chains and urban recycling dynamics with grassroot collectors.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="bg-white p-3 rounded-3 border border-light-subtle h-100">
                <div class="text-success fs-5 mb-2"><i class="bi bi-recycle"></i></div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Hands-on Crafting</h4>
                <p class="text-muted small mb-0">Work with artisans to wash, sort, thermocompress, and stitch your own upcycled piece.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="bg-white p-3 rounded-3 border border-light-subtle h-100">
                <div class="text-success fs-5 mb-2"><i class="bi bi-chat-quote-fill"></i></div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Artisan Dialogue</h4>
                <p class="text-muted small mb-0">Roundtable discussions with refugee craftswomen and waste picker community leaders.</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="bg-white p-3 rounded-3 border border-light-subtle h-100">
                <div class="text-success fs-5 mb-2"><i class="bi bi-house-heart-fill"></i></div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Eco-Stay Hospitality</h4>
                <p class="text-muted small mb-0">Guided overnight itineraries with organic zero-waste meals and evening founder sessions.</p>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap gap-3">
            <a href="{{ url('/connect-with-us#partner') }}" class="btn-primary-forest px-4 py-2">
              Book an Immersion Tour &rarr;
            </a>
            <a href="contact-us.php?topic=immersion" class="ed-btn-outline px-4 py-2">
              Request Tour Brochure
            </a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="p-4 rounded-4 bg-white border border-light-subtle shadow-sm text-center">
            <div class="mx-auto mb-3" style="width: 54px; height: 54px; border-radius: 50%; background: #1c3b2d; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">
              <i class="bi bi-calendar-check-fill"></i>
            </div>
            <h3 class="h5 fw-bold mb-2" style="color: var(--primary-forest);">Upcoming Tour Batches</h3>
            <p class="text-muted small mb-3">Accepting registrations for individual researchers, university groups, and corporate cohorts.</p>
            <div class="p-3 bg-light rounded-3 mb-3 text-start small">
              <div class="d-flex justify-content-between mb-1">
                <strong>Duration:</strong> <span>1-Day or 3-Day Programs</span>
              </div>
              <div class="d-flex justify-content-between mb-1">
                <strong>Location:</strong> <span>Delhi-NCR Atelier &amp; Field Hubs</span>
              </div>
              <div class="d-flex justify-content-between">
                <strong>Recognition:</strong> <span>Conserve Circular Fellow Certificate</span>
              </div>
            </div>
            <a href="contact-us.php?topic=immersion" class="btn-primary-forest w-100">Download Brochure &amp; Dates</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
