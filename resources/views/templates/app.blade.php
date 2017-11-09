<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{URL::to('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{URL::to('css/fontastic.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::to('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::to('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{URL::to('img/favicon.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
     @include('templates.nav')
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        @include('templates.sidebar')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
            @yield('content')
          </div>
          </section>
          <!-- Page Footer-->
          @include('templates.footer')
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{URL::to('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{URL::to('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{URL::to('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{URL::to('js/charts-home.js')}}"></script>
    <script src="{{URL::to('js/front.js')}}"></script>
  </body>
</html>