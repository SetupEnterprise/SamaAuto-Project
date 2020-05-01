<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>{{$title ?? ''}}</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('theme-asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  {{--  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">  --}}

  <!-- Custom styles for this template-->
  <link href="{{ asset('theme-asset/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme-asset/js/sweetalert.css')}}" rel="stylesheet">
  <link href="{{ asset('css/add_design_gerant.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #0295e0">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sama Auto</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Gérant</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

        <!-- Nav Item - Gestion Catégorie -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesCategorie" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Catégorie Véhicule</span>
        </a>
        <div id="collapseUtilitiesCategorie" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des catégories</h6>
            <a class="collapse-item" href="{{ route('categorie.create') }}">Ajouter</a>
            <a class="collapse-item" href="{{ route('categorie.index') }}">Lister</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Gestion Véhicule -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Véhicule</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des véhicules</h6>
            <a class="collapse-item" href="{{ route('vehicule.create') }}">Ajouter</a>
            <a class="collapse-item" href="{{ route('vehicule.index') }}">Lister</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Gestion Voyage -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesVoyage" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Voyage</span>
        </a>
        <div id="collapseUtilitiesVoyage" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion du voyage</h6>
            <a class="collapse-item" href="{{ route('voyage.create') }}">Créer</a>
            <a class="collapse-item" href="{{ route('voyage.index') }}">Lister</a>
          </div>
        </div>
      </li>





      <!-- Nav Item - Gestion Trajet -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesTrajet" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Trajet</span>
        </a>
        <div id="collapseUtilitiesTrajet" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion du trajet</h6>
            <a class="collapse-item" href="{{ route('trajet.create')}}">Ajouter </a>
            <a class="collapse-item" href="{{ route('trajet.index')}}">Lister</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Gestion Arret -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesArret" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Arret</span>
        </a>
        <div id="collapseUtilitiesArret" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Gestion des arrets</h6>
            <a class="collapse-item" href="{{ route('arret.create')}}">Ajouter</a>
            <a class="collapse-item" href="{{ route('arret.index') }}">Lister</a>
          </div>
        </div>
      </li>

      <!-- Divider
      <hr class="sidebar-divider">-->

      <!-- Heading
      <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
      <a class="nav-link" href="{{route('gerantStat')}}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Statistiques</span></a>
      </li>

      {{-- <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        {{-- Barre de navigation --}}
        @include('layouts.nav._nav')
        {{-- Fin Barre de navigation --}}

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
  <script src="{{ asset('theme-asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('theme-asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  {{--  Gestion des notifications  --}}

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('theme-asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

   <!-- Page level plugins -->
   <script src="{{ asset('chart.js/Chart.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('theme-asset/js/sb-admin-2.min.js')}}"></script>
  <script src={{ asset('js/chart-area-demo.js')}}></script>
  <script src={{ asset('js/chart-pie-demo.js')}}></script>
  <script src={{ asset('js/chart-bar-demo.js')}}></script>

  {{-- Ajax --}}
  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</body>

</html>
