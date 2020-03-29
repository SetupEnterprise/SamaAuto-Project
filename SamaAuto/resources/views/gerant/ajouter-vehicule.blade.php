@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter véhicule</h1>
</div>

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-4">

    {{-- Affichage d'erreurs --}}
    @if(session()->has('messageMatriculeExiste'))
        <span class="helper helper-danger">
          {{ session()->get('messageMatriculeExiste') }}
        </span>
    @endif
    <form action="{{ route('vehicule.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- Champs matricule véhicule --}}
    <div class="form-group">
      <label for="">Matricule</label>
      <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId"
      value="{{ old('matricule')}}" placeholder="">
      @if ($errors->has('matricule'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('matricule')}}
        </small>
    @endif
    </div>
    {{-- Fin Champs matricule véhicule --}}

    {{-- Liste des catégories de véhicules --}}
    <div class="form-group">
      <label for="">Catégorie véhicule</label>
      <select class="form-control" name="categories_id" id="selectCategorie">
      <option value="">-------Veuillez sélectionner une catégorie-------</option>
      @foreach ($categorie as $c)
        <option value="{{ $c->categories_id}}">{{ $c->categorie}} {{ $c->nbre_place}} places</option>
      @endforeach
      </select>
      @if ($errors->has('categories_id'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('categories_id')}}
        </small>
        @endif
      <p id="demo"></p>
    </div>
    {{-- Fin Liste des catégories de véhicules --}}

    {{-- <div class="form-group">
      <label for="">Nombre de places</label>
      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" disabled>
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div> --}}

    {{-- Image du véhicule --}}
    <div class="form-group">
      <label for="">Image véhicule</label>
      <input type="file" class="form-control-file" name="image_vehicule" id="" placeholder="" aria-describedby="fileHelpId">
      @if ($errors->has('image_vehicule'))
        <small id="helpId" class="form-text text-muted">
        {{ $errors->first('image_vehicule')}}
        </small>
    @endif
    </div>
    {{-- Fin Image du véhicule --}}

    {{-- Boutton Submit --}}
    <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

</div>
</div>

@endsection
