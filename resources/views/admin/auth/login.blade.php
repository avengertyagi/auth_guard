<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              @if (session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}</p>
              </div>
              @endif
              @if (session('success'))
              <div class="alert alert-success">
                {{ session('success') }}</p>
              </div>
              @endif
              <div class="brand-logo">
                <img src="{{asset('assets/admin/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{ route('admin.login') }}" class="pt-3">@csrf
                <div class="form-group">
                  <input type="email" name="email" class="@error('email') is-invalid @enderror form-control form-control-lg" id="exampleInputEmail1" placeholder="Email address">
                  @error('email')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="@error('password') is-invalid @enderror form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                  <div class="text-danger">{{ $message }}</div>
                  @enderror
                  <p id="saveform_errList"></p>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>
  <script src="{{asset('assets/admin/js/settings.js')}}"></script>
  <script src="{{asset('assets/admin/js/todolist.js')}}"></script>
</body>

</html>