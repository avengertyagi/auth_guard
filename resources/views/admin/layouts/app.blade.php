<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  @stack('style-lib')
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/js/select.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/vertical-layout-light/style.css')}}">
  <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.png')}}" />
  @stack('style')
</head>
<body>
  <div class="container-scroller">
    @include('admin.layouts.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('admin.layouts.sidebar')
      <div class="main-panel">
      @yield('content')
      </div>
    </div>
  </div>
  @push('scripts')
  <script src="{{asset('assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('assets/admin/js/dataTables.select.min.js')}}"></script>
  <script src="{{asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/admin/js/template.js')}}"></script>
  <script src="{{asset('assets/admin/js/settings.js')}}"></script>
  <script src="{{asset('assets/admin/js/todolist.js')}}"></script>
  <script src="{{asset('assets/admin/js/dashboard.js')}}"></script>
  <script src="{{asset('assets/admin/js/Chart.roundedBarCharts.js')}}"></script>
  @endpush
</body>
</html>