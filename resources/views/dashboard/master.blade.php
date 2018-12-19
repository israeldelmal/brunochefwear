<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/images/icon.png') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>
<body>
	{{-- Navegación --}}
	<nav>
		<div>
			<a href="{{ url('/escritorio/usuario/' . Auth::user()->id) }}">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</a>
			<a href="{{ url('/escritorio') }}"><i class="fas fa-tachometer-alt"></i></a>
			<a href="{{ url('/') }}" target="_blank"><i class="fas fa-home"></i></a>
			<a href="{{ url('/autenticacion/cerrar-sesion') }}"><i class="fas fa-power-off"></i></a>
		</div>
	</nav>
	{{-- Menú --}}
	<aside>
		<div>
			<h1>Escritorio</h1>
		</div>
		<ul>
			<li><span>Generales</span></li>
			<li>
				<a href="#"
					@if(Route::is('escritorio/usuarios')) class="active" @endif
					@if(Route::is('escritorio/editar')) class="active" @endif
				><span class="fas fa-users-cog"></span> Usuarios</a>
				<ul
					@if(Route::is('escritorio/usuarios')) class="show" @endif
					@if(Route::is('escritorio/editar')) class="show" @endif
				>
					<li><a
						@if(Route::is('escritorio/usuarios')) class="active" @endif
						@if(Route::is('escritorio/editar')) class="active" @endif
						href="{{ url('/escritorio/usuarios') }}"><span class="fas fa-list-ul"></span> Lista</a></li>
				</ul>
			</li>
			<li>
				<a href="#" @if(Route::is('escritorio/metadatos')) class="active" @endif>
					<span class="fas fa-server"></span> Metadatos</a>
					<ul @if(Route::is('escritorio/metadatos')) class="show" @endif>
						<li><a @if(Route::is('escritorio/metadatos')) class="active" @endif href="{{ url('/escritorio/metadatos') }}"><span class="fas fa-pen-fancy"></span> Actualizar</a></li>
					</ul>
			</li>
		</ul>
		<ul>
			<li><span>Web</span></li>
			<li>
				<a href="#"
					@if(Route::is('escritorio/cabecera')) class="active" @endif
					@if(Route::is('escritorio/nosotros')) class="active" @endif
					@if(Route::is('escritorio/contacto')) class="active" @endif
				><span class="fas fa-cogs"></span> Inicio</a>
				<ul
					@if(Route::is('escritorio/cabecera')) class="show" @endif
					@if(Route::is('escritorio/nosotros')) class="show" @endif
					@if(Route::is('escritorio/contacto')) class="show" @endif
				>
					<li><a @if(Route::is('escritorio/cabecera')) class="active" @endif href="{{ url('/escritorio/cabecera') }}"><span class="fas fa-pen-fancy"></span> Cabecera</a></li>
					<li><a @if(Route::is('escritorio/nosotros')) class="active" @endif href="{{ url('/escritorio/nosotros') }}"><span class="fas fa-pen-fancy"></span> Nosotros</a></li>
					<li><a @if(Route::is('escritorio/contacto')) class="active" @endif href="{{ url('/escritorio/contacto') }}"><span class="fas fa-pen-fancy"></span> Contacto</a></li>
				</ul>
			</li>
			<li>
				<a href="#"
					@if(Route::is('escritorio/about')) class ="active" @endif
					@if(Route::is('escritorio/about/crear')) class="active" @endif
					@if(Route::is('escritorio/about/editar')) class="active" @endif
				><span class="fas fa-address-card"></span> Nosotros</a>
				<ul
					@if(Route::is('escritorio/about')) class="show" @endif
					@if(Route::is('escritorio/about/crear')) class="show" @endif
					@if(Route::is('escritorio/about/editar')) class="show" @endif
				>
					<li><a @if(Route::is('escritorio/about')) class="active" @endif href="{{ url('/escritorio/about') }}"><span class="fas fa-list-ul"></span> Lista</a></li>
					<li><a @if(Route::is('escritorio/about/crear')) class="active" @endif href="{{ url('/escritorio/about/crear') }}"><span class="fas fa-plus"></span> Añadir</a></li>
				</ul>
			</li>
			<li>
				<a href="#"
					@if(Route::is('escritorio/articulos')) class="active" @endif
					@if(Route::is('escritorio/articulos/crear')) class="active" @endif
					@if(Route::is('escritorio/articulos/editar')) class="active" @endif
				><span class="fas fa-newspaper"></span> Blog</a>
				<ul
					@if(Route::is('escritorio/articulos')) class="show" @endif
					@if(Route::is('escritorio/articulos/crear')) class="show" @endif
					@if(Route::is('escritorio/articulos/editar')) class="show" @endif
				>
					<li><a @if(Route::is('escritorio/articulos')) class="active" @endif href="{{ url('/escritorio/articulos') }}"><span class="fas fa-list-ul"></span> Lista</a></li>
					<li><a @if(Route::is('escritorio/articulos/crear')) class="active" @endif href="{{ url('/escritorio/articulos/crear') }}"><span class="fas fa-plus"></span> Añadir</a></li>
				</ul>
			</li>
		</ul>
	</aside>
	{{-- Contenido --}}
	<section>
		@yield('content')
	</section>
	{{-- JavaScript --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/dashboard.js') }}"></script>
	@yield('js')
</body>
</html>