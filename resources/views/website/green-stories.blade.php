@extends('website.layouts.app')

@section('title', 'Green Stories — Conserve India | Circular Economy Blog & Research')
@section('description', 'Read insightful articles, research, and stories on waste management, circular fashion, soil-less farming, and artisan livelihoods by Conserve India.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> Green Stories
      </nav>
      <span class="ed-section-tag">RESEARCH &amp; ANALYSIS</span>
      <h1 class="ed-page-title">Green Stories &amp; Field Dispatches</h1>
      <p class="ed-page-lead">
        Field reports, circular material investigations, and policy perspectives from over two and a half decades on the frontlines of India's urban waste and social enterprise sectors.
      </p>
    </div>
  </header>

  <!-- Articles Grid -->
  <section class="ed-content-section" style="background: #fff; padding: 70px 0 90px;">
    <div class="container px-lg-4">
      <div class="row g-4">

        @if(isset($newsArticles) && $newsArticles->isNotEmpty())
          @foreach($newsArticles as $article)
            <div class="col-md-6 col-lg-4">
              <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
                @if($article->image)
                  <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
                    <img src="{{ str_starts_with($article->image, 'http') ? $article->image : asset('website/' . $article->image) }}" alt="{{ $article->title }}" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
                  </div>
                @endif
                <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
                  <div>
                    <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">
                      {{ $article->category ?? 'Circular Economy' }} &middot; {{ $article->published_date ? \Carbon\Carbon::parse($article->published_date)->format('M d, Y') : $article->created_at->format('M d, Y') }}
                    </span>
                    <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">
                      <a href="{{ route('story.detail', $article->slug) }}" class="text-decoration-none" style="color: inherit;">
                        {{ $article->title }}
                      </a>
                    </h3>
                    <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                      {{ $article->summary ?: Str::limit(strip_tags($article->content), 130) }}
                    </p>
                  </div>
                  <div class="mt-auto pt-3 border-top border-light-subtle">
                    <a href="{{ route('story.detail', $article->slug) }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                      Read Full Article &rarr;
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif

        <!-- Story 1: Textile Waste -->
        <div class="col-md-6 col-lg-4" id="textile">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/story-textile.jpg') }}" alt="Textile Waste Crisis in India" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Material Lifecycle &middot; 6 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">Textile Waste: The Unnoticed Environmental Hazard</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  While plastic waste dominates headlines, millions of meters of factory fabric discards enter India's landfills annually. We explore circular models to upcycle scrap cotton into durable home textiles.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Read Article &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 2: Lifaffa Circular Economy -->
        <div class="col-md-6 col-lg-4" id="lifaffa">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/circular-communities.jpg') }}" alt="Lifaffa Circular Economy" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Circular Economy &middot; 5 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">How Lifaffa is Innovating Circular Retail Models</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  Lifaffa ("envelope" in Hindi) links informal waste cooperatives directly with conscious shoppers across India, proving that zero-waste accessories can thrive in mainstream retail.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="https://www.lifaffa.com" target="_blank" rel="noopener noreferrer" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Visit Lifaffa Store &nearr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 3: Soil-less Agriculture -->
        <div class="col-md-6 col-lg-4" id="farming">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/story-farming.jpg') }}" alt="Soil-less Hydroponic Agriculture" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Agritech Innovation &middot; 7 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">Innovative Soil-Less Systems for Marginal Farmers</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  An answer to depleted soil and groundwater scarcity: how Conserve's patented soil-less cultivation system provides resilient income for smallholder families using 85% less water.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Explore Agritech &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 4: Patented HRP Science -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/upcycling-innovation.jpg') }}" alt="Patented HRP material research" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Material Science &middot; 8 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">Engineering HRP: Plastic Bags as Premium Leather</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  A technical breakdown of our patented low-energy thermal lamination process that eliminates chemical bonding adhesives while creating tear-resistant, water-proof sheets.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Read Science Deep Dive &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 5: Refugee Self-Reliance -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/hero-artisan.jpg') }}" alt="Refugee artisan weaving loom" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Social Impact &middot; 5 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">The Akseer Journey: From Displaced to Independent</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  How 25 Afghani refugee women in Delhi leveraged Fair Trade craft training under UNHCR's Swavlamban project to launch an independent, self-sustaining artisan fashion cooperative.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="{{ url('/capacity-building#refugees') }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Read Refugee Story &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 6: Extended Producer Responsibility -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card h-100 d-flex flex-column bg-white border border-light-subtle rounded-3 overflow-hidden shadow-sm">
            <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background: #e8eee9;">
              <img src="{{ asset('website/assets/images/plastic-bottles-sorting.jpg') }}" alt="Plastic bottle recovery facility" class="ed-work-img w-100 h-100 object-fit-cover" loading="lazy">
            </div>
            <div class="ed-work-body p-4 d-flex flex-column flex-grow-1">
              <div>
                <span class="ed-work-meta text-success small fw-semibold text-uppercase d-block mb-1">Policy &amp; Legal &middot; 6 Min Read</span>
                <h3 class="ed-work-title h5 fw-bold mb-2" style="color: var(--primary-forest);">Fixing EPR: Why Waste Pickers Must Lead Compliance</h3>
                <p class="ed-work-desc text-secondary small mb-3" style="line-height: 1.65;">
                  An examination of India's EPR policy framework and why true corporate accountability requires formal integration, fair compensation, and healthcare for informal collectors.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top border-light-subtle">
                <a href="{{ url('/advocacy-and-lobbying') }}" class="ed-work-card-link text-success fw-bold small text-decoration-none">
                  Read Policy Analysis &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
