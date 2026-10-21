<?php
$page_title = "Conserve India — Circular Economy, Patented Materials & Artisan Livelihoods";
$page_description = "Since 1997, Conserve India has pioneered patented plastic upcycling (HRP), verified circular economy consulting, and dignified Fair Trade artisan livelihoods.";
$current_page = "home";
require_once __DIR__ . '/includes/header.php';
?>

  <!-- ========================================================
       SECTION 1: HERO SLIDER
       Reference: Patagonia Activism (patagonia.com/activism)
       Full-width editorial image slider, max 3 slides
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
          <img src="assets/images/hero-artisan.jpg" alt="Conserve India artisan hand-weaving recycled plastic textile" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="ed-hero-tag">PEOPLE &middot; PLANET &middot; POSSIBILITY</span>
                <h1 class="ed-hero-headline">Turning Landfill Plastic into Opportunity</h1>
                <p class="ed-hero-lead">
                  For over 25 years, Conserve India has pioneered patented material upcycling and dignified artisan livelihoods, diverting thousands of tons of plastic waste across India.
                </p>
                <div>
                  <a href="#our-work" class="ed-btn-primary">
                    Explore Our Work
                    <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
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
          <img src="assets/images/artisan-livelihoods.jpg" alt="Conserve India craftswomen stitching in Fair Trade workshop" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="ed-hero-tag">ARTISAN LIVELIHOODS &amp; DIGNITY</span>
                <h2 class="ed-hero-headline">Empowering Hands. Transforming Futures.</h2>
                <p class="ed-hero-lead">
                  Partnering with Delhi's grassroots recyclers and UNHCR refugee women, providing certified Fair Trade training, dignified living wages, and long-term financial self-reliance.
                </p>
                <div>
                  <a href="capacity-building.php" class="ed-btn-primary">
                    Artisan Programs
                    <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
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
          <img src="assets/images/upcycling-innovation.jpg" alt="Patented Handmade Recycled Plastic bags and accessories" class="ed-hero-bg">
          <div class="ed-hero-scrim"></div>
          <div class="container px-lg-4 ed-hero-content-wrap">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="ed-hero-tag">CIRCULAR INNOVATION &amp; SUSTAINABLE TRADE</span>
                <h2 class="ed-hero-headline">Patented Innovation for a Circular Economy</h2>
                <p class="ed-hero-lead">
                  Transforming single-use polythene bags and vinyl into high-fashion materials distributed nationwide in the US via Whole Foods Market and over 1,000 global retailers.
                </p>
                <div>
                  <a href="contact-us.php" class="ed-btn-primary">
                    Partner With Us
                    <svg width="15" height="15" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
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
       3–4 featured project cards in clean, consistent grid
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
          <a href="capacity-building.php" class="ed-link-arrow">
            View All Projects &rarr;
          </a>
        </div>
      </div>

      <div class="row g-4">
        <!-- Project 1: Patented HRP Material Science -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="assets/images/upcycling-innovation.jpg" alt="Handmade Recycled Plastic upcycled bags" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">New Delhi &middot; Patented HRP</span>
                <h3 class="ed-work-title">Patented HRP Material Innovation</h3>
                <p class="ed-work-desc">
                  Converting post-consumer plastic bags and vinyl scrap into durable, leather-like materials without chemical dyes.
                </p>
              </div>
              <a href="sustainable-research-development.php" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 2: Artisan Capacity Building -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="assets/images/artisan-livelihoods.jpg" alt="Artisan women weaving and stitching in workshop" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">UNHCR Partner &middot; 25+ Artisans</span>
                <h3 class="ed-work-title">Artisan Capacity &amp; Refugee Livelihoods</h3>
                <p class="ed-work-desc">
                  Training Delhi's informal recyclers and Afghani refugee women in stitching, Fair Trade standards, and micro-enterprises.
                </p>
              </div>
              <a href="capacity-building.php" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 3: Project Sahyog Community Relief -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="assets/images/circular-communities.jpg" alt="Community cleanup and relief distribution" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">National Relief &middot; Top 50 India</span>
                <h3 class="ed-work-title">Project Sahyog Community Relief</h3>
                <p class="ed-work-desc">
                  Mobilized emergency community kitchens, nutrition, and sanitary kits for vulnerable migrant waste-picking families.
                </p>
              </div>
              <a href="covid-relief-project-sahyog.php" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Project 4: Sustainable Trade & Advocacy -->
        <div class="col-md-6 col-lg-3">
          <div class="ed-work-card">
            <div class="ed-work-img-box">
              <img src="assets/images/belief-sapling.jpg" alt="Sustainable Trade and Policy Advocacy" class="ed-work-img" loading="lazy">
            </div>
            <div class="ed-work-body">
              <div>
                <span class="ed-work-meta">Global B2B &middot; 1,000+ Retailers</span>
                <h3 class="ed-work-title">Sustainable Trade &amp; EPR Advocacy</h3>
                <p class="ed-work-desc">
                  Advocating Extended Producer Responsibility (EPR) while supplying certified Fair Trade goods to international partners.
                </p>
              </div>
              <a href="sustainable-trade.php" class="ed-work-card-link">
                Explore Project &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 3: SERVICES
       Reference: Charity:Water (charitywater.org)
       Four text-led service cards with clear typography
       ======================================================== -->
  <section class="ed-services-section" id="services">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">SERVICES &amp; ADVISORY</span>
        <h2 class="ed-section-title">Circular Strategy &amp; Partnership Solutions</h2>
        <p class="ed-section-desc mx-auto">
          Collaborating with corporations, institutional buyers, and development agencies to engineer circular value, CSR alignment, and measurable ESG outcomes.
        </p>
      </div>

      <div class="row g-4">
        <!-- Service 1: Circular Economy Research & Strategy -->
        <div class="col-md-6">
          <div class="ed-service-card">
            <div>
              <span class="ed-service-index">SERVICE 01</span>
              <h3 class="ed-service-title">Circular Economy Research &amp; Strategy</h3>
              <p class="ed-service-desc">
                Diagnostic corporate waste stream audits, material lifecycle mapping, and tailored operational roadmaps to eliminate single-use plastics and establish closed-loop recycling.
              </p>
              <ul class="ed-service-deliverables">
                <li><i class="bi bi-check2"></i> Comprehensive campus and factory waste diagnostics</li>
                <li><i class="bi bi-check2"></i> Single-use plastic phaseout and segregation workflows</li>
                <li><i class="bi bi-check2"></i> Verifiable material recovery audits for ESG reporting</li>
              </ul>
            </div>
            <div>
              <a href="consulting.php" class="ed-btn-outline">
                Explore Advisory &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Service 2: Sustainable Production & Value-Chain Development -->
        <div class="col-md-6">
          <div class="ed-service-card">
            <div>
              <span class="ed-service-index">SERVICE 02</span>
              <h3 class="ed-service-title">Sustainable Production &amp; Value-Chain Development</h3>
              <p class="ed-service-desc">
                B2B supply of patented Handmade Recycled Plastic (HRP) sheets, bespoke upcycled lifestyle goods, and certified Fair Trade merchandise for corporate events and retail collections.
              </p>
              <ul class="ed-service-deliverables">
                <li><i class="bi bi-check2"></i> Patented HRP material development for B2B applications</li>
                <li><i class="bi bi-check2"></i> Custom-branded corporate gifting and conference accessories</li>
                <li><i class="bi bi-check2"></i> Certified Fair Trade production adhering to ethical living wages</li>
              </ul>
            </div>
            <div>
              <a href="wholesale.php" class="ed-btn-outline">
                Explore B2B Wholesale &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Service 3: Capacity Building & Artisan Livelihoods -->
        <div class="col-md-6">
          <div class="ed-service-card">
            <div>
              <span class="ed-service-index">SERVICE 03</span>
              <h3 class="ed-service-title">Capacity Building &amp; Artisan Livelihoods</h3>
              <p class="ed-service-desc">
                Field-tested vocational curricula designed for CSR funders, NGOs, and municipal councils seeking to transition informal ragpickers and refugee women into skilled craft livelihoods.
              </p>
              <ul class="ed-service-deliverables">
                <li><i class="bi bi-check2"></i> 6–12 month master stitching, weaving, and sorting modules</li>
                <li><i class="bi bi-check2"></i> Fair Trade labor rights, financial literacy, and health insurance</li>
                <li><i class="bi bi-check2"></i> Proven micro-enterprise incubation (e.g. Akseer brand)</li>
              </ul>
            </div>
            <div>
              <a href="capacity-building.php" class="ed-btn-outline">
                Explore Training Programs &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- Service 4: Education, Awareness & Stakeholder Engagement -->
        <div class="col-md-6">
          <div class="ed-service-card">
            <div>
              <span class="ed-service-index">SERVICE 04</span>
              <h3 class="ed-service-title">Education, Awareness &amp; Stakeholder Engagement</h3>
              <p class="ed-service-desc">
                Hands-on corporate sensitization workshops, academic partnerships, and Extended Producer Responsibility (EPR) advisory aligning brand commitments with grassroots reality.
              </p>
              <ul class="ed-service-deliverables">
                <li><i class="bi bi-check2"></i> Corporate employee sustainability workshops and field visits</li>
                <li><i class="bi bi-check2"></i> Ethical Extended Producer Responsibility (EPR) compliance models</li>
                <li><i class="bi bi-check2"></i> Community environmental campaigns and educational sessions</li>
              </ul>
            </div>
            <div>
              <a href="contact-us.php" class="ed-btn-outline">
                Discuss a Partnership &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 4: IMPACT
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
       SECTION 5: PARTNER LOGOS
       Reference: Kiva Partner With Us (kiva.org/about/partner-with-us)
       Clean partner-logo strip on light neutral background
       ======================================================== -->
  <section class="ed-partners-section" id="partners">
    <div class="container px-lg-4">
      <div class="text-center mb-5">
        <span class="ed-section-tag">GLOBAL PARTNERS</span>
        <h2 class="ed-section-title">Trusted by International Organizations &amp; Retailers</h2>
        <p class="ed-section-desc mx-auto">
          Collaborating across ethical supply chains, humanitarian relief, and responsible retail distribution worldwide.
        </p>
      </div>

      <div class="row g-3 g-md-4 justify-content-center">
        <!-- Partner 1: Whole Foods Market -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-cart4"></i>
            </div>
            <div class="ed-partner-name">Whole Foods Market</div>
            <div class="ed-partner-sub">US Nationwide Distribution</div>
          </div>
        </div>

        <!-- Partner 2: UNHCR -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-globe-americas"></i>
            </div>
            <div class="ed-partner-name">UNHCR</div>
            <div class="ed-partner-sub">Refugee Livelihoods Partner</div>
          </div>
        </div>

        <!-- Partner 3: WFTO -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-patch-check"></i>
            </div>
            <div class="ed-partner-name">WFTO Member</div>
            <div class="ed-partner-sub">World Fair Trade Org</div>
          </div>
        </div>

        <!-- Partner 4: Fair Trade Forum India -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-flower1"></i>
            </div>
            <div class="ed-partner-name">Fair Trade Forum</div>
            <div class="ed-partner-sub">FTF-I National Network</div>
          </div>
        </div>

        <!-- Partner 5: Lifaffa -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-handbag"></i>
            </div>
            <div class="ed-partner-name">Lifaffa</div>
            <div class="ed-partner-sub">Sustainable Retail Brand</div>
          </div>
        </div>

        <!-- Partner 6: 1,000+ Global Retailers -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card">
            <div class="ed-partner-icon">
              <i class="bi bi-shop-window"></i>
            </div>
            <div class="ed-partner-name">1,000+ Retailers</div>
            <div class="ed-partner-sub">US, UK &amp; Europe Boutiques</div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4 pt-2">
        <a href="contact-us.php" class="ed-link-arrow">
          Discuss a Corporate or Institutional Partnership &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 6: TESTIMONIALS
       Reference: Acumen (acumen.co.in)
       Modern, clean, lightweight cards with generous whitespace
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
              <div class="ed-testimonial-name">US Distribution Partner</div>
              <div class="ed-testimonial-role">Corporate Wholesale &amp; Retail Network</div>
              <div class="ed-testimonial-badge">
                <i class="bi bi-check-circle-fill"></i> Whole Foods Market Distribution
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
              <div class="ed-testimonial-name">Environmental Conservation Council</div>
              <div class="ed-testimonial-role">Sustainable Trade &amp; Policy Partner</div>
              <div class="ed-testimonial-badge">
                <i class="bi bi-check-circle-fill"></i> Verified Policy Partner
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
              <div class="ed-testimonial-name">Community Leadership Alliance</div>
              <div class="ed-testimonial-role">Social Development &amp; Artisan Network</div>
              <div class="ed-testimonial-badge">
                <i class="bi bi-check-circle-fill"></i> Verified Community Partner
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 7: INSTAGRAM FEED
       Reference: Patagonia Stories (patagonia.com/stories)
       Clean image-led grid of 6 recent workshop & field posts
       ======================================================== -->
  <section class="ed-insta-section" id="instagram">
    <div class="container px-lg-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4">
        <div>
          <span class="ed-section-tag">DISPATCHES &amp; FIELD STORIES</span>
          <h2 class="ed-section-title">Field Notes &amp; Workshop Dispatches</h2>
          <p class="ed-section-desc">
            Authentic moments from our Delhi artisan ateliers, material laboratories, and community circular programs.
          </p>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-link-arrow">
            Follow us on Instagram &rarr;
          </a>
        </div>
      </div>

      <!-- 6-post Grid (Aspect Ratio 1:1) -->
      <div class="row g-3 g-md-4">
        <!-- Post 1 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Patented HRP Upcycling">
            <img src="assets/images/upcycling-innovation.jpg" alt="Patented Handmade Recycled Plastic material testing in Delhi atelier" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Turning discarded plastic bags into patented HRP fashion textiles.</p>
                <span class="ed-insta-tag">#PatentedHRP</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 2 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Artisan Loom Weaving">
            <img src="assets/images/hero-artisan.jpg" alt="Master artisan weaving recycled plastic on loom" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Master artisan weaving on the loom. Preserving heritage craft.</p>
                <span class="ed-insta-tag">#FairTradeArtisans</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 3 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Women Empowerment">
            <img src="assets/images/artisan-livelihoods.jpg" alt="Artisan women stitching in Delhi workshop" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Empowering waste pickers and refugee women with dignified income.</p>
                <span class="ed-insta-tag">#WomenEmpowerment</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 4 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Plastic Recovery">
            <img src="assets/images/plastic-bottles-sorting.jpg" alt="Sorting post-consumer plastic waste in community facility" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Recovering single-use plastics from urban landfills for circular reuse.</p>
                <span class="ed-insta-tag">#CircularEconomy</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 5 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Zero Waste Textiles">
            <img src="assets/images/product-apron.jpg" alt="Upcycled organic cotton aprons and textiles" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Zero-waste kitchen textiles made from rescued factory cotton remnants.</p>
                <span class="ed-insta-tag">#ZeroWaste</span>
              </div>
            </div>
          </a>
        </div>

        <!-- Post 6 -->
        <div class="col-6 col-md-4 col-lg-2">
          <a href="https://www.instagram.com/conserveindia/" target="_blank" rel="noopener noreferrer" class="ed-insta-card" aria-label="View on Instagram: Community Relief">
            <img src="assets/images/circular-communities.jpg" alt="Project Sahyog community relief program" class="ed-insta-img" loading="lazy">
            <div class="ed-insta-overlay">
              <i class="bi bi-instagram ed-insta-icon"></i>
              <div>
                <p class="ed-insta-caption">Project Sahyog: Providing food relief, sanitation, and community care.</p>
                <span class="ed-insta-tag">#ProjectSahyog</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
