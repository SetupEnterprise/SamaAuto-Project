<!-- Menu -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
    <!-- End Menu -->
