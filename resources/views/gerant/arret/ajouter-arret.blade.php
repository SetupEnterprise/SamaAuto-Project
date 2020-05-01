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
        <form action="{{ route('arret.store') }}" method="POST">
        @csrf
            <div class="form-group">
                <label for="trajet">Trajet *</label>
                <select class="custom-select" name="trajet" id="trajet">
                    <option value="null" selected>Sélectionner un trajet</option>
                    @foreach ($listeTrajet as $lt)
                        <option value="{{ $lt->trajets_id }}">
                            {{ $lt->point_depart }} - {{ $lt->point_arrivee }}
                        </option>
                    @endforeach
                </select>
                {{-- Affichage erreur --}}
                @if (session()->has('messageTrajetNull'))
                    <div class="alert alert-danger" role="alert">
                        <span>
                            {{ session()->get('messageTrajetNull') }}
                        </span>
                    </div>
                @endif
            </div>

            <div class="form-group">
              <label for="">Nom arret *</label>
              <input type="text" name="nom_arret" id="" class="form-control" placeholder="Ex : Baux maraicher, Arret niayes, ..." aria-describedby="helpId">
              {{-- Affichage erreur --}}
                @if ($errors->has('nom_arret'))
                    <div class="alert alert-danger" role="alert">
                        <span>
                            {{ $errors->first('nom_arret')}}
                        </span>
                    </div>
                @endif
            </div>

            <div class="form-group">
              <label for="">Région *</label>
              <input type="text" name="region" class="form-control" placeholder="Saisir la région" aria-describedby="helpId">
              {{-- Affichage erreur --}}
                @if ($errors->has('region'))
                    <div class="alert alert-danger" role="alert">
                        <span>
                            {{ $errors->first('region')}}
                        </span>
                    </div>
                @endif
            </div>

            <div class="form-group">
              <label for="">Localisation</label>
              <input type="text" name="localisation" class="form-control" placeholder="Saisir la localisation de l'arret" aria-describedby="helpId">
              {{-- Affichage erreur --}}
                @if ($errors->has('localisation'))
                    <div class="alert alert-danger" role="alert">
                        <span>
                            {{ $errors->first('localisation')}}
                        </span>
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection
