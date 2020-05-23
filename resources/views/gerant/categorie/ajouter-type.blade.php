@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        {{-- Affichage d'erreurs --}}
        @if(session()->has('messageCategorieNegatif'))
            <span class="alert alert-danger">
            {{ session()->get('messageCategorieNegatif') }}
            </span>
        @endif
        @if(session()->has('messageCategorieExiste'))
            <span class="alert alert-danger">
            {{ session()->get('messageCategorieExiste') }}
            </span>
        @endif
        <form action="{{ route('categorie.store') }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Ajouter catégorie véhicule</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Catégorie véhicule*</label>
                            <input type="text" class="form-control" name="categorie" id="" aria-describedby="helpId"
                            placeholder="Bus, 7 places, mini car, ..." value="{{ old('categorie')}}">

                            @if ($errors->has('categorie'))
                                <span class="custom-control-description text-danger">
                                {{ $errors->first('categorie')}}
                                </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="">Nombre de places*</label>
                            <input type="text" class="form-control" name="nombre_de_places" id="" aria-describedby="helpId"
                            value="{{ old('nombre_de_places')}}" placeholder="">

                                @if ($errors->has('nombre_de_places'))
                                    <span class="custom-control-description text-danger">
                                    {{ $errors->first('nombre_de_places')}}
                                    </span>
                                @endif
                        </div>
                        <button type="submit" class="btn btn-primary col-lg-4">Enregistrer</button>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
