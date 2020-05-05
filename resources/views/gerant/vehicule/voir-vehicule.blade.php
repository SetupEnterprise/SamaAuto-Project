@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        {{-- Affichage ds erreurs --}}
        <div class="row">

        </div>
        <form action="{{ route('vehicule.update',['vehicule'=>$voirVehicule->vehicules_id]) }}"
                method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Modifier le véhicule</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label for="">Matricule véhicule</label>
                            <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId"
                            value="{{ $voirVehicule->matricule }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="categorie">Catégorie véhicule</label>
                            <select class="form-control" name="categorie" id="categorie">
                            <option value="{{ $voirCategorie->categories_id}}" selected>{{ $voirCategorie->categorie }}</option>
                            @foreach ($allCategories as $al)
                                <option value="{{ $al->categories_id}}">{{ $al->categorie}}</option>
                            @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
