@extends('layouts.master_gerant')

@section('contenu_page')
<div class="row">

    @if(session()->has('messageVoyageCreate'))
        <span class="alert alert-success">
        {{ session()->get('messageVoyageCreate') }}
        </span>
    @endif
    @if(session()->has('messageVoyageSupprimer'))
        <span class="alert alert-success">
        {{ session()->get('messageVoyageSupprimer') }}
        </span>
    @endif
</div>

@if ($listeVoyage->isEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div id="design_text_voyage" class="text-lg">
                <h3>Aucun voyage n'est encore créé</h3>
                <a class="btn btn-primary" href="{{ route('voyage.create') }}" role="button">
                Créer un voyage
                </a>
            </div>
        </div>
    </div>
@else
{{-- Informations du tableau --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des voyages</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    {{-- En tete tableau --}}
                    <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Matricule</th>
                            <th>Trajet</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    {{-- Corps tableau --}}
                    <tbody>

                        @foreach ($listeVoyage as $lv)
                            <tr>
                                <td scope="row">{{ $lv->vehicule_trajet_id}}</td>
                                <td scope="row">{{ $lv->matricule}}</td>
                                <td scope="row">{{ $lv->point_depart}} - {{ $lv->point_arrivee }}</td>
                                <td scope="row">
                                    <a class="btn btn-success"
                                    href="{{ route('voyage.show',['voyage'=>$lv->vehicule_trajet_id]) }}" role="button">
                                        Plus d'infos
                                    </a>
                                    <a class="btn btn-primary"
                                    href="{{ route('voyage.edit',['voyage'=>$lv->vehicule_trajet_id]) }}" role="button">
                                        Modifier

                                    </a>
                                    @include('gerant.voyage.delete-voyage')
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

    </div>
@endif

@endsection
