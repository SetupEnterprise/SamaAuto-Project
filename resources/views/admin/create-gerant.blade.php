@extends('layouts.master_admin', ['title' => 'Inscrire un Gerant'])

@section('contenu_page')
    <div class="row">
        <div class="col-lg-12">
            
            <form action="{{ route('store.gerant') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            @if(!empty($user))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gérant !</strong> Le Gérant {{ $user->nom ?? ''}} {{ $user->prenom ?? ''}} a ete bien enregistre.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                            <div class="card-header py-3">
                                <h4 class="m-0 font-weight-bold text-primary c">Ajouter un Gérant</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" name="nom" id="" aria-describedby="helpId" required
                                placeholder="nom" value="{{ old('nom')}}">

                            </div>

                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" class="form-control" name="prenom" id="" aria-describedby="helpId" required
                                value="{{ old('prenom')}}" placeholder="prénom">
                            </div>
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="" aria-describedby="helpId" required
                                value="{{ old('adresse')}}" placeholder="adresse">
                            </div>
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="number" class="form-control" name="telephone" id="" aria-describedby="helpId" required
                                value="{{ old('telephone')}}" placeholder="téléphone">
                            </div>
                            <div class="form-group">
                                <label for="">email</label>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" required ="required"
                                value="{{ old('email')}}" placeholder="email">
                            </div>
                            <button type="submit" class="btn btn-primary col-lg-4">Enregistrer</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
   
@endsection