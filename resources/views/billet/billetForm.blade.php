@extends('layouts.home')

@section('content')
<div id="corps">
      <div id="contenu">
			<img class="img-fluid mb-5 d-block mx-auto" src={{asset('img/samaautosloganjb1logo.png')}} />
      </div>
      <div class="container" style="margin-top: 40px;">
        <div class="row">
          <div class="col">
          <h4>Selectionner votre ligne</h4>
          <ul class="list-group-item">
            <a href=""><li class="list-group">Horaire Thies</li> </a>
            <a href="#"><li class="list-group">Horaire bambey</li> </a>
            <a href="#"><li class="list-group">Horaire Saint Louis</li> </a>
          </ul>
          </div>
          <div class="col">
            <h4 class="text-lg-center">Horaire de Thies</h4>
            <p class="text-lg-center">Heure de depart: 20h30</p>
            <p class="text-lg-center">Numero: 77 214 73 32</p>
            <p class="text-lg-center">Prix: 2500 FCFA</p>
            <p class="text-lg-center">Matricule: DK 0206 D</p>
            <p class="text-lg-center"> 5 places restantes</p>
          </div>
        </div>
      <div  id="info">
              <form method="POST" action="{{ route('billetForm') }}">
              {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Saisir votre prenom">
                    {!! $errors->first('prenom', '<p class="erreur">:message</p>')!!}
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Saisir votre nom">
                    {!! $errors->first('nom', '<p class="erreur">:message</p>')!!}
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Numero du client pour l'achat">
                    {!! $errors->first('telephone', '<p class="erreur">:message</p>')!!}
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="exampleFormControlInput4" placeholder="Nombre de billets">
                  </div>
                  <button class="btn btn-success" type="submit">Valider</button>
                  <button class="btn btn-danger" type="reset">Annuler</button>
                  </div>
                </form>
          </div>
        </div>
  </div>
  
@stop
             