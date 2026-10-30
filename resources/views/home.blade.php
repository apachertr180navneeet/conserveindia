@extends('layouts.app')

@section('title', 'Conserve India — Circular Economy, Patented Materials & Artisan Livelihoods')
@section('description', 'Since 1997, Conserve India has pioneered patented plastic upcycling (HRP), verified circular economy consulting, and dignified Fair Trade artisan livelihoods.')

@section('content')
<!-- ========================================================
       SECTION 1: HERO SLIDER
       Reference: Patagonia Activism (patagonia.com/activism)
       Full-width editorial image slider with standout CTA and improved headline typography
       ======================================================== -->
  <section class="ed-hero-section" id="hero" aria-label="Conserve India Mission & Work">
    <div id="heroCarousel" class="carousel slide carousel-fade ed-hero-slider" data-bs-ride="carousel" data-bs-interval="6500" data-bs-pause="hover">
      
      <!-- Slide Indicators -->
      <div class="carousel-indicators ed-hero-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1: Circular Economy"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2: Artisan Empowerment"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3: Patented Innovation"></button>
      </div>

      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="{{ asset('assets/images/hero-artisan.jpg') }}" alt="Conserve India artisan hand-weaving recycled plastic textile" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row w-100">
              <div class="col-12 col-xl-11">
                <span class="ed-hero-tag">PEOPLE &middot; PLANET &middot; POSSIBILITY</span>
                <h1 class="ed-hero-headline"><span class="text-accent">Turning Landfill Plastic</span> into Opportunity</h1>
                <p class="ed-hero-lead">
                  For over 25 years, Conserve India has pioneered patented material upcycling and dignified artisan livelihoods, diverting thousands of tons of plastic waste across India.
                </p>
                <div>
                  <a href="#our-work" class="ed-hero-cta">
                    Explore Our Work
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="{{ asset('assets/images/artisan-livelihoods.jpg') }}" alt="Conserve India craftswomen stitching in Fair Trade workshop" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row w-100">
              <div class="col-12 col-xl-11">
                <span class="ed-hero-tag">ARTISAN LIVELIHOODS &amp; DIGNITY</span>
                <h2 class="ed-hero-headline"><span class="text-accent">Empowering Hands.</span> Transforming Futures.</h2>
                <p class="ed-hero-lead">
                  Partnering with Delhi's grassroots recyclers and UNHCR refugee women, providing certified Fair Trade training, dignified living wages, and long-term financial self-reliance.
                </p>
                <div>
                  <a href="{{ url('/capacity-building') }}" class="ed-hero-cta">
                    Artisan Programs
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="{{ asset('assets/images/upcycling-innovation.jpg') }}" alt="Patented Handmade Recycled Plastic bags and accessories" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row w-100">
              <div class="col-12 col-xl-11">
                <span class="ed-hero-tag">CIRCULAR INNOVATION &amp; SUSTAINABLE TRADE</span>
                <h2 class="ed-hero-headline"><span class="text-accent">Patented Innovation</span> for a Circular Economy</h2>
                <p class="ed-hero-lead">
                  Transforming single-use polythene bags and vinyl into high-fashion materials distributed nationwide in the US via Whole Foods Market and over 1,000 global retailers.
                </p>
                <div>
                  <a href="#contact-section" class="ed-hero-cta">
                    Partner With Us
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Arrow Controls -->
      <div class="ed-hero-controls">
        <button class="ed-hero-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous Slide">
          <i class="bi bi-arrow-left"></i>
        </button>
        <button class="ed-hero-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next Slide">
          <i class="bi bi-arrow-right"></i>
        </button>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 2: OUR WORK
       Reference: Harajeevan Projects (harajeevan.org/projects)
       4 featured project cards in clean, consistent grid
       ======================================================== -->
  <section class="ed-work-section" id="our-work">
    <div class="container px-lg-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
        <div>
          <span class="ed-section-tag">FEATURED INITIATIVES</span>
          <h2 class="ed-section-title">Pioneering Circularity &amp; Artisan Empowerment</h2>
          <p class="ed-section-desc">
            Scalable interventions transforming post-consumer waste into high-value circular materials and dignified community livelihoods.
          </p>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="{{ url('/capacity-building') }}" class="ed-link-arrow">
            View All Projects &rarr;
          </a>
        </div>
      </div>

      <div class="row g-4">
        <!-- Project 1: Patented HRP Material Science -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/upcycling-innovation.jpg') }}" alt="Handmade Recycled Plastic upcycled bags" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">New Delhi &middot; Patented HRP</span>
                <h3 class="ed-work-title">Patented HRP Material Innovation</h3>
                <p class="ed-work-desc">
                  Converting post-consumer plastic bags and vinyl scrap into durable, leather-like materials without chemical dyes.
                </p>
              </div>
              <a href="{{ url('/sustainable-research-development') }}" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 2: Artisan Capacity Building -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/artisan-livelihoods.jpg') }}" alt="Artisan women weaving and stitching in workshop" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">UNHCR Partner &middot; 25+ Artisans</span>
                <h3 class="ed-work-title">Artisan Capacity &amp; Refugee Livelihoods</h3>
                <p class="ed-work-desc">
                  Training Delhi's informal recyclers and Afghani refugee women in stitching, Fair Trade standards, and micro-enterprises.
                </p>
              </div>
              <a href="{{ url('/capacity-building') }}" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 3: Project Sahyog Community Relief -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/circular-communities.jpg') }}" alt="Community cleanup and relief distribution" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">National Relief &middot; Top 50 India</span>
                <h3 class="ed-work-title">Project Sahyog Community Relief</h3>
                <p class="ed-work-desc">
                  Mobilized emergency community kitchens, nutrition, and sanitary kits for vulnerable migrant waste-picking families.
                </p>
              </div>
              <a href="{{ url('/covid-relief-project-sahyog') }}" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 4: Sustainable Trade & Advocacy -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="{{ asset('assets/images/belief-sapling.jpg') }}" alt="Sustainable Trade and Policy Advocacy" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Global B2B &middot; 1,000+ Retailers</span>
                <h3 class="ed-work-title">Sustainable Trade &amp; EPR Advocacy</h3>
                <p class="ed-work-desc">
                  Advocating Extended Producer Responsibility (EPR) while supplying certified Fair Trade goods to international partners.
                </p>
              </div>
              <a href="{{ url('/sustainable-trade') }}" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 3: IMPACT
       Reference: Charity:Water (charitywater.org)
       Verified numerical metrics with clear labels and reporting periods
       ======================================================== -->
  <section class="ed-impact-section" id="impact">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">VERIFIED IMPACT</span>
        <h2 class="ed-section-title">Measurable Results Since 1997</h2>
        <p class="ed-section-desc mx-auto">
          Verifiable ecological diversion, certified Fair Trade compliance, and continuous socio-economic progress across India.
        </p>
      </div>

      <div class="ed-impact-grid">
        <!-- Metric 1 -->
        <div class="ed-impact-item">
          <div class="ed-impact-stat">1997</div>
          <div class="ed-impact-label">Founded in New Delhi</div>
          <span class="ed-impact-period">1997 &ndash; Present</span>
          <p class="ed-impact-text">Over 25 years of continuous circular waste innovation, policy lobbying, and grassroots empowerment.</p>
        </div>

        <!-- Metric 2 -->
        <div class="ed-impact-item">
          <div class="ed-impact-stat">500+ <span style="font-size: 0.6em; font-weight: 600;">Tons</span></div>
          <div class="ed-impact-label">Plastic Waste Diverted</div>
          <span class="ed-impact-period">Verified Total</span>
          <p class="ed-impact-text">Millions of single-use polythene bags recovered from urban landfills and upcycled into high-value materials.</p>
        </div>

        <!-- Metric 3 -->
        <div class="ed-impact-item">
          <div class="ed-impact-stat">1,000+</div>
          <div class="ed-impact-label">Global Retail Partners</div>
          <span class="ed-impact-period">2006 &ndash; Present</span>
          <p class="ed-impact-text">Distribution partners across the US, UK, and Europe, including Whole Foods Market nationwide in the US.</p>
        </div>

        <!-- Metric 4 -->
        <div class="ed-impact-item">
          <div class="ed-impact-stat">15+ <span style="font-size: 0.6em; font-weight: 600;">Yrs</span></div>
          <div class="ed-impact-label">Artisans Supported</div>
          <span class="ed-impact-period">2008 &ndash; Present</span>
          <p class="ed-impact-text">Dignifying informal waste pickers and UNHCR refugee women through certified Fair Trade living wages.</p>
        </div>

        <!-- Metric 5 -->
        <div class="ed-impact-item">
          <div class="ed-impact-stat">Top 50</div>
          <div class="ed-impact-label">National Relief Responder</div>
          <span class="ed-impact-period">COVID-19 (2020&ndash;2021)</span>
          <p class="ed-impact-text">Project Sahyog was recognized among India's top 50 emergency community kitchen and relief operations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 4: GLOBAL PARTNERS
       Reference: Kiva Partner With Us (kiva.org/about/partner-with-us)
       Clean partner-logo strip with official partner & company logos
       ======================================================== -->
  <section class="ed-partners-section" id="partners">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">GLOBAL PARTNERS</span>
        <h2 class="ed-section-title">Trusted by International Organizations &amp; Retailers</h2>
        <p class="ed-section-desc mx-auto">
          Collaborating across ethical supply chains, humanitarian refugee relief, and responsible retail distribution worldwide.
        </p>
      </div>

      <div class="row g-3 g-md-4 justify-content-center">
        <!-- Partner 1: Whole Foods Market -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="Whole Foods Market — US Nationwide Distribution">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/whole-foods.svg') }}" alt="Whole Foods Market" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 2: UNHCR -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="UNHCR — Refugee Livelihoods Partner">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/unhcr.svg') }}" alt="UNHCR The UN Refugee Agency" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 3: WFTO -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="WFTO Member — World Fair Trade Organization">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/wfto.svg') }}" alt="World Fair Trade Organization Member" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 4: Fair Trade Forum India -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="Fair Trade Forum — FTF-I National Network">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/fair-trade-forum.svg') }}" alt="Fair Trade Forum India" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 5: Lifaffa -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="Lifaffa — Sustainable Retail Brand">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/lifaffa.svg') }}" alt="Lifaffa by Conserve" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 6: 1,000+ Global Retailers -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="1,000+ Retailers — US, UK & Europe Boutiques">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('assets/images/partners/global-retailers.svg') }}" alt="1,000+ Retailers Network" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 5: OUR SERVICES (VISUAL ACTION CARDS - Ref: Charity:Water)
       Consistent with services.php: Consulting, Outreach, Education, Immersion
       ======================================================== -->
  <section class="ed-services-section" id="services">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">SERVICES &amp; CAPABILITIES</span>
        <h2 class="ed-section-title">Ready to Take Action?</h2>
        <p class="ed-section-desc mx-auto">
          There are lots of impactful ways to collaborate with Conserve India. Explore our key circular services, outreach programs, and immersion experiences.
        </p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1: Consulting & Strategic Advisory -->
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="{{ url('/services#consulting') }}" class="ed-action-card" aria-label="Explore Consulting & Strategic Advisory">
            <div class="ed-action-img-box">
              <img src="{{ asset('assets/images/plastic-bottles-sorting.jpg') }}" alt="Diagnostic corporate waste stream audits and circular consulting" class="ed-action-img" loading="lazy">
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
          <a href="{{ url('/services#events-outreach') }}" class="ed-action-card" aria-label="Explore Events, Campaigns & Outreach">
            <div class="ed-action-img-box">
              <img src="{{ asset('assets/images/story-farming.jpg') }}" alt="Community environmental campaigns, corporate zero-waste days, and workshops" class="ed-action-img" loading="lazy">
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
          <a href="{{ url('/services#education-training') }}" class="ed-action-card" aria-label="Explore Education & Training Incubator">
            <div class="ed-action-img-box">
              <img src="{{ asset('assets/images/artisan-livelihoods.jpg') }}" alt="Youth design incubator, artisan stitching and financial literacy training" class="ed-action-img" loading="lazy">
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
          <a href="{{ url('/services#immersion-tours') }}" class="ed-action-card" aria-label="Explore Stay & Learn Immersion Tours">
            <div class="ed-action-img-box">
              <img src="{{ asset('assets/images/circular-communities.jpg') }}" alt="Stay & Learn circular immersion tours, waste mapping, and eco-stay" class="ed-action-img" loading="lazy">
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
       SECTION 6: GEOGRAPHICAL FOOTPRINT / WHERE WE HAVE WORKED
       Interactive Leaflet map displaying verified project locations
       ======================================================== -->
  <section class="ed-content-section" id="where-we-work" style="background: #fbfaf6; border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">GEOGRAPHIC FOOTPRINT</span>
        <h2 class="ed-section-title">Where We Have Worked</h2>
        <p class="ed-section-desc mx-auto">
          Over 25 years of grassroots field programs in urban informal settlements across Northern India, expanding to sustainable trade partnerships across 4 continents.
        </p>
      </div>

      <!-- Featured Geographic Footprint Map Graphic -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-9 col-xl-8 text-center">
          <div class="p-3 p-md-4 bg-white shadow-sm" style="border: 1px solid var(--border-light); border-radius: 16px;">
            <img src="{{ asset('assets/images/india-map-footprint.jpg') }}" alt="Conserve India Geographic Footprint Map" class="img-fluid rounded" style="max-height: 520px; width: auto; object-fit: contain;">
          </div>
        </div>
      </div>

      <!-- Regional Detail Cards -->
      <div class="row g-4">
        <!-- Region 1: Delhi-NCR -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card h-100 p-4 bg-white d-flex flex-column" style="border: 1px solid var(--border-light); border-radius: 12px; transition: transform 0.25s ease, box-shadow 0.25s ease;">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(28, 59, 45, 0.08); color: var(--primary-forest); font-size: 20px;">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0" style="color: var(--primary-forest);">Delhi-NCR</h3>
                <span class="text-muted small">Central Innovation Hub</span>
              </div>
            </div>
            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
              Flagship HRP material innovation atelier, Highbrow Crafts initiative, and Afghan refugee women training center (Akseer) in collaboration with UNHCR.
            </p>
            <div class="pt-2 border-top border-light-subtle mt-auto">
              <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">3,000+ Waste Collectors</span>
            </div>
          </div>
        </div>

        <!-- Region 2: Ghaziabad & Noida -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card h-100 p-4 bg-white d-flex flex-column" style="border: 1px solid var(--border-light); border-radius: 12px; transition: transform 0.25s ease, box-shadow 0.25s ease;">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(28, 59, 45, 0.08); color: var(--primary-forest); font-size: 20px;">
                <i class="bi bi-buildings-fill"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0" style="color: var(--primary-forest);">Ghaziabad &amp; Noida</h3>
                <span class="text-muted small">Upcycling &amp; Relief Hub</span>
              </div>
            </div>
            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
              Roosh Upcycle Project, Wastepreneurs training hub, material washing &amp; compression facilities, and emergency kitchens during Project Sahyog.
            </p>
            <div class="pt-2 border-top border-light-subtle mt-auto">
              <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">Wastepreneurs Hub</span>
            </div>
          </div>
        </div>

        <!-- Region 3: Haryana & Grassroots Clusters -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card h-100 p-4 bg-white d-flex flex-column" style="border: 1px solid var(--border-light); border-radius: 12px; transition: transform 0.25s ease, box-shadow 0.25s ease;">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(28, 59, 45, 0.08); color: var(--primary-forest); font-size: 20px;">
                <i class="bi bi-people-fill"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0" style="color: var(--primary-forest);">Haryana Clusters</h3>
                <span class="text-muted small">Faridabad &amp; Gurugram</span>
              </div>
            </div>
            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
              Footprints Project empowering grassroots waste pickers, health checkups, sanitation workshops, and financial literacy training for women recyclers.
            </p>
            <div class="pt-2 border-top border-light-subtle mt-auto">
              <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">100+ Women Recyclers</span>
            </div>
          </div>
        </div>

        <!-- Region 4: Global Distribution -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card h-100 p-4 bg-white d-flex flex-column" style="border: 1px solid var(--border-light); border-radius: 12px; transition: transform 0.25s ease, box-shadow 0.25s ease;">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(28, 59, 45, 0.08); color: var(--primary-forest); font-size: 20px;">
                <i class="bi bi-globe2"></i>
              </div>
              <div>
                <h3 class="h5 fw-bold mb-0" style="color: var(--primary-forest);">Global Reach</h3>
                <span class="text-muted small">USA, UK &amp; Europe</span>
              </div>
            </div>
            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
              Certified Fair Trade upcycled fashion exported to Whole Foods Market nationwide in the USA and over 1,000 independent eco-design retail boutiques.
            </p>
            <div class="pt-2 border-top border-light-subtle mt-auto">
              <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">1,000+ Retail Outlets</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 7: TESTIMONIALS
       Reference: Acumen (acumen.co.in)
       Integrated with partner & organization logos
       ======================================================== -->
  <section class="ed-testimonials-section" id="testimonials">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">PARTNER PERSPECTIVES</span>
        <h2 class="ed-section-title">Endorsements from the Frontlines</h2>
        <p class="ed-section-desc mx-auto">
          Perspectives from our long-standing global retail partners, environmental councils, and social development networks.
        </p>
      </div>

      <div class="row g-4">
        <!-- Testimonial 1 -->
        <div class="col-lg-4">
          <div class="ed-testimonial-card">
            <p class="ed-testimonial-text">
              &ldquo;I have known the team at Conserve India since 2006 and have the utmost respect for their creativity and dedication to solving both environmental and social problems for society. Together, we have been able to sell their products nationwide in the US through corporate partners including Whole Foods Market and to over 1,000 independent retailers.&rdquo;
            </p>
            <div class="ed-testimonial-author">
              <div class="ed-testimonial-author-info">
                <div class="ed-testimonial-name">US Distribution Partner</div>
                <div class="ed-testimonial-role">Corporate Wholesale &amp; Retail Network</div>
                <div class="ed-testimonial-badge">
                  <i class="bi bi-check-circle-fill"></i> Whole Foods Market Distribution
                </div>
              </div>
              <div class="ed-testimonial-logo-box">
                <img src="{{ asset('assets/images/partners/whole-foods.svg') }}" alt="Whole Foods Market Logo" class="ed-testimonial-logo" loading="lazy">
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="col-lg-4">
          <div class="ed-testimonial-card">
            <p class="ed-testimonial-text">
              &ldquo;Conserve is at the forefront of bringing positive change in India to tackle the problem of plastic waste. They are doing an excellent job bridging grassroot collectors with global markets through patented material science and transparent fair wages.&rdquo;
            </p>
            <div class="ed-testimonial-author">
              <div class="ed-testimonial-author-info">
                <div class="ed-testimonial-name">Environmental Conservation Council</div>
                <div class="ed-testimonial-role">Sustainable Trade &amp; Policy Partner</div>
                <div class="ed-testimonial-badge">
                  <i class="bi bi-check-circle-fill"></i> Verified Policy Partner
                </div>
              </div>
              <div class="ed-testimonial-logo-box">
                <img src="{{ asset('assets/images/partners/eco-council.svg') }}" alt="Environmental Conservation Council Logo" class="ed-testimonial-logo" loading="lazy">
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-lg-4">
          <div class="ed-testimonial-card">
            <p class="ed-testimonial-text">
              &ldquo;Conserve India has made a significant difference in the lives of marginalized waste pickers and refugee women as well as in preserving our environment. We wholeheartedly support them in their ongoing circular economy and relief endeavours!&rdquo;
            </p>
            <div class="ed-testimonial-author">
              <div class="ed-testimonial-author-info">
                <div class="ed-testimonial-name">Community Leadership Alliance</div>
                <div class="ed-testimonial-role">Social Development &amp; Artisan Network</div>
                <div class="ed-testimonial-badge">
                  <i class="bi bi-check-circle-fill"></i> Verified Community Partner
                </div>
              </div>
              <div class="ed-testimonial-logo-box">
                <img src="{{ asset('assets/images/partners/community-alliance.svg') }}" alt="Community Leadership Alliance Logo" class="ed-testimonial-logo" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 8: CONTACT SECTION (REPLACES THE LAST INSTAGRAM SECTION)
       Divided into two responsive columns:
       - Left column: Social media icons and official profile links
       - Right column: Interactive contact and enquiry form
       ======================================================== -->
  <section class="ed-contact-home-section" id="contact-section">
    <div class="container px-lg-4">
      <div class="row g-5 align-items-stretch">
        
        <!-- Left Column: Official Social Media Profiles & Organization Information -->
        <div class="col-lg-5">
          <div class="ed-contact-card d-flex flex-column justify-content-between">
            <div>
              <span class="ed-section-tag">GET IN TOUCH</span>
              <h2 class="ed-section-title" style="font-size: 28px; line-height: 1.25; margin-bottom: 14px;">Connect With Conserve India</h2>
              <p class="text-secondary small" style="line-height: 1.65; margin-bottom: 20px;">
                Whether you represent an international retail brand seeking certified Fair Trade merchandise, a corporation exploring Extended Producer Responsibility (EPR) advisory, or an institution interested in circular research, our team is eager to collaborate.
              </p>

              <!-- Official Social Media Links -->
              <span class="text-muted small fw-bold text-uppercase" style="letter-spacing: 1px; font-size: 11px;">Official Social Channels</span>
              <div class="ed-social-list">
                <!-- Instagram -->
                <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-social-item" aria-label="Visit Conserve India on Instagram">
                  <div class="ed-social-icon-box" style="color: #e1306c;">
                    <i class="bi bi-instagram"></i>
                  </div>
                  <div>
                    <div class="ed-social-item-name">Instagram</div>
                    <div class="ed-social-item-handle">@conserveindia &middot; Workshop &amp; Stories</div>
                  </div>
                  <i class="bi bi-arrow-up-right ed-social-item-arrow"></i>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/conserve-india/" target="_blank" rel="noopener noreferrer" class="ed-social-item" aria-label="Visit Conserve India on LinkedIn">
                  <div class="ed-social-icon-box" style="color: #0a66c2;">
                    <i class="bi bi-linkedin"></i>
                  </div>
                  <div>
                    <div class="ed-social-item-name">LinkedIn</div>
                    <div class="ed-social-item-handle">Conserve India &middot; Corporate &amp; Research</div>
                  </div>
                  <i class="bi bi-arrow-up-right ed-social-item-arrow"></i>
                </a>

                <!-- Facebook -->
                <a href="https://www.facebook.com/conserveindia" target="_blank" rel="noopener noreferrer" class="ed-social-item" aria-label="Visit Conserve India on Facebook">
                  <div class="ed-social-icon-box" style="color: #1877f2;">
                    <i class="bi bi-facebook"></i>
                  </div>
                  <div>
                    <div class="ed-social-item-name">Facebook</div>
                    <div class="ed-social-item-handle">@conserveindia &middot; Community Outreach</div>
                  </div>
                  <i class="bi bi-arrow-up-right ed-social-item-arrow"></i>
                </a>

                <!-- YouTube -->
                <a href="https://www.youtube.com/user/conserveindia" target="_blank" rel="noopener noreferrer" class="ed-social-item" aria-label="Visit Conserve India on YouTube">
                  <div class="ed-social-icon-box" style="color: #ff0000;">
                    <i class="bi bi-youtube"></i>
                  </div>
                  <div>
                    <div class="ed-social-item-name">YouTube</div>
                    <div class="ed-social-item-handle">Conserve India &middot; Documentaries &amp; Craft</div>
                  </div>
                  <i class="bi bi-arrow-up-right ed-social-item-arrow"></i>
                </a>
              </div>
            </div>

            <!-- Direct Contact Info -->
            <div class="ed-contact-info-list">
              <div class="ed-contact-info-row">
                <i class="bi bi-geo-alt-fill"></i>
                <div>
                  <strong>Production Atelier &amp; Lab:</strong><br>
                  New Delhi / NCR, India &middot; <span class="text-muted">Visits by appointment</span>
                </div>
              </div>
              <div class="ed-contact-info-row">
                <i class="bi bi-envelope-fill"></i>
                <div>
                  <strong>Direct Email Inquiries:</strong><br>
                  <a href="mailto:info@conserveindia.org" class="text-success text-decoration-none fw-semibold">info@conserveindia.org</a>
                </div>
              </div>
              <div class="ed-contact-info-row">
                <i class="bi bi-clock-fill"></i>
                <div>
                  <strong>Hours of Operation:</strong><br>
                  Monday &ndash; Saturday: 9:30 AM &ndash; 6:30 PM IST
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Interactive Enquiry Form -->
        <div class="col-lg-7">
          <div class="ed-contact-card">
            <span class="ed-section-tag">ONLINE INQUIRY</span>
            <h3 class="ed-section-title" style="font-size: 24px; margin-bottom: 8px;">Send an Inquiry to Our Team</h3>
            <p class="text-secondary small mb-4" style="line-height: 1.6;">
              Please complete the form below. We typically respond within 24 to 48 business hours with verified information and proposal specifications.
            </p>

            <form id="homepageContactForm" class="ed-contact-form" onsubmit="handleHomepageContactSubmit(event)">
              <div class="row g-3">
                <!-- Name -->
                <div class="col-md-6">
                  <label for="contactName" class="form-label">Full Name *</label>
                  <input type="text" class="form-control" id="contactName" name="name" placeholder="Anita Sharma" required>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                  <label for="contactEmail" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" id="contactEmail" name="email" placeholder="name@company.com" required>
                </div>

                <!-- Organization -->
                <div class="col-md-6">
                  <label for="contactOrganization" class="form-label">Organization / Company</label>
                  <input type="text" class="form-control" id="contactOrganization" name="organization" placeholder="Enterprise or Brand Name">
                </div>

                <!-- Subject / Nature of Inquiry -->
                <div class="col-md-6">
                  <label for="contactSubject" class="form-label">Subject / Inquiry Area *</label>
                  <select class="form-select" id="contactSubject" name="subject" required>
                    <option value="" selected disabled>Select an inquiry area</option>
                    <option value="wholesale">B2B Wholesale &amp; Retail Supply</option>
                    <option value="corporate-gifting">Corporate Sustainable Gifting</option>
                    <option value="consulting">Circularity Audits &amp; EPR Compliance</option>
                    <option value="artisan-csr">Artisan Livelihoods &amp; CSR Project</option>
                    <option value="research">Academic &amp; Material Science Research</option>
                    <option value="general">General Media &amp; Partnerships</option>
                  </select>
                </div>

                <!-- Message -->
                <div class="col-12">
                  <label for="contactMessage" class="form-label">Project Details &amp; Message *</label>
                  <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Please outline your objectives, product requirements, estimated volume, or collaboration ideas..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12 pt-2">
                  <button type="submit" id="contactSubmitBtn" class="ed-btn-primary" style="padding: 13px 32px; font-size: 14.5px;">
                    <span class="btn-text">Send Inquiry &rarr;</span>
                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                  </button>
                </div>
              </div>

              <!-- Success / Feedback Alert Box -->
              <div id="contactFormFeedback" class="ed-form-feedback alert alert-success" role="alert">
                <div class="d-flex align-items-center gap-2">
                  <i class="bi bi-check-circle-fill fs-5"></i>
                  <div>
                    <strong>Thank you! Your inquiry has been successfully sent.</strong><br>
                    A representative from Conserve India will review your project details and follow up promptly.
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Homepage Contact Form Script -->
  <script>
    function handleHomepageContactSubmit(e) {
      e.preventDefault();
      var form = document.getElementById('homepageContactForm');
      var submitBtn = document.getElementById('contactSubmitBtn');
      var feedback = document.getElementById('contactFormFeedback');

      // Visual loading state
      var btnText = submitBtn.querySelector('.btn-text');
      var spinner = submitBtn.querySelector('.spinner-border');
      
      btnText.textContent = 'Sending...';
      spinner.classList.remove('d-none');
      submitBtn.disabled = true;

      setTimeout(function() {
        btnText.textContent = 'Inquiry Sent!';
        spinner.classList.add('d-none');
        feedback.style.display = 'block';
        form.reset();

        setTimeout(function() {
          btnText.textContent = 'Send Inquiry →';
          submitBtn.disabled = false;
        }, 3500);
      }, 700);
    }
  </script>
@endsection
