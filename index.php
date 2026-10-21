<?php
$page_title = "CONSERVE INDIA — Waste has a future. So do we.";
$page_description = "Conserve India - Renewing the world from people to planet. Discover our patented Handmade Recycled Plastic (HRP), artisan capacity building, services, and circular economy initiatives.";
$current_page = "home";
require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================
       1. SLIDER (HERO CAROUSEL)
       ======================================================== -->
  <section class="hero-slider-section" id="hero">
    <!-- Subtle Botanical Illustration on the left -->
    <img src="assets/images/leaf-branch.svg" alt="Botanical Line Art" class="hero-botanical-bg" aria-hidden="true">

    <div class="container px-lg-4">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
        <div class="carousel-inner">
          
          <!-- Slide 1: Waste Has A Future -->
          <div class="carousel-item active">
            <div class="row align-items-center hero-slide-inner">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hero-content">
                  <div class="section-tag">
                    PEOPLE &middot; PLANET &middot; POSSIBILITY
                  </div>
                  <h1 class="hero-title">
                    Waste has a future.<br>
                    So do <span class="highlight-underline">we.<svg class="brush-stroke" viewBox="0 0 60 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 18 2, 42 2, 58 6 C 42 9, 18 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
                  </h1>
                  <p class="hero-desc">
                    Transforming discarded plastic into opportunity for people and planet since 1997. Innovators of patented Handmade Recycled Plastic (HRP) and champions of artisan empowerment across India.
                  </p>
                  <div class="hero-buttons">
                    <a href="#our-work" class="btn-primary-forest">
                      Explore Our Work
                      <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                    </a>
                    <a href="wholesale.php" class="btn-outline-forest">
                      Wholesale Catalog
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="hero-image-box">
                  <img src="assets/images/hero-artisan.jpg" alt="Artisan handcrafting recycled woven plastic bag" class="hero-slider-img">
                  <span class="hero-overlay-tag">
                    <i class="bi bi-patch-check-fill text-warning"></i> Patented HRP Tech
                  </span>
                  <img src="assets/images/hero-stamp.svg" alt="Handcrafted today for a cleaner tomorrow" class="hero-badge-stamp">
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Artisan Livelihoods & Women Empowerment -->
          <div class="carousel-item">
            <div class="row align-items-center hero-slide-inner">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hero-content">
                  <div class="section-tag">
                    ARTISAN LIVELIHOODS &amp; DIGNITY
                  </div>
                  <h1 class="hero-title">
                    Empowering Hands.<br>
                    Transforming <span class="highlight-underline">Futures.<svg class="brush-stroke" viewBox="0 0 130 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 35 2, 95 2, 128 6 C 95 9, 35 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
                  </h1>
                  <p class="hero-desc">
                    Partnering with Delhi's grassroots recyclers and UNHCR refugee women. Providing dignified Fair Trade training, master stitching skills, and financial self-reliance.
                  </p>
                  <div class="hero-buttons">
                    <a href="capacity-building.php" class="btn-primary-forest">
                      Artisan Programs
                      <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                    </a>
                    <a href="#services" class="btn-outline-forest">
                      Our Services
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="hero-image-box">
                  <img src="assets/images/artisan-livelihoods.jpg" alt="Artisan women weaving and stitching in Delhi workshop" class="hero-slider-img">
                  <span class="hero-overlay-tag">
                    <i class="bi bi-heart-fill text-danger"></i> Fair Trade &amp; Living Wages
                  </span>
                  <img src="assets/images/hero-stamp.svg" alt="Certified Fair Trade" class="hero-badge-stamp">
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Circular Innovation & Global Trade -->
          <div class="carousel-item">
            <div class="row align-items-center hero-slide-inner">
              <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hero-content">
                  <div class="section-tag">
                    CIRCULAR INNOVATION &amp; SUSTAINABLE TRADE
                  </div>
                  <h1 class="hero-title">
                    From Landfill Plastic to<br>
                    <span class="highlight-underline">Conscious Luxury.<svg class="brush-stroke" viewBox="0 0 180 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 45 2, 135 2, 178 6 C 135 9, 45 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
                  </h1>
                  <p class="hero-desc">
                    Turning single-use polythene bags and vinyl remnants into durable, designer materials sold nationwide in Whole Foods Market and over 1,000 independent global retailers.
                  </p>
                  <div class="hero-buttons">
                    <a href="sustainable-research-development.php" class="btn-primary-forest">
                      Sustainable R&amp;D
                      <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                    </a>
                    <a href="contact-us.php" class="btn-outline-forest">
                      Partner With Us
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="hero-image-box">
                  <img src="assets/images/upcycling-innovation.jpg" alt="Patented Handmade Recycled Plastic accessories and tote bags" class="hero-slider-img">
                  <span class="hero-overlay-tag">
                    <i class="bi bi-recycle text-success"></i> 100% Upcycled Plastic
                  </span>
                  <img src="assets/images/hero-stamp.svg" alt="Patented Material Innovation" class="hero-badge-stamp">
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Carousel Indicators & Prev/Next Controls Bar -->
        <div class="d-flex align-items-center justify-content-between pt-3 pb-2">
          <div class="carousel-indicators hero-carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-nav-wrap">
            <button class="carousel-btn-circle" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous Slide">
              <i class="bi bi-arrow-left"></i>
            </button>
            <button class="carousel-btn-circle" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next Slide">
              <i class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Pillars / Value Bar -->
      <div class="pillars-bar-wrapper">
        <div class="pillars-bar shadow-sm">
          <!-- Pillar 1 -->
          <div class="pillar-item">
            <div class="pillar-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="7 19 3 15 7 11"></polyline>
                <path d="M3 15h11a4 4 0 0 0 4-4V5"></path>
                <polyline points="17 5 21 9 17 13"></polyline>
                <path d="M21 9H10a4 4 0 0 0-4 4v6"></path>
              </svg>
            </div>
            <div>
              <div class="pillar-title">Plastic, reimagined</div>
              <p class="pillar-text">Patented HRP tech converting single-use plastic into leather-like material.</p>
            </div>
          </div>

          <div class="pillar-divider"></div>

          <!-- Pillar 2 -->
          <div class="pillar-item">
            <div class="pillar-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <div>
              <div class="pillar-title">Livelihoods strengthened</div>
              <p class="pillar-text">Dignified training for waste pickers, local artisans &amp; refugee women.</p>
            </div>
          </div>

          <div class="pillar-divider"></div>

          <!-- Pillar 3 -->
          <div class="pillar-item">
            <div class="pillar-icon-box">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 20A7 7 0 0 1 4 13C4 7 11 3 20 3c0 9-4 16-10 17z"></path>
                <path d="M11 20v-5"></path>
              </svg>
            </div>
            <div>
              <div class="pillar-title">A circular future</div>
              <p class="pillar-text">Certified Fair Trade products sold in Whole Foods &amp; 1,000+ global retailers.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       2. OUR WORK
       ======================================================== -->
  <section class="approach-section" id="our-work">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="approach-tag">
          OUR WORK
        </div>
        <h2 class="approach-headline">
          From discarded to <span class="highlight-underline">extraordinary<svg class="brush-stroke" viewBox="0 0 170 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 45 2, 125 2, 168 6 C 125 9, 45 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 640px; font-size: 15px;">
          For over 25 years, Conserve India has pioneered circular solutions that tackle environmental degradation while creating dignified livelihoods for marginalized communities.
        </p>
      </div>

      <div class="row g-4">
        <!-- Card 1: Upcycling & Innovation -->
        <div class="col-md-6 col-lg-3">
          <div class="work-card">
            <div class="work-card-img-wrap">
              <img src="assets/images/upcycling-innovation.jpg" alt="Upcycled tote bags and accessories" class="work-card-img">
              <span class="work-card-badge">Patented Tech</span>
            </div>
            <div class="work-card-body">
              <div>
                <h3 class="work-card-title">Upcycling &amp; Innovation</h3>
                <p class="work-card-desc">Inventors of patented Handmade Recycled Plastic (HRP), converting discarded plastic bags and vinyl scrap into high-fashion accessories.</p>
              </div>
              <a href="sustainable-research-development.php" class="work-card-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 2: Artisan Livelihoods -->
        <div class="col-md-6 col-lg-3">
          <div class="work-card">
            <div class="work-card-img-wrap">
              <img src="assets/images/artisan-livelihoods.jpg" alt="Artisan women weaving in workshop" class="work-card-img">
              <span class="work-card-badge">Fair Trade</span>
            </div>
            <div class="work-card-body">
              <div>
                <h3 class="work-card-title">Artisan Livelihoods</h3>
                <p class="work-card-desc">Partnering with Delhi's grassroot recyclers and UNHCR Swavlamban refugee women, training them in stitching, Fair Trade, and business independence.</p>
              </div>
              <a href="capacity-building.php" class="work-card-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 3: Circular Communities -->
        <div class="col-md-6 col-lg-3">
          <div class="work-card">
            <div class="work-card-img-wrap">
              <img src="assets/images/circular-communities.jpg" alt="Circular communities plastic waste collection" class="work-card-img">
              <span class="work-card-badge">Community Action</span>
            </div>
            <div class="work-card-body">
              <div>
                <h3 class="work-card-title">Circular Communities</h3>
                <p class="work-card-desc">From cleanups and waste collection to community kitchens (Project Sahyog), building cleaner, healthier and more resilient neighborhoods.</p>
              </div>
              <a href="covid-relief-project-sahyog.php" class="work-card-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Card 4: Sustainable Trade & Advocacy -->
        <div class="col-md-6 col-lg-3">
          <div class="work-card">
            <div class="work-card-img-wrap">
              <img src="assets/images/belief-sapling.jpg" alt="Sustainable Trade and Policy Advocacy" class="work-card-img">
              <span class="work-card-badge">Global Trade</span>
            </div>
            <div class="work-card-body">
              <div>
                <h3 class="work-card-title">Trade &amp; Advocacy</h3>
                <p class="work-card-desc">Advocating Extended Producer Responsibility (EPR) and connecting grassroots recyclers with international ethical buyers and retail stores.</p>
              </div>
              <a href="sustainable-trade.php" class="work-card-link">
                Learn More <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       3. SERVICES
       ======================================================== -->
  <section class="services-section" id="services">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="approach-tag">
          OUR SERVICES
        </div>
        <h2 class="font-serif mb-3" style="font-size: clamp(2rem, 3.2vw, 2.6rem);">
          Circular Solutions &amp; <span class="highlight-underline">Sustainability Advisory<svg class="brush-stroke" viewBox="0 0 170 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 45 2, 125 2, 168 6 C 125 9, 45 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 680px; font-size: 15.5px;">
          We collaborate with corporations, global retailers, academic institutions, and municipal bodies to deliver actionable circular workflows, ESG compliance, and community impact.
        </p>
      </div>

      <div class="row g-4">
        <!-- Service 1: Waste Audits & Circular System Design -->
        <div class="col-md-6">
          <div class="service-card">
            <div class="service-icon-box">
              <i class="bi bi-clipboard2-data"></i>
            </div>
            <h3 class="service-card-title">Waste Audits &amp; Circular System Design</h3>
            <p class="service-card-desc">
              Comprehensive diagnostic assessments of corporate campuses, factories, and retail chains to eliminate single-use plastics, audit material leakage, and establish closed-loop segregation.
            </p>
            <ul class="service-bullets">
              <li><i class="bi bi-check-circle-fill"></i> Campus &amp; factory waste stream mapping</li>
              <li><i class="bi bi-check-circle-fill"></i> Zero-waste roadmap &amp; employee sensitization</li>
              <li><i class="bi bi-check-circle-fill"></i> Source-segregation infrastructure setup</li>
            </ul>
            <a href="consulting.php" class="service-cta-link">
              Consulting Details <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 2: Patented HRP Supply & Corporate Gifting -->
        <div class="col-md-6">
          <div class="service-card">
            <div class="service-icon-box">
              <i class="bi bi-bag-check"></i>
            </div>
            <h3 class="service-card-title">Patented HRP Supply &amp; Upcycled Gifting</h3>
            <p class="service-card-desc">
              B2B material supply of patented Handmade Recycled Plastic (HRP) alongside custom ethical corporate merchandise—such as conference bags, laptop sleeves, clutches, and stationery.
            </p>
            <ul class="service-bullets">
              <li><i class="bi bi-check-circle-fill"></i> Bespoke colorways, embossed branding &amp; tags</li>
              <li><i class="bi bi-check-circle-fill"></i> Each item diverts 50+ discarded plastic bags</li>
              <li><i class="bi bi-check-circle-fill"></i> Certified Fair Trade artisan manufacturing</li>
            </ul>
            <a href="wholesale.php" class="service-cta-link">
              View Wholesale &amp; Gifting <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 3: Capacity Building & Artisan Training -->
        <div class="col-md-6">
          <div class="service-card">
            <div class="service-icon-box">
              <i class="bi bi-people"></i>
            </div>
            <h3 class="service-card-title">Artisan Capacity Building &amp; Training</h3>
            <p class="service-card-desc">
              Structured vocational skill development programs designed for CSR partners, municipal bodies, and humanitarian agencies seeking to empower informal waste pickers and marginalized women.
            </p>
            <ul class="service-bullets">
              <li><i class="bi bi-check-circle-fill"></i> 6-12 month master stitching &amp; weaving modules</li>
              <li><i class="bi bi-check-circle-fill"></i> Fair Trade labor rights &amp; financial literacy</li>
              <li><i class="bi bi-check-circle-fill"></i> Micro-enterprise incubation (e.g. Akseer brand)</li>
            </ul>
            <a href="capacity-building.php" class="service-cta-link">
              Explore Training Programs <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Service 4: EPR & ESG Compliance Advisory -->
        <div class="col-md-6">
          <div class="service-card">
            <div class="service-icon-box">
              <i class="bi bi-shield-check"></i>
            </div>
            <h3 class="service-card-title">Extended Producer Responsibility (EPR) &amp; ESG</h3>
            <p class="service-card-desc">
              End-to-end advisory assisting FMCG and manufacturing brands in achieving statutory EPR compliance while guaranteeing that plastic collection directly funds grassroots collectors' welfare.
            </p>
            <ul class="service-bullets">
              <li><i class="bi bi-check-circle-fill"></i> Verifiable material traceability &amp; audit reports</li>
              <li><i class="bi bi-check-circle-fill"></i> Social impact documentation for CSR disclosures</li>
              <li><i class="bi bi-check-circle-fill"></i> Ethical waste picker integration &amp; living wages</li>
            </ul>
            <a href="advocacy-and-lobbying.php" class="service-cta-link">
              EPR Advisory Overview <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Services Callout Banner -->
      <div class="text-center mt-5 pt-2">
        <a href="contact-us.php" class="btn-primary-forest">
          Request a Custom Service Consultation
          <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================
       4. IMPACT
       ======================================================== -->
  <section class="impact-main-section" id="impact">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="approach-tag">
          MEASURABLE CHANGE
        </div>
        <h2 class="font-serif mb-3" style="font-size: clamp(2rem, 3.2vw, 2.6rem);">
          Our Impact: 25+ Years of <span class="highlight-underline">Proven Change<svg class="brush-stroke" viewBox="0 0 170 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 45 2, 125 2, 168 6 C 125 9, 45 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 650px; font-size: 15px;">
          Verifiable ecological diversion and grassroots socioeconomic advancement driven by patent-backed technologies and ethical trade principles.
        </p>
      </div>

      <div class="row g-4">
        <!-- Impact 1 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-calendar3"></i>
            </div>
            <div class="impact-big-num">1997</div>
            <div class="impact-card-label">Founded in New Delhi</div>
            <p class="impact-card-subtext">Over a quarter-century of pioneering circular material innovation and grassroots policy advocacy in India.</p>
          </div>
        </div>

        <!-- Impact 2 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-trash3"></i>
            </div>
            <div class="impact-big-num">500+ Tons</div>
            <div class="impact-card-label">Plastic Diverted</div>
            <p class="impact-card-subtext">Single-use polythene bags and industrial vinyl prevented from entering urban landfills and waterways.</p>
          </div>
        </div>

        <!-- Impact 3 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-shop"></i>
            </div>
            <div class="impact-big-num">1,000+</div>
            <div class="impact-card-label">Global Retail Partners</div>
            <p class="impact-card-subtext">Certified Fair Trade upcycled goods sold nationwide in the US via Whole Foods Market &amp; Europe.</p>
          </div>
        </div>

        <!-- Impact 4 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-person-hearts"></i>
            </div>
            <div class="impact-big-num">15+ Yrs</div>
            <div class="impact-card-label">Recyclers Dignified</div>
            <p class="impact-card-subtext">Empowering informal waste collectors into respected master artisans with living wages and healthcare.</p>
          </div>
        </div>

        <!-- Impact 5 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-award"></i>
            </div>
            <div class="impact-big-num">Top 50</div>
            <div class="impact-card-label">COVID Responders</div>
            <p class="impact-card-subtext">Project Sahyog was ranked in India's top 50 emergency last-mile community kitchen and relief operations.</p>
          </div>
        </div>

        <!-- Impact 6 -->
        <div class="col-md-4 col-sm-6">
          <div class="impact-grid-card">
            <div class="impact-icon-round">
              <i class="bi bi-patch-check"></i>
            </div>
            <div class="impact-big-num">100%</div>
            <div class="impact-card-label">Zero Toxic Dyes</div>
            <p class="impact-card-subtext">Eco-safe washing and thermo-compression processes with zero chemical bleaching and safe artisan workshops.</p>
          </div>
        </div>
      </div>

      <!-- Impact Quote / Triple Bottom Line Banner -->
      <div class="impact-quote-box">
        <img src="assets/images/dark-leaves.svg" alt="Leaves" class="impact-quote-leaves" aria-hidden="true">
        <div class="row align-items-center position-relative" style="z-index: 2;">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="section-tag text-white-50">
              OUR BELIEF IN ACTION
            </div>
            <h3 class="font-serif text-white mb-3" style="font-size: clamp(1.8rem, 2.5vw, 2.3rem); line-height: 1.3;">
              When waste becomes a resource, communities become stronger.
            </h3>
            <p class="text-white-50 mb-0" style="font-size: 15px; line-height: 1.65; max-width: 620px;">
              Every bag purchased and every ton of waste upcycled directly finances dignified livelihoods for Delhi's waste pickers and UNHCR refugee artisans.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="about-us.php" class="btn btn-light rounded-pill px-4 py-2 fw-semibold" style="color: var(--primary-forest);">
              Read Our Full Story &rarr;
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       5. PARTNER LOGO
       ======================================================== -->
  <section class="partners-section" id="partners">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="approach-tag">
          GLOBAL COLLABORATION
        </div>
        <h2 class="font-serif mb-2" style="font-size: clamp(1.9rem, 3vw, 2.4rem);">
          Partners, Retailers &amp; <span class="highlight-underline">Global Supporters<svg class="brush-stroke" viewBox="0 0 170 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 45 2, 125 2, 168 6 C 125 9, 45 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 620px; font-size: 14.5px;">
          Proudly collaborating with international development bodies, ethical retail pioneers, and conscious institutions worldwide.
        </p>
      </div>

      <div class="row g-3 g-md-4 justify-content-center">
        <!-- Partner 1: Whole Foods Market -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-cart4"></i>
            </div>
            <div class="partner-name">Whole Foods Market</div>
            <div class="partner-type">US Distribution Partner</div>
          </div>
        </div>

        <!-- Partner 2: UNHCR -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-globe-americas"></i>
            </div>
            <div class="partner-name">UNHCR</div>
            <div class="partner-type">Refugee Livelihoods</div>
          </div>
        </div>

        <!-- Partner 3: WFTO -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-patch-check"></i>
            </div>
            <div class="partner-name">WFTO Member</div>
            <div class="partner-type">World Fair Trade Org</div>
          </div>
        </div>

        <!-- Partner 4: Fair Trade Forum India -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-flower1"></i>
            </div>
            <div class="partner-name">Fair Trade Forum</div>
            <div class="partner-type">FTF India Network</div>
          </div>
        </div>

        <!-- Partner 5: Lifaffa -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-handbag"></i>
            </div>
            <div class="partner-name">Lifaffa</div>
            <div class="partner-type">Retail &amp; Circular Brand</div>
          </div>
        </div>

        <!-- Partner 6: 1000+ Global Retailers -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="partner-logo-card">
            <div class="partner-badge-icon">
              <i class="bi bi-shop-window"></i>
            </div>
            <div class="partner-name">1,000+ Retailers</div>
            <div class="partner-type">US, UK &amp; Europe Stores</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       6. TESTIMONIAL
       ======================================================== -->
  <section class="testimonials-section" id="testimonials">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <div class="approach-tag">
          OUR TESTIMONIALS
        </div>
        <h2 class="font-serif mb-2" style="font-size: clamp(2rem, 3.2vw, 2.5rem);">
          Voices of Impact &amp; <span class="highlight-underline">Global Trust<svg class="brush-stroke" viewBox="0 0 130 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 35 2, 95 2, 128 6 C 95 9, 35 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 620px; font-size: 14.5px;">
          What international retail leaders, environmental councils, and social development networks say about our work.
        </p>
      </div>

      <div class="row g-4">
        <!-- Testimonial 1 -->
        <div class="col-lg-4">
          <div class="testimonial-card">
            <div>
              <div class="testimonial-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="testimonial-quote-icon">&ldquo;</div>
              <p class="testimonial-text">
                &ldquo;I have known the team at Conserve India since 2006 and have the utmost respect for their creativity and dedication to solving both environmental and social problems for society. Together, we have been able to sell their products nationwide in the US through corporate partners including Whole Foods Market and to over 1,000 independent retailers.&rdquo;
              </p>
            </div>
            <div class="testimonial-author-wrap">
              <div class="testimonial-author-avatar">WF</div>
              <div>
                <div class="testimonial-author-name">US Corporate Partner</div>
                <div class="testimonial-author-role">Whole Foods Market Distribution</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="col-lg-4">
          <div class="testimonial-card">
            <div>
              <div class="testimonial-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="testimonial-quote-icon">&ldquo;</div>
              <p class="testimonial-text">
                &ldquo;Conserve is at the forefront of bringing positive change in India to tackle the problem of plastic waste. They are doing an excellent job bridging grassroot collectors with global markets through patented material science and transparent fair wages.&rdquo;
              </p>
            </div>
            <div class="testimonial-author-wrap">
              <div class="testimonial-author-avatar">EC</div>
              <div>
                <div class="testimonial-author-name">Environmental Conservation Council</div>
                <div class="testimonial-author-role">Sustainable Trade Partner</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-lg-4">
          <div class="testimonial-card">
            <div>
              <div class="testimonial-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="testimonial-quote-icon">&ldquo;</div>
              <p class="testimonial-text">
                &ldquo;Conserve India has made a significant difference in the lives of marginalized waste pickers and refugee women as well as in preserving our environment. We wholeheartedly support them in their ongoing circular economy and relief endeavours!&rdquo;
              </p>
            </div>
            <div class="testimonial-author-wrap">
              <div class="testimonial-author-avatar">CL</div>
              <div>
                <div class="testimonial-author-name">Community Leadership Alliance</div>
                <div class="testimonial-author-role">Social Development Advocate</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       7. INSTA VIEW (HOME PAGE)
       ======================================================== -->
  <section class="insta-section" id="instagram">
    <div class="container px-lg-4">
      <div class="insta-header-wrap">
        <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-handle-badge">
          <i class="bi bi-instagram fs-5"></i>
          <span>@conserveindia &middot; Follow Us on Instagram</span>
        </a>
        <div class="approach-tag">
          INSTA VIEW
        </div>
        <h2 class="font-serif mb-2" style="font-size: clamp(2rem, 3.2vw, 2.5rem);">
          Life at Conserve India on <span class="highlight-underline">Instagram<svg class="brush-stroke" viewBox="0 0 130 10" fill="none" preserveAspectRatio="none"><path d="M2 7 C 35 2, 95 2, 128 6 C 95 9, 35 8.5, 2 7 Z" fill="#78a68b" opacity="0.9"/></svg></span>
        </h2>
        <p class="text-muted mx-auto" style="max-width: 600px; font-size: 14.5px;">
          Behind the scenes from our Delhi artisan ateliers, patented plastic upcycling labs, and grassroots changemakers.
        </p>
      </div>

      <!-- Instagram Grid -->
      <div class="row g-3 g-md-4">
        <!-- Post 1 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/upcycling-innovation.jpg" alt="Upcycled Handmade Recycled Plastic bags" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 842</span>
                  <span><i class="bi bi-chat-fill"></i> 56</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">Turning discarded plastic bags into patented HRP fashion clutches. 🌿</p>
                <div class="insta-tag">#PatentedHRP #ZeroWaste</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 2 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/hero-artisan.jpg" alt="Artisan weaving recycled materials on loom" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 1.1k</span>
                  <span><i class="bi bi-chat-fill"></i> 89</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">Master artisan weaving on the loom. Preserving heritage craft sustainably. 🧵</p>
                <div class="insta-tag">#FairTradeArtisans</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 3 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/artisan-livelihoods.jpg" alt="Women artisans in workshop" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 935</span>
                  <span><i class="bi bi-chat-fill"></i> 64</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">Empowering waste pickers &amp; refugee women with dignified skills and wages. 💼</p>
                <div class="insta-tag">#WomenEmpowerment</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 4 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/plastic-bottles-sorting.jpg" alt="Sorting and collecting plastic waste" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 754</span>
                  <span><i class="bi bi-chat-fill"></i> 43</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">From landfill waste to clean resources: sorting and cleaning with care. 🔄</p>
                <div class="insta-tag">#CircularEconomy</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 5 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/product-apron.jpg" alt="Handcrafted upcycled aprons and kitchen textiles" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 689</span>
                  <span><i class="bi bi-chat-fill"></i> 38</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">Handcrafted kitchen textiles made from rescued factory cotton scraps. 🍳</p>
                <div class="insta-tag">#UpcycledCotton</div>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 6 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="insta-card">
            <img src="assets/images/circular-communities.jpg" alt="Project Sahyog community relief program" class="insta-card-img">
            <div class="insta-card-overlay">
              <div class="insta-top-row">
                <i class="bi bi-instagram insta-icon-badge"></i>
                <div class="insta-metrics">
                  <span><i class="bi bi-heart-fill text-danger"></i> 1.2k</span>
                  <span><i class="bi bi-chat-fill"></i> 112</span>
                </div>
              </div>
              <div>
                <p class="insta-caption">Project Sahyog: Providing food relief, sanitation, and community solidarity. 🤝</p>
                <div class="insta-tag">#ProjectSahyog</div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Instagram Bottom Link Button -->
      <div class="text-center mt-5">
        <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener" class="btn-outline-forest">
          <i class="bi bi-instagram me-2 text-danger"></i> View More on Instagram @conserveindia &nearr;
        </a>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
