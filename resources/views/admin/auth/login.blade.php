<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Conserve India</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: linear-gradient(135deg, #12271E 0%, #1C3B2D 50%, #2A5A44 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .login-card {
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.25);
      width: 100%;
      max-width: 440px;
      overflow: hidden;
    }
    .login-header {
      background: #f8faf8;
      border-bottom: 1px solid #e7ece8;
      padding: 32px 30px 24px;
      text-align: center;
    }
    .btn-login {
      background: #1C3B2D;
      color: #ffffff;
      font-weight: 600;
      border-radius: 8px;
      padding: 12px;
      transition: all 0.25s ease;
    }
    .btn-login:hover {
      background: #12271E;
      color: #ffffff;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="login-header">
      <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-circle p-3 mb-3" style="width: 60px; height: 60px;">
        <i class="bi bi-shield-lock-fill fs-3"></i>
      </div>
      <h4 class="fw-bold mb-1" style="color: #1C3B2D;">Conserve India CMS</h4>
      <p class="text-muted small mb-0">Sign in to manage website content and inquiries</p>
    </div>

    <div class="p-4 p-md-5">
      @if(session('info'))
        <div class="alert alert-info py-2 small">{{ session('info') }}</div>
      @endif

      @if($errors->any())
        <div class="alert alert-danger py-2 small">
          {{ $errors->first() }}
        </div>
      @endif

      <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label small fw-semibold text-secondary">Email Address</label>
          <div class="input-group">
            <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
            <input type="email" name="email" class="form-control border-start-0" value="{{ old('email', 'admin@conserveindia.org') }}" required autofocus placeholder="admin@conserveindia.org">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label small fw-semibold text-secondary">Password</label>
          <div class="input-group">
            <span class="input-group-text bg-light border-end-0"><i class="bi bi-key text-muted"></i></span>
            <input type="password" name="password" class="form-control border-start-0" required placeholder="••••••••" value="admin123">
          </div>
        </div>

        <div class="d-flex align-items-center justify-content-between mb-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
            <label class="form-check-label small text-muted" for="remember">Remember me</label>
          </div>
        </div>

        <button type="submit" class="btn btn-login w-100 mb-3">
          Sign In to Portal &rarr;
        </button>

        <div class="alert alert-light border small text-muted text-center mb-0">
          <strong>Default credentials:</strong><br>
          Email: <code>admin@conserveindia.org</code><br>
          Password: <code>admin123</code>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

