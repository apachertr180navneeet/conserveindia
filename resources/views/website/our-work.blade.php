@extends('website.layouts.app')

@section('title', 'Our Work — Conserve India | Circular Livelihoods, R&D & Advocacy')
@section('description', 'Explore Conserve India\'s circular initiatives: patented HRP material science, grassroot artisan capacity building, zero-waste communities, and policy advocacy.')

@section('content')
<!-- Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Our Work
      </nav>
      <span class="ed-section-tag">{{ $page->subtitle ?? 'INITIATIVES & INTERVENTIONS' }}</span>
      <h1 class="ed-page-title">{{ $page->title ?? 'Pioneering Circular Ecology & Social Justice' }}</h1>
      <p class="ed-page-lead">
        {{ $page->lead_text ?? 'From patented plastic recycling technologies to empowering thousands of informal waste pickers and UNHCR refugee women, explore how we connect waste abatement with human dignity.' }}
      </p>
      @if(!empty($page->content))
        <div class="mt-4 p-4 bg-white rounded-3 border border-light-subtle shadow-sm text-secondary" style="line-height: 1.8;">
          {!! $page->content !!}
        </div>
      @endif
    </div>
  </header>

  <!-- Section 1: Core Pillars Overview -->
  <section class="ed-content-section" style="background: #fff;">
    <div class="container px-lg-4">

      @if(isset($initiatives) && $initiatives->isNotEmpty())
        <div class="text-center mb-5">
          <span class="ed-section-tag">STRATEGIC PILLARS</span>
          <h2 class="ed-section-title">Flagship Initiatives in Action</h2>
          <p class="ed-section-desc mx-auto">
            Dynamic programs managed by Conserve India to abate pollution and create dignified employment.
          </p>
        </div>

        <div class="row g-4 mb-5">
          @foreach($initiatives as $index => $init)
            <div class="col-lg-6">
              <div class="p-4 p-md-5 rounded-4 h-100 border border-light-subtle d-flex flex-column justify-content-between shadow-sm" style="background: #fcfbf8;">
                <div>
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="badge bg-success-subtle text-success px-2 py-1">Pillar 0{{ $index + 1 }} &middot; {{ $init->category ?? 'Initiative' }}</span>
                    @if($init->meta)
                      <span class="text-muted small"><i class="bi bi-geo-alt text-success me-1"></i>{{ $init->meta }}</span>
                    @endif
                  </div>

                  @if($init->image)
                    <div class="mb-3 rounded-3 overflow-hidden" style="aspect-ratio: 16 / 9; max-height: 220px; background: #e8eee9;">
                      <img src="{{ str_starts_with($init->image, 'http') ? $init->image : asset('website/' . $init->image) }}" alt="{{ $init->title }}" class="w-100 h-100 object-fit-cover" loading="lazy">
                    </div>
                  @endif

                  <h2 class="h4 fw-bold mb-3" style="color: var(--primary-forest);">{{ $init->title }}</h2>
                  <p class="text-secondary small mb-4" style="line-height: 1.7;">
                    {{ $init->short_description ?: Str::limit(strip_tags($init->content), 180) }}
                  </p>
                </div>
                <div class="pt-3 border-top border-light-subtle">
                  <a href="{{ $init->link ? (Str::startsWith($init->link, ['http', '#']) ? $init->link : url($init->link)) : url('/gallery') }}" class="btn-primary-forest text-nowrap">
                    Explore {{ $init->title }} &rarr;
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="row g-4">
        
        <!-- Pillar 1: Circular Livelihoods -->
        <div class="col-lg-6" id="livelihoods">
          <div class="p-4 p-md-5 rounded-4 h-100 border border-light-subtle d-flex flex-column justify-content-between" style="background: #fcfbf8;">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-people-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success px-2 py-1 mb-2 d-inline-block">Pillar 01</span>
              <h2 class="h3 fw-bold mb-3" style="color: var(--primary-forest);">Circular Livelihoods &amp; Artisans</h2>
              <p class="text-secondary small mb-4" style="line-height: 1.7;">
                Transforming Delhi's most vulnerable informal ragpickers and UNHCR Afghan refugee women into skilled craftswomen and entrepreneurs. We provide certified Fair Trade training, dignified working conditions, healthcare, and financial literacy.
              </p>
              <ul class="list-unstyled d-flex flex-column gap-2 text-secondary small mb-4">
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Grassroots Recyclers:</strong> Organized Delhi/Haryana Waste Collectors Association.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Akseer Refugee Program:</strong> Empowering Afghan refugee women with vocational stitching.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Footprints &amp; Wastepreneurs:</strong> Incubation hubs in Delhi &amp; Ghaziabad.</li>
              </ul>
            </div>
            <div class="pt-3 border-top border-light-subtle">
              <a href="{{ url('/capacity-building') }}" class="btn-primary-forest text-nowrap">
                Explore Livelihood Programs &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 2: Research & Informed Making (Patented HRP) -->
        <div class="col-lg-6" id="rnd">
          <div class="p-4 p-md-5 rounded-4 h-100 border border-light-subtle d-flex flex-column justify-content-between" style="background: #fcfbf8;">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-lightbulb-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success px-2 py-1 mb-2 d-inline-block">Pillar 02</span>
              <h2 class="h3 fw-bold mb-3" style="color: var(--primary-forest);">Research &amp; Informed Making</h2>
              <p class="text-secondary small mb-4" style="line-height: 1.7;">
                Our patented <strong>Handmade Recycled Plastic (HRP)</strong> technology (patented 2008 via WIPO/Govt. of India) thermocompresses discarded polythene bags into durable, leather-like materials without chemical dyes or toxic runoff.
              </p>
              <ul class="list-unstyled d-flex flex-column gap-2 text-secondary small mb-4">
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Zero Chemical Dyes:</strong> Colors derived 100% from sorted waste plastic.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Alternative to Leather:</strong> High tensile strength, water-resistant material.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Design-Led Upcycling:</strong> Fusing traditional Indian craftsmanship with modern circular design.</li>
              </ul>
            </div>
            <div class="pt-3 border-top border-light-subtle">
              <a href="{{ url('/sustainable-research-development') }}" class="btn-primary-forest text-nowrap">
                Discover Patented HRP Science &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 3: Events & Policy Advocacy -->
        <div class="col-lg-6" id="advocacy">
          <div class="p-4 p-md-5 rounded-4 h-100 border border-light-subtle d-flex flex-column justify-content-between" style="background: #fcfbf8;">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-megaphone-fill"></i>
              </div>
              <span class="badge bg-success-subtle text-success px-2 py-1 mb-2 d-inline-block">Pillar 03</span>
              <h2 class="h3 fw-bold mb-3" style="color: var(--primary-forest);">Events &amp; Policy Advocacy</h2>
              <p class="text-secondary small mb-4" style="line-height: 1.7;">
                Championing the formal inclusion of informal waste workers in municipal waste frameworks and national Extended Producer Responsibility (EPR) policy guidelines across India.
              </p>
              <ul class="list-unstyled d-flex flex-column gap-2 text-secondary small mb-4">
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Waste Collectors Association:</strong> 3,000+ ragpicker members registered and represented.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Civic &amp; EPR Policy:</strong> Advocating fair wage mandates in corporate EPR frameworks.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Public Awareness:</strong> Zero-waste exhibitions, panels, and environmental campaigns.</li>
              </ul>
            </div>
            <div class="pt-3 border-top border-light-subtle">
              <a href="{{ url('/advocacy-and-lobbying') }}" class="btn-primary-forest text-nowrap">
                Read Policy &amp; Advocacy &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Pillar 4: Zero Waste Communities -->
        <div class="col-lg-6" id="zero-waste">
          <div class="p-4 p-md-5 rounded-4 h-100 border border-light-subtle d-flex flex-column justify-content-between" style="background: #fcfbf8;">
            <div>
              <div class="d-inline-flex align-items-center justify-content-center mb-3" style="width: 52px; height: 52px; border-radius: 12px; background: rgba(28, 59, 45, 0.1); color: var(--primary-forest); font-size: 24px;">
                <i class="bi bi-recycle"></i>
              </div>
              <span class="badge bg-success-subtle text-success px-2 py-1 mb-2 d-inline-block">Pillar 04</span>
              <h2 class="h3 fw-bold mb-3" style="color: var(--primary-forest);">Zero Waste Communities &amp; Relief</h2>
              <p class="text-secondary small mb-4" style="line-height: 1.7;">
                Decentralized neighborhood waste segregation models, compost hubs, and rapid crisis response like Project Sahyog, which delivered food and relief to migrant waste-picking families.
              </p>
              <ul class="list-unstyled d-flex flex-column gap-2 text-secondary small mb-4">
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Project Sahyog:</strong> Top 50 national emergency responder during COVID-19.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Community Segregation:</strong> Source segregation training in residential and school clusters.</li>
                <li><i class="bi bi-check2-circle text-success me-2"></i> <strong>Sanitation &amp; Health Camps:</strong> Routine medical screenings and protective gear for workers.</li>
              </ul>
            </div>
            <div class="pt-3 border-top border-light-subtle">
              <a href="{{ url('/covid-relief-project-sahyog') }}" class="btn-primary-forest text-nowrap">
                Explore Community Initiatives &rarr;
              </a>
            </div>
          </div>
        </div>

        </div>
      @endif
    </div>
  </section>

  <!-- Impact Band & Verified Metrics -->
  <section class="ed-content-section-muted" style="border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle); padding: 60px 0;">
    <div class="container px-lg-4">
      <div class="row g-4 text-center">
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-6 fw-bold text-success mb-1">{{ $settings['impact_plastic_tons'] ?? '500+ Tons' }}</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Plastic Diverted</div>
            <div class="text-muted small">From urban landfills</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-6 fw-bold text-success mb-1">{{ $settings['impact_ragpickers'] ?? '3,000+' }}</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Ragpickers Organized</div>
            <div class="text-muted small">Registered in Association</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-6 fw-bold text-success mb-1">{{ $settings['impact_women_trained'] ?? '100+' }}</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Women Recyclers Trained</div>
            <div class="text-muted small">Certified livelihoods</div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-4 bg-white rounded-3 border border-light-subtle h-100 shadow-sm">
            <div class="display-6 fw-bold text-success mb-1">{{ $settings['impact_retail_partners'] ?? '1,000+' }}</div>
            <div class="fw-bold mb-1" style="color: var(--primary-forest);">Retail Stockists</div>
            <div class="text-muted small">Worldwide export network</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Dynamic Section: Partner Testimonials -->
  @if(isset($testimonials) && $testimonials->isNotEmpty())
  <section class="ed-content-section" style="background: #fcfbf8; border-bottom: 1px solid var(--border-subtle); padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">GLOBAL PARTNERSHIPS</span>
        <h2 class="ed-section-title">Endorsements from Our Partners</h2>
        <p class="ed-section-desc mx-auto">Voices from global retail partners, WFTO certifiers, and civic allies collaborating with Conserve India.</p>
      </div>

      <div class="row g-4 justify-content-center">
        @foreach($testimonials as $item)
          <div class="col-md-6 col-lg-4">
            <div class="bg-white rounded-3 p-4 border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
              <div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="text-success fs-3"><i class="bi bi-quote"></i></div>
                  @if($item->logo)
                    <div style="height: 36px; max-width: 110px;">
                      <img src="{{ str_starts_with($item->logo, 'http') ? $item->logo : asset('website/' . $item->logo) }}" class="h-100 w-auto object-fit-contain" alt="{{ $item->author }}">
                    </div>
                  @endif
                </div>
                <p class="text-secondary small fst-italic mb-3" style="line-height: 1.7;">
                  &ldquo;{{ $item->quote }}&rdquo;
                </p>
              </div>
              <div class="pt-3 border-top border-light-subtle">
                <h4 class="h6 fw-bold mb-0" style="color: var(--primary-forest);">{{ $item->author }}</h4>
                @if($item->designation)
                  <span class="text-muted small" style="font-size: 12px;">{{ $item->designation }}</span>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <!-- Dynamic Section: Dispatches from the Field -->
  @if(isset($recentStories) && $recentStories->isNotEmpty())
  <section class="ed-content-section" style="background: #ffffff; padding: 75px 0;">
    <div class="container px-lg-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
        <div>
          <span class="ed-section-tag">FIELD DISPATCHES</span>
          <h2 class="ed-section-title mb-0">Latest Stories &amp; Updates</h2>
        </div>
        <a href="{{ url('/green-stories') }}" class="ed-btn-outline mt-3 mt-md-0">
          View All Green Stories &rarr;
        </a>
      </div>

      <div class="row g-4">
        @foreach($recentStories as $story)
          <div class="col-md-6 col-lg-4">
            <article class="bg-white rounded-3 overflow-hidden border border-light-subtle h-100 shadow-sm d-flex flex-column justify-content-between">
              <div>
                <div class="position-relative overflow-hidden" style="height: 190px; background: #e8eee9;">
                  @if($story->image)
                    <img src="{{ str_starts_with($story->image, 'http') ? $story->image : asset('website/' . $story->image) }}" class="w-100 h-100 object-fit-cover" alt="{{ $story->title }}">
                  @else
                    <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted">
                      <i class="bi bi-newspaper fs-1 text-secondary opacity-50"></i>
                    </div>
                  @endif
                  @if($story->category)
                    <span class="position-absolute top-0 start-0 m-3 badge bg-white text-dark shadow-sm">{{ $story->category }}</span>
                  @endif
                </div>
                <div class="p-4">
                  <span class="text-muted small d-block mb-1">
                    <i class="bi bi-calendar3 me-1"></i> {{ $story->published_date ? $story->published_date->format('M d, Y') : $story->created_at->format('M d, Y') }}
                  </span>
                  <h3 class="h6 fw-bold mb-2" style="color: var(--primary-forest);">
                    <a href="{{ route('story.detail', $story->slug ?: $story->id) }}" class="text-decoration-none text-dark">
                      {{ $story->title }}
                    </a>
                  </h3>
                  <p class="text-muted small mb-0" style="line-height: 1.6;">
                    {{ Str::limit($story->summary ?: strip_tags($story->content), 95) }}
                  </p>
                </div>
              </div>
              <div class="p-4 pt-0">
                <a href="{{ route('story.detail', $story->slug ?: $story->id) }}" class="text-success fw-semibold small text-decoration-none">
                  Read Full Story &rarr;
                </a>
              </div>
            </article>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <!-- Interactive Gallery CTA Band -->
  <section class="ed-content-section-muted" style="border-top: 1px solid var(--border-subtle); padding: 70px 0;">
    <div class="container px-lg-4 text-center">
      <span class="ed-section-tag">PROJECT PORTFOLIO</span>
      <h2 class="ed-section-title mb-3">View Our Projects in Action</h2>
      <p class="ed-section-desc mx-auto mb-4">
        Explore 13+ featured grassroots initiatives, tech patents, artisan ateliers, and field dispatches in our comprehensive visual gallery.
      </p>
      <a href="{{ url('/gallery') }}" class="btn-primary-forest px-4 py-2">
        Open Interactive Gallery &rarr;
      </a>
    </div>
  </section>
@endsection
