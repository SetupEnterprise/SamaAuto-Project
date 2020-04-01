<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

{{--   <title>ADMIN</title>
 --}}
  <!-- Custom fonts for this template-->
  <link href="{{ asset('theme-asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('theme-asset/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('theme-asset/js/sweetalert.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.menu.menu_admin')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.nav._nav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Contenue de la page -->
          @yield('contenu_page')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>
                @yield('footer') <!-- Copyright &copy; Your Website 2019 -->
            </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('theme-asset/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('theme-asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  {{--  Gestion des notifications  --}}

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('theme-asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('theme-asset/js/sb-admin-2.min.js') }}"></script>


</body>

</html>
