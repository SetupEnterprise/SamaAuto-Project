@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter véhicule</h1>
</div> --}}
{{-- Informations du tableau --}}
<div class="col-lg-12">
    <div class="col-lg-2"></div>
    <div class="col-lg-10">
        @if(session()->has('messageTrajetAjouter'))
            <span class="alert alert-success">
                {{ session()->get('messageTrajetAjouter') }}
            </span>
        @endif
    </div>
</div>

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
                    <th>Numéro</th>
                    <th>Ville de départ</th>
                    <th>Ville de destination</th>
                    <th>Prix du voyage</th>
                    <th>Actions</th>
                </tr>
            </thead>

            {{-- Corps tableau --}}
            <tbody>
                @foreach ($listeTrajet as $lt)
                    <tr>
                        <td class="justify-content-center">1</td>
                        <td>{{ $lt->point_depart }}</td>
                        <td>{{ $lt->point_arrivee }}</td>
                        <td>{{ $lt->prix }}</td>
                        <td>
                            <a class="btn btn-success"
                                href="{{ route('arret.show',['arret'=>$lt->trajets_id]) }}" role="button">
                                Plus d'infos
                            </a>
                            <a class="btn btn-primary"
                            href="{{ route('trajet.show',['trajet'=>$lt->trajets_id]) }}" role="button">
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
