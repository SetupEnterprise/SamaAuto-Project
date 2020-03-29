@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter véhicule</h1>
</div> --}}
{{-- Informations du tableau --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des véhicules</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- En tete tableau --}}
            <thead>
            <tr>
                <th>Identifiant</th>
                <th>Matricule</th>
                <th>Action</th>
            </tr>
            </thead>

            {{-- Corps tableau --}}
            <tbody>

            @foreach ($listeVehicule as $lc)
            <tr>
                <td scope="row">{{ $lc->vehicules_id}}</td>
                <td scope="row">{{ $lc->matricule}}</td>
                <td scope="row">
                    <a class="btn btn-success"
                    href="{{ route('vehicule.show',['vehicule'=>$lc->vehicules_id]) }}" role="button">
                        Voir
                    </a>
                    <a class="btn btn-primary"
                    href="{{ route('vehicule.edit',['vehicule'=>$lc->vehicules_id.' '.$lc->categories_id]) }}" role="button">
                        Modifier

                    </a>
                    <a class="btn btn-danger" href="#" role="button">
                        Supprimer

                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
        </div>
            </div>
</div>

@endsection
