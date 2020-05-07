@extends('layouts.master_gerant')

@section('contenu_page')

{{-- Informations du tableau --}}
<div class="row">
    @if(session()->has('messageArretAjouter'))
        <span class="alert alert-success">
            {{ session()->get('messageArretAjouter') }}
        </span>
    @endif
    @if(session()->has('messageArretModifier'))
        <span class="alert alert-success">
            {{ session()->get('messageArretModifier') }}
        </span>
    @endif
</div>
@if ($listeArret->isEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div id="design_text_voyage" class="text-lg">
                <h3>Aucun arrêt de véhicule n'est encore enregistré</h3>
                <a class="btn btn-primary" href="{{ route('arret.create') }}" role="button">
                Ajouter arrêt
                </a>
            </div>
        </div>
    </div>
@else
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des arrêts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                {{-- En tete tableau --}}
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Région</th>
                        <th>Nom de l'arret</th>
                        <th>Trajet</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                {{-- Corps tableau --}}
                <tbody>
                    @foreach ($listeArret as $la)

                        <tr>
                            <td>{{ $la->arrets_id }}</td>
                            <td>{{ $la->region }}</td>
                            <td>{{ $la->nom_arret }}</td>
                            <td>{{ $la->point_depart}} - {{ $la->point_arrivee }}</td>
                            <td>
                                <a class="btn btn-success"
                                href="{{ route('arret.show',['arret'=>$la->arrets_id]) }}" role="button">
                                Plus d'infos
                                </a>
                                <a class="btn btn-primary"
                                href="{{ route('arret.edit',['arret'=>$la->arrets_id]) }}" role="button">
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
@endif
@endsection
