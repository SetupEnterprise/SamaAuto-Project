@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter arret</h1>
</div>

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-4">

    </div>
    <div class="col-lg-4">
        <form action="{{ route('arret.update',['arret'=>$id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
              <label for="">Nom arret *</label>
              <input type="text" name="nom_arret" id="" class="form-control" placeholder="Ex : Baux maraicher, Arret niayes, ..."
               aria-describedby="helpId" value="Baux maraicher">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="">Région *</label>
              <input type="text" name="point_arrivee" class="form-control" placeholder="Saisir la région"
               aria-describedby="helpId" value="Dakar">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="">Localisation</label>
              <input type="text" name="localisation" class="form-control" placeholder="Saisir la localisation de l'arret"
               aria-describedby="helpId" value="localisation google">
              <small id="helpId" class="text-muted">Help text</small>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection
