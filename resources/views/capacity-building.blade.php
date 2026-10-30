@extends('layouts.app')

@section('title', 'Capacity Building — Conserve India | Artisans, Recyclers & Refugees')
@section('description', 'Learn how Conserve India empowers local artisans, grassroot waste pickers, and Afghani refugee women with sustainable livelihoods and Fair Trade training.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/#our-work') }}">Our Work</a> <span>/</span> Capacity Building
      </nav>
      <span class="ed-section-tag">HUMAN DIGNITY &amp; CRAFT</span>
      <h1 class="ed-page-title">Artisan Capacity Building &amp; Livelihoods</h1>
      <p class="ed-page-lead">
        Maximizing socio-economic upliftment by transitioning informal ragpickers and refugee women into skilled craftswomen, backed by fair wages, technical education, and global market linkages.
      </p>
    </div>
  </header>

  <!-- Overview Section -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">OUR ROADMAP</span>
          <h2 class="ed-section-title">From Vulnerable Waste Pickers to Confident Makers</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            To build sustainable artisan micro-enterprises, Conserve identifies motivated community groups living in informal settlements and provides a structured mobilization and training curriculum.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            We train individuals in safe plastic processing, pattern design, industrial sewing, and business literacy, backing them with our international wholesale distribution channels. <strong>All surplus generated from product sales directly finances artisan health insurance, equipment, and workshop scaling.</strong>
          </p>
          <div class="pt-2">
            <a href="{{ url('/contact-us') }}" class="ed-btn-primary">
              Partner on a Training Program &rarr;
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/artisan-livelihoods.jpg') }}" alt="Artisan women weaving and stitching in workshop" class="ed-media-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Three Beneficiary Programs -->
  <section class="ed-content-section-muted">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">BENEFICIARY GROUPS</span>
        <h2 class="ed-section-title">Targeted Community Programs</h2>
        <p class="ed-section-desc mx-auto">Providing long-term stability and social inclusion across three core vulnerable demographics.</p>
      </div>

      <div class="row g-4">
        <!-- Pillar 1: Local Artisans -->
        <div class="col-lg-4" id="artisans">
          <div class="ed-card">
            <span class="ed-step-badge">PROGRAM 01</span>
            <h3 class="ed-work-title">Local Craft Artisans</h3>
            <p class="text-muted small" style="line-height: 1.6;">
              Conserve trains local craftspeople in diverse traditional and modern handicrafts—including stitching, embroidery, loom weaving, crocheting, and hand-block printing.
            </p>
            <p class="text-muted small" style="line-height: 1.6;">
              We provide formal education on Fair Trade labor policies, bank account operations, and design consistency, ensuring artisans earn living wages in safe, ergonomic ateliers.
            </p>
            <div class="mt-auto pt-3">
              <a href="{{ url('/gallery') }}" class="ed-link-arrow">View Artisan Projects &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Pillar 2: Grassroot Recyclers -->
        <div class="col-lg-4" id="recyclers">
          <div class="ed-card">
            <span class="ed-step-badge">PROGRAM 02</span>
            <h3 class="ed-work-title">Grassroots Waste Recyclers</h3>
            <p class="text-muted small" style="line-height: 1.6;">
              Informal waste pickers manage the bulk of India's recyclables yet face hazardous conditions and exploitation in urban landfills.
            </p>
            <p class="text-muted small" style="line-height: 1.6;">
              For over 15 years, Conserve has provided up to two years of intensive training in our patented HRP technology, transforming ragpickers into skilled material technicians and workshop managers.
            </p>
            <div class="mt-auto pt-3">
              <a href="{{ url('/sustainable-research-development') }}" class="ed-link-arrow">Learn About HRP Tech &rarr;</a>
            </div>
          </div>
        </div>

        <!-- Pillar 3: Refugees (Akseer) -->
        <div class="col-lg-4" id="refugees">
          <div class="ed-card">
            <span class="ed-step-badge">PROGRAM 03</span>
            <h3 class="ed-work-title">Refugee Livelihoods (Akseer)</h3>
            <p class="text-muted small" style="line-height: 1.6;">
              In partnership with UNHCR's <em>Swavlamban</em> (Self-Reliance for Refugees) project, Conserve trained a cohort of 25 Afghani refugee women settled in low-income districts of Delhi.
            </p>
            <p class="text-muted small" style="line-height: 1.6;">
              Equipped with tailoring and micro-enterprise skills, these women successfully launched their own brand, <strong>Akseer</strong>, creating bespoke pieces for North Indian fashion boutiques.
            </p>
            <div class="mt-auto pt-3">
              <a href="{{ url('/gallery') }}" class="ed-link-arrow">Explore Akseer in Gallery &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Process -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">METHODOLOGY</span>
        <h2 class="ed-section-title">How Our Training Model Works</h2>
        <p class="ed-section-desc mx-auto">A proven, four-phase pathway from economic vulnerability to dignified vocational independence.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PHASE 01</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Identification</h3>
            <p class="text-muted small mb-0">Partnering with urban slum colonies and refugee settlements to identify motivated individuals seeking dignified work.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PHASE 02</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Technical Mastery</h3>
            <p class="text-muted small mb-0">Hands-on training in plastic washing, color sorting, thermal lamination, pattern cutting, and industrial stitching.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PHASE 03</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Fair Trade &amp; Health</h3>
            <p class="text-muted small mb-0">Financial literacy, bank account setup, fair wage guarantees, health insurance, and workplace safety protocols.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PHASE 04</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Market Linkage</h3>
            <p class="text-muted small mb-0">Connecting finished products to global department stores, boutique retailers, and corporate ESG procurement programs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
