@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Voir informations arrets</h1>
</div>

<!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Infos du véhicule -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Informations de l'arret {{-- {{ $voirVehicule->matricule }} --}}</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="text-lg border-left-success ">
                            Destination : {{ $trajet->point_depart }} - {{ $trajet->point_arrivee }}
                        </div><br>
                        @foreach ($listeArret as $la)
                            <div class="text-lg border-left-success ">
                                Arret : {{ $la->nom_arret }}
                            </div><br>
                        @endforeach
                  </div>
                  <hr>
                   <a href="{{ route('arret.index') }}">Voir tous les arrets</a>.
                </div>
              </div>

            </div>
</div>

@endsection


