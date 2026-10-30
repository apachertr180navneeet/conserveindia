@extends('layouts.app')

@section('title', 'Sustainable Trade — Conserve India | Fair Trade & Ethical Supply Chains')
@section('description', 'Learn how Conserve India upholds Fair Trade principles, ethical commerce, living wages, and international B2B sustainable supply chain partnerships.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/#our-work') }}">Our Work</a> <span>/</span> Sustainable Trade
      </nav>
      <span class="ed-section-tag">ETHICAL COMMERCE</span>
      <h1 class="ed-page-title">Sustainable &amp; Ethical Trade</h1>
      <p class="ed-page-lead">
        Proving that international fashion and lifestyle commerce can operate with complete ecological integrity, transparent living wages, and human dignity across every tier of the supply chain.
      </p>
    </div>
  </header>

  <!-- Section 1: Fair Trade Standards -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5 mb-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">OUR STANDARDS</span>
          <h2 class="ed-section-title">Commerce as an Instrument of Social Justice</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            True environmental sustainability cannot exist without human dignity. We believe conscious consumers worldwide seek well-crafted, durable lifestyle goods without the moral compromise of worker exploitation or environmental devastation.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            By upholding verified World Fair Trade Organization (WFTO) and Fair Trade Forum India (FTF-I) standards, we ensure every craftsperson receives predictable living wages, clean and ergonomic work ateliers, flexible hours for working mothers, and long-term financial security.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/hero-artisan.jpg') }}" alt="Fair Trade artisan weaving on loom" class="ed-media-img">
          </div>
        </div>
      </div>

      <!-- 4 Guarantees -->
      <div class="row g-4 pt-2">
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PRINCIPLE 01</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Living Wages</h3>
            <p class="text-muted small mb-0">Artisans earn predictable incomes well above regional statutory minimums, directly supporting housing stability and children's education.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PRINCIPLE 02</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Gender Parity</h3>
            <p class="text-muted small mb-0">Over 80% of Conserve artisans are women, promoting financial autonomy and female leadership in marginalized households.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PRINCIPLE 03</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Health &amp; Security</h3>
            <p class="text-muted small mb-0">Safe ergonomic ateliers, clean drinking water, regular medical checkups, and psycho-social counseling for artisan families.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ed-step-card">
            <span class="ed-step-badge">PRINCIPLE 04</span>
            <h3 class="fw-bold mb-2" style="font-size: 18px; font-family: var(--font-heading);">Zero Child Labor</h3>
            <p class="text-muted small mb-0">Strict zero-tolerance policies against child labor, ensuring that children of all artisan families are enrolled in formal schools.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2: Global Retail & B2B Wholesale -->
  <section class="ed-content-section-muted">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">GLOBAL DISTRIBUTION</span>
          <h2 class="ed-section-title">Supplying Over 1,000 Retailers Worldwide</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            Since 2006, Conserve India has supplied certified Fair Trade upcycled goods to independent eco-boutiques, department stores, and corporate partners across North America and Europe.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            In the United States, our products were distributed nationwide through <strong>Whole Foods Market</strong> and hundreds of conscious lifestyle retailers, demonstrating that grassroots circular products can compete and thrive in rigorous international retail markets.
          </p>
          <div class="pt-2">
            <a href="{{ url('/connect-with-us#partner') }}" class="ed-btn-primary">
              Partner For Wholesale &amp; Export &rarr;
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ed-card p-4 p-md-5">
            <span class="ed-section-tag">VERIFIED B2B PARTNER TESTIMONIAL</span>
            <blockquote style="font-size: 15.5px; line-height: 1.65; color: var(--text-primary); font-style: normal; margin-bottom: 20px;">
              &ldquo;Together, we have been able to sell their products nationwide in the US through corporate partners including Whole Foods Market and to over 1,000 independent retailers. Conserve's dedication to quality, social upliftment, and environmental ethics is unmatched.&rdquo;
            </blockquote>
            <div class="border-top pt-3" style="border-color: var(--border-light) !important;">
              <strong style="color: var(--primary-forest); font-size: 14px;">US Distribution Executive</strong>
              <span class="text-muted small d-block">Corporate Wholesale &amp; Retail Network</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
