<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('css/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('css/assets/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('css/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('css/assets/css/demo.css') }}" rel="stylesheet" />
 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>{{$title}}-SamaAuto</title>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>