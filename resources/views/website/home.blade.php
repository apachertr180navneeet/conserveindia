@extends('website.layouts.app')

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
        @foreach($sliders as $idx => $slide)
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $idx }}" class="{{ $idx === 0 ? 'active' : '' }}" aria-current="{{ $idx === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $idx + 1 }}"></button>
        @endforeach
      </div>

      <div class="carousel-inner">
        @foreach($sliders as $idx => $slide)
          <div class="carousel-item {{ $idx === 0 ? 'active' : '' }}">
            <img src="{{ asset('website/' . $slide->image) }}" alt="{{ $slide->title }}" class="ed-hero-bg">
            <div class="ed-hero-scrim"></div>
            <div class="container px-lg-4 ed-hero-content-wrap">
              <div class="row w-100">
                <div class="col-12 col-xl-11">
                  @if($slide->tag)
                    <span class="ed-hero-tag">{{ $slide->tag }}</span>
                  @endif
                  <h1 class="ed-hero-headline">{{ $slide->title }}</h1>
                  @if($slide->subtitle)
                    <p class="ed-hero-lead">{{ $slide->subtitle }}</p>
                  @endif
                  <div class="d-flex flex-wrap gap-3">
                    @if($slide->button_text)
                      <a href="{{ Str::startsWith($slide->button_link, ['http', '#']) ? $slide->button_link : url($slide->button_link) }}" class="ed-hero-cta">
                        {{ $slide->button_text }}
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                      </a>
                    @endif
                    @if($slide->secondary_button_text)
                      <a href="{{ Str::startsWith($slide->secondary_button_link, ['http', '#']) ? $slide->secondary_button_link : url($slide->secondary_button_link) }}" class="ed-hero-cta" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.4);">
                        {{ $slide->secondary_button_text }}
                      </a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
        @foreach($initiatives as $item)
          <div class="col-md-6 col-lg-3">
            <div class="ed-work-card h-100 d-flex flex-column">
              <div class="ed-work-img-box">
                <img src="{{ asset('website/' . $item->image) }}" alt="{{ $item->title }}" class="ed-work-img" loading="lazy">
              </div>
              <div class="ed-work-body d-flex flex-column flex-grow-1">
                <div>
                  @if($item->meta)
                    <span class="ed-work-meta">{{ $item->meta }}</span>
                  @endif
                  <h3 class="ed-work-title">{{ $item->title }}</h3>
                  <p class="ed-work-desc">
                    {{ $item->short_description }}
                  </p>
                </div>
                <a href="{{ Str::startsWith($item->link, ['http', '#']) ? $item->link : url($item->link) }}" class="ed-work-card-link mt-auto">
                  Explore Project &rarr;
                </a>
              </div>
            </div>
          </div>
        @endforeach
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
              <img src="{{ asset('website/assets/images/partners/whole-foods.svg') }}" alt="Whole Foods Market" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 2: UNHCR -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="UNHCR — Refugee Livelihoods Partner">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('website/assets/images/partners/unhcr.svg') }}" alt="UNHCR The UN Refugee Agency" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 3: WFTO -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="WFTO Member — World Fair Trade Organization">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('website/assets/images/partners/wfto.svg') }}" alt="World Fair Trade Organization Member" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 4: Fair Trade Forum India -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="Fair Trade Forum — FTF-I National Network">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('website/assets/images/partners/fair-trade-forum.svg') }}" alt="Fair Trade Forum India" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 5: Lifaffa -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="Lifaffa — Sustainable Retail Brand">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('website/assets/images/partners/lifaffa.svg') }}" alt="Lifaffa by Conserve" class="ed-partner-logo" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Partner 6: 1,000+ Global Retailers -->
        <div class="col-6 col-md-4 col-lg-2">
          <div class="ed-partner-card" title="1,000+ Retailers — US, UK & Europe Boutiques">
            <div class="ed-partner-logo-box">
              <img src="{{ asset('website/assets/images/partners/global-retailers.svg') }}" alt="1,000+ Retailers Network" class="ed-partner-logo" loading="lazy">
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
        @foreach($services as $item)
          <div class="col-12 col-sm-6 col-lg-3">
            <a href="{{ Str::startsWith($item->link, ['http', '#']) ? $item->link : url($item->link) }}" class="ed-action-card" aria-label="Explore {{ $item->title }}">
              <div class="ed-action-img-box">
                <img src="{{ asset('website/' . $item->image) }}" alt="{{ $item->title }}" class="ed-action-img" loading="lazy">
                <div class="ed-action-scrim"></div>
                <div class="ed-action-bar">
                  <div class="ed-action-icon-circle">
                    <i class="bi bi-arrow-up-right-circle-fill"></i>
                  </div>
                  <span class="ed-action-label">{{ $item->title }}</span>
                  <i class="bi bi-arrow-right ed-action-chevron"></i>
                </div>
              </div>
            </a>
          </div>
        @endforeach
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
        <div class="col-lg-10 col-xl-9 text-center">
          <div class="p-3 p-md-4 bg-white shadow-sm" style="border: 1px solid var(--border-light); border-radius: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
            <img src="{{ asset('website/' . ($settings['footprint_map_image'] ?? 'assets/images/india-map-footprint.jpg')) }}" alt="Conserve India Geographic Footprint & Field Locations" class="img-fluid rounded" style="max-height: 540px; width: auto; object-fit: contain;">
            <div class="mt-3 pt-3 border-top border-light-subtle text-muted small d-flex align-items-center justify-content-center gap-3 flex-wrap">
              <span><i class="bi bi-geo-alt-fill text-success me-1"></i> Grassroots Training & Collection Hubs</span>
              <span class="text-secondary">&bull;</span>
              <span><i class="bi bi-shield-check text-success me-1"></i> Fair Trade Innovation Centers</span>
              <span class="text-secondary">&bull;</span>
              <span><i class="bi bi-globe2 text-success me-1"></i> Global Export Outlets</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Regional Detail Cards -->
      <div class="row g-4">
        @foreach($regions as $item)
          <div class="col-md-6 col-lg-3">
            <div class="ed-work-card h-100 bg-white d-flex flex-column" style="border: 1px solid var(--border-light); border-radius: 12px; overflow: hidden; transition: transform 0.25s ease, box-shadow 0.25s ease;">
              @if($item->image)
                <div class="ed-work-img-box" style="aspect-ratio: 16 / 10; overflow: hidden; background-color: #f0eee8;">
                  <img src="{{ asset('website/' . $item->image) }}" alt="{{ $item->name }}" class="ed-work-img" loading="lazy">
                </div>
              @endif
              <div class="p-4 d-flex flex-column flex-grow-1">
                <div class="d-flex align-items-center gap-3 mb-3">
                  <div class="d-inline-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(28, 59, 45, 0.08); color: var(--primary-forest); font-size: 20px;">
                    <i class="bi {{ $item->icon ?? 'bi-geo-alt-fill' }}"></i>
                  </div>
                  <div>
                    <h3 class="h5 fw-bold mb-0" style="color: var(--primary-forest);">{{ $item->name }}</h3>
                    <span class="text-muted small">{{ $item->subtitle }}</span>
                  </div>
                </div>
                <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                  {{ $item->description }}
                </p>
                @if($item->badge)
                  <div class="pt-2 border-top border-light-subtle mt-auto">
                    <span class="badge bg-light text-success border border-success-subtle px-2 py-1 small">{{ $item->badge }}</span>
                  </div>
                @endif
              </div>
            </div>
          </div>
        @endforeach
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
        @foreach($testimonials as $item)
          <div class="col-lg-4">
            <div class="ed-testimonial-card h-100 d-flex flex-column justify-content-between">
              <p class="ed-testimonial-text">
                &ldquo;{{ $item->quote }}&rdquo;
              </p>
              <div class="ed-testimonial-author mt-3">
                <div class="ed-testimonial-author-info">
                  <div class="ed-testimonial-name">{{ $item->author }}</div>
                  <div class="ed-testimonial-role">{{ $item->designation }}</div>
                </div>
                @if($item->logo)
                  <div class="ed-testimonial-logo-box">
                    <img src="{{ asset('website/' . $item->logo) }}" alt="{{ $item->author }}" class="ed-testimonial-logo" loading="lazy">
                  </div>
                @endif
              </div>
            </div>
          </div>
        @endforeach
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

            @if(session('inquiry_success'))
              <div class="alert alert-success d-flex align-items-center gap-2 mb-4" role="alert">
                <i class="bi bi-check-circle-fill fs-5"></i>
                <div>
                  <strong>Inquiry Received!</strong><br>
                  {{ session('inquiry_success') }}
                </div>
              </div>
            @endif

            <form action="{{ route('inquiry.submit') }}" method="POST" id="homepageContactForm" class="ed-contact-form">
              @csrf
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

                <!-- Phone -->
                <div class="col-md-6">
                  <label for="contactPhone" class="form-label">Phone / WhatsApp</label>
                  <input type="text" class="form-control" id="contactPhone" name="phone" placeholder="+91 98765 43210">
                </div>

                <!-- Subject / Nature of Inquiry -->
                <div class="col-md-6">
                  <label for="contactSubject" class="form-label">Subject / Inquiry Area *</label>
                  <select class="form-select" id="contactSubject" name="subject" required>
                    <option value="" selected disabled>Select an inquiry area</option>
                    <option value="B2B Wholesale & Retail Supply">B2B Wholesale &amp; Retail Supply</option>
                    <option value="Corporate Sustainable Gifting">Corporate Sustainable Gifting</option>
                    <option value="Circularity Audits & EPR Compliance">Circularity Audits &amp; EPR Compliance</option>
                    <option value="Artisan Livelihoods & CSR Project">Artisan Livelihoods &amp; CSR Project</option>
                    <option value="Academic & Material Science Research">Academic &amp; Material Science Research</option>
                    <option value="General Media & Partnerships">General Media &amp; Partnerships</option>
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
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
