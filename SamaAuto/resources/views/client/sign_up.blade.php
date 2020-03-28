@extends('layouts/client',['title' => 'Inscription'])	

@section('content')
	<h3>Inscription SamaAuto</h3>
	<form action="{{ route('sign_up') }}" method="POST" class="form-group">
		{{ csrf_field() }}
		
		{!! $errors->first('nom', '<p class="errors">:message</p>')!!}
		<input type="text" name="nom" value="{{ old('nom') ?? ''}}" class="form-control" placeholder="nom"><br><br>
		
		{!! $errors->first('prenom', '<p class="errors">:message</p>')!!}
		<input type="text" name="prenom" value="{{ old('prenom') ?? ''}}" class="form-control" placeholder="prenom"><br><br>
		
		{!! $errors->first('adresse', '<p class="errors">:message</p>')!!}
		<input type="text" name="adresse" value="{{ old('adresse') ?? ''}}" class="form-control" placeholder="adresse"><br><br>
		
		{!! $errors->first('telephone', '<p class="errors">:message</p>')!!}
		<input type="text" name="telephone" value="{{ old('telephone') ?? ''}}" class="form-control" placeholder="Telephone"><br><br>
		
		{!! $errors->first('email', '<p class="errors">:message</p>')!!}
		<input type="text" name="email" value="{{ old('email') ?? ''}}" class="form-control" placeholder="email"><br><br>
		
		{!! $errors->first('passwd', '<p class="errors">:message</p>')!!}
		<input type="password" name="passwd" value="{{ old('passwd') ?? ''}}" class="form-control" placeholder="mot de passe"><br><br>
		
		{!! $errors->first('passwd_confirmation', '<p class="errors">:message</p>')!!}
		<input type="password" name="passwd_confirmation" value="" class="form-control" placeholder="confirmer mot de passe"><br><br>
		
		<input type="submit" value="S'inscrire" class="btn btn-success"/>
	</form>
@stop