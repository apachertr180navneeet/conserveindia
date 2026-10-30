<aside class="admin-sidebar">
  <div class="admin-sidebar-brand">
    <div class="d-flex align-items-center justify-content-center bg-white rounded p-1" style="width: 38px; height: 38px;">
      <i class="bi bi-recycle text-success fs-4"></i>
    </div>
    <div>
      <h6 class="mb-0 fw-bold text-white font-serif">Conserve India</h6>
      <span class="text-white-50" style="font-size: 11px;">CMS Control Center</span>
    </div>
  </div>

  <nav class="py-3">
    <div class="admin-nav-item">
      <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
    </div>

    <div class="admin-nav-section-title">Homepage Modules</div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.sliders.index') }}" class="admin-nav-link {{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}">
        <i class="bi bi-images"></i>
        <span>Hero Sliders</span>
      </a>
    </div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.initiatives.index') }}" class="admin-nav-link {{ request()->routeIs('admin.initiatives.*') ? 'active' : '' }}">
        <i class="bi bi-flower1"></i>
        <span>Our Initiatives</span>
      </a>
    </div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.services.index') }}" class="admin-nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
        <i class="bi bi-grid-fill"></i>
        <span>Action Services</span>
      </a>
    </div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.regions.index') }}" class="admin-nav-link {{ request()->routeIs('admin.regions.*') ? 'active' : '' }}">
        <i class="bi bi-geo-alt-fill"></i>
        <span>Where We Worked</span>
      </a>
    </div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.testimonials.index') }}" class="admin-nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
        <i class="bi bi-quote"></i>
        <span>Testimonials</span>
      </a>
    </div>

    <div class="admin-nav-section-title">Content & Media</div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.news.index') }}" class="admin-nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
        <i class="bi bi-newspaper"></i>
        <span>News &amp; Stories</span>
      </a>
    </div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.inquiries.index') }}" class="admin-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
        <i class="bi bi-envelope-open"></i>
        <span>Contact Inquiries</span>
        @php
          $unread = \App\Models\Inquiry::where('is_read', false)->count();
        @endphp
        @if($unread > 0)
          <span class="badge bg-danger ms-auto rounded-pill">{{ $unread }}</span>
        @endif
      </a>
    </div>

    <div class="admin-nav-section-title">System & Settings</div>

    <div class="admin-nav-item">
      <a href="{{ route('admin.settings.index') }}" class="admin-nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
        <i class="bi bi-gear-fill"></i>
        <span>Site Settings</span>
      </a>
    </div>

    <div class="admin-nav-item mt-4 pt-3 border-top border-white border-opacity-10">
      <a href="{{ url('/') }}" target="_blank" class="admin-nav-link text-white-50">
        <i class="bi bi-box-arrow-up-right"></i>
        <span>Visit Public Site</span>
      </a>
    </div>
  </nav>
</aside>

