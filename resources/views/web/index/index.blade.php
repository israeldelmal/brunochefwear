@extends('web.master')

@section('title', $meta->title)

@section('meta')
	<meta name ="description" content="{{ $meta->description }}">
	<meta name ="keywords" content="{{ $meta->keywords }}">
	<meta property="og:url" content="https://brunochefwear.com/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{ $meta->title }}">
	<meta property="og:description" content="{{ $meta->description }}">
	<meta property="og:image" content="{{ asset('assets/images/cabecera/' . $header->img) }}">
@endsection

@section('content')
	{{-- Cabecera --}}
	<header id="inicio" data-parallax="scroll" data-image-src="{{ asset('assets/images/cabecera/' . $header->img) }}">
		<h1>{{ $header->h1 }}</h1>
		<sub>{{ $header->sub }}</sub>
		<p>{{ $header->p }}</p>
	</header>
	{{-- Nosotros --}}
	<section id="nosotros" data-parallax="scroll" data-image-src="{{ asset('assets/images/nosotros/' . $about->img) }}">
		<h1>{{ $about->h1 }}</h1>
		<div>
			@foreach($nosotros as $nos)
				<div>
					<h2>{{ $nos->h1 }}</h2>
					{!! $nos->content !!}
				</div>
			@endforeach
		</div>
	</section>
	{{-- Blog --}}
	<main id="blog">
		@if(count($articles) > 0)
			@foreach($articles as $article)
				<article>
					<header style="background-image: url('{{ asset('assets/images/articulos/' . $article->img) }}');">
						<img src="{{ asset('assets/images/articulos/' . $article->img) }}" alt="Imagen de {{ $article->title }}">
						<time>{{ $article->created_at->format('d | M | Y') }}</time>
					</header>
					<div>
						<h1>{{ $article->title }}</h1>
						<p>{{ $article->description }}</p>
						<div>
							<a href="{{ url('/articulos/' . $article->slug) }}">Leer más</a>
						</div>
					</div>
				</article>
			@endforeach
		@else
			<span>Próximamente</span>
		@endif
	</main>
	{{-- Productos --}}
	<section id="productos">
		<div data-parallax="scroll" data-image-src="{{ asset('assets/images/filipinas/' . $contact->img) }}">
			<h1>{{ $contact->h1 }}</h1>
		</div>
		<div>
			<form action="#" method="POST">
				<div>
					<label for="filipina" class="active">
						<span class="icon-Filipina"></span>
						<input type="radio" name="product" id="filipina" value="1" checked>
					</label>
					<label for="pants">
						<span class="icon-Pantalon"></span>
						<input type="radio" name="product" id="pants" value="2">
					</label>
					<label for="hat">
						<span class="icon-Sombrero"></span>
						<input type="radio" name="product" id="hat" value="3">
					</label>
				</div>
				<div>
					<input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off">
				</div>
				<div>
					<input type="text" name="lasyname" id="lasyname" placeholder="Apellido o Apellidos" autocomplete="off">
				</div>
				<div>
					<input type="email" name="email" id="email" placeholder="Correo electrónico: ejemplo@ejemplo.com" autocomplete="off">
				</div>
				<div>
					<input type="tel" name="tel" id="tel" placeholder="Teléfono" autocomplete="off">
				</div>
				<div>
					<input type="text" name="company" id="company" placeholder="Empresa" autocomplete="off">
				</div>
				<div>
					<input type="number" name="quantity" id="quantity" placeholder="Cantidad" autocomplete="off">
				</div>
				<div>
					<textarea name="details" id="details" rows="3" placeholder="Detalles"></textarea>
				</div>
				<div>
					<button type="submit">Cotizar</button>
				</div>
			</form>
		</div>
	</section>
@endsection

@section('js')
	{{-- JavaScript --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('assets/js/parallax.js') }}"></script>
	<script src="{{ asset('assets/js/aos.js') }}"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
@endsection