@extends('website.layouts.app')

@section('title', 'Conserve India — Circular Economy, Patented Materials & Artisan Livelihoods')
@section('description', 'Since 1997, Conserve India has pioneered patented plastic upcycling (HRP), verified circular economy consulting, and dignified Fair Trade artisan livelihoods.')

@push('styles')
<style>
/* ========================================================
   Interactive India Map Presence Section
   Harmonized with Conserve India Design System
   ======================================================== */
.iw-section {
  --iw-primary: var(--primary-forest, #1c3b2d);
  --iw-primary-hover: var(--primary-forest-hover, #132a20);
  --iw-accent: #2e714f;
  --iw-text: var(--text-primary, #141716);
  --iw-muted: var(--text-muted, #5e6b64);
  --iw-border: var(--border-light, #e2ded5);
  width: 100%;
  padding: 85px 0;
  background: #fbfaf6;
  border-top: 1px solid var(--border-subtle, #eeece5);
  border-bottom: 1px solid var(--border-subtle, #eeece5);
  font-family: var(--font-body, 'Inter', sans-serif);
  box-sizing: border-box;
  overflow: hidden;
}
.iw-section *, .iw-section *::before, .iw-section *::after {
  box-sizing: border-box;
}
.iw-wrap {
  display: grid;
  grid-template-columns: .85fr 1.15fr;
  align-items: center;
  gap: 55px;
}
.iw-tag {
  display: inline-block;
  color: var(--sage-accent, #5e846f);
  font-family: var(--font-heading, 'Manrope', sans-serif);
  font-size: 11.5px;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 8px 16px;
  border: 1px solid var(--iw-border);
  border-radius: 30px;
  background: #fff;
  margin-bottom: 8px;
}
.iw-section h2 {
  margin: 18px 0 16px;
  color: var(--iw-text);
  font-family: var(--font-heading, 'Manrope', sans-serif);
  font-size: clamp(32px, 3.8vw, 48px);
  line-height: 1.15;
  font-weight: 750;
  letter-spacing: -0.02em;
}
.iw-section h2 span {
  color: var(--iw-primary);
}
.iw-desc {
  max-width: 460px;
  color: var(--iw-muted);
  font-size: 15px;
  line-height: 1.75;
  margin: 0;
}
.iw-stats {
  display: flex;
  gap: 48px;
  margin-top: 32px;
}
.iw-stat h3 {
  color: var(--iw-primary);
  font-family: var(--font-heading, 'Manrope', sans-serif);
  font-size: 34px;
  margin: 0 0 4px;
  font-weight: 750;
}
.iw-stat p {
  margin: 0;
  color: var(--iw-muted);
  font-size: 12.5px;
  letter-spacing: .3px;
}
.iw-hint {
  margin-top: 32px;
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--iw-muted);
  font-size: 12.5px;
  line-height: 1.6;
}
.iw-pulse {
  flex-shrink: 0;
  width: 9px;
  height: 9px;
  background: var(--iw-accent);
  border-radius: 50%;
  box-shadow: 0 0 0 5px rgba(46, 113, 79, 0.18);
}
.iw-mapbox {
  position: relative;
  min-width: 0;
}
.iw-mhead {
  text-align: right;
  margin-bottom: 12px;
}
.iw-mhead > span {
  display: block;
  color: var(--sage-accent, #5e846f);
  font-size: 10.5px;
  letter-spacing: 2.2px;
  font-weight: 700;
  text-transform: uppercase;
}
.iw-mhead h3 {
  margin: 6px 0 0;
  color: var(--iw-text);
  font-family: var(--font-heading, 'Manrope', sans-serif);
  font-size: 18px;
  font-weight: 650;
}
.iw-map {
  position: relative;
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  aspect-ratio: 0.986;
}
.iw-svg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  display: block;
  filter: drop-shadow(0 10px 18px rgba(28, 59, 45, .12));
}
.iw-st {
  fill: #e9eee9;
  stroke: #ffffff;
  stroke-width: 0.8;
  stroke-linejoin: round;
  transition: fill 0.25s ease;
}
.iw-on {
  fill: url(#iwGrad);
}
.iw-loc {
  position: absolute;
  z-index: 3;
  width: 24px;
  height: 24px;
  transform: translate(-50%, -50%);
}
.iw-loc:hover, .iw-loc.iw-open, .iw-loc:focus-within {
  z-index: 30;
}
.iw-dot {
  width: 24px;
  height: 24px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 3px solid #fff;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 0 0 2px #fff, 0 4px 12px rgba(28, 59, 45, .25);
  cursor: pointer;
  padding: 0;
  transition: transform .25s ease, box-shadow .25s ease;
}
.iw-dot span {
  width: 8px;
  height: 8px;
  display: block;
  background: #d94336;
  border-radius: 50%;
}
.iw-dot:focus-visible {
  outline: 2px solid #d94336;
  outline-offset: 3px;
}
.iw-delhi .iw-dot {
  box-shadow: 0 0 0 2px #fff, 0 0 0 6px rgba(46, 113, 79, .32), 0 4px 12px rgba(28, 59, 45, .3);
}
.iw-loc:hover .iw-dot, .iw-loc.iw-open .iw-dot, .iw-loc:focus-within .iw-dot {
  transform: scale(1.22);
}
.iw-tip {
  position: absolute;
  left: 34px;
  top: -28px;
  width: 235px;
  padding: 18px;
  border-radius: 12px;
  background: #fff;
  border: 1px solid var(--border-light, #e2ded5);
  box-shadow: 0 15px 35px rgba(28, 59, 45, .12);
  opacity: 0;
  visibility: hidden;
  pointer-events: none;
  transform: translateY(8px);
  transition: opacity .25s ease, transform .25s ease, visibility .25s ease;
  text-align: left;
}
.iw-left .iw-tip { left: auto; right: 34px; }
.iw-up .iw-tip { top: auto; bottom: -20px; }
.iw-loc:hover .iw-tip, .iw-loc.iw-open .iw-tip, .iw-loc:focus-within .iw-tip {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  transform: translateY(0);
}
.iw-lab {
  display: block;
  color: var(--sage-accent, #5e846f);
  font-size: 9.5px;
  font-weight: 700;
  letter-spacing: 1.8px;
  margin-bottom: 6px;
  text-transform: uppercase;
}
.iw-tip h4 {
  margin: 0 0 6px;
  color: var(--iw-primary);
  font-family: var(--font-heading, 'Manrope', sans-serif);
  font-size: 19px;
  font-weight: 750;
  line-height: 1.2;
}
.iw-tip p {
  margin: 0;
  color: var(--text-secondary, #4a544e);
  font-size: 12.5px;
  line-height: 1.6;
}
.iw-foot {
  display: flex;
  align-items: center;
  gap: 8px;
  border-top: 1px solid var(--border-subtle, #edf0f5);
  padding-top: 10px;
  margin-top: 12px;
  color: var(--iw-muted);
  font-size: 11.5px;
  line-height: 1.5;
}
.iw-foot i {
  width: 6px;
  height: 6px;
  flex-shrink: 0;
  background: var(--iw-primary);
  border-radius: 50%;
}
.iw-legend {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-top: 14px;
  color: var(--iw-muted);
  font-size: 11.5px;
}
.iw-legend i {
  width: 14px;
  height: 14px;
  border-radius: 3px;
  background: linear-gradient(135deg, #3b8460, #1c3b2d);
}
@media (max-width: 991px) {
  .iw-section { padding: 65px 0; }
  .iw-wrap { grid-template-columns: 1fr; gap: 40px; }
  .iw-content { max-width: 650px; margin: 0 auto; width: 100%; text-align: center; }
  .iw-desc { max-width: 100%; margin: 0 auto; }
  .iw-stats { justify-content: center; }
  .iw-hint { justify-content: center; }
  .iw-map { max-width: 520px; }
  .iw-mhead { text-align: center; }
}
@media (max-width: 576px) {
  .iw-section { padding: 50px 0; }
  .iw-section h2 { font-size: 30px; letter-spacing: -0.5px; }
  .iw-desc { font-size: 14px; }
  .iw-stats { gap: 32px; margin-top: 24px; }
  .iw-stat h3 { font-size: 28px; }
  .iw-mhead h3 { font-size: 16px; }
  .iw-loc, .iw-dot { width: 18px; height: 18px; }
  .iw-dot { border-width: 2px; }
  .iw-dot span { width: 6px; height: 6px; }
  .iw-tip { width: 190px; padding: 14px; left: 24px; top: -16px; }
  .iw-left .iw-tip { left: auto; right: 24px; }
  .iw-tip h4 { font-size: 16px; }
  .iw-tip p { font-size: 11px; }
  .iw-legend { font-size: 10.5px; }
}
@media (prefers-reduced-motion: reduce) {
  .iw-section * { transition: none !important; }
}
</style>
@endpush

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
       SECTION 6: OUR PRESENCE & WORK ACROSS INDIA
       Interactive SVG Map highlighting regional project footprints
       ======================================================== -->
  <section class="iw-section" id="where-we-work">
    <div class="container px-lg-4">
      <div class="iw-wrap">
        <div class="iw-content">
          <span class="iw-tag">OUR PRESENCE</span>
          <h2>Our Work Across <span>India</span></h2>
          <p class="iw-desc">We have worked with textile businesses across India, helping them build a stronger digital presence and reach customers in every market they serve.</p>
          <div class="iw-stats">
            <div class="iw-stat"><h3>11</h3><p>States Covered</p></div>
            <div class="iw-stat"><h3>15+</h3><p>Cities &amp; Regions</p></div>
          </div>
          <div class="iw-hint"><span class="iw-pulse"></span>Hover over (or tap) a location to explore our work.</div>
        </div>
        <div class="iw-mapbox">
          <div class="iw-mhead"><span>OUR SERVICE LOCATIONS</span><h3>Connecting Businesses Nationwide</h3></div>
          <div class="iw-map">
            <svg class="iw-svg" viewBox="0 0 1000 1015" preserveAspectRatio="xMidYMid meet" role="img" aria-label="Map of India highlighting the states where we have worked"><defs><linearGradient id="iwGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#3b8460"/><stop offset="1" stop-color="#1c3b2d"/></linearGradient></defs><path class="iw-st" d="M337,21L340,24L343,21L345,21L344,29L348,37L349,41L353,52L356,54L366,56L370,60L374,61L376,63L376,67L368,71L367,74L370,83L369,90L371,93L376,98L380,100L390,100L392,101L389,106L390,109L388,110L390,111L397,119L391,126L390,126L389,125L387,124L386,126L380,128L379,132L375,133L369,129L368,126L368,123L367,123L364,125L357,125L354,128L353,128L354,124L356,122L356,118L354,118L352,121L344,124L339,114L335,109L323,114L315,112L309,109L302,103L299,97L294,92L286,89L286,84L283,79L279,75L274,76L270,72L267,67L264,67L257,61L257,55L265,57L271,56L279,50L283,51L292,47L296,49L299,48L302,45L303,42L306,41L308,42L311,39L312,35L337,21Z"/><path class="iw-st" d="M944,254L948,250L951,252L954,258L955,262L952,263L952,264L945,272L948,274L954,271L959,272L967,275L971,274L979,279L978,284L980,287L979,291L976,291L964,301L964,307L972,316L973,318L972,319L970,319L964,316L964,314L959,310L957,311L955,310L952,312L940,313L936,316L933,321L928,323L926,326L923,327L922,329L919,329L916,333L911,335L910,330L909,328L910,324L909,322L909,321L911,321L917,317L920,313L924,314L929,312L932,313L936,309L935,307L932,308L932,303L929,300L928,297L933,290L934,287L926,287L916,292L913,291L887,301L881,301L878,300L877,301L878,303L878,304L865,315L864,319L860,322L852,324L849,323L838,324L831,321L827,320L824,322L815,325L807,325L806,323L804,319L807,312L805,307L803,306L795,306L793,305L791,303L790,301L792,295L790,293L790,292L798,294L800,297L802,297L804,295L806,295L812,292L814,295L815,293L816,294L817,292L818,293L823,292L826,290L828,288L827,285L825,285L826,282L830,280L831,281L836,277L844,275L844,273L843,272L846,269L847,266L852,263L865,262L867,263L869,257L875,254L878,254L881,251L879,248L879,246L881,246L883,244L887,244L889,240L893,241L895,246L902,246L909,248L910,249L915,250L919,249L920,244L921,243L926,244L927,240L931,240L934,239L940,239L941,241L943,243L947,242L948,242L946,245L941,248L942,254L944,254Z"/><path class="iw-st" d="M702,311L701,313L698,314L697,317L690,316L685,319L675,317L675,315L673,314L674,311L673,305L678,295L678,293L676,292L676,290L685,288L689,286L692,283L699,287L701,293L697,304L698,308L702,311Z"/><path class="iw-st" d="M697,317L700,319L700,324L702,323L703,325L706,326L709,329L712,329L717,328L720,330L725,330L725,333L732,333L733,332L734,332L735,339L732,345L733,346L729,349L730,350L727,351L727,350L726,350L726,352L724,352L724,353L725,354L724,355L725,355L723,359L721,358L716,358L710,353L708,348L709,346L704,342L702,345L706,347L707,349L706,350L705,350L701,348L700,350L697,348L694,349L694,348L696,346L694,343L686,339L685,336L683,341L684,342L684,341L688,342L689,345L687,345L684,348L683,350L678,353L677,357L675,361L677,366L681,365L686,370L686,372L690,376L694,377L697,375L698,376L699,377L699,379L700,382L705,383L702,387L703,387L699,386L698,388L687,387L686,392L683,398L680,398L679,395L676,396L677,399L674,402L673,406L675,408L676,411L688,418L693,418L694,417L697,419L697,421L695,423L695,426L696,427L696,432L694,433L691,434L690,442L696,448L698,447L695,454L695,455L704,457L700,462L700,465L704,470L702,474L704,479L703,480L704,481L706,490L708,494L707,495L707,497L707,502L706,503L704,502L703,500L702,501L706,505L708,513L705,514L702,512L701,508L700,510L701,513L699,513L699,511L698,512L698,515L696,515L695,505L698,499L696,497L698,495L695,497L697,498L695,502L693,502L694,496L695,493L694,492L691,505L691,508L693,508L693,509L693,510L692,510L691,515L690,515L690,516L689,517L689,515L690,512L689,509L690,507L689,501L687,513L685,514L685,510L684,511L683,510L684,512L683,514L682,508L681,507L683,515L681,516L678,512L679,507L677,501L680,497L679,494L675,491L673,491L671,485L669,485L671,491L673,493L677,493L678,497L674,499L672,505L668,509L663,512L655,513L654,511L654,508L648,506L646,501L644,501L641,503L639,501L639,497L630,493L630,492L635,489L633,487L633,485L630,483L630,482L632,482L631,480L627,478L626,476L620,472L620,467L623,465L613,464L607,458L603,459L601,455L603,450L602,449L601,448L607,446L607,444L608,443L611,444L611,447L614,449L616,448L620,442L633,439L634,435L636,432L642,435L645,436L644,433L647,434L649,431L647,427L650,427L651,429L655,428L656,427L656,424L658,425L659,423L661,422L660,420L664,417L666,411L666,409L664,408L668,408L669,407L668,406L669,405L668,403L666,401L668,401L668,396L667,392L665,390L665,388L667,383L664,379L671,374L675,376L674,369L670,366L666,361L667,357L672,353L682,345L681,344L682,343L679,340L679,339L675,339L678,331L676,324L672,319L672,315L673,314L675,315L676,317L680,318L684,319L690,316L697,317ZM674,510L676,505L677,504L678,508L677,513L674,512L674,510Z"/><path class="iw-st" d="M734,332L742,331L744,328L750,326L758,330L762,331L773,329L781,330L785,327L787,327L788,330L794,329L798,328L800,329L800,327L805,328L807,325L815,325L824,322L827,320L831,321L838,324L849,323L853,324L860,322L864,319L865,315L878,304L878,303L877,301L878,300L881,301L887,301L913,291L916,292L926,287L935,287L928,297L929,300L932,303L932,308L935,307L936,310L932,313L929,312L924,314L921,313L919,313L917,317L911,321L909,321L903,325L900,324L895,330L886,334L881,341L880,341L879,338L876,341L875,345L870,351L870,355L869,357L869,360L868,362L862,364L864,361L863,360L859,361L860,363L848,374L851,378L852,382L847,391L846,392L846,394L845,395L845,396L843,400L841,401L840,407L840,408L839,409L838,414L837,415L832,416L829,412L827,416L824,419L825,420L820,424L818,423L818,420L811,419L812,415L811,411L809,410L812,401L811,398L812,397L817,399L820,398L820,396L817,393L822,388L825,388L831,385L830,381L823,376L826,372L824,373L817,366L809,369L809,364L811,361L810,359L813,355L801,357L798,355L793,360L792,360L792,357L791,357L787,362L788,362L783,364L778,367L778,363L772,364L772,362L770,360L764,361L763,359L759,360L758,359L756,361L756,359L751,357L743,359L738,365L736,368L738,373L735,374L734,377L732,378L733,371L731,365L733,360L731,360L733,359L730,357L729,353L727,352L733,346L732,345L735,339L734,332Z"/><path class="iw-st" d="M415,196L426,200L429,200L433,202L435,205L442,207L442,209L440,210L438,209L437,212L433,216L428,218L425,223L422,225L421,227L422,230L417,237L419,241L418,244L417,244L417,247L414,248L413,252L411,255L411,257L412,258L409,261L407,261L407,259L406,260L406,258L404,258L404,257L403,256L396,257L394,256L391,257L389,253L386,253L378,246L374,248L372,244L367,241L368,240L372,239L374,237L365,233L359,226L356,224L351,218L349,219L350,225L349,228L347,228L343,226L338,228L336,221L335,217L338,211L342,208L333,202L330,203L329,201L338,198L335,195L336,194L334,188L336,185L337,184L336,181L337,181L337,179L341,175L345,175L354,170L358,171L360,173L370,173L372,176L375,176L376,175L373,171L374,171L379,164L384,169L385,172L389,177L390,180L392,180L396,183L401,181L404,182L412,188L415,188L417,190L415,192L416,195L415,196Z"/><path class="iw-st" d="M911,335L909,334L907,336L904,341L905,343L904,349L906,351L906,354L908,356L903,361L903,367L901,368L895,376L891,378L888,376L888,369L880,375L876,376L871,374L862,375L862,376L863,376L863,378L859,382L857,386L852,383L851,378L848,374L860,363L859,361L863,360L864,361L862,364L868,362L869,360L869,357L870,355L870,351L875,345L876,341L879,338L880,341L881,341L886,334L895,330L900,324L903,325L908,321L910,324L909,328L910,330L911,335Z"/><path class="iw-st" d="M891,378L888,386L892,388L893,392L889,403L887,404L879,417L874,434L870,432L863,431L860,429L857,429L856,430L852,430L848,426L845,428L845,426L840,427L836,425L838,417L837,414L838,414L839,409L840,408L840,407L841,401L843,400L845,396L845,395L846,394L846,392L847,391L852,383L857,386L859,382L863,378L863,376L862,376L862,375L871,374L876,376L880,375L888,369L887,375L891,378Z"/><path class="iw-st" d="M847,428L849,432L849,438L851,441L849,460L846,464L842,463L841,464L843,469L839,472L840,482L842,486L843,491L841,492L842,493L838,493L838,496L836,498L836,500L834,499L833,501L831,498L826,494L825,499L823,501L822,495L823,494L820,475L819,473L818,469L816,467L815,458L815,452L812,443L813,435L814,434L815,429L814,420L818,420L818,423L820,424L825,420L824,419L827,416L829,412L832,416L837,415L838,417L836,425L840,427L845,426L845,428L847,428Z"/><path class="iw-st" d="M813,439L811,439L810,441L809,438L805,442L801,439L802,447L798,450L796,455L797,461L794,464L790,466L788,464L786,458L784,455L783,456L783,462L781,461L780,453L781,452L776,443L776,441L777,441L775,439L778,437L778,432L780,429L782,429L783,425L790,425L792,421L794,424L795,423L795,421L798,421L800,424L801,420L801,417L803,418L802,416L807,415L808,411L809,410L811,411L812,415L811,419L814,420L815,422L815,434L813,435L813,439Z"/><path class="iw-st" d="M817,393L814,391L805,387L795,387L792,389L790,388L785,389L779,386L765,388L759,387L750,388L735,383L732,383L732,379L735,377L735,374L738,373L736,368L738,365L743,359L751,357L756,359L756,361L758,359L759,360L763,359L764,361L770,360L772,362L772,364L778,363L778,367L783,364L788,362L787,362L791,357L792,357L792,360L793,360L798,355L801,357L812,355L813,356L810,359L811,361L809,364L809,369L817,366L824,373L826,372L823,376L830,381L831,385L825,388L822,388L817,393Z"/><path class="iw-st" d="M129,292L142,288L143,282L151,274L155,264L158,260L177,250L187,233L192,219L198,216L204,214L211,209L211,211L209,217L229,218L230,221L228,222L227,225L229,225L232,225L231,231L232,234L230,236L232,240L240,237L243,239L244,241L247,241L248,243L251,242L253,242L255,241L256,243L258,242L259,244L258,246L258,248L262,252L261,254L265,264L271,270L271,272L274,273L277,275L281,281L279,280L276,283L277,284L279,283L277,287L278,288L276,289L278,292L282,292L284,294L285,293L283,285L284,284L286,284L289,285L289,284L288,283L289,282L288,280L290,281L293,281L294,283L293,283L294,284L293,285L295,286L296,288L300,286L299,284L306,279L309,282L308,285L309,292L308,296L308,297L307,298L310,298L311,297L313,296L312,295L313,294L320,294L322,303L325,308L331,311L332,315L327,319L329,321L332,321L335,322L325,327L324,330L335,325L343,326L344,327L345,326L347,324L352,325L350,327L350,329L349,330L347,330L346,334L341,334L338,336L338,338L334,340L328,343L325,343L325,345L322,345L318,349L315,350L314,351L308,354L302,361L299,361L296,363L295,367L294,367L296,377L303,382L307,381L308,383L314,381L317,381L320,378L323,379L323,383L324,386L323,388L322,390L317,389L311,390L306,393L307,397L304,400L306,402L309,403L311,404L313,408L312,410L308,411L307,409L305,409L305,417L307,421L306,423L303,423L300,421L300,418L297,419L296,421L295,421L293,419L285,419L284,416L282,418L282,424L278,428L278,430L271,433L269,432L268,436L265,435L264,433L262,432L261,429L263,427L266,429L268,428L269,429L272,425L270,423L272,418L270,417L269,414L270,411L273,412L274,411L274,408L272,405L272,403L270,401L260,404L251,403L251,401L252,400L251,397L255,399L258,397L253,397L253,396L256,396L255,394L256,391L250,392L248,394L248,397L245,398L239,396L240,400L244,401L244,405L241,405L238,401L238,405L236,410L240,413L237,416L236,419L241,420L242,425L244,427L242,434L243,441L240,446L233,449L229,454L230,455L234,456L236,458L228,462L225,462L223,463L220,459L216,458L215,455L211,452L208,452L206,449L203,450L200,449L200,443L198,442L196,443L196,439L194,439L193,437L191,436L191,432L193,431L191,425L187,428L183,423L182,421L183,418L187,416L183,415L182,411L179,411L178,415L176,416L170,415L168,413L164,411L163,411L162,414L160,410L158,410L155,408L157,407L157,406L152,406L148,404L144,406L142,405L141,406L139,405L135,406L132,404L121,406L115,404L111,395L109,388L105,384L102,379L102,369L100,368L96,369L89,369L83,360L83,355L86,350L86,339L83,337L73,337L63,331L65,321L67,316L76,308L81,301L84,294L92,287L96,286L99,287L102,289L103,294L106,297L111,297L121,293L129,292Z"/><path class="iw-st" d="M356,126L359,130L359,137L361,138L368,146L366,153L368,157L371,159L367,163L369,165L368,169L373,171L376,176L372,176L370,173L360,173L358,171L354,170L345,175L342,175L337,179L337,181L336,181L337,184L336,185L334,188L336,194L335,195L338,198L330,201L330,203L328,201L325,201L326,200L323,201L319,199L318,199L315,196L316,193L315,191L311,189L308,184L306,184L305,183L303,184L299,180L298,176L299,173L297,173L297,171L296,172L295,170L292,170L290,165L289,166L289,168L287,170L284,169L275,152L277,151L274,146L264,142L267,139L265,138L265,136L269,135L275,130L273,127L275,123L275,118L272,112L273,112L277,113L281,109L286,108L288,105L296,101L299,103L303,103L314,112L322,114L329,112L335,109L339,114L344,124L352,121L354,118L356,118L356,122L354,124L353,128L354,128L356,126Z"/><path class="iw-st" d="M419,801L414,793L414,797L413,794L411,798L413,801L418,802L413,803L413,801L411,800L411,802L408,804L408,806L402,808L402,811L400,811L399,809L396,809L394,807L391,807L390,811L387,814L385,814L382,817L379,818L375,816L373,818L372,816L368,817L365,819L363,827L360,828L358,832L356,832L354,830L351,827L352,824L354,824L356,822L359,824L357,821L361,816L362,809L362,808L361,809L356,807L355,806L356,798L351,798L348,796L346,795L346,794L347,794L346,788L345,788L341,789L342,785L340,786L337,785L337,788L333,792L331,791L330,793L326,794L324,789L317,787L316,788L316,787L314,788L315,792L312,792L311,791L310,792L310,789L311,786L307,778L308,777L310,777L311,781L315,783L320,783L322,787L324,787L324,785L322,782L323,780L322,779L326,777L326,773L323,772L323,772L323,775L319,772L315,771L313,775L308,774L308,773L307,771L306,770L309,767L305,766L302,762L305,751L302,748L303,745L312,748L315,743L314,737L312,735L310,730L311,730L311,725L314,724L312,721L312,717L316,714L318,713L333,716L340,715L347,719L351,714L352,711L354,712L357,710L360,709L362,710L365,710L370,711L371,710L372,707L373,707L377,704L384,704L384,701L384,695L385,692L390,692L393,690L395,690L402,687L404,688L406,688L407,690L408,690L412,683L410,682L410,681L415,676L418,676L420,681L422,683L426,684L429,684L428,682L429,679L425,679L422,678L423,674L425,676L426,673L429,672L432,674L438,675L440,670L447,668L449,666L456,664L458,662L461,652L463,650L468,648L467,645L477,640L483,642L484,640L486,640L486,638L487,637L485,634L487,631L487,627L490,623L492,623L492,627L495,630L494,633L496,633L497,631L501,629L501,626L504,627L505,629L509,628L509,625L511,623L509,621L509,619L512,615L515,615L521,611L518,606L523,607L523,604L525,606L528,602L532,609L533,606L534,606L538,613L543,613L546,614L552,613L556,608L556,605L563,603L564,601L566,601L567,602L565,601L565,603L565,604L567,603L563,608L555,619L552,622L549,623L550,624L553,622L546,628L545,631L534,637L528,640L524,645L523,644L523,646L519,652L518,653L516,652L518,653L515,655L516,656L505,663L499,665L491,670L487,673L484,680L484,682L486,682L487,682L487,679L487,680L487,684L486,688L486,691L484,690L485,692L478,697L467,701L462,700L461,699L456,700L456,699L451,701L447,714L442,718L443,720L439,718L439,711L438,712L439,716L436,723L435,717L432,716L422,720L419,723L416,730L412,737L411,745L413,758L415,762L414,763L416,763L415,771L414,774L411,776L414,775L414,782L418,790L417,794L419,801ZM483,687L483,686L481,687L484,688L485,687L483,687Z"/><path class="iw-st" d="M655,513L643,517L635,526L634,532L638,542L638,543L636,543L639,544L640,545L638,546L639,547L641,546L631,553L630,558L633,557L633,555L633,556L632,559L630,560L632,560L623,564L622,567L620,570L621,571L620,571L616,568L614,568L612,566L612,568L619,572L610,576L609,576L589,583L588,581L593,580L593,575L588,574L581,580L578,585L579,586L577,587L578,589L582,586L580,586L582,585L582,583L584,583L587,582L587,583L586,584L583,585L585,586L593,582L580,589L567,602L566,601L564,600L563,603L556,605L556,608L551,613L546,614L543,613L538,613L534,606L533,606L532,609L528,602L525,606L523,604L523,607L518,606L521,611L515,615L512,615L509,619L509,621L511,623L509,625L509,628L505,629L504,627L501,626L501,629L497,631L496,633L494,633L495,630L492,627L492,623L490,623L487,627L487,631L485,634L487,637L486,638L486,640L484,640L483,642L477,640L461,649L459,648L458,649L455,648L455,646L457,646L458,643L460,632L466,629L474,621L472,619L478,616L478,614L480,615L481,611L483,608L480,598L481,595L480,594L481,592L476,588L476,579L470,574L469,572L473,567L476,570L478,569L481,571L482,572L485,577L487,575L491,575L494,576L494,579L499,576L498,571L495,571L489,568L489,555L486,551L487,547L487,540L488,540L489,541L490,540L494,537L497,530L507,529L510,531L513,531L515,529L517,523L521,523L521,521L519,518L523,507L525,507L527,505L527,502L525,501L525,499L527,498L526,496L529,492L536,487L540,486L541,484L540,481L543,482L547,487L551,488L555,488L557,487L558,485L567,484L571,485L576,482L577,488L573,496L577,496L581,499L585,495L587,494L596,497L600,495L600,499L601,500L604,499L606,496L606,490L607,488L605,482L608,480L619,488L623,488L630,493L639,497L641,503L644,501L646,501L648,506L654,508L654,511L655,513Z"/><path class="iw-st" d="M182,559L182,560L183,561L181,563L181,565L182,566L183,564L185,565L184,570L183,569L179,569L177,564L176,562L182,559Z"/><path class="iw-st" d="M205,722L201,722L199,717L196,713L196,712L194,710L195,706L194,707L194,708L194,705L191,699L192,698L189,694L189,693L191,694L192,694L190,691L192,691L190,690L189,684L188,681L189,678L188,676L188,674L186,666L188,667L185,663L185,660L184,657L186,656L183,655L183,651L180,641L181,639L180,640L179,639L178,635L177,634L177,631L178,633L181,634L181,635L182,634L182,632L179,632L177,629L176,626L176,623L178,623L180,626L180,625L178,622L176,622L175,617L175,613L177,612L179,616L180,613L179,611L178,611L176,610L179,607L178,607L181,606L179,606L179,600L177,602L177,605L176,606L176,605L175,606L174,610L173,608L172,608L174,604L174,600L172,600L174,597L172,599L172,595L178,596L180,599L181,598L179,595L176,595L174,594L173,594L172,593L171,589L175,587L173,587L171,586L171,588L170,587L169,580L170,581L171,578L169,580L168,576L170,568L178,566L179,569L183,569L184,570L185,567L187,566L188,564L192,564L192,561L191,558L194,552L193,548L191,548L194,545L200,551L202,551L205,549L206,547L209,544L209,539L208,536L203,531L200,531L198,528L202,529L205,528L206,525L207,526L210,525L211,521L214,519L220,518L222,516L222,515L219,516L217,515L206,517L204,514L207,511L206,509L206,506L214,502L220,502L226,499L228,502L229,509L232,512L236,514L241,513L246,515L250,520L255,522L274,521L281,522L283,528L282,530L283,532L287,533L291,532L294,529L299,528L300,526L299,523L304,518L305,514L308,513L315,510L318,510L322,508L326,508L329,510L330,516L325,516L327,521L328,520L330,522L334,522L337,520L341,521L347,519L350,516L356,513L357,514L358,517L360,516L364,518L370,518L374,517L375,514L384,512L385,510L393,512L395,516L402,514L405,516L410,516L416,513L420,515L423,518L423,521L425,521L430,524L432,523L430,526L425,530L424,534L425,537L427,537L428,538L428,546L426,549L430,549L430,553L430,559L423,562L423,565L427,566L428,569L427,573L424,573L424,575L425,576L423,578L425,579L426,577L427,577L428,580L431,582L433,585L437,587L439,590L436,592L437,594L433,597L432,595L430,595L428,592L423,597L422,602L418,607L421,612L418,614L418,616L412,617L407,612L408,611L408,608L407,604L405,604L405,603L408,600L407,597L408,591L403,585L398,586L396,588L385,585L383,590L374,585L369,579L361,577L359,578L355,575L355,576L357,581L355,583L354,589L351,591L349,593L349,597L345,597L343,595L341,594L339,596L340,597L338,602L336,605L336,607L338,608L341,612L338,613L337,617L334,617L334,621L331,622L329,624L327,628L329,629L329,631L325,632L325,630L322,629L322,626L320,626L318,630L315,633L314,635L308,636L306,645L302,645L303,648L301,649L300,652L297,650L295,649L291,654L288,655L289,659L288,660L291,664L289,665L285,663L276,665L274,662L270,664L269,662L267,662L267,660L265,660L263,663L266,668L265,671L266,674L266,678L263,677L261,678L257,678L254,678L253,681L251,682L247,679L244,679L243,681L240,682L240,686L238,685L235,687L233,689L234,691L230,693L230,690L227,690L224,693L223,692L222,694L220,693L220,695L221,695L224,698L222,699L223,702L224,702L228,705L228,709L225,710L226,711L226,713L223,721L220,722L219,721L215,724L216,725L212,726L210,726L209,722L207,720L205,722Z"/><path class="iw-st" d="M240,827L239,825L241,825L243,823L239,824L238,816L235,805L235,802L235,804L236,804L234,796L236,796L235,794L234,795L232,789L229,782L226,775L227,774L229,775L226,773L224,765L225,767L226,767L224,763L223,765L222,765L222,763L223,762L221,762L221,758L220,757L219,758L215,755L220,753L219,751L216,753L215,752L220,750L222,741L220,739L222,738L220,732L220,726L218,725L216,725L215,724L219,721L220,722L223,721L226,712L225,710L228,708L228,704L224,702L223,702L222,699L224,698L221,695L220,695L220,693L222,694L223,692L224,693L227,690L230,690L230,693L234,691L233,689L235,687L238,685L240,686L240,682L243,681L244,679L247,679L251,682L253,681L254,678L257,678L261,678L263,677L266,678L266,674L265,671L266,668L263,663L266,660L270,664L274,662L276,665L282,664L290,664L291,664L288,660L289,659L288,655L291,654L295,649L297,650L300,652L301,649L303,648L302,645L306,645L308,636L314,635L315,633L318,630L320,626L321,625L322,629L325,630L325,632L328,630L330,631L330,633L331,638L329,639L331,643L327,648L328,650L326,652L324,655L327,657L330,657L331,658L333,657L332,659L328,662L323,669L323,671L325,672L326,676L324,686L326,688L324,690L326,690L323,694L319,697L321,698L328,700L329,701L327,703L327,712L326,714L316,714L312,717L312,721L314,724L311,725L311,730L310,730L312,735L314,737L315,743L312,748L303,745L302,748L305,751L302,762L305,766L309,767L306,770L307,771L308,773L308,774L313,775L315,771L319,772L323,775L323,772L326,773L326,777L323,777L322,779L323,780L322,782L324,785L324,787L322,787L320,783L315,783L311,781L310,777L308,777L307,778L311,786L309,790L310,792L311,791L312,792L315,792L314,788L316,787L316,788L317,787L324,789L325,794L327,794L330,793L331,791L333,792L337,788L337,786L340,786L342,785L341,789L345,788L347,789L347,794L346,794L346,795L348,796L351,798L356,798L355,806L356,807L361,809L362,808L362,811L361,816L357,821L359,824L355,822L354,824L352,824L351,827L345,824L343,826L341,823L337,824L336,829L331,830L330,834L330,837L331,837L331,840L326,845L327,847L333,847L335,848L336,851L333,855L327,857L324,862L319,861L315,862L314,863L311,861L308,861L305,868L297,867L295,864L292,866L291,863L288,863L283,859L281,859L280,856L277,857L272,856L270,852L266,851L259,844L258,844L256,840L257,838L255,838L253,835L254,833L249,832L248,830L245,830L243,827L240,827Z"/><path class="iw-st" d="M252,854L251,853L250,846L249,846L240,827L243,827L245,830L248,830L249,832L254,833L253,835L255,838L257,838L256,840L258,844L259,844L266,851L270,852L272,855L277,857L280,856L281,859L283,859L288,863L291,863L292,867L289,869L286,868L286,871L286,873L291,874L296,878L293,882L299,882L301,881L301,884L303,888L301,889L300,891L305,894L307,898L307,901L305,903L305,910L306,914L309,917L317,913L319,915L320,918L318,923L319,927L317,940L319,941L322,940L324,944L318,958L316,961L318,964L319,966L317,971L317,973L320,977L319,979L318,979L318,981L316,986L315,986L311,983L296,964L298,963L297,963L298,962L300,962L299,961L300,960L297,961L296,962L297,961L295,963L293,957L294,955L293,955L292,952L293,956L290,949L288,943L286,927L286,927L288,928L286,928L287,931L288,930L289,936L289,930L291,937L290,942L293,943L295,942L291,941L291,931L290,928L287,926L286,922L285,920L286,926L284,921L284,919L286,917L284,916L285,918L283,917L280,907L275,898L276,897L275,895L269,877L267,873L265,873L262,864L255,857L258,857L258,855L256,856L254,854L256,854L255,851L258,849L252,851L252,854Z"/><path class="iw-st" d="M255,853L254,854L254,855L252,854L252,851L258,849L255,851L255,853ZM404,891L404,897L404,897L403,896L403,894L400,893L400,892L401,892L401,890L404,891ZM405,856L403,860L402,860L400,859L400,857L399,855L399,854L402,855L401,857L402,857L405,856Z"/><path class="iw-st" d="M519,424L523,416L521,412L523,410L533,411L535,410L539,409L542,406L545,412L546,411L547,412L548,410L551,410L551,413L557,418L560,415L563,416L564,414L567,411L568,413L570,413L571,416L577,415L577,417L579,414L583,412L591,411L593,409L595,409L595,406L598,402L602,402L604,404L608,402L608,404L610,404L611,409L616,409L617,411L616,413L622,417L623,412L626,409L630,409L632,408L636,410L637,407L641,408L642,401L644,399L644,393L646,391L648,391L650,387L654,387L657,382L659,384L665,385L665,390L667,392L668,396L668,401L666,401L668,403L669,405L668,406L669,407L668,408L664,408L666,409L666,411L664,417L660,420L661,422L659,423L658,425L656,424L656,427L655,428L651,429L650,427L647,427L649,431L648,434L644,433L645,435L644,436L636,432L634,435L633,439L620,442L616,448L614,449L611,447L611,444L608,443L607,444L607,446L601,447L602,449L603,450L601,455L603,459L607,458L613,464L623,465L620,467L620,472L626,476L627,478L631,480L632,482L630,482L630,483L633,485L633,487L635,489L632,490L632,491L629,492L623,488L619,488L616,485L608,480L605,482L607,488L606,490L606,496L604,499L601,500L600,499L600,495L596,497L587,494L585,495L581,499L577,496L573,496L577,488L576,482L571,485L567,484L558,485L557,487L555,488L551,488L547,487L543,482L540,481L543,477L547,475L549,472L552,469L552,465L546,463L545,464L542,459L542,452L541,451L540,452L539,451L539,447L541,445L541,442L538,442L538,444L533,443L532,440L532,436L526,430L525,426L519,424Z"/><path class="iw-st" d="M301,188L305,188L305,192L304,192L301,190L301,188Z"/><path class="iw-st" d="M330,631L329,629L327,628L329,624L331,622L334,621L334,617L337,617L338,613L341,612L338,608L336,607L336,605L338,602L340,597L339,596L341,594L343,595L345,597L349,597L349,593L351,591L354,589L355,583L357,581L355,576L355,575L359,578L361,577L369,579L374,585L383,590L385,585L396,588L398,586L403,585L408,591L407,597L408,600L405,603L405,604L407,604L408,608L408,611L407,612L412,617L419,616L421,621L422,620L423,621L425,620L429,622L432,627L435,632L434,635L436,636L437,634L438,637L441,636L440,639L443,649L448,647L450,649L458,649L459,648L461,649L467,645L468,646L461,652L458,662L456,664L449,666L447,668L440,670L438,675L432,674L429,672L426,673L425,676L423,674L422,678L425,679L429,679L428,682L429,684L426,684L422,683L420,681L418,676L415,676L410,681L410,682L412,683L408,690L407,690L406,688L404,688L402,687L395,690L393,690L390,692L385,692L384,695L384,701L383,704L377,704L373,707L372,707L371,710L369,712L365,710L362,710L360,709L357,710L354,712L352,711L351,714L347,719L340,715L333,716L326,714L327,712L327,703L329,701L327,699L321,698L319,697L323,694L326,690L324,690L326,688L324,686L326,676L325,672L323,671L323,669L328,662L332,659L333,657L331,658L330,657L327,657L324,655L326,652L328,650L328,647L331,644L329,639L331,637L330,633L330,631Z"/><path class="iw-st iw-on" d="M255,140L257,136L255,133L260,132L262,135L264,132L268,131L270,129L274,127L275,130L269,135L265,136L265,138L267,139L264,142L274,146L277,151L275,152L284,169L287,170L289,168L289,166L290,165L292,170L295,170L296,172L297,171L297,173L299,173L298,174L298,180L305,186L305,188L302,188L301,189L304,192L306,192L308,198L307,203L306,201L303,201L302,202L302,204L296,207L296,208L297,207L299,209L299,211L295,213L293,213L291,210L290,212L289,211L288,212L285,211L286,213L285,213L284,218L285,221L279,225L274,225L271,222L268,224L260,223L255,229L255,231L253,232L251,227L253,225L251,222L250,223L248,222L248,219L247,220L245,221L242,218L239,217L236,217L234,219L225,217L209,217L212,210L209,205L207,204L214,197L214,194L218,193L223,184L225,184L234,178L233,177L230,177L229,174L230,170L233,164L228,155L230,151L235,147L238,147L239,144L244,144L246,142L251,142L252,141L255,140Z"/><path class="iw-st iw-on" d="M305,183L306,184L308,184L311,189L315,191L316,193L315,196L318,199L319,199L323,201L326,200L325,201L328,201L330,203L330,206L318,217L317,223L314,228L314,231L313,232L313,234L315,234L313,237L316,237L315,247L318,255L316,256L313,256L309,257L309,262L305,267L307,269L311,267L317,272L319,271L319,269L322,269L323,271L324,270L325,272L326,272L326,273L327,273L326,276L329,278L327,280L329,281L327,282L327,284L326,283L326,285L328,289L326,291L319,294L318,294L312,294L312,295L313,296L308,299L307,298L308,297L308,296L309,292L308,285L309,282L306,279L299,284L300,286L296,288L295,286L293,285L294,284L293,283L294,283L293,281L290,281L288,280L289,282L288,283L289,284L289,285L286,284L284,284L283,285L285,293L284,294L282,292L278,292L276,289L278,288L277,287L279,283L277,284L276,283L279,280L281,281L277,275L274,273L271,272L271,270L265,264L261,254L262,252L258,248L258,246L259,244L258,242L256,243L255,241L253,242L251,242L248,243L247,241L244,241L243,239L240,237L232,240L230,236L232,234L231,231L232,225L229,225L227,225L228,222L230,221L229,218L234,219L236,217L239,217L242,218L245,221L248,219L248,222L250,223L251,222L253,225L251,227L253,232L255,231L255,229L260,223L268,224L271,222L274,225L279,225L285,221L284,218L285,213L286,213L285,212L285,211L290,212L291,210L293,213L295,213L299,211L299,209L297,207L296,208L296,207L302,204L302,201L305,201L307,203L308,203L308,195L305,192L305,189L305,186L303,184L305,183Z"/><path class="iw-st iw-on" d="M236,129L234,128L233,124L235,116L234,116L231,119L229,119L227,117L224,118L222,116L223,114L222,110L217,108L212,102L212,100L215,98L217,92L217,90L211,87L211,83L213,80L219,79L221,76L220,74L211,74L210,73L209,70L212,68L212,67L210,64L207,63L205,61L208,56L210,54L210,52L216,50L222,47L246,52L253,52L257,55L257,61L261,64L264,67L267,67L270,72L274,76L279,75L283,79L286,84L286,89L294,92L299,97L302,103L299,103L296,101L291,103L288,105L286,108L281,109L277,113L272,112L272,114L275,118L275,123L272,128L270,129L268,131L264,132L262,135L260,132L255,133L246,129L236,129Z"/><path class="iw-st iw-on" d="M215,752L213,751L213,748L209,745L211,743L209,736L205,733L209,733L211,735L210,733L206,732L206,730L208,730L208,729L205,731L204,730L204,727L207,725L203,726L202,724L202,723L205,722L207,720L209,722L211,726L218,725L220,726L220,732L222,738L220,739L222,741L221,747L220,750L215,752Z"/><path class="iw-st iw-on" d="M354,327L362,331L367,330L372,333L374,333L378,341L379,346L375,349L375,351L374,353L375,354L370,364L368,365L368,371L362,373L356,374L355,377L352,379L356,387L354,393L349,398L351,401L353,407L351,410L355,414L355,416L355,418L358,418L360,414L370,421L376,414L376,412L374,412L374,410L372,407L368,406L367,406L368,399L365,396L363,386L361,384L363,379L365,379L368,381L368,378L368,376L369,375L370,378L371,379L373,374L374,376L374,378L375,378L375,383L372,385L373,387L376,385L377,383L378,384L377,386L377,387L380,386L381,388L382,387L386,388L385,383L387,380L386,383L387,385L391,383L388,388L388,391L390,391L390,388L392,390L395,387L403,389L405,388L404,385L405,385L412,381L414,381L416,379L419,379L420,383L423,385L423,387L418,390L419,393L423,393L423,391L425,393L426,392L425,389L427,390L428,388L431,391L433,390L431,388L435,388L437,386L438,387L435,394L443,395L446,397L448,395L448,393L450,390L450,387L454,388L455,389L456,390L458,389L456,388L460,386L461,390L466,391L467,393L470,392L471,396L474,398L479,400L482,399L482,402L484,401L484,403L486,404L485,406L489,406L489,403L495,404L499,403L502,408L499,409L500,417L499,421L497,422L502,429L501,431L497,433L496,435L492,437L478,436L473,435L469,436L465,433L463,434L465,439L462,444L463,447L467,445L473,447L476,451L479,451L481,453L480,459L480,461L478,461L473,463L473,466L468,470L468,476L464,478L463,480L456,484L454,482L450,484L449,483L448,483L446,486L446,489L443,492L443,495L442,496L442,498L442,498L440,496L439,497L437,502L437,507L434,509L433,518L432,523L430,524L425,521L423,521L423,518L420,515L416,513L410,516L405,516L402,514L395,516L393,512L385,510L384,512L375,514L374,517L370,518L364,518L360,516L358,517L357,514L356,513L350,516L347,519L341,521L337,520L334,522L330,522L328,520L327,521L325,516L330,516L329,510L326,508L322,508L318,510L315,510L308,513L305,514L304,518L299,523L300,526L299,528L294,529L291,532L287,533L283,532L282,530L283,528L281,522L274,521L262,522L252,521L249,520L246,515L241,513L236,514L229,510L228,502L226,499L220,502L216,501L217,497L214,492L214,488L215,487L217,488L219,488L220,486L215,485L213,483L213,482L217,482L221,478L224,477L227,471L226,469L224,468L223,463L225,462L228,462L236,458L234,456L230,455L229,454L233,449L240,446L243,441L242,434L244,427L242,425L241,420L236,419L237,416L240,413L236,410L238,405L238,401L241,405L244,405L244,401L240,400L239,396L245,398L248,397L248,394L250,392L256,391L255,394L256,396L253,396L253,397L258,397L255,399L251,397L252,400L251,401L251,403L260,404L270,401L272,403L272,405L274,408L274,411L273,412L270,411L269,414L270,417L272,418L270,423L272,425L269,429L268,428L266,429L263,427L261,429L262,432L264,433L265,435L268,436L269,432L271,433L278,430L278,428L282,424L282,418L284,416L285,419L293,419L295,421L296,421L297,419L300,418L300,421L303,423L306,423L307,421L305,417L305,409L307,409L308,411L312,410L313,408L311,404L309,403L306,402L304,400L307,397L306,393L311,390L317,389L322,390L323,388L324,386L323,383L323,379L320,378L317,381L314,381L308,383L299,380L296,377L295,374L294,368L295,367L295,365L299,361L302,361L308,354L314,351L315,350L318,349L322,345L325,345L325,343L328,343L334,340L338,338L338,336L341,334L346,334L347,330L349,330L349,329L352,329L354,327Z"/><path class="iw-st iw-on" d="M497,298L500,305L512,307L517,311L520,309L520,306L521,306L528,306L537,311L537,313L539,315L539,317L542,320L543,325L546,327L548,326L549,331L551,332L554,335L544,335L543,338L540,340L539,339L539,341L542,341L547,344L546,346L547,348L541,349L541,351L550,360L553,360L561,366L560,367L558,369L553,366L552,367L552,370L550,371L548,370L548,368L546,367L537,375L519,386L519,391L520,393L520,398L525,402L525,410L521,411L523,416L515,431L512,432L506,432L499,427L499,425L497,422L499,421L500,417L499,409L502,408L501,405L499,405L499,403L495,404L489,403L489,406L485,406L486,404L484,403L484,401L482,402L482,399L479,400L474,398L471,396L470,392L467,393L466,391L461,390L460,386L456,388L458,389L456,390L455,389L454,388L450,387L450,390L448,393L448,395L446,397L443,395L435,394L438,387L437,386L435,388L431,388L433,390L431,391L428,388L427,390L425,389L426,392L425,393L423,391L423,393L419,393L418,390L423,387L423,385L420,383L419,379L416,379L414,381L412,381L404,385L405,388L403,389L395,387L392,390L390,388L390,391L388,391L388,390L388,388L391,383L387,385L386,383L387,380L385,383L386,388L382,387L381,388L380,386L377,387L377,386L378,384L377,383L376,385L372,387L372,385L375,383L375,378L374,378L374,376L373,374L371,379L370,378L369,375L368,376L368,378L368,381L365,379L363,379L361,384L363,386L365,396L368,399L367,406L368,406L372,407L374,410L374,412L376,412L376,414L370,421L360,414L358,417L356,418L355,417L355,414L351,410L353,407L351,401L349,398L354,393L356,387L352,379L355,377L356,374L362,373L368,371L368,366L370,364L375,354L374,353L375,351L375,349L379,346L378,342L374,333L372,333L367,330L362,331L355,328L350,329L349,327L352,325L349,324L345,326L344,327L343,326L335,325L324,330L325,327L335,322L333,322L332,321L329,321L327,320L332,315L331,311L325,308L321,301L322,299L320,294L326,291L328,289L326,285L326,283L327,284L327,282L329,281L327,280L329,278L326,276L327,273L325,271L323,271L321,267L322,265L321,262L318,258L318,255L317,253L317,252L315,247L316,237L313,237L315,234L313,234L313,232L314,231L314,228L317,223L318,217L330,206L330,203L333,202L342,208L338,211L335,217L336,221L338,228L343,226L347,228L349,228L350,225L349,219L351,218L356,224L359,226L365,233L374,237L372,239L368,240L367,241L372,244L374,248L378,246L386,253L389,253L391,257L394,256L396,257L403,256L404,257L404,258L406,258L406,260L407,259L409,261L412,258L419,263L420,265L423,265L426,267L426,264L428,263L428,264L430,265L435,269L438,269L439,271L448,274L452,282L455,281L458,285L471,292L474,290L476,290L488,298L497,298Z"/><path class="iw-st iw-on" d="M661,343L664,344L664,342L668,341L670,344L673,345L675,342L675,339L679,338L679,340L682,343L681,344L682,346L672,353L667,357L666,361L671,367L674,369L675,376L671,374L665,378L664,379L667,383L665,386L664,385L659,384L657,382L654,387L650,387L648,391L646,391L644,394L644,398L642,401L641,408L637,407L636,410L632,408L630,409L626,409L623,412L622,417L616,413L617,411L616,409L611,409L610,404L608,404L608,402L604,404L602,402L598,402L595,406L595,409L593,409L591,411L583,412L579,414L577,417L577,415L571,416L570,413L568,413L567,411L564,414L563,416L560,415L557,418L551,413L551,410L548,410L547,412L546,411L545,412L542,406L538,410L531,411L525,410L525,402L520,398L520,393L519,391L519,387L521,385L537,375L546,367L548,368L548,370L550,371L552,370L551,367L553,366L558,369L561,366L558,363L556,363L553,360L549,360L548,357L543,354L541,351L541,349L547,348L546,346L547,344L542,341L539,341L539,339L540,340L543,338L544,335L554,335L551,332L549,331L548,326L546,327L543,325L542,320L539,317L537,311L536,311L537,309L536,307L541,307L544,304L551,309L560,311L563,315L561,320L562,321L568,322L571,324L574,328L579,328L580,331L583,332L594,328L597,330L597,335L601,338L607,335L613,337L616,336L630,343L631,342L634,342L641,337L643,344L647,343L650,346L653,343L659,345L661,343Z"/><path class="iw-st iw-on" d="M404,897L405,915L403,916L402,914L397,914L397,914L402,916L395,915L396,914L396,913L392,914L390,914L387,916L384,919L386,924L381,929L374,941L374,945L378,950L385,950L388,949L388,952L392,955L386,952L376,951L366,954L365,956L357,957L352,962L350,965L349,969L351,968L351,969L349,970L348,973L348,973L348,975L348,979L346,983L336,990L330,991L329,993L321,992L315,986L316,985L318,981L318,979L319,979L320,977L317,973L317,971L319,966L318,964L316,961L318,958L324,944L322,940L319,941L317,940L319,927L318,923L320,918L317,913L310,917L306,914L305,910L305,903L307,901L307,898L305,894L300,891L301,889L303,888L301,884L301,881L299,882L293,882L296,878L291,874L286,873L286,868L289,869L294,864L296,865L297,867L305,868L308,861L311,861L314,863L315,862L319,861L324,862L327,857L333,855L336,851L335,848L333,847L327,847L326,845L331,840L331,837L330,837L330,834L331,830L336,829L337,824L341,823L343,826L346,824L351,827L355,832L358,832L360,830L360,828L363,827L365,819L368,817L372,816L373,818L375,816L379,818L382,817L385,814L387,814L390,811L392,807L394,807L396,809L399,809L400,811L402,811L402,808L408,806L408,804L411,802L410,800L411,800L413,801L413,803L418,802L420,804L420,804L421,806L418,827L415,838L410,845L408,847L410,846L405,853L405,856L402,857L401,857L402,855L399,854L399,855L400,857L400,859L403,860L401,869L402,875L403,874L404,876L401,877L399,879L402,877L404,878L405,884L404,891L401,890L401,892L400,892L400,893L403,894L403,896L404,897Z"/><path class="iw-st iw-on" d="M114,416L116,414L113,412L112,408L113,406L115,404L121,406L132,404L135,406L139,405L141,406L142,405L144,406L148,404L152,406L157,406L157,407L155,408L158,410L160,410L162,414L163,411L164,411L168,413L170,415L176,416L178,415L179,411L182,411L183,415L187,416L183,418L182,421L183,423L187,428L191,425L193,431L191,432L191,436L193,437L194,439L196,439L196,443L198,442L200,443L200,449L203,450L206,449L208,452L211,452L215,455L216,458L219,458L222,462L224,469L226,469L227,470L227,471L224,477L221,478L217,482L213,482L213,483L215,485L220,486L219,488L217,488L215,487L214,488L214,492L217,497L216,501L206,506L206,509L207,511L204,514L206,517L217,515L219,516L222,515L222,517L216,519L214,519L211,521L210,525L207,526L206,525L205,528L202,529L198,528L200,531L203,531L208,536L209,543L206,547L205,549L202,551L200,551L194,545L191,548L194,552L191,558L192,561L192,564L188,564L187,566L186,567L185,567L184,564L181,566L181,563L183,561L182,560L182,559L178,560L178,562L176,562L178,566L170,568L172,558L175,557L174,554L176,552L176,545L178,544L177,542L176,542L176,540L174,541L175,539L174,538L176,536L174,536L172,534L174,534L173,531L171,531L170,533L170,529L169,530L169,532L167,531L171,528L168,526L167,526L166,523L168,522L165,522L171,519L171,518L166,520L167,518L174,512L176,513L184,508L177,511L165,512L164,511L165,505L167,502L169,502L171,500L164,503L163,501L164,495L165,493L167,492L171,494L173,491L177,492L176,490L171,491L165,490L162,492L162,490L159,491L160,487L157,491L156,491L154,489L151,490L153,491L154,490L154,491L157,492L157,497L155,499L152,501L150,500L151,500L149,500L150,502L147,502L152,502L152,505L148,503L150,506L147,505L146,507L147,508L152,507L156,513L154,519L150,524L150,528L139,534L133,537L132,537L132,536L129,539L118,544L113,545L113,546L105,545L92,538L83,530L74,519L62,508L61,504L59,505L54,500L46,489L47,485L50,483L49,484L50,486L55,485L53,488L55,490L64,488L65,486L65,484L66,484L66,486L68,487L71,485L72,483L74,485L80,481L87,480L93,468L97,465L98,463L97,461L96,460L94,462L94,466L91,467L88,464L88,466L86,466L85,465L84,466L85,467L75,469L71,473L67,473L55,470L43,464L37,459L35,456L35,455L33,455L33,453L35,453L32,451L33,449L31,450L30,449L29,449L31,446L29,445L30,446L29,447L28,442L31,442L30,441L33,440L37,435L42,433L36,435L35,437L29,439L26,444L20,443L22,441L24,441L24,440L22,440L22,437L20,437L21,434L24,433L24,431L25,432L26,430L27,431L29,430L39,430L40,417L41,417L43,420L45,417L47,420L50,419L53,420L57,419L66,419L70,422L73,423L81,423L84,418L98,414L99,414L99,419L101,420L106,420L109,419L108,418L111,416L114,416Z"/><path class="iw-st iw-on" d="M511,432L515,430L519,424L525,426L526,430L532,436L532,440L533,443L538,444L538,442L541,442L541,445L539,447L539,451L540,452L541,451L542,452L542,459L544,461L545,464L546,465L546,463L551,465L553,468L549,472L547,475L541,479L540,481L541,484L540,486L536,487L529,492L526,495L527,498L525,499L525,501L527,502L527,505L525,507L523,507L519,518L521,521L521,523L517,523L515,529L513,531L510,531L507,529L497,530L494,537L490,540L489,541L488,540L487,540L487,547L486,551L489,555L489,568L495,571L498,571L498,574L499,576L495,579L494,576L491,575L487,575L485,577L482,572L481,571L478,569L476,570L473,567L471,569L469,573L474,578L476,579L476,588L481,592L480,594L481,595L480,598L481,602L483,606L483,609L481,611L480,615L478,614L478,616L472,619L474,621L466,629L460,632L458,643L457,646L455,646L455,648L450,649L448,647L443,650L442,647L440,639L441,636L438,637L437,634L436,636L434,636L434,634L435,633L431,626L426,620L423,621L422,620L421,621L418,615L421,612L418,607L422,602L423,597L428,592L430,595L432,595L433,597L437,594L436,592L438,591L439,590L437,587L433,585L431,582L428,580L427,577L426,577L425,579L423,578L425,576L424,575L424,573L427,573L428,569L427,566L423,565L423,562L430,559L430,553L430,549L426,549L428,546L428,538L425,537L424,535L425,530L432,525L434,509L437,507L437,502L439,497L440,496L442,498L442,498L442,496L443,495L443,492L446,489L446,486L448,483L449,483L450,484L454,482L456,484L463,480L464,478L468,476L468,470L473,466L473,463L480,460L481,454L479,451L476,451L473,447L467,445L463,447L462,444L465,439L463,434L465,433L469,436L473,435L478,436L492,437L496,435L497,433L501,431L502,429L506,432L511,432Z"/><path class="iw-st iw-on" d="M317,256L318,259L321,262L322,265L321,267L322,269L319,269L319,271L317,272L311,267L307,269L305,267L309,262L309,258L313,256L317,256Z"/></svg>
            <div class="iw-loc iw-delhi" style="left:33.0%;top:27.4%">
              <button type="button" class="iw-dot" aria-label="Delhi - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Delhi</h4><p>Delhi / NCR</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-punjab" style="left:25.5%;top:17.6%">
              <button type="button" class="iw-dot" aria-label="Punjab - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Punjab</h4><p>Ludhiana / Sahnewal &middot; Amritsar</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-haryana" style="left:25.8%;top:23.3%">
              <button type="button" class="iw-dot" aria-label="Haryana - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Haryana</h4><p>Panipat &middot; Bahadurgarh</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-jk" style="left:25.4%;top:9.0%">
              <button type="button" class="iw-dot" aria-label="Jammu &amp; Kashmir - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Jammu &amp; Kashmir</h4><p>Kashmir</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-goa iw-up" style="left:21.5%;top:72.6%">
              <button type="button" class="iw-dot" aria-label="Goa - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Goa</h4><p>Goa</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-mp" style="left:38.9%;top:42.4%">
              <button type="button" class="iw-dot" aria-label="Madhya Pradesh - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Madhya Pradesh</h4><p>Indore &middot; Katni &middot; Rewa</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-up" style="left:43.5%;top:31.4%">
              <button type="button" class="iw-dot" aria-label="Uttar Pradesh - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Uttar Pradesh</h4><p>Amroha</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-bihar iw-left" style="left:61.1%;top:35.7%">
              <button type="button" class="iw-dot" aria-label="Bihar - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Bihar</h4><p>Bhojpur</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-tn iw-up" style="left:35.6%;top:88.4%">
              <button type="button" class="iw-dot" aria-label="Tamil Nadu - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Tamil Nadu</h4><p>Coimbatore &middot; Tiruppur</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-gujarat" style="left:11.5%;top:47.9%">
              <button type="button" class="iw-dot" aria-label="Gujarat - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Gujarat</h4><p>Kutch</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
            <div class="iw-loc iw-cg" style="left:45.9%;top:52.8%">
              <button type="button" class="iw-dot" aria-label="Chhattisgarh - Textile Industry"><span></span></button>
              <div class="iw-tip" role="tooltip"><span class="iw-lab">OUR WORK</span><h4>Chhattisgarh</h4><p>Durg</p><div class="iw-foot"><i></i>Textile Industry</div></div>
            </div>
          </div>
          <div class="iw-legend"><i></i><span>States where we have worked</span></div>
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
       SECTION 7: CONTACT SECTION (REPLACES THE LAST INSTAGRAM SECTION)
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

@push('scripts')
<script>
(function(){
  var root = document.getElementById('where-we-work');
  if(!root) return;
  var locs = root.querySelectorAll('.iw-loc');
  function closeAll(){
    for(var i = 0; i < locs.length; i++) locs[i].classList.remove('iw-open');
  }
  for(var i = 0; i < locs.length; i++){
    (function(el){
      var dot = el.querySelector('.iw-dot');
      if(dot){
        dot.addEventListener('click', function(e){
          e.stopPropagation();
          var was = el.classList.contains('iw-open');
          closeAll();
          if(!was) el.classList.add('iw-open');
        });
      }
    })(locs[i]);
  }
  document.addEventListener('click', closeAll);
  document.addEventListener('keydown', function(e){
    if(e.key === 'Escape') closeAll();
  });
})();
</script>
@endpush
