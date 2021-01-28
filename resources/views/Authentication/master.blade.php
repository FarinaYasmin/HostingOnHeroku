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
  <link rel="icon" href="backend/img/core-img/tbs.ico">

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/customAuth/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/customAuth/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/css/responsive/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('backend/style.css') }}" rel="stylesheet">
  @yield('styles')

</head>

<body class="bg-gradient-primary">

  @yield('content')

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('customAuth/js/sb-admin-2.min.js') }}"></script>
  <!-- Jquery-2.2.4 js -->
  <script src="{{ asset('backend/js/jquery/jquery-2.2.4.min.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ asset('backend/js/bootstrap/popper.min.js') }}"></script>
  <!-- Bootstrap-4 js -->
  <script src="{{ asset('backend/js/bootstrap/bootstrap.min.js') }}"></script>
  <!-- All Plugins JS -->
  <script src="{{ asset('backend/js/others/plugins.js') }}"></script>
  <!-- Active JS -->
  <script src="{{ asset('backend/js/active.js') }}"></script>

  @yield('scripts')

</body>

</html>