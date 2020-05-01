@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Content Row -->
<div class="row">
    @foreach ($voirVoyage as $vv)
        <div class="col-xl-8 col-lg-7">

            <!-- Infos du véhicule -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informations du voyage</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <div id="design_text_voyage" class="text-lg">
                        <h4>Détails du véhicule</h4>
                    </div>
                    <h5>
                        Matricule véhicule :
                        <span class="font-weight-bold text-success">
                            {{ $vv->matricule }}
                        </span>
                    </h5>
                    <h5>
                        Categorie :
                        <span class="font-weight-bold text-success">
                            {{ $infoCategorie->categorie }}
                        </span>
                    </h5>
                    <h5>
                        Nombre de places :
                        <span class="font-weight-bold text-success">
                            {{ $infoCategorie->nbre_place }}
                        </span>
                    </h5>
                    <hr>

                    <div id="design_text_voyage" class="text-lg">
                        <h4>Détails du trajet</h4>
                    </div>
                    <h5>
                        Trajet : <span class="font-weight-bold text-success">
                            {{ $vv->point_depart}} - {{ $vv->point_arrivee }}</span>
                    </h5>
                    <h5>
                        Prix : <span class="font-weight-bold text-success">{{ $vv->prix}} Fcfa</span>
                    </h5>
                    <h5>
                        Date voyage :
                        <span class="font-weight-bold text-success">
                            {{ $vv->date_voyage }}
                        </span>
                    </h5>
                    <h5>
                        Heure de départ :
                        <span class="font-weight-bold text-success">
                            {{ $vv->heure_de_depart }}
                        </span>
                    </h5>
                    <hr>

                </div>
                <hr>
                <a href="{{ route('voyage.index') }}">Voir toutes les voyages</a>.
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
                    <a target="_blank" href="/image_vehicule/{{$vv->image_vehicule}}">
                    <img src="/image_vehicule/{{$vv->image_vehicule}}"
                    class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" alt=""/>
                    </a>
                </div>
                <hr>
            </div>
        </div>
        </div>
    @endforeach

</div>

@endsection

