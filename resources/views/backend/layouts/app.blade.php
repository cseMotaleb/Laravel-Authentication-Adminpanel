
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Morshed Khan Rana">
  <meta name="author" content="Rana">

  <title>Dashboard</title>

  @include('backend.partial.style')
  @yield('style')
  {{-- @toastr_css --}}
  <style>
    .toast.toast-success {
        background: #45a770;
    }

    .toast.toast-info {
        background: #1a90a2;
    }

    .toast.toast-warning {
        background: #ffc107;
    }

    .toast.toast-error {
        background: #dc3545;
    }
  </style>

</head>

<body id="app">

  <div id="page-top">
      <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('backend.partial.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('backend.partial.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('backend.partial.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @include('backend.partial.script')
  @yield('script')
  {{-- @toastr_js
  @toastr_render --}}
  {!! Toastr::message() !!}
  </div>
 
</body>

</html>
