@extends('layouts.app')

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
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row g-4">

        <!-- Story 1: Textile Waste -->
        <div class="col-md-6 col-lg-4" id="textile">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/story-textile.jpg') }}" alt="Textile Waste Crisis in India" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Material Lifecycle &middot; 6 Min Read</span>
                <h3 class="ed-work-title">Textile Waste: The Unnoticed Environmental Hazard</h3>
                <p class="ed-work-desc">
                  While plastic waste dominates headlines, millions of meters of factory fabric discards enter India's landfills annually. We explore circular models to upcycle scrap cotton into durable home textiles.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="https://conserveindia.org/conserve-indiastop-50-last-mile-covid-relief-responders-2-2/" target="_blank" rel="noopener noreferrer" class="ed-work-card-link">
                  Read Article &nearr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 2: Lifaffa Circular Economy -->
        <div class="col-md-6 col-lg-4" id="lifaffa">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/circular-communities.jpg') }}" alt="Lifaffa Circular Economy" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Circular Economy &middot; 5 Min Read</span>
                <h3 class="ed-work-title">How Lifaffa is Innovating Circular Retail Models</h3>
                <p class="ed-work-desc">
                  Lifaffa ("envelope" in Hindi) links informal waste cooperatives directly with conscious shoppers across India, proving that zero-waste accessories can thrive in mainstream retail.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="https://conserveindia.org/how-lifaffa-is-innovating-circular-economy-models-within-indias-waste-management-industry/" target="_blank" rel="noopener noreferrer" class="ed-work-card-link">
                  Read Article &nearr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 3: Soil-less Agriculture -->
        <div class="col-md-6 col-lg-4" id="farming">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/story-farming.jpg') }}" alt="Soil-less Hydroponic Agriculture" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Agritech Innovation &middot; 7 Min Read</span>
                <h3 class="ed-work-title">Innovative Soil-Less Systems for Marginal Farmers</h3>
                <p class="ed-work-desc">
                  An answer to depleted soil and groundwater scarcity: how Conserve's patented soil-less cultivation system provides resilient income for smallholder families using 85% less water.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link">
                  Explore Agritech &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 4: Patented HRP Science -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/upcycling-innovation.jpg') }}" alt="Patented HRP material research" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Material Science &middot; 8 Min Read</span>
                <h3 class="ed-work-title">Engineering HRP: Plastic Bags as Premium Leather</h3>
                <p class="ed-work-desc">
                  A technical breakdown of our patented low-energy thermal lamination process that eliminates chemical bonding adhesives while creating tear-resistant, water-proof sheets.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link">
                  Read Science Deep Dive &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 5: Refugee Self-Reliance -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/hero-artisan.jpg') }}" alt="Refugee artisan weaving loom" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Social Impact &middot; 5 Min Read</span>
                <h3 class="ed-work-title">The Akseer Journey: From Displaced to Independent</h3>
                <p class="ed-work-desc">
                  How 25 Afghani refugee women in Delhi leveraged Fair Trade craft training under UNHCR's Swavlamban project to launch an independent, self-sustaining artisan fashion cooperative.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="{{ url('/capacity-building#refugees') }}" class="ed-work-card-link">
                  Read Refugee Story &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Story 6: Extended Producer Responsibility -->
        <div class="col-md-6 col-lg-4">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/plastic-bottles-sorting.jpg') }}" alt="Plastic bottle recovery facility" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Policy &amp; Legal &middot; 6 Min Read</span>
                <h3 class="ed-work-title">Fixing EPR: Why Waste Pickers Must Lead Compliance</h3>
                <p class="ed-work-desc">
                  An examination of India's EPR policy framework and why true corporate accountability requires formal integration, fair compensation, and healthcare for informal collectors.
                </p>
              </div>
              <div class="mt-auto pt-3 border-top" style="border-color: var(--border-light) !important;">
                <a href="{{ url('/advocacy-and-lobbying') }}" class="ed-work-card-link">
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
