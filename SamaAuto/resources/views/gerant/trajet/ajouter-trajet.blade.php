@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter trajet</h1>
</div>

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-4">

    </div>
    <div class="col-lg-4">
        <form action="{{ route('trajet.store') }}" method="POST">
        @csrf
            <div class="form-group">
              <label for="">Ville de départ *</label>
              <input type="text" name="point_depart" class="form-control" placeholder="Saisir la ville de départ" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="">Ville de destination *</label>
              <input type="text" name="point_arrivee" class="form-control" placeholder="Saisir la ville de destination" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="">Prix du voyage *</label>
              <input type="text" name="prix" class="form-control" placeholder="Saisir le prix du voyage" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="">Distance du voyage</label>
              <input type="text" name="distance" id="" class="form-control" placeholder="Saisir la distance du voyage" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection
