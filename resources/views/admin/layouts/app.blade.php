<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin Portal') | Conserve India CMS</title>
  
  <!-- Bootstrap 5.3 CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --admin-forest: #1C3B2D;
      --admin-forest-dark: #12271E;
      --admin-forest-light: #2A5A44;
      --admin-accent: #28a745;
      --admin-sidebar-width: 260px;
      --admin-body-bg: #f5f7f6;
      --admin-card-bg: #ffffff;
      --admin-border: #e6eae7;
      --admin-text-main: #212529;
      --admin-text-muted: #6c757d;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--admin-body-bg);
      color: var(--admin-text-main);
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* SIDEBAR */
    .admin-sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      width: var(--admin-sidebar-width);
      background: linear-gradient(180deg, #163024 0%, #0d1e16 100%);
      color: #e0e7e3;
      z-index: 1045;
      transition: transform 0.3s ease;
      overflow-y: auto;
      box-shadow: 4px 0 20px rgba(0,0,0,0.08);
    }

    .admin-sidebar-brand {
      padding: 22px 20px;
      display: flex;
      align-items: center;
      gap: 12px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      background: rgba(0,0,0,0.1);
    }

    .admin-nav-item {
      margin: 4px 12px;
    }

    .admin-nav-link {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 14px;
      color: #cbd5ce;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      border-radius: 8px;
      transition: all 0.2s ease;
    }

    .admin-nav-link i {
      font-size: 18px;
      width: 22px;
      text-align: center;
    }

    .admin-nav-link:hover {
      background: rgba(255,255,255,0.08);
      color: #ffffff;
      transform: translateX(3px);
    }

    .admin-nav-link.active {
      background: var(--admin-accent);
      color: #ffffff;
      font-weight: 600;
      box-shadow: 0 4px 12px rgba(40, 167, 69, 0.35);
    }

    .admin-nav-section-title {
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 1.2px;
      color: rgba(255,255,255,0.4);
      padding: 16px 20px 6px;
      font-weight: 700;
    }

    /* MAIN CONTENT */
    .admin-main-wrapper {
      margin-left: var(--admin-sidebar-width);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      transition: margin-left 0.3s ease;
    }

    .admin-topbar {
      background: #ffffff;
      border-bottom: 1px solid var(--admin-border);
      padding: 12px 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 1020;
    }

    .admin-content {
      padding: 28px;
      flex-grow: 1;
    }

    /* CARDS */
    .admin-card {
      background: #ffffff;
      border: 1px solid var(--admin-border);
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.03);
      margin-bottom: 24px;
    }

    .admin-card-header {
      padding: 18px 22px;
      border-bottom: 1px solid var(--admin-border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: transparent;
    }

    .admin-card-body {
      padding: 22px;
    }

    /* BUTTONS */
    .btn-admin-forest {
      background: var(--admin-forest);
      color: #ffffff;
      font-weight: 600;
      border-radius: 8px;
      padding: 8px 18px;
      border: none;
      transition: background 0.2s ease;
    }

    .btn-admin-forest:hover {
      background: var(--admin-forest-dark);
      color: #ffffff;
    }

    @media (max-width: 991.98px) {
      .admin-sidebar {
        transform: translateX(-100%);
      }
      .admin-sidebar.show {
        transform: translateX(0);
      }
      .admin-main-wrapper {
        margin-left: 0;
      }
    }
  </style>
  @stack('styles')
</head>
<body>

  <!-- Sidebar -->
  @include('admin.layouts.sidebar')

  <!-- Main Wrapper -->
  <div class="admin-main-wrapper">
    <!-- Topbar -->
    @include('admin.layouts.header')

    <!-- Flash Alerts -->
    <div class="px-4 pt-3">
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
          <i class="bi bi-check-circle-fill"></i>
          <div>{{ session('success') }}</div>
          <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
        </div>
      @endif

      @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <div>{{ session('error') }}</div>
          <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please resolve the following errors:</strong>
          <ul class="mb-0 mt-1 small">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif
    </div>

    <!-- Page Content -->
    <main class="admin-content">
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-top py-3 px-4 text-center text-muted small">
      &copy; {{ date('Y') }} Conserve India CMS &middot; Developed for sustainable circular operations.
    </footer>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
    function toggleAdminSidebar() {
      const sb = document.querySelector('.admin-sidebar');
      sb.classList.toggle('show');
    }
  </script>
  @stack('scripts')
</body>
</html>

