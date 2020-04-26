@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Modifier catégorie véhicule</h1>
</div>

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-4">
    {{-- Affichage d'erreurs --}}
    @if(session()->has('messageCategorieExiste'))
        <span class="helper helper-danger">
          {{ session()->get('messageCategorieExiste') }}
        </span>
    @endif
        <form action="{{ route('categorie.update',['categorie'=>$voirCategorie->categories_id]) }}"
         method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
              <label for="">Catégorie véhicule</label>
              <input type="text" class="form-control" name="categorie" id="" aria-describedby="helpId"
              placeholder="Bus, 7 places, mini car, ..." value="{{ old('categorie') ? old('categorie'): $voirCategorie->categorie }}">

              @if ($errors->has('categorie'))
                  <small id="helpId" class="form-text text-muted">
                  {{ $errors->first('categorie')}}
                  </small>
              @endif

            </div>

            <div class="form-group">
              <label for="">Nombre de places</label>
              <input type="text" class="form-control" name="nbre_place" id="" aria-describedby="helpId"
              value="{{ old('nbre_place') ? old('nbre_place'): $voirCategorie->nbre_place }}" placeholder="">

            @if ($errors->has('nbre_place'))
                  <small id="helpId" class="form-text text-muted">
                  {{ $errors->first('nbre_place')}}
                  </small>
            @endif
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection
