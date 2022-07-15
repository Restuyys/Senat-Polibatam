<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Senat Polibatam | Dashboard</title>
  <link href="img/senatlogo1.png" rel="shortcut icon">
  <style type="text/css">
      .sidebar{
        
      }
      .main-sidebar{
       
      }
      .jumbotron{
        background-color: rgb(12, 60, 99); 
      }

  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="font/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('TEMPLATE/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/senatlogo1.png" alt="polibatamlogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

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

     
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      

    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0A375B;">
    <!-- Brand Logo -->
    
      <img src="img/senatlogo1.png" alt="AdminLTE Logo" class="brand-image mt-2 mb-4" height="70" >
     

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
                <a href="/dashboard" class="nav-link ">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/berita" class="nav-link">
                  <i class="nav-icon far fa-newspaper"></i>
                  <p>
                    Berita
                  </p>
                </a>
              </li>
            </li>
           
            <li class="nav-item ">
              <a href="#" class="nav-link ">
                <i class="nav-icon far fa-folder"></i>
                <p>
                  Produk Senat
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/peraturansenat" class="nav-link">
                    <i class="nav-icon far fa-solid fa-file"></i>
                    <p>Peraturan Senat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/sksenat" class="nav-link">
                     <i class="nav-icon far fa-solid fa-file"></i>
                    <p>SK Senat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/spsenat" class="nav-link ">
                    <i class="nav-icon far fa-solid fa-file"></i>
                    <p>SP Senat</p>
                  </a>
                </li>
              </ul>

        </li>
        <li class="nav-item ">
          <a href="/programkerja" class="nav-link ">
            <i class=" nav-icon fa-solid fa-folder-open"></i>
            <p>
              Program Kerja Senat
              
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <a href="/bisnis" class="nav-link ">
            <i class="nav-icon far fa-file"></i> 
            <p>
              Bisnis Senat
             
            </p>
          </a>
        </li>
        <li class="nav-item">
         <a href="/user" class="nav-link">
           <i class="nav-icon far fa-user"></i>
           <p>
            Data Pengguna
           </p>
         </a>
       </li>
    </li>
    <li class="nav-item">
     <a href="/aspirasi" class="nav-link">
       <i class="nav-icon far fa-envelope"></i> 
       <p>
         Aspirasi
       </p>
     </a>
   </li>
</li>
<li class="nav-item">
  <a href="/login" class="nav-link">
    <i class="nav-icon far fa-solid fa-right-from-bracket"></i>
    <p>
      Log Out
    </p>
  </a>
</li>
</li>
              
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">SenatPolibatam</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('TEMPLATE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('TEMPLATE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('TEMPLATE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('TEMPLATE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('TEMPLATE/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('TEMPLATE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('TEMPLATE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('TEMPLATE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('TEMPLATE/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('TEMPLATE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('TEMPLATE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('TEMPLATE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('TEMPLATE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('TEMPLATE/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('TEMPLATE/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('TEMPLATE/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
