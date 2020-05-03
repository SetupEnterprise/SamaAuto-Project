@extends('layouts.master_gerant')

@section('contenu_page')


<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @if(session()->has('messageVilleEgale'))
                <span class="alert alert-danger">
                {{ session()->get('messageVilleEgale') }}
                </span>
            @endif
            @if(session()->has('messageTrajetExiste'))
                <span class="alert alert-danger">
                {{ session()->get('messageTrajetExiste') }}
                </span>
            @endif
            @if(session()->has('messagePrixNegatif'))
                <span class="alert alert-danger">
                {{ session()->get('messagePrixNegatif') }}
                </span>
            @endif
        </div>



        <form action="{{ route('trajet.store') }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Ajouter un trajet</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label for="">Ville de départ *</label>
                            <input type="text" name="ville_de_depart" class="form-control" placeholder="Saisir la ville de départ"
                            value="{{ old('ville_de_depart')}}" aria-describedby="helpId">
                            {{-- Affichage erreur --}}
                            @if ($errors->has('ville_de_depart'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('ville_de_depart')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Ville de destination *</label>
                            <input type="text" name="ville_de_destination" class="form-control" placeholder="Saisir la ville de destination"
                                value="{{ old('ville_de_destination')}}" aria-describedby="helpId">

                            @if ($errors->has('ville_de_destination'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('ville_de_destination')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Prix du voyage *</label>
                            <input type="text" name="prix_du_voyage" class="form-control" placeholder="Saisir le prix du voyage"
                                value="{{ old('prix_du_voyage')}}" aria-describedby="helpId">
                            @if ($errors->has('prix_du_voyage'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('prix_du_voyage')}}
                                </span>
                            @endif
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
