<header class="admin-topbar">
  <div class="d-flex align-items-center gap-3">
    <button class="btn btn-sm btn-outline-secondary d-lg-none" onclick="toggleAdminSidebar()" aria-label="Toggle Navigation">
      <i class="bi bi-list fs-5"></i>
    </button>
    <div class="d-none d-sm-block">
      <span class="text-muted small">Overview</span>
      <h6 class="mb-0 fw-bold" style="color: var(--admin-forest);">@yield('page_heading', 'Dashboard')</h6>
    </div>
  </div>

  <div class="d-flex align-items-center gap-3">
    <!-- View Public Site Link -->
    <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-light border text-muted d-none d-md-inline-flex align-items-center gap-2">
      <i class="bi bi-globe"></i>
      <span>Live Website</span>
    </a>

    <!-- Admin User Dropdown -->
    <div class="dropdown">
      <button class="btn btn-sm btn-light border d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; font-size: 13px;">
          <i class="bi bi-person-fill"></i>
        </div>
        <span class="fw-semibold small d-none d-sm-inline">{{ Auth::user()->name ?? 'Administrator' }}</span>
        <i class="bi bi-chevron-down text-muted small"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow-sm">
        <li><h6 class="dropdown-header">{{ Auth::user()->email ?? 'admin@conserveindia.org' }}</h6></li>
        <li><a class="dropdown-item" href="{{ route('admin.settings.index') }}"><i class="bi bi-gear me-2"></i> Settings</a></li>
        <li><hr class="dropdown-divider"></li>
        <li>
          <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item text-danger">
              <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</header>

