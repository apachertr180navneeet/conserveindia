  <!-- Footer -->
  <footer class="main-footer" id="contact">
    <div class="container px-lg-4">
      
      <!-- Newsletter Row -->
      <div class="footer-newsletter-box">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <h4 class="font-serif mb-1" style="font-size: 20px; color: var(--primary-forest);">Stay Connected with Conserve</h4>
            <p class="text-muted mb-0" style="font-size: 13px;">Subscribe for updates on our circular economy research, new upcycled collections, and artisan community stories.</p>
          </div>
          <div class="col-lg-6">
            <form action="{{ route('inquiry.submit') }}" method="POST" class="d-flex gap-2">
              @csrf
              <input type="hidden" name="name" value="Newsletter Subscriber">
              <input type="hidden" name="subject" value="Newsletter Subscription">
              <input type="hidden" name="message" value="Please subscribe me to the Conserve India newsletter.">
              <input type="email" name="email" class="form-control newsletter-input" placeholder="Enter your email address" required>
              <button type="submit" class="btn-primary-forest text-nowrap">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Links Grid -->
      <div class="row g-4 py-3 mb-3">
        <!-- Col 1: Brand & Origin -->
        <div class="col-lg-4">
          <a class="navbar-brand-conserve mb-3 d-inline-block" href="{{ url('/') }}" aria-label="Conserve India - People, Planet, Products">
            <img src="{{ asset('website/assets/images/conserve-logo.png') }}" alt="Conserve - People, Planet, Products" class="brand-logo-footer" width="175" height="55">
          </a>
          <p class="text-muted" style="font-size: 13px; line-height: 1.65; max-width: 320px;">
            In 1997, we set out on a mission to support sustainable development in India. We renew the world from people to planet by pioneering patented plastic recycling and empowering underprivileged individuals with employable opportunities.
          </p>
        </div>

        <!-- Col 2: About & Our Work -->
        <div class="col-6 col-lg-2">
          <h6 class="fw-bold mb-3" style="font-size: 13.5px; color: var(--primary-forest); text-transform: uppercase; letter-spacing: 1px;">Our Work</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 13px;">
            <li><a href="{{ url('/our-work') }}" class="text-secondary text-decoration-none">Work Overview</a></li>
            <li><a href="{{ url('/capacity-building') }}" class="text-secondary text-decoration-none">Circular Livelihoods</a></li>
            <li><a href="{{ url('/sustainable-research-development') }}" class="text-secondary text-decoration-none">Patented HRP R&amp;D</a></li>
            <li><a href="{{ url('/advocacy-and-lobbying') }}" class="text-secondary text-decoration-none">Advocacy &amp; Policy</a></li>
            <li><a href="{{ url('/our-work#zero-waste') }}" class="text-secondary text-decoration-none">Zero Waste Hubs</a></li>
            <li><a href="{{ url('/gallery') }}" class="text-secondary text-decoration-none">Project Gallery</a></li>
          </ul>
        </div>

        <!-- Col 3: Services & Updates -->
        <div class="col-6 col-lg-2">
          <h6 class="fw-bold mb-3" style="font-size: 13.5px; color: var(--primary-forest); text-transform: uppercase; letter-spacing: 1px;">Services &amp; Updates</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 mb-0" style="font-size: 13px;">
            <li><a href="{{ url('/services#consulting') }}" class="text-secondary text-decoration-none">Consulting &amp; EPR</a></li>
            <li><a href="{{ url('/services#education-training') }}" class="text-secondary text-decoration-none">Education &amp; Training</a></li>
            <li><a href="{{ url('/services#immersion-tours') }}" class="text-secondary text-decoration-none">Stay &amp; Learn Tours</a></li>
            <li><a href="{{ url('/latest-updates#awards') }}" class="text-secondary text-decoration-none">Awards &amp; Honors</a></li>
            <li><a href="{{ url('/green-stories') }}" class="text-secondary text-decoration-none">Blog &amp; Stories</a></li>
            <li><a href="{{ url('/latest-updates#publications') }}" class="text-secondary text-decoration-none">Annual Reports &amp; Briefs</a></li>
          </ul>
        </div>

        <!-- Col 4: Connect & Contact -->
        <div class="col-lg-4" id="partner-footer">
          <h6 class="fw-bold mb-3" style="font-size: 13.5px; color: var(--primary-forest); text-transform: uppercase; letter-spacing: 1px;">Connect With Us</h6>
          <p class="text-muted mb-2" style="font-size: 13px;">
            <i class="bi bi-geo-alt me-1 text-success"></i> {{ $settings['contact_address'] ?? 'Conserve HRP, New Delhi, India' }}
          </p>
          <p class="text-muted mb-2" style="font-size: 13px;">
            <i class="bi bi-envelope me-1 text-success"></i> {{ $settings['contact_email'] ?? 'info@conserveindia.org' }}
          </p>
          @if(!empty($settings['contact_phone']))
            <p class="text-muted mb-2" style="font-size: 13px;">
              <i class="bi bi-telephone me-1 text-success"></i> {{ $settings['contact_phone'] }}
            </p>
          @endif
          <div class="d-flex align-items-center gap-2 mb-3">
            @if(!empty($settings['facebook_url']))
              <a href="{{ $settings['facebook_url'] }}" class="social-circle-link" aria-label="Facebook" target="_blank" rel="noopener">
                <i class="bi bi-facebook"></i>
              </a>
            @endif
            @if(!empty($settings['instagram_url']))
              <a href="{{ $settings['instagram_url'] }}" class="social-circle-link" aria-label="Instagram" target="_blank" rel="noopener">
                <i class="bi bi-instagram"></i>
              </a>
            @endif
            @if(!empty($settings['linkedin_url']))
              <a href="{{ $settings['linkedin_url'] }}" class="social-circle-link" aria-label="LinkedIn" target="_blank" rel="noopener">
                <i class="bi bi-linkedin"></i>
              </a>
            @endif
            @if(!empty($settings['youtube_url']))
              <a href="{{ $settings['youtube_url'] }}" class="social-circle-link" aria-label="YouTube" target="_blank" rel="noopener">
                <i class="bi bi-youtube"></i>
              </a>
            @endif
          </div>
          <div>
            <a href="{{ url('/connect-with-us#partner') }}" class="btn-primary-forest text-nowrap">
              Partner With Us &rarr;
            </a>
          </div>
        </div>
      </div>

      <!-- Copyright Bar -->
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pt-3 border-top border-light-subtle text-muted" style="font-size: 12.5px;">
        <div>
          &copy; {{ date("Y") }} {{ $settings['site_title'] ?? 'Conserve HRP' }} | All Rights Reserved | Transforming Waste into Opportunity Since 1997
        </div>
        <div class="mt-2 mt-md-0">
          <a href="#" class="text-muted text-decoration-none me-3">Back to Top &uarr;</a>
          <a href="https://conserveindia.org" target="_blank" rel="noopener" class="text-muted text-decoration-none">Official Site: conserveindia.org</a>
        </div>
      </div>
    </div>
  </footer>
