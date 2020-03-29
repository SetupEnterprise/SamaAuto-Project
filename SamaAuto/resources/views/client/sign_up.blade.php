@extends('layouts/auth',['title' => 'Inscription'])	

@section('content')
	<div id="space"></div>
	
	<div id="corps-ins">
		<div id="logo">
			<img id="logo-ins" src="{{asset('img/samaautosloganjb1logo.png')}}" width="10%" />
		  </div>
		<div id="contenu">
			<img id="image" src={{asset('img/samaautosloganjb1logo2.png')}} />
  	      	<div id='form-inscription'>
				<form action="{{ route('sign_up') }}" method="POST">
					{{ csrf_field() }}
					
					<h3 style="
						text-align: center;
						font-family: Arial, San-Serif;">Inscription SamaAuto</h3>
					<div class="form-group line">
						<input type="text" name="nom" value="{{ old('nom') ?? ''}}" class="form-control" placeholder="nom" required>
						{!! $errors->first('nom', '<p class="errors">:message</p>')!!}

					</div>

					<div class="form-group">
						<input type="text" name="prenom" value="{{ old('prenom') ?? ''}}" class="form-control" placeholder="prenom" required>
						{!! $errors->first('prenom', '<p class="errors">:message</p>')!!}
					</div>

					<div class="form-group">
						<input type="text" name="adresse" value="{{ old('adresse') ?? ''}}" class="form-control" placeholder="adresse" required>
						{!! $errors->first('adresse', '<p class="errors">:message</p>')!!}
					</div>

					<div class="form-group">
						<input type="tel" name="telephone" value="{{ old('telephone') ?? ''}}" class="form-control" placeholder="Telephone" required>
						{!! $errors->first('telephone', '<p class="errors">:message</p>')!!}
					</div>

					<div class="form-group">
						<input type="text" name="email" value="{{ old('email') ?? ''}}" class="form-control" placeholder="email" required>
						{!! $errors->first('email', '<p class="errors">:message</p>')!!}
					</div>

					<div class="form-group">
						<input type="password" name="passwd" value="{{ old('passwd') ?? ''}}" class="form-control" placeholder="mot de passe" required>
						{!! $errors->first('passwd', '<p class="errors">:message</p>')!!}
					</div>

					<div class="form-group">
						<input type="password" name="passwd_confirmation" value="" class="form-control" placeholder="confirmer mot de passe" required>
						{!! $errors->first('passwd_confirmation', '<p class="errors">:message</p>')!!}
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