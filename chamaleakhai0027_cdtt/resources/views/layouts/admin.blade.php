<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  @yield('header')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="preloader flex-column justify-content-center align-items-center">
       <img src="{{ asset('dist/img/logogif1.gif') }}">
  </div>  
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public" class="nav-link">Trang chủ dùng người</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public/admin" class="nav-link">Trang chủ quản trị </a>
      </li>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </ul>


    <ul class="navbar-nav ml-auto">
      <!-- logout -->
      <li class="nav-item">
          <a href="{{ route('admin.logout') }}" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Đăng xuất
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public/admin" class="brand-link">
      <img src="{{ asset('dist/img/Football.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Football TK</span>
    </a>

    <!-- Sidebar -->
    @includeIf('layouts.mainmenu_admin')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class=" content">
    @yield("content")
  </div>
  <!-- /.content-wrapper -->
<div class="fixed-bottom">
  <footer class="main-footer">
    
    <strong><a href="https://adminlte.io">AdminLTE.io</a> <b>Version</b> 3.2.0 <-> </a><a>CML Khải</a>
    </strong>
  </footer>
</div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script>
  function previewFile(input)
  {
      var file =$(".image-preview").get(0).files[0];
      if(file){
          var reader = new FileReader();
          reader.onload = function(){
              $("#previewImg").attr("src", reader.result);
          }
          reader.readAsDataURL(file);
      }
  }
</script>
@yield('footer')
</body>
</html> 