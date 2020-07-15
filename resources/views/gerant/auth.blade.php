@extends('layouts/auth',['title' => 'Authentification Gerant'])

@section('content')
	<div id="space"></div>

	<div id="corps-ins">

		<div id="contenu">
			<img id="image" src={{asset('img/samaautosloganjb1logo.png')}} />
  	    <div id='form-inscription'>
			<form action="{{ route('gerant.authStore') }}" method="POST">
				{{ csrf_field() }}

				<h5 style="color: greenyellow;text-align: center;font-family: Arial, San-Serif;margin-top : 23%;margin-bottom: 10%; font-weight: bold;">Authentification Gérant SamaAuto</h5>
				<div id="separateur"></div>
				<div class="form-group">
					<input type="text" name="email" value="{{ old('email') ?? ''}}" class="form-control" placeholder="email" required>
					{!! $errors->first('email', '<p class="erreur">:message</p>')!!}

				</div>
				<div id="separateur"></div>
				<div class="form-group">
					<input type="password" name="current_password" value="{{ old('current_password') ?? ''}}" class="form-control" placeholder="password" required>
					{!! $errors->first('current_password', '<p class="erreur">:message</p>')!!}
				</div>
				<div id="separateur"></div>

				<div class="form-group">
					<input type="submit" value="Se Connecter" class="btn btn-success"/>
				</div>
				<div id="separateur"></div>

				<div id="space"></div>
			</form>

			</div>
		</div>
	</div>
@stop