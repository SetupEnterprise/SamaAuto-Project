@extends('layouts.master_gerant')

@section('contenu_page')
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            {{-- Affichage erreur --}}
            <div class="row">
                @if(session()->has('messageArretExiste'))
                <span class="alert alert-danger">
                {{ session()->get('messageArretExiste') }}
                </span>
            @endif

            </div>
            <form action="{{ route('arret.update',['arret'=>$listerUnArret->arrets_id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-5">
                                <div class="card-header py-3">
                                    <h4 class="m-0 font-weight-bold text-primary">Modifier l'arrêt</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="">Trajet</label>
                                    <input type="text" name="nom_arret" class="form-control" aria-describedby="helpId"
                                    value="{{ ucfirst(strtolower($infoTrajet->point_depart)) }} - {{ ucfirst(strtolower($infoTrajet->point_arrivee)) }}"
                                     disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Nom arret *</label>
                                    <input type="text" name="nom_arret" id="" class="form-control" placeholder="Ex : Baux maraicher, Arret niayes, ..."
                                    aria-describedby="helpId"
                                    value="{{ old('nom_arret') ? old('nom_arret'): $listerUnArret->nom_arret}}">
                                    @if ($errors->has('nom_arret'))
                                        <span class="custom-control-description text-danger">
                                            {{ $errors->first('nom_arret')}}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Région *</label>
                                    <input type="text" name="region" class="form-control" placeholder="Saisir la région"
                                    aria-describedby="helpId"
                                    value="{{ old('region') ? old('region'): $listerUnArret->region}}">
                                    @if ($errors->has('region'))
                                        <span class="custom-control-description text-danger">
                                            {{ $errors->first('region')}}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Localisation</label>
                                    <input type="text" name="localisation" class="form-control" placeholder="Saisir la localisation de l'arret"
                                    aria-describedby="helpId"
                                    value="{{ old('localisation') ? old('localisation'): $listerUnArret->localisation}}">
                                    @if ($errors->has('localisation'))
                                        <span class="custom-control-description text-danger">
                                            {{ $errors->first('localisation')}}
                                        </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Modifier</button>

                            </div>
                        </div>
            </form>
        </div>
    </div>
@endsection
