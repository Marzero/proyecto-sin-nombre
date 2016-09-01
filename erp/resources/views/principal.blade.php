<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') / Panel de Administracion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/Cssmio/general.css') }}">
	<!--<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">-->
</head>
<body>
	@include('partes.navbar')
	<section id="cuerpo">
		@include('flash::message')
		@yield('content')
	</section>

	<footer>
codigo base de tesis
	</footer>
	<script src="{{asset('plugins/jquery/js/jquery-3.1.0.js') }}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>