<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets-admin/css/simplebar.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets-admin/css/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/css/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('assets-admin/css/app-light.css') }}" id="lightTheme">
  <link rel="stylesheet" href="{{ asset('assets-admin/css/app-dark.css') }}" id="darkTheme" disabled>
</head>
<body class="light">
  <div class="wrapper vh-100">
    <div class="row align-items-center h-100">
      <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
          <!-- SVG logo here -->
        </a>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <h1 class="h6 mb-3">Sign in</h1>
        
        <!-- Email Input -->
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" name="email" class="form-control form-control-lg" placeholder="Email address" required autofocus>
          @error('email')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
        </div>
        
        <!-- Password Input -->
        <div class="form-group">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Password" required>
          @error('password')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember" value="1"> Stay logged in
          </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
        <p class="mt-5 mb-3 text-muted">© 2020</p>
      </form>
    </div>
  </div>
  
  <!-- JavaScript Files -->
  <script src="{{ asset('assets-admin/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/daterangepicker.js') }}"></script>
  <script src="{{ asset('assets-admin/js/jquery.stickOnScroll.js') }}"></script>
  <script src="{{ asset('assets-admin/js/tinycolor-min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/config.js') }}"></script>
  <script src="{{ asset('assets-admin/js/apps.js') }}"></script>
</body>
</html>
