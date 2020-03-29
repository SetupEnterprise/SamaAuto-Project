@extends('layouts.master_gerant')

@section('contenu_page')

{{-- Informations du tableau --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des arrets</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            {{-- En tete tableau --}}
            <thead>
                <tr>
                    <th>Région</th>
                    <th>Nom de l'arret</th>
                    <th>Actions</th>
                </tr>
            </thead>

            {{-- Corps tableau --}}
            <tbody>
                <tr>
                    <td>Dakar</td>
                    <td>Baux maraicher</td>
                    <td>
                        <a class="btn btn-success"
                         href="{{ route('arret.show',['arret'=>$id]) }}" role="button">
                        Plus d'infos
                        </a>
                        <a class="btn btn-primary"
                         href="{{ route('arret.edit',['arret'=>$id]) }}" role="button">
                        Modifier
                        </a>
                        <a class="btn btn-danger" href="#" role="button">
                            Supprimer
                        </a>
                    </td>
                </tr>
        </tbody>

        </table>
        </div>
            </div>
</div>
@endsection
