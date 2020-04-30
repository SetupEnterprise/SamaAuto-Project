@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Voir info véhicule</h1>
</div>

<!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Infos du véhicule -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informations du véhicule {{ $voirVehicule->matricule }}</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <div class="text-lg border-left-success border-bottom-success">
                        Matricule : {{ $voirVehicule->matricule }}
                    </div><br>

                    <div class="text-lg border-left-success border-bottom-success">
                        Catégorie véhicule : {{ $voirCategorie->categorie}}
                    </div><br>

                    <div class="text-lg border-left-success border-bottom-success">
                        Nombre de places : {{ $voirCategorie->nbre_place}}
                    </div>
                  </div>
                  <hr>
                   <a href="{{ route('vehicule.index') }}">Voir toutes les véhicules</a>.
                </div>
              </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Image du véhicule</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4">
                      <a target="_blank" href="/image_vehicule/{{$voirVehicule->image_vehicule}}">
                        <img src="/image_vehicule/{{$voirVehicule->image_vehicule}}"
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

