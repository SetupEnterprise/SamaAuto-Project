@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
{{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter véhicule</h1>
</div> --}}
{{-- Informations du tableau --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des catégories de véhicule</h6>
    </div>
    @if ($listeCategorie->isEmpty())
    <div class="col-lg-3">
        <a class="btn btn-primary" href="{{ route('categorie.create') }}" role="button">
            Ajouter catégorie véhicule
        </a>
    </div>
        <h3>
            Aucune catégorie de véhicule n'est encore enregistrée
        </h3>
    @else
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                {{-- En tete tableau --}}
                <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Catégorie</th>
                    <th>Nombre de places</th>
                    <th>Actions</th>
                </tr>
                </thead>

                {{-- Corps tableau --}}
                <tbody>
                    @foreach ($listeCategorie as $lc)
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
            @endforeach
            </tbody>

            </table>
            </div>
        </div>

    @endif
</div>
@endsection