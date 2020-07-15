@extends('layouts.master_gerant')

@section('contenu_page')

<div class="row">
    @if(session()->has('messageMatriculeEnregistrer'))
        <span class="alert alert-success">
            {{ session()->get('messageMatriculeEnregistrer') }}
        </span>
    @endif
    @if(session()->has('messageVehiculeModifier'))
        <span class="alert alert-success">
            {{ session()->get('messageVehiculeModifier') }}
        </span>
    @endif
    @if(session()->has('messageVehiculeSupprimer'))
        <span class="alert alert-success">
            {{ session()->get('messageVehiculeSupprimer') }}
        </span>
    @endif
</div>

@if ($listeVehicule->isEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div id="design_text_voyage" class="text-lg">
                <h3>Aucun véhicule n'est encore enregistré</h3>
                <a class="btn btn-primary" href="{{ route('vehicule.create') }}" role="button">
                    Ajouter véhicule
                </a>
            </div>
        </div>
    </div>
@else
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
                <th>Actions</th>
            </tr>
            </thead>

            {{-- Corps tableau --}}
            <tbody>

            @foreach ($listeVehicule as $lc)
            <tr>
                <td>{{ $lc->vehicules_id}}</td>
                <td>{{ $lc->matricule}}</td>
                <td>
                    <a class="btn btn-success"
                    href="{{ route('vehicule.show',['vehicule'=>$lc->vehicules_id]) }}" role="button">
                        Plus d'infos
                    </a>

                    <a class="btn btn-primary"
                    href="{{ route('vehicule.edit',['vehicule'=>$lc->vehicules_id.' '.$lc->categories_id]) }}" role="button">
                        Modifier
                    </a>

                    @include('gerant.vehicule.delete-vehicule')
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
                        Supprimer
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
        </div>
            </div>

    @endif
    </div>

@endsection
