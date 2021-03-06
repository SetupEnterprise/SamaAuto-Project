@extends('layouts/auth',['title' => 'Inscription'])

@section('content')
	<div id="space"></div>

	<div id="corps-ins">

		<div id="contenu">
			<img id="image" src={{asset('img/samaautosloganjb1logo.png')}} />
  	    <div id='form-inscription'>
					<form action="{{ route('sign_up') }}" method="POST">
						{{ csrf_field() }}

						<h3 style="color: white;text-align: center;font-family: Arial, San-Serif;">Inscription SamaAuto</h3>
						<div class="form-group line">
							<input type="text" name="nom" value="{{ old('nom') ?? ''}}" class="form-control" placeholder="nom" required>
							{!! $errors->first('nom', '<p class="erreur">:message</p>')!!}

						</div>

						<div class="form-group">
							<input type="text" name="prenom" value="{{ old('prenom') ?? ''}}" class="form-control" placeholder="prenom" required>
							{!! $errors->first('prenom', '<p class="erreur">:message</p>')!!}
						</div>

						<div class="form-group">
							<input type="text" name="adresse" value="{{ old('adresse') ?? ''}}" class="form-control" placeholder="adresse" required>
							{!! $errors->first('adresse', '<p class="erreur">:message</p>')!!}
						</div>

						<div class="form-group">
							<input type="tel" name="telephone" value="{{ old('telephone') ?? ''}}" class="form-control" placeholder="Telephone" required>
							{!! $errors->first('telephone', '<p class="erreur">:message</p>')!!}
						</div>

						<div class="form-group">
							<input type="text" name="email" value="{{ old('email') ?? ''}}" class="form-control" placeholder="email" required>
							{!! $errors->first('email', '<p class="erreur">:message</p>')!!}
						</div>

						<div class="form-group">
							<input type="password" name="passwd" value="{{ old('passwd') ?? ''}}" class="form-control" placeholder="mot de passe" required>
							{!! $errors->first('passwd', '<p class="erreur">:message</p>')!!}
						</div>

						<div class="form-group">
							<input type="password" name="passwd_confirmation" value="" class="form-control" placeholder="confirmer mot de passe" required>
							{!! $errors->first('passwd_confirmation', '<p class="erreur">:message</p>')!!}
						</div>
						<div class="form-group">
						<input type="submit" value="S'inscrire" class="btn btn-success"/>
						</div>
						<div id="space"></div>
					</form>

			</div>
		</div>
	</div>
@stop