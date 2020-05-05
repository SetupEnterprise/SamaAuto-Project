@extends('layouts.master_gerant')

@section('contenu_page')
    <!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        {{-- Affichage erreur --}}
        <div class="row">

            @if(session()->has('messagePrixNegatif'))
                <span class="alert alert-danger">
                {{ session()->get('messagePrixNegatif') }}
                </span>
            @endif
            @if(session()->has('messageTrajetExiste'))
                <span class="alert alert-danger">
                {{ session()->get('messageTrajetExiste') }}
                </span>
            @endif
        </div>

        <form action="{{ route('trajet.update',['trajet'=>$voirTrajet->trajets_id]) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Modifier le trajet</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Ville de départ *</label>
                            <input type="text" name="ville_de_depart" class="form-control" placeholder="Saisir la ville de départ" aria-describedby="helpId"
                            value="{{ old('ville_de_depart') ? old('ville_de_depart'): $voirTrajet->point_depart}}">
                            @if ($errors->has('ville_de_depart'))
                                <span class="custom-control-description text-danger">
                                {{ $errors->first('ville_de_depart')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Ville de destination *</label>
                            <input type="text" name="ville_de_destination" class="form-control" placeholder="Saisir la ville de destination" aria-describedby="helpId"
                            value="{{ old('ville_de_destination') ? old('ville_de_destination'): $voirTrajet->point_arrivee}}">

                            @if ($errors->has('ville_de_destination'))
                                <span class="custom-control-description text-danger">
                                {{ $errors->first('ville_de_destination')}}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Prix du voyage *</label>
                            <input type="text" name="prix_du_voyage" class="form-control" placeholder="Saisir le prix du voyage" aria-describedby="helpId"
                            value="{{ old('prix_du_voyage') ? old('prix_du_voyage'): $voirTrajet->prix}}">

                            @if ($errors->has('prix_du_voyage'))
                                <span class="custom-control-description text-danger">
                                {{ $errors->first('prix_du_voyage')}}
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
