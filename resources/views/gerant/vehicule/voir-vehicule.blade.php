@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier véhicule {{ $voirVehicule->matricule }}</h1>
</div>

    <!-- Content Row -->
<div class="row">
<div class="col-lg-4">
    <form action="{{ route('vehicule.update',['vehicule'=>$voirVehicule->vehicules_id]) }}"
        method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="">Matricule véhicule</label>
            <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId"
            placeholder="" value="{{ old('matricule') ? old('matricule'): $voirVehicule->matricule}}" disabled>

            @if ($errors->has('matricule'))
                <small id="helpId" class="form-text text-muted">
                {{ $errors->first('matricule')}}
                </small>
            @endif

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
    </form>
</div>
@endsection
