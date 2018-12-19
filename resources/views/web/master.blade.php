<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	@yield('meta')
	<meta name="author" content="Evil Studio">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icon.png') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/icons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
	{{-- Navegación --}}
	<nav>
		<div>
			<a class="item-nav" href="#inicio">Bruno</a>
			<a class="item-nav" href="#nosotros">Nosotros</a>
			<a class="item-nav" href="#blog">Blog</a>
			<a class="item-nav" href="#productos">Productos</a>
			<a class="item-nav" href="#contacto">Contacto</a>
		</div>
		<ul>
			<li><a href="https://www.facebook.com/BrunoChefWear/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="https://www.instagram.com/brunochefwear/" target="_blank"><i class="fab fa-instagram"></i></a></li>
		</ul>
	</nav>
	@yield('content')
	{{-- Contacto --}}
	<footer id="contacto">
		<h2>Contacto</h2>
		<div>
			<div>
				<h3>Sucursal Universidad</h3>
				<ul>
					<li>Avenida Universidad, #2749, #Colonia San Felipe, Chihuahua, Chih.</li>
					<li><a href="tel:6144107277">Tel. (614) 410 7277</a></li>
				</ul>
			</div>
			<div>
				<h3>Sucursal Centro</h3>
				<ul>
					<li>Calle Ojinaga, #801, Colonia Centro, Chihuahua, Chih.</li>
					<li><a href="tel:6144133499">Tel. (614) 413 3499</a></li>
				</ul>
			</div>
			<div>
				<h3>Nuestras redes</h3>
				<ul>
					<li><a href="https://www.facebook.com/BrunoChefWear/" target="_blank"><i class="fab fa-facebook-f"></i> / brunochefwear</a></li>
					<li><a href="https://www.instagram.com/brunochefwear/" target="_blank"><i class="fab fa-instagram"></i> / brunochefwear</a></li>
				</ul>
			</div>
			<div>
				<h3>Desarrollado por:</h3>
				<a href="mailto:israelofevil@gmail.com">
					<span class="icon-Evil"></span>
					Evil Studio
				</a>
			</div>
		</div>
	</footer>
	{{-- Botón --}}
	<button>
		<span></span>
		<span></span>
		<span></span>
	</button>
	@yield('js')
</body>
</html>