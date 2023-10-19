<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin-lte.header')
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('admin-lte.preloader')
 
  <!-- Navbar -->
  @include('admin-lte.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin-lte.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @include('admin-lte.main-header')
    <!-- /.content-header -->

    <!-- Main content -->
        @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('admin-lte.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin-lte.javascript')
@livewireScripts
</body>
</html>
