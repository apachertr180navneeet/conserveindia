@extends('layouts.app')

@section('title', 'Project Sahyog — Conserve India | Top 50 Last-Mile COVID Relief Responders')
@section('description', 'Learn how Conserve India\'s Project Sahyog mobilized community kitchens, food security, and upcycled PPE masks during the COVID-19 pandemic in Delhi.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/#our-work') }}">Our Work</a> <span>/</span> Project Sahyog
      </nav>
      <span class="ed-section-tag">HUMANITARIAN ACTION</span>
      <h1 class="ed-page-title">COVID-19 Relief Program: Project Sahyog</h1>
      <p class="ed-page-lead">
        Recognized among India's Top 50 Last-Mile COVID-19 Emergency Responders for mobilizing emergency food security, clean drinking water, and upcycled protective equipment across Delhi's most vulnerable settlements.
      </p>
    </div>
  </header>

  <!-- Section 1: Emergency Overview -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5 mb-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">RAPID MOBILIZATION</span>
          <h2 class="ed-section-title">Standing by Informal Workers in Times of Extreme Crisis</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            When India implemented nationwide lockdowns during the COVID-19 pandemic, daily-wage waste collectors, ragpickers, and informal artisans were abruptly stripped of their livelihoods. With scrap markets shuttered, thousands of migrant families faced immediate hunger and medical distress.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            Conserve immediately redirected its logistics fleets, administrative teams, and workshop facilities to launch <strong>Project Sahyog</strong> ("Cooperation"), connecting community kitchens, local district administration officers, and humanitarian donors to deliver last-mile life support.
          </p>
          <div class="p-3 rounded-2 mt-4" style="background-color: #edf2ef; border-left: 3px solid var(--primary-forest);">
            <strong style="color: var(--primary-forest); font-size: 14px;">National Recognition:</strong>
            <span class="text-secondary small d-block mt-1">
              Project Sahyog was independently evaluated and ranked among India's Top 50 Last-Mile Responders for agility, transparency, and grassroots reach.
            </span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/circular-communities.jpg') }}" alt="Project Sahyog community relief and food distribution" class="ed-media-img">
          </div>
        </div>
      </div>

      <!-- 3 Key Pillars -->
      <div class="row g-4 pt-3">
        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 01</span>
            <h3 class="ed-work-title">Ration Kits &amp; Community Kitchens</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              Distributed comprehensive monthly dry ration kits (wheat, rice, lentils, cooking oil, salt, spices) and operated community kitchens serving thousands of hot, nutritious meals directly to marginalized migrant families and daily wagers.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 02</span>
            <h3 class="ed-work-title">Upcycled Cotton Protective Masks</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              Employed local women artisans to manufacture hundreds of thousands of triple-layer, breathable, washable masks using clean factory cotton remnants, distributing them free to sanitation workers, municipal personnel, and slum residents.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 03</span>
            <h3 class="ed-work-title">Last-Mile Administrative Bridge</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              Served as an agile bridge between municipal government welfare funds and unregistered slum clusters overlooked by standard municipal distribution lists, ensuring food and sanitary aid reached the most invisible communities.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
