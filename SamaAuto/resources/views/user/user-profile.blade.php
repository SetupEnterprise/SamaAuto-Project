{{-- Vérification du profile de l'utilisateur connecté --}}
@if ($profile === "Admin")
    @extends('layouts.master_admin')
@elseif ($profile === "Gerant")
    @extends('layouts.master_gerant')
@else
    @extends('layouts.master_vendeur')
@endif



@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier informations personnelles</h1>
</div>

<!-- Content Row -->
<div class="row">

    <div class="col-xl-8 col-lg-8">

        <!-- Infos utilisateur -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informations de l'utilisateur </h6>
        </div>
        <div class="card-body">
            <div class="chart-area">
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-5 col-lg-5">

                            {{-- Email --}}
                            <div class="form-group">
                                <label for="">Adresse E-mail</label>
                                <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder=""
                                value="7TupEntreprise@gmail.com" disabled>
                            </div>

                            {{-- Prenom user --}}
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                                value="Ousmane">
                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                            </div>
                        </div>

                        <div class="col-lg-1">

                        </div>

                        <div class="col-xl-5 col-lg-5">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                                value="NDIAYE">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

    </div>

<!-- Donut Chart -->
<div class="col-xl-4 col-lg-4">
    <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Image profil</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="chart-pie pt-4">
            <a class="img-profile rounded-circle" target="_blank" href="/img/samaautosloganjb1logo2.png">
            <img src="/img/samaautosloganjb1logo2.png"
            class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" alt=""/>
            </a>
        </div>
        <hr>
        <form action="" method="post">
            <div class="form-group">
            <label class="custom-file" >Modifier image
                <input type="file" name="" id="" placeholder="" class="custom-file-input" aria-describedby="fileHelpId">
                <span class="custom-file-control"></span>
            </label>
            <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
        </form>
    </div>
    </div>
</div>
</div>

@endsection
