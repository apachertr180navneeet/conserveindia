  <!-- Top Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom border-1 border-light-subtle py-3 sticky-top">
    <div class="container px-lg-4">
      <!-- Brand Logo -->
      <a class="navbar-brand-conserve py-1" href="{{ url('/') }}" aria-label="Conserve India - People, Planet, Products">
        <img src="{{ asset('website/assets/images/conserve-logo.png') }}" alt="Conserve - People, Planet, Products" class="brand-logo-img" width="165" height="52">
      </a>

      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#conserveNavbar" aria-controls="conserveNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Nav Links & Dropdowns -->
      <div class="collapse navbar-collapse" id="conserveNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
          
          <!-- 1. Home -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link {{ request()->is('/') ? 'active text-success fw-bold' : '' }}" href="{{ url('/') }}">Home</a>
          </li>

          <!-- 2. About Us -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link {{ request()->is('about-us*') ? 'active text-success fw-bold' : '' }}" href="{{ url('/about-us') }}">About Us</a>
          </li>
          
          <!-- 3. Our Work Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle {{ request()->is(['our-work*', 'capacity-building*', 'sustainable-research-development*', 'advocacy-and-lobbying*', 'sustainable-trade*', 'covid-relief*']) ? 'active text-success fw-bold' : '' }}" href="{{ url('/our-work') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Work
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item fw-semibold" href="{{ url('/our-work') }}">Our Work Overview</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('/capacity-building') }}">Circular Livelihoods &amp; Artisans</a></li>
              <li><a class="dropdown-item" href="{{ url('/capacity-building#recyclers') }}">Grassroot Recyclers Training</a></li>
              <li><a class="dropdown-item" href="{{ url('/capacity-building#refugees') }}">Refugee Livelihoods (Akseer)</a></li>
              <li><a class="dropdown-item" href="{{ url('/sustainable-research-development') }}">Research &amp; Informed Making (Patented HRP)</a></li>
              <li><a class="dropdown-item" href="{{ url('/advocacy-and-lobbying') }}">Events &amp; Policy Advocacy</a></li>
              <li><a class="dropdown-item" href="{{ url('/our-work#zero-waste') }}">Zero Waste Communities</a></li>
              <li><a class="dropdown-item" href="{{ url('/sustainable-trade') }}">Sustainable Trade &amp; B2B</a></li>
              <li><a class="dropdown-item" href="{{ url('/covid-relief-project-sahyog') }}">Community Relief (Project Sahyog)</a></li>
            </ul>
          </li>

          <!-- 4. Our Services Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link custom-nav-link dropdown-toggle {{ request()->is('services*') ? 'active text-success fw-bold' : '' }}" href="{{ url('/services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Services
            </a>
            <ul class="dropdown-menu dropdown-menu-conserve shadow">
              <li><a class="dropdown-item fw-semibold" href="{{ url('/services') }}">Services Overview</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('/services#consulting') }}">Consulting &amp; Advisory</a></li>
              <li><a class="dropdown-item" href="{{ url('/services#events-outreach') }}">Events and Outreach</a></li>
              <li><a class="dropdown-item" href="{{ url('/services#education-training') }}">Education and Training (Incubator)</a></li>
              <li><a class="dropdown-item" href="{{ url('/services#immersion-tours') }}">Stay &amp; Learn: Immersion Tours</a></li>
            </ul>
          </li>

          <!-- 5. Latest Updates -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link {{ request()->is('latest-updates*') ? 'active text-success fw-bold' : '' }}" href="{{ url('/latest-updates') }}">
              Latest Updates
            </a>
          </li>

          <!-- 6. Gallery -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link {{ request()->is('gallery*') ? 'active text-success fw-bold' : '' }}" href="{{ url('/gallery') }}">
              Gallery
            </a>
          </li>

          <!-- 7. Connect With Us -->
          <li class="nav-item">
            <a class="nav-link custom-nav-link {{ request()->is('connect-with-us*') ? 'active text-success fw-bold' : '' }}" href="{{ url('/connect-with-us') }}">
              Connect With Us
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

