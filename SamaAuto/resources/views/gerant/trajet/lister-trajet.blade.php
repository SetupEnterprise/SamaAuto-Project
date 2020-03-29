@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter véhicule</h1>
</div> --}}
{{-- Informations du tableau --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des trajets</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- En tete tableau --}}
            <thead>
                <tr>
                    <th>Ville de départ</th>
                    <th>Ville de destination</th>
                    <th>Prix du voyage</th>
                    <th>Distance du voyage</th>
                    <th>Actions</th>
                </tr>
            </thead>

            {{-- Corps tableau --}}
            <tbody>
                <tr>
                    <td>Dakar</td>
                    <td>Zighinchor</td>
                    <td>7000 fcfa</td>
                    <td>540 km</td>
                    <td>
                        <a class="btn btn-primary"
                         href="{{ route('trajet.show',['trajet'=>$id]) }}" role="button">
                        Modifier
                        </a>
                        <a class="btn btn-danger" href="#" role="button">
                            Supprimer
                        </a>
                    </td>
                </tr>
        {{-- @foreach ($listeCategorie as $lc)
            <tr>
                <td scope="row">{{ $lc->categories_id}}</td>
                <td scope="row">{{ $lc->categorie}}</td>
                <td scope="row">{{ $lc->nbre_place}}</td>
                <td scope="row">
                    <a class="btn btn-primary"
                     href="{{ route('categorie.show',['categorie'=>$lc->categories_id]) }}" role="button">
                        Modifier
                    </a>
                    <a class="btn btn-danger" href="#" role="button">
                        Supprimer
                    </a>
                </td>
            </tr>
        @endforeach --}}
        </tbody>

        </table>
        </div>
            </div>
</div>
@endsection
