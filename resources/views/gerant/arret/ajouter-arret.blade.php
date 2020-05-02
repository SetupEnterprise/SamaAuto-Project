@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            {{-- Message d'erreurs ici --}}

            @if(session()->has('messageArretExiste'))
            <span class="alert alert-danger">
            {{ session()->get('messageArretExiste') }}
            </span>
        @endif
        </div>

        @if ($listeTrajet->isEmpty())
            <div class="row">
                <div class="col-lg-12">
                    <div id="design_text_voyage" class="text-lg">
                        <h3>Aucun trajet n'est encore enregistré pour pouvoir ajouter des arrêts</h3>
                        <a class="btn btn-primary" href="{{ route('trajet.create') }}" role="button">
                        Ajouter trajet
                        </a>
                    </div>
                </div>
            </div>
        @else

            <form action="{{ route('arret.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Ajouter un arrêt</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
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
                                <span class="custom-control-description text-danger">
                                    {{ session()->get('messageTrajetNull') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Nom arret *</label>
                            <input type="text" name="nom_arret" id="" class="form-control" placeholder="Ex : Baux maraicher, Arret niayes, ..." aria-describedby="helpId">
                            {{-- Affichage erreur --}}
                                @if ($errors->has('nom_arret'))
                                    <span class="custom-control-description text-danger">
                                        {{ $errors->first('nom_arret')}}
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="">Région *</label>
                            <input type="text" name="region" class="form-control" placeholder="Saisir la région" aria-describedby="helpId">
                            {{-- Affichage erreur --}}
                                @if ($errors->has('region'))
                                    <span class="custom-control-description text-danger">
                                        {{ $errors->first('region')}}
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="">Localisation</label>
                            <input type="text" name="localisation" class="form-control" placeholder="Saisir la localisation de l'arret" aria-describedby="helpId">
                            {{-- Affichage erreur --}}
                                @if ($errors->has('localisation'))
                                    <span class="custom-control-description text-danger">
                                        {{ $errors->first('localisation')}}
                                    </span>
                                @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection
