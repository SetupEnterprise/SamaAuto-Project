@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Titre de la page -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ajouter trajet</h1>
</div>

    <!-- Content Row -->
<div class="container">


<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-8">
            @if(session()->has('messageTrajetAjouter'))
                <span class="alert alert-danger">
                {{ session()->get('messageTrajetAjouter') }}
                </span>
            @endif
            @if(session()->has('messageTrajetEgale'))
                <span class="alert alert-danger">
                {{ session()->get('messageTrajetEgale') }}
                </span>
            @endif
        </div>

    </div>

</div>
</div>
<div class="container">
    <div class="row">

    <div class="col-lg-4">

    </div>
    <div class="col-lg-4">
        <form action="{{ route('trajet.store') }}" method="POST">
        @csrf
            <div class="form-group">
              <label for="">Ville de départ *</label>
              <input type="text" name="ville_de_depart" class="form-control" placeholder="Saisir la ville de départ"
                value="{{ old('ville_de_depart')}}" aria-describedby="helpId">
              {{-- Affichage erreur --}}
              @if ($errors->has('ville_de_depart'))
                <div class="alert alert-danger" role="alert">
                    <span>
                        {{ $errors->first('ville_de_depart')}}
                    </span>
                </div>
              @endif
            </div>

            <div class="form-group">
              <label for="">Ville de destination *</label>
              <input type="text" name="ville_de_destination" class="form-control" placeholder="Saisir la ville de destination"
                value="{{ old('ville_de_destination')}}" aria-describedby="helpId">

              @if ($errors->has('ville_de_destination'))
                <div class="alert alert-danger" role="alert">
                    <span>
                        {{ $errors->first('ville_de_destination')}}
                    </span>
                </div>
              @endif
            </div>

            <div class="form-group">
              <label for="">Prix du voyage *</label>
              <input type="text" name="prix_du_voyage" class="form-control" placeholder="Saisir le prix du voyage"
                 value="{{ old('prix_du_voyage')}}" aria-describedby="helpId">
              @if ($errors->has('prix_du_voyage'))
                <div class="alert alert-danger" role="alert">
                    <span>
                        {{ $errors->first('prix_du_voyage')}}
                    </span>
                </div>
              @endif
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
