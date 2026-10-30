@extends('layouts.app')

@section('title', 'Advocacy & Lobbying — Conserve India | Environmental Policy & Labor Rights')
@section('description', 'Discover Conserve India\'s 25+ years of policy interventions in energy efficiency, waste management reforms, and advocating for the rights of informal waste pickers.')

@section('content')
<!-- Editorial Page Header -->
  <header class="ed-page-header">
    <div class="container px-lg-4">
      <nav class="ed-breadcrumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('/#our-work') }}">Our Work</a> <span>/</span> Advocacy &amp; Policy
      </nav>
      <span class="ed-section-tag">POLICY &amp; RIGHTS</span>
      <h1 class="ed-page-title">Advocacy, Lobbying &amp; Policy Reform</h1>
      <p class="ed-page-lead">
        Influencing systemic change by bridging on-the-ground environmental realities with legislative frameworks, municipal policy, and corporate accountability across India.
      </p>
    </div>
  </header>

  <!-- Section 1: Grassroots to Policy -->
  <section class="ed-content-section">
    <div class="container px-lg-4">
      <div class="row align-items-center g-5 mb-5">
        <div class="col-lg-6">
          <span class="ed-section-tag">HISTORICAL ENGAGEMENT</span>
          <h2 class="ed-section-title">From Grassroots Action to National Policy Impact</h2>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            Conserve India was founded on advocacy. Before designing patented upcycled products, our founders actively lobbied Delhi state agencies to mandate commercial energy efficiency, implement solar water-heating incentives, and establish source waste segregation.
          </p>
          <p class="text-secondary" style="line-height: 1.7; font-size: 15px;">
            Over two and a half decades, we have continuously drafted policy whitepapers, mobilized civil society coalitions, and advised government bodies on sustainable plastic waste frameworks, Extended Producer Responsibility (EPR) enforcement, and social protections for informal recyclers.
          </p>
          <div class="pt-2">
            <a href="{{ url('/contact-us') }}" class="ed-btn-primary">
              Join Our Advocacy Network &rarr;
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ed-media-box" style="aspect-ratio: 4 / 3;">
            <img src="{{ asset('assets/images/circular-communities.jpg') }}" alt="Community waste advocacy initiative in New Delhi" class="ed-media-img">
          </div>
        </div>
      </div>

      <!-- 3 Key Policy Arenas -->
      <div class="row g-4 pt-3">
        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 01</span>
            <h3 class="ed-work-title">Waste Picker Legal Recognition</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              India's millions of informal ragpickers manage over 70% of urban recyclables yet work without occupational safety, health insurance, or legal standing. Conserve advocates for municipal occupational ID cards, access to social security pensions, and direct inclusion in municipal solid waste collection tenders.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 02</span>
            <h3 class="ed-work-title">Extended Producer Responsibility</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              Lobbying for rigorous enforcement of Extended Producer Responsibility (EPR) mandates on FMCG corporations. We ensure corporate collection targets don't simply rely on incineration but actively direct capital to formalizing and funding the socio-economic welfare of informal collectors.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="ed-card">
            <span class="ed-step-badge">PILLAR 03</span>
            <h3 class="ed-work-title">Decentralized Waste Frameworks</h3>
            <p class="text-muted small" style="line-height: 1.6; margin-bottom: 0;">
              Challenging polluting, capital-intensive mega-incinerators by promoting decentralized neighborhood sorting stations, organic composting hubs, and community-led recycling infrastructure that preserves urban air quality and creates local green jobs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
