<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
	<main id="errors" style="background-image: url('{{ asset('assets/images/cabecera/fondo.jpg') }}');">
		<h1>@yield('h1')</h1>
		<sub>Serás redirigido</sub>
	</main>
</body>
</html>