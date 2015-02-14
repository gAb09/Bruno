<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Identification</title>
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="/assets/tresorerie/css/base.css" rel="stylesheet" type="text/css">
	<link href="/assets/tresorerie/css/layout.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
	<script src="/assets/tresorerie/js/tresorerie.js"></script>

</head>

<body>

		<!-- - - - - - - - - - - - - - - - Messages - - - - - - - - - - - - - - -->
			@include('shared/views/messages')



		<div class="login">
			<h2>Bienvenue, vous pouvez vous identifiez</h2>
			<div style="margin-left: 155px">
				{{ Form::open(array('action' => 'IdentificationController@identification', 'method' => 'post')) }}

				@if ($errors->has('login'))
				{{ Form::label('login', $errors->first('login'), array('class' => 'erreur')) }}
				{{ Form::text('login', 'Saisissez votre Login', array('class' => 'erreur', 'onClick' => "if(this.value=='Saisissez votre Login')this.value='';")) }}

				@else
				{{ Form::label('login', 'Login')}}
				{{ Form::text('login', 'Saisissez votre Login', array('class' => '', 'onClick' => "if(this.value=='Saisissez votre Login')this.value='';")) }}

				@endif



				@if ($errors->has('password'))
				{{ Form::label('password', $errors->first('password'), array('class' => 'erreur')) }}
				{{ Form::password('password', array('class' => 'erreur')) }}

				@else
				{{ Form::label('password', 'Mot de passe')}}
				{{ Form::password('password', array('class' => '')) }}

				@endif


				<br />
				{{ Form::submit('Envoyer') }}
				{{ Form::close() }}
			</div>
		</div>
	</body>
	</html>