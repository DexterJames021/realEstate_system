<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>RLC Residences</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->

  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css')}}">
  <!-- endinject -->

  <link rel="shortcut icon" href="{{ asset('\favicon.ico')}}" />

</head>
<body>

   <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.includes.navigation')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.includes.side-bar')
      <!--end partial:partials/_sidebar.html -->

      <!-- content -->
      <!-- partial -->
      <div class="main-panel bg-light">
     
      <!-- content wrapper -->
      @yield('content')
      <!-- content-wrapper ends -->

      <!-- footer -->
           <!-- @  include  ('admin.includes.footer') -->
     <!-- footer end -->


      </div><!-- main-panel ends -->

    </div><!-- page-body-wrapper ends -->
  </div><!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/admin/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  
  <!-- Plugin js for this page-->
  <script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('assets/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->

  <!-- inject:js -->
  <script src="{{ asset('assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('assets/admin/js/template.js')}}"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('assets/admin/js/dashboard.js')}}"></script>
  <script src="{{ asset('assets/admin/js/data-table.js')}}"></script>
  <script src="{{ asset('assets/admin/js/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('assets/admin/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('assets/admin/js/jquery.cookie.js')}}" type="text/javascript"></script>
</body>

</html>

