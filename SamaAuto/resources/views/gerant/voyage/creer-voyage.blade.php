@extends('layouts.master_gerant')

@section('contenu_page')

    <!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('trajet.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations du véhicule</h6>
                </div>
                <div class="form-group">
                    <label for="">Matricule</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="">Catégorie</label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" disabled>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="">Nombre de places</label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" disabled>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations destination</h6>
                </div>
                <div class="form-group">
                    <label for="">Ville de départ</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                    <label for="">Ville de destination</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="">Prix</label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" disabled>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="">Distance</label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" disabled>
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informations Arrets</h6>
                </div>
                <div class="form-group">
                    <label for="">Input1</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>

            <div class="col-lg-9">
                <button type="submit" class="btn btn-primary">Créer le voyage</button>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
