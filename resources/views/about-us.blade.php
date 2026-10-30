@extends('layouts.app')

@section('title', 'About Us — Conserve India | Our Mission, Founders & Heritage')
@section('description', 'Learn about Conserve India\'s journey since 1997, founders Anita & Shalabh Ahuja, patented HRP technology, and commitment to Fair Trade artisan livelihoods.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> About Us
      </nav>
      <span class="ed-section-tag">ORGANIZATIONAL HERITAGE</span>
      <h1 class="ed-page-title">Pioneering Circularity Since 1997</h1>
      <p class="ed-page-lead">
        Conserve India operates at the intersection of environmental conservation and social justice—diverting urban plastic waste while empowering marginalized waste pickers and refugee women with dignified, employable opportunities.
      </p>
    </div>
  </header>

  <!-- Section 1: The Genesis & Founders -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">THE FOUNDERS' VISION</span>
          <h2 class="ed-section-title">From Overflowing Landfills to Dignified Livelihoods</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            In 1997, founders <strong>Anita Ahuja</strong> and <strong>Shalabh Ahuja</strong> set out to address urban ecological crises in Delhi. Initially focused on energy conservation and clean air lobbying, their field work quickly led them to the acute challenge of urban solid waste management.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            At the time, Delhi's landfills were suffocating under mountains of discarded polythene bags that contaminated soil and choked drains. Meanwhile, in surrounding informal settlements, thousands of ragpickers lived in dangerous conditions without legal recognition or fair income.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            Anita envisioned a transformative model: converting discarded plastic into a premium raw material, and training informal waste collectors into respected master artisans.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/hero-artisan.jpg') }}" alt="Conserve India artisan handcrafting in Delhi workshop" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Patented Breakthrough -->
  <section class="ed-content-section-muted">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-2">
          <span class="ed-section-tag">MATERIAL ENGINEERING</span>
          <h2 class="ed-section-title">Patented Handmade Recycled Plastic (HRP)</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            After years of hands-on material research, Conserve engineered and patented <strong>Handmade Recycled Plastic (HRP)</strong> — a revolutionary material produced by washing, sorting, and thermocompressing discarded polythene bags into durable, leather-like sheets.
          </p>
          <ul class="ed-service-deliverables mt-4">
            <li><i class="bi bi-check2"></i> <strong>Zero Chemical Dyes:</strong> Color patterns emerge solely from sorted plastic bags, preventing toxic wastewater runoff.</li>
            <li><i class="bi bi-check2"></i> <strong>Durable &amp; Water-Resistant:</strong> High tensile strength engineered to substitute leather and virgin PVC.</li>
            <li><i class="bi bi-check2"></i> <strong>Certified Fair Trade:</strong> Complete traceability with verified living wages for every artisan.</li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/upcycling-innovation.jpg') }}" alt="Patented HRP materials and upcycled tote bags" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1.5: Mission, Vision & Core Values -->
  <section class="ed-content-section" id="mission-vision" style="background: #fff; border-top: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">PURPOSE &amp; GUIDING COMPASS</span>
        <h2 class="ed-section-title">Mission, Vision &amp; Core Values</h2>
        <p class="ed-section-desc mx-auto">
          Driving systemic ecological regeneration while establishing equitable, dignified social inclusion for India's informal waste workforce.
        </p>
      </div>

      <div class="row g-4">
        <!-- Mission Card -->
        <div class="col-lg-4">
          <div class="ed-step-card h-100 p-4" style="border: 1px solid var(--border-light); background: #fdfcf9;">
            <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
              <i class="bi bi-compass-fill"></i>
            </div>
            <h3 class="h4 fw-bold mb-3" style="color: var(--primary-forest);">Our Mission</h3>
            <p class="text-secondary small mb-0" style="line-height: 1.7;">
              To eliminate urban plastic pollution through patented, design-led circular upcycling, while transforming underprivileged waste pickers and refugee women into skilled artisans with fair wages, financial security, and social dignity.
            </p>
          </div>
        </div>

        <!-- Vision Card -->
        <div class="col-lg-4">
          <div class="ed-step-card h-100 p-4" style="border: 1px solid var(--border-light); background: #fdfcf9;">
            <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
              <i class="bi bi-eye-fill"></i>
            </div>
            <h3 class="h4 fw-bold mb-3" style="color: var(--primary-forest);">Our Vision</h3>
            <p class="text-secondary small mb-0" style="line-height: 1.7;">
              A regenerative world where zero post-consumer waste reaches landfills, and where informal waste collectors are formally recognized, celebrated, and economically empowered partners in the global green transition.
            </p>
          </div>
        </div>

        <!-- Core Values Card -->
        <div class="col-lg-4" id="values">
          <div class="ed-step-card h-100 p-4" style="border: 1px solid var(--border-light); background: #fdfcf9;">
            <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 48px; height: 48px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 22px;">
              <i class="bi bi-shield-check"></i>
            </div>
            <h3 class="h4 fw-bold mb-3" style="color: var(--primary-forest);">Core Values</h3>
            <ul class="list-unstyled d-flex flex-column gap-2 text-secondary small mb-0">
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Radical Dignity:</strong> Fair Trade living wages and social security.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Authentic Circularity:</strong> Zero chemical dye, zero greenwashing.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Inclusive Innovation:</strong> Design-led solutions empowering grassroots hands.</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> <strong>Transparent Traceability:</strong> Complete auditability from waste pile to shelf.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1.6: Impact Numbers -->
  <section class="ed-impact-section" id="impact" style="padding: 70px 0;">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">VERIFIED DATA</span>
        <h2 class="ed-section-title">Impact Numbers at a Glance</h2>
        <p class="ed-section-desc mx-auto">Tangible outcomes achieved over 25+ years of relentless grassroots and environmental dedication.</p>
      </div>

      <div class="row g-4 text-center">
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-5 fw-bold text-success mb-1">500+</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Tons Plastic Diverted</div>
            <div class="text-muted small">From Delhi-NCR urban landfills</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-5 fw-bold text-success mb-1">3,000+</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Ragpickers Organized</div>
            <div class="text-muted small">Registered in Regional Association</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-5 fw-bold text-success mb-1">100+</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Women Recyclers Trained</div>
            <div class="text-muted small">Hygiene &amp; financial literacy</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-5 fw-bold text-success mb-1">1,000+</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Retail Partners Worldwide</div>
            <div class="text-muted small">Exported to US, UK, and Europe</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1.7: Supporting Paradigms & Thematic Areas -->
  <section class="ed-content-section" id="paradigms" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="row g-5">
        <!-- Supporting Paradigms -->
        <div class="col-lg-6">
          <span class="ed-section-tag">CONCEPTUAL FRAMEWORK</span>
          <h2 class="ed-section-title mb-4">Supporting Paradigms</h2>
          <p class="text-secondary small mb-4" style="line-height: 1.7;">
            Our approach synthesizes modern industrial ecology with grassroots human rights, moving away from charitable handouts toward autonomous, self-sustaining economic engines.
          </p>

          <div class="d-flex flex-column gap-3">
            <div class="d-flex gap-3 align-items-start p-3 bg-white rounded-3 border border-light-subtle">
              <div class="text-success fs-4"><i class="bi bi-arrow-repeat"></i></div>
              <div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Circular Materials Paradigm</h4>
                <p class="text-muted small mb-0">Treating post-consumer plastic waste not as refuse, but as an engineered raw material that substitutes leather and virgin synthetics.</p>
              </div>
            </div>

            <div class="d-flex gap-3 align-items-start p-3 bg-white rounded-3 border border-light-subtle">
              <div class="text-success fs-4"><i class="bi bi-person-hearts"></i></div>
              <div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Informal Worker Integration</h4>
                <p class="text-muted small mb-0">Transitioning unrecognized ragpickers into skilled artisans, technical sorters, and registered cooperative members with verified labor protections.</p>
              </div>
            </div>

            <div class="d-flex gap-3 align-items-start p-3 bg-white rounded-3 border border-light-subtle">
              <div class="text-success fs-4"><i class="bi bi-award-fill"></i></div>
              <div>
                <h4 class="h6 fw-bold mb-1" style="color: var(--primary-forest);">Fair Trade &amp; Ethical Value Chains</h4>
                <p class="text-muted small mb-0">Adhering strictly to WFTO standards: transparent wage premiums, safe atelier ergonomics, healthcare access, and zero child labor.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Thematic Areas -->
        <div class="col-lg-6" id="thematic-areas">
          <span class="ed-section-tag">STRATEGIC FOCUS</span>
          <h2 class="ed-section-title mb-4">Thematic Areas</h2>
          <p class="text-secondary small mb-4" style="line-height: 1.7;">
            Conserve India's operational roadmap addresses four interrelated thematic domains to achieve holistic, durable community transformation:
          </p>

          <div class="row g-3">
            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-light-subtle h-100">
                <span class="badge bg-success-subtle text-success mb-2 px-2 py-1">Pillar 01</span>
                <h4 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Environmental Conservation</h4>
                <p class="text-muted small mb-0">Urban plastic diversion, municipal waste segregation, and reduction of landfill leachate contamination.</p>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-light-subtle h-100">
                <span class="badge bg-success-subtle text-success mb-2 px-2 py-1">Pillar 02</span>
                <h4 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Livelihood Generation</h4>
                <p class="text-muted small mb-0">Vocational skill building in master cutting, sewing, and material processing with above-minimum living incomes.</p>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-light-subtle h-100">
                <span class="badge bg-success-subtle text-success mb-2 px-2 py-1">Pillar 03</span>
                <h4 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Women &amp; Refugee Empowerment</h4>
                <p class="text-muted small mb-0">Dedicated programs for UNHCR Afghan refugees (Akseer) and women waste collectors in health, hygiene &amp; banking.</p>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="p-3 bg-white rounded-3 border border-light-subtle h-100">
                <span class="badge bg-success-subtle text-success mb-2 px-2 py-1">Pillar 04</span>
                <h4 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">Policy &amp; Advocacy</h4>
                <p class="text-muted small mb-0">Championing informal sector inclusion in Extended Producer Responsibility (EPR) laws and national waste guidelines.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1.8: Redesigning a New Model for Social Enterprise (#social-enterprise) -->
  <section class="ed-content-section" id="social-enterprise" style="background: #fff;">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">#DESIGNING A NEW MODEL</span>
          <h2 class="ed-section-title">Redesigning Social Enterprise for Lasting Impact</h2>
          <p class="text-secondary small mb-3" style="line-height: 1.7;">
            Traditional non-profits depend on fleeting donor cycles; traditional businesses often exploit informal labor. Conserve India breaks both moulds by fusing <strong>patented material IP</strong> with <strong>grassroots cooperative manufacturing</strong>.
          </p>
          <p class="text-secondary small mb-4" style="line-height: 1.7;">
            By establishing high-margin, design-driven upcycled export channels (Whole Foods Market, Lifaffa), revenue is continually reinvested into free artisan vocational training, worker healthcare, and community education centers.
          </p>
          <div class="d-flex gap-3">
            <a href="{{ url('/capacity-building') }}" class="btn-primary-forest text-nowrap">Explore Artisan Models &rarr;</a>
            <a href="{{ url('/gallery') }}" class="ed-btn-outline">View Projects Gallery</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-4 p-md-5 rounded-4" style="background: linear-gradient(135deg, #1c3b2d 0%, #2b5441 100%); color: #fff;">
            <h3 class="h4 font-serif text-white mb-3">The Conserve Hybrid Blueprint</h3>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-center gap-3">
                <div class="badge bg-white text-dark rounded-circle p-2 fs-6" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;">1</div>
                <div><strong>Invention:</strong> Patented HRP plastic upcycling technology</div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="badge bg-white text-dark rounded-circle p-2 fs-6" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;">2</div>
                <div><strong>Inclusion:</strong> 3,000+ waste pickers organized into formal value chains</div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="badge bg-white text-dark rounded-circle p-2 fs-6" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;">3</div>
                <div><strong>Incubation:</strong> DDU-GKY design-led youth upcycling incubator</div>
              </div>
              <div class="d-flex align-items-center gap-3">
                <div class="badge bg-white text-dark rounded-circle p-2 fs-6" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center;">4</div>
                <div><strong>Independence:</strong> Sustainable revenue via certified B2B &amp; retail trade</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1.9: Meet The Team (Core Team) -->
  <section class="ed-content-section" id="team" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">LEADERSHIP &amp; STEWARDS</span>
        <h2 class="ed-section-title">Meet The Core Team</h2>
        <p class="ed-section-desc mx-auto">
          Passionate innovators, designers, community organizers, and master artisans steering Conserve India's multi-decade mission.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Team Member 1: Anita Ahuja -->
        <div class="col-md-6 col-lg-3">
          <div class="bg-white rounded-3 p-4 text-center border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
            <div>
              <div class="mx-auto mb-3 rounded-circle overflow-hidden" style="width: 100px; height: 100px; background: #e8eee9; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-fill" style="font-size: 54px; color: var(--primary-forest);"></i>
              </div>
              <h3 class="h5 fw-bold mb-1" style="color: var(--primary-forest);">Anita Ahuja</h3>
              <span class="text-success small fw-semibold d-block mb-2">Co-Founder &amp; Creative Director</span>
              <p class="text-muted small mb-0">Pioneer of patented HRP technology, artist, designer, and social activist leading material research and artisan ateliers.</p>
            </div>
            <!-- Verified Social Profile Icons -->
            <div class="ed-team-socials">
              <a href="https://www.linkedin.com/company/conserve-india/" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Anita Ahuja - Conserve India LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Anita Ahuja - Workshop &amp; Ateliers Instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="mailto:info@conserveindia.org" class="ed-team-social-link" aria-label="Contact Anita Ahuja via Conserve India">
                <i class="bi bi-envelope-fill"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 2: Shalabh Ahuja -->
        <div class="col-md-6 col-lg-3">
          <div class="bg-white rounded-3 p-4 text-center border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
            <div>
              <div class="mx-auto mb-3 rounded-circle overflow-hidden" style="width: 100px; height: 100px; background: #e8eee9; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-fill" style="font-size: 54px; color: var(--primary-forest);"></i>
              </div>
              <h3 class="h5 fw-bold mb-1" style="color: var(--primary-forest);">Shalabh Ahuja</h3>
              <span class="text-success small fw-semibold d-block mb-2">Co-Founder &amp; Strategy Lead</span>
              <p class="text-muted small mb-0">Environmental engineer driving corporate partnerships, policy advocacy, waste diagnostic audits, and EPR frameworks.</p>
            </div>
            <!-- Verified Social Profile Icons -->
            <div class="ed-team-socials">
              <a href="https://www.linkedin.com/company/conserve-india/" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Shalabh Ahuja - Conserve India LinkedIn">
                <i class="bi bi-linkedin"></i>
              </a>
              <a href="https://conserveindia.org" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Conserve India Corporate Site">
                <i class="bi bi-globe2"></i>
              </a>
              <a href="mailto:info@conserveindia.org" class="ed-team-social-link" aria-label="Contact Shalabh Ahuja via Conserve India">
                <i class="bi bi-envelope-fill"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 3: Master Artisans & Production Head -->
        <div class="col-md-6 col-lg-3">
          <div class="bg-white rounded-3 p-4 text-center border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
            <div>
              <div class="mx-auto mb-3 rounded-circle overflow-hidden" style="width: 100px; height: 100px; background: #e8eee9; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-gear" style="font-size: 54px; color: var(--primary-forest);"></i>
              </div>
              <h3 class="h5 fw-bold mb-1" style="color: var(--primary-forest);">Atelier Master Team</h3>
              <span class="text-success small fw-semibold d-block mb-2">Design, Cutting &amp; Stitching</span>
              <p class="text-muted small mb-0">Veteran craft leads mentoring batches of informal waste pickers and UNHCR refugees in high-precision upcycled fashion.</p>
            </div>
            <!-- Verified Profile Links -->
            <div class="ed-team-socials">
              <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Atelier Craft Stories on Instagram">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="{{ url('/gallery') }}" class="ed-team-social-link" aria-label="View Craft Gallery">
                <i class="bi bi-images"></i>
              </a>
              <a href="mailto:info@conserveindia.org" class="ed-team-social-link" aria-label="Inquire with Atelier Team">
                <i class="bi bi-envelope-fill"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 4: Grassroots Mobilizers -->
        <div class="col-md-6 col-lg-3">
          <div class="bg-white rounded-3 p-4 text-center border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
            <div>
              <div class="mx-auto mb-3 rounded-circle overflow-hidden" style="width: 100px; height: 100px; background: #e8eee9; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-people-fill" style="font-size: 54px; color: var(--primary-forest);"></i>
              </div>
              <h3 class="h5 fw-bold mb-1" style="color: var(--primary-forest);">Community Mobilizers</h3>
              <span class="text-success small fw-semibold d-block mb-2">Field &amp; Association Leads</span>
              <p class="text-muted small mb-0">Managing the Delhi/Haryana Waste Collectors Association, health camps, and women's financial literacy sessions.</p>
            </div>
            <!-- Verified Profile Links -->
            <div class="ed-team-socials">
              <a href="https://www.facebook.com/conserveindia" target="_blank" rel="noopener noreferrer" class="ed-team-social-link" aria-label="Community Mobilizers Facebook Updates">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="{{ url('/capacity-building') }}" class="ed-team-social-link" aria-label="Explore Community Programs">
                <i class="bi bi-journal-text"></i>
              </a>
              <a href="mailto:info@conserveindia.org" class="ed-team-social-link" aria-label="Connect with Community Mobilizers">
                <i class="bi bi-envelope-fill"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Milestones & Record -->
  <section class="ed-content-section" id="milestones">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">MILESTONES &amp; RECORD</span>
        <h2 class="ed-section-title">Over 25 Years of Groundbreaking Impact</h2>
        <p class="ed-section-desc mx-auto">Key turning points in our evolution from a civic advocacy initiative into an internationally recognized circular enterprise.</p>
      </div>

      <!-- Verified Milestone Timeline Cards -->
      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card h-100 d-flex flex-column justify-content-between p-4" style="border: 1px solid var(--border-light); border-radius: 10px; background: #ffffff;">
            <div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="ed-step-badge mb-0">1997</span>
                <span class="badge bg-success-subtle text-success small">Foundation</span>
              </div>
              <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading); color: var(--primary-forest);">Civic Movement</h3>
              <p class="text-muted small mb-0" style="line-height: 1.6;">Established in New Delhi by Anita and Shalabh Ahuja, pioneering clean air, energy conservation legislation, and civic waste segregation programs.</p>
            </div>
            <div class="pt-3 mt-3 border-top border-light-subtle text-secondary small">
              <i class="bi bi-check2-circle text-success me-1"></i> New Delhi Urban Focus
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card h-100 d-flex flex-column justify-content-between p-4" style="border: 1px solid var(--border-light); border-radius: 10px; background: #ffffff;">
            <div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="ed-step-badge mb-0">2003</span>
                <span class="badge bg-success-subtle text-success small">Patent Milestone</span>
              </div>
              <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading); color: var(--primary-forest);">HRP Invention</h3>
              <p class="text-muted small mb-0" style="line-height: 1.6;">Patented Handmade Recycled Plastic (HRP), launching our first artisan training atelier for Delhi ragpickers, turning discarded plastic bags into fashion textiles.</p>
            </div>
            <div class="pt-3 mt-3 border-top border-light-subtle text-secondary small">
              <i class="bi bi-check2-circle text-success me-1"></i> Patented IP Technology
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card h-100 d-flex flex-column justify-content-between p-4" style="border: 1px solid var(--border-light); border-radius: 10px; background: #ffffff;">
            <div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="ed-step-badge mb-0">2006</span>
                <span class="badge bg-success-subtle text-success small">Global Reach</span>
              </div>
              <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading); color: var(--primary-forest);">Global Retail Export</h3>
              <p class="text-muted small mb-0" style="line-height: 1.6;">Formed distribution partnerships across the US through Whole Foods Market nationwide and expanded to over 1,000 independent design retailers across Europe.</p>
            </div>
            <div class="pt-3 mt-3 border-top border-light-subtle text-secondary small">
              <i class="bi bi-check2-circle text-success me-1"></i> Whole Foods US Partner
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card h-100 d-flex flex-column justify-content-between p-4" style="border: 1px solid var(--border-light); border-radius: 10px; background: #ffffff;">
            <div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <span class="ed-step-badge mb-0">2020</span>
                <span class="badge bg-success-subtle text-success small">National Honor</span>
              </div>
              <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading); color: var(--primary-forest);">Project Sahyog Relief</h3>
              <p class="text-muted small mb-0" style="line-height: 1.6;">Ranked in India's top 50 COVID-19 last-mile emergency responders, providing community kitchens, emergency food, and hygiene kits for migrant waste pickers.</p>
            </div>
            <div class="pt-3 mt-3 border-top border-light-subtle text-secondary small">
              <i class="bi bi-check2-circle text-success me-1"></i> Top 50 National Relief
            </div>
          </div>
        </div>
      </div>

      <!-- Verified Achievements & Records Summary Strip -->
      <div class="row g-3 mt-4 pt-2">
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-3 border border-light-subtle text-center">
            <div class="h4 fw-bold text-success mb-1">1997 &ndash; Present</div>
            <div class="small text-muted">25+ Years Dedicated Service</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-3 border border-light-subtle text-center">
            <div class="h4 fw-bold text-success mb-1">500+ Tons</div>
            <div class="small text-muted">Verified Plastic Diverted</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-3 border border-light-subtle text-center">
            <div class="h4 fw-bold text-success mb-1">3,000+</div>
            <div class="small text-muted">Waste Collectors Organized</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-3 border border-light-subtle text-center">
            <div class="h4 fw-bold text-success mb-1">1,000+</div>
            <div class="small text-muted">Global Retail Stockists</div>
          </div>
        </div>
      </div>

      <!-- Quote Banner -->
      <div class="ed-quote-banner mt-5">
        <div class="row align-items-center">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <span class="ed-section-tag" style="color: #a4ceb5;">OUR GUIDING PRINCIPLE</span>
            <h3 class="text-white">When waste becomes a resource, communities become stronger.</h3>
            <p class="text-white-50 mb-0">Every meter of upcycled material and every corporate collaboration directly finances dignified livelihoods for marginalized artisans.</p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="{{ url('/connect-with-us#partner') }}" class="ed-btn-primary" style="background-color: #ffffff; color: #141716; border-color: #ffffff;">
              Collaborate With Us &rarr;
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
