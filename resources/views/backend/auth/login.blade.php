<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
{{--   <link rel="stylesheet" href="/backend/dist/css/main.css"> --}}
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><strong>LOGIN</strong></p>

      <form action="{{ route('login') }}" method="post">
      	@csrf

        <div class="input-group mb-3">

          <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

           @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">

          <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <!-- <input type="checkbox" id="remember"> -->
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
	              <!-- <label for="remember">
	                Remember Me
	              </label> -->

                <label class="form-check-label" for="remember">
                    {{ __('GHI NHỚ') }}
                </label>

            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">ĐĂNG NHẬP</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- HOẶC -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> ĐĂNG NHẬP BẰNG FACEBOOK
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> ĐĂNG NHẬP BẰNG GOOGLE+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Quên mật khẩu?') }}
              </a>
          @endif
      </p>
      <p class="mb-0">
        <a href="register" class="text-center btn btn-link">ĐĂNG KÝ</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/adminlte.min.js"></script>

</body>
</html>
