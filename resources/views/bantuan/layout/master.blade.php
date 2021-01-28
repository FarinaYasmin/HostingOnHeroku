<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Favicon -->
  <link rel="icon" href="bantuan/img/core-img/tbs.ico">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('bantuan/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('bantuan/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bantuan/css/responsive/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('bantuan/style.css') }}" rel="stylesheet">

  @yield('styles')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('bantuan.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('bantuan.layout.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      @include('bantuan.layout.footer')

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('bantuan/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('bantuan/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('bantuan/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('bantuan/js/sb-admin-2.min.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="{{ asset('bantuan/assets/demo/datatables-demo.js') }}"></script>

  <!-- Jquery-2.2.4 js -->
  <script src="{{ asset('bantuan/js/jquery/jquery-2.2.4.min.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ asset('bantuan/js/bootstrap/popper.min.js') }}"></script>
  <!-- Bootstrap-4 js -->
  <script src="{{ asset('bantuan/js/bootstrap/bootstrap.min.js') }}"></script>
  <!-- All Plugins JS -->
  <script src="{{ asset('bantuan/js/others/plugins.js') }}"></script>
  <!-- Active JS -->
  <script src="{{ asset('bantuan/js/active.js') }}"></script>
  @yield('scripts')

</body>

</html>