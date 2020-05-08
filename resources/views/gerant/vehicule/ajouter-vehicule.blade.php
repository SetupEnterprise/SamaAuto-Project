@extends('layouts.master_gerant')

@section('contenu_page')

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @if(session()->has('messageMatriculeExiste'))
                <span class="alert alert-danger">
                {{ session()->get('messageMatriculeExiste') }}
            </span>
            @endif
        </div>
        {{-- Affichage d'erreurs --}}


        @if ($categorie->isEmpty())
            <div class="row">
                <div class="col-lg-12">
                    <div id="design_text_voyage" class="text-lg">
                        <h3>Aucune catégorie de véhicule n'est encore enregistrée pour pouvoir ajouter un véhicule</h3>
                        <a class="btn btn-primary" href="{{ route('categorie.create') }}" role="button">
                        Ajouter catégorie véhicule
                        </a>
                    </div>
                </div>
            </div>

        @else
            <form action="{{ route('vehicule.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Ajouter un véhicule</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        {{-- Champs matricule véhicule --}}
                        <div class="form-group">
                            <label for="">Matricule</label>
                            <input type="text" class="form-control" name="matricule" id="" aria-describedby="helpId"
                            value="{{ old('matricule')}}" placeholder="Saisir le matricule du véhicule">
                            @if ($errors->has('matricule'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('matricule')}}
                                </span>
                            @endif
                        </div>
                        {{-- Fin Champs matricule véhicule --}}

                        {{-- Liste des catégories de véhicules --}}
                        <div class="form-group">
                            <label for="">Catégorie véhicule</label>
                            <select class="form-control" name="categories_id" id="selectCategorie">
                            <option value="">-------Veuillez sélectionner une catégorie-------</option>
                            @foreach ($categorie as $c)
                                <option value="{{ $c->categories_id}}">{{ $c->categorie}} </option>
                            @endforeach
                            </select>
                            @if ($errors->has('categories_id'))
                                <span class="custom-control-description text-danger">
                                    {{ $errors->first('categories_id')}}
                                </span>
                            @endif
                        </div>
                        {{-- Fin Liste des catégories de véhicules --}}

                        {{-- Image du véhicule --}}
                        <div class="form-group">
                            <label for="">Image véhicule</label>
                            <input type="file" class="form-control-file" name="image_vehicule" id="" placeholder=""
                            value="{{ old('image_vehicule')}}" aria-describedby="fileHelpId">
                            @if ($errors->has('image_vehicule'))
                                <span class="custom-control-description text-danger">
                                {{ $errors->first('image_vehicule')}}
                                </span>
                            @endif
                        </div>
                        {{-- Fin Image du véhicule --}}

                        {{-- Boutton Submit --}}
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>

            </form>
        @endif

    </div>
</div>

@endsection
