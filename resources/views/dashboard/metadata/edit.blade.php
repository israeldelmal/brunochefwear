@extends('dashboard.master')

@section('title', 'Escritorio: Editar Metadatos')

@section('content')
	<div class="forms">
		<div>
			<h1>Editar metadatos</h1>
			<form action="{{ url('/escritorio/metadatos/actualizar') }}" method="POST">
				<div>
					<label for="title">Título</label>
					<input type="text" name="title" id="title" placeholder="Título" autocomplete="off" autofocus value="{{ $meta->title }}">
					@if ($errors->has('title'))
						<div>{{ $errors->first('title')}}</div>
					@endif
				</div>
				<div>
					<label for="description">Descripción (155 caracteres)</label>
					<textarea name="description" id="description">{{ $meta->description }}</textarea>
					@if ($errors->has('description'))
						<div>{{ $errors->first('description')}}</div>
					@endif
				</div>
				<div>
					<label for="keywords">Palabras clave</label>
					<input type="text" name="keywords" id="keywords" placeholder="Palabra 1, Palabra 2, Palabra 3" autocomplete="off" autofocus value="{{ $meta->keywords }}">
					@if ($errors->has('keywords'))
						<div>{{ $errors->first('keywords')}}</div>
					@endif
				</div>
				<div>
					<button type="submit">Actualizar</button>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection