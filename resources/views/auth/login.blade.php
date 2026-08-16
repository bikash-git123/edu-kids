<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Login - School & College Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
          urls: ["{{ asset('assets/css/fonts.min.css') }}"],
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

    <style>
        body {
            background: linear-gradient(135deg, #1a2035 0%, #121621 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Public Sans', sans-serif;
        }
        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            background: #ffffff;
            width: 100%;
            max-width: 440px;
            overflow: hidden;
        }
        .login-header {
            background: #1572e8;
            color: #ffffff;
            padding: 30px 25px;
            text-align: center;
        }
        .login-body {
            padding: 30px 25px;
        }
        .demo-box {
            background: #f1f5f9;
            border-left: 4px solid #1572e8;
            padding: 12px 15px;
            border-radius: 4px;
            font-size: 0.85rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <div class="mb-2">
                <i class="fas fa-graduation-cap fa-3x"></i>
            </div>
            <h3 class="fw-bold mb-1">School & College Admin</h3>
            <p class="mb-0 text-white-50 fs-6">Sign in to access your administrative dashboard</p>
        </div>

        <div class="login-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="demo-box">
                <strong><i class="fas fa-key me-1"></i> Demo Admin Credentials:</strong><br>
                <span>Email: <code>admin@school.com</code></span><br>
                <span>Password: <code>password</code></span>
            </div>

            <form action="{{ url('/admin-login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold text-dark">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope text-muted"></i></span>
                        <input type="email" name="email" id="email" class="form-control" placeholder="admin@school.com" value="{{ old('email', 'admin@school.com') }}" required autofocus>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-bold text-dark">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock text-muted"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" value="password" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                        <label class="form-check-label text-muted fs-7" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-bold text-uppercase fs-6">
                    <i class="fas fa-sign-in-alt me-2"></i> Log In
                </button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
</body>
</html>
