@extends('layouts.master_admin', ['title' => 'Inscrire un Gerant'])

@section('contenu_page')

<!-- Content Row -->
<div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
        <form action="" method="POST">
        @csrf
        
            
               
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>

                <div class="form-group">
                  <label for="">Prénom</label>
                  <input type="text" name="prenom" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>

                <div class="form-group">
                  <label for="">Adresse</label>
                  <input type="text" name="adresse" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>
                
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="text" name="telephone" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>

            </div>

        </form>
    </div>
    <div class="col-lg-2"></div>

</div>
@endsection