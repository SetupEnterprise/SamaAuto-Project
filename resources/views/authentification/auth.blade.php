@extends('layouts.auth', ['title' => 'Authentication'])
@section('content')
<div id="space"></div>

<div id="corps-ins">
	    <div id="contenu">
			<img id="image" src={{asset('img/samaautosloganjb1logo.png')}} />
  	      	<div id='espacesaisi'>
               <form >
									<fieldset>
											<legend><h2><font color='white'>informations de connexion</font></h2></legend>
											<table id='tabsaisi' border='1' >
												<tr bordercolor='silver'>
														<td><font color='white' align='left'>login</font></td>
														<td><input type='text' name='login' required /></td>
												</tr>
												<tr bordercolor='silver'>
														<td><font color='white' align='left'>password</font></td>
														<td><input type='password' name='password' required /></td>
												</tr>

												<tr>
													<td>
														<font color='black' align='left'>
															<button type="submit" class="btn btn-success">Connecter</button>
														</font>
													</td>
												</tr>
										</table>


								</fieldset>
      		</form><br/>
        </div>
	</div>

</div>
@stop
