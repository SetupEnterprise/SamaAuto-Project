@extends('layouts.master_gerant')

@section('contenu_page')

{{-- Informations du tableau --}}
<div class="row">
    @if(session()->has('messageTrajetAjouter'))
        <span class="alert alert-success">
            {{ session()->get('messageTrajetAjouter') }}
        </span>
    @endif
</div>

@if ($listeTrajet->isEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div id="design_text_voyage" class="text-lg">
                <h3>Aucun trajet n'est encore enregistré</h3>
                <a class="btn btn-primary" href="{{ route('trajet.create') }}" role="button">
                Ajouter trajet
                </a>
            </div>
        </div>
    </div>
@else
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
                        <th>Prix du voyage (en Fcfa)</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                {{-- Corps tableau --}}
                <tbody>
                    @foreach ($listeTrajet as $lt)
                        <tr>
                            <td class="justify-content-center"> 1 </td>
                            <td>{{ ucfirst(strtolower($lt->point_depart)) }}</td>
                            <td>{{ ucfirst(strtolower($lt->point_arrivee)) }}</td>
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
@endif
@endsection
