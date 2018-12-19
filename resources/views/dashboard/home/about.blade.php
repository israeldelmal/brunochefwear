@extends('dashboard.master')

@section('title', 'Escritorio: Nosotros')

@section('content')
	<div class="forms">
		<div>
			<h1>Editar Nosotros</h1>
			<form action="{{ url('/escritorio/nosotros/actualizar') }}" method="POST" enctype="multipart/form-data">
				<div>
					<label for="h1">Título</label>
					<input type="text" name="h1" id="h1" autocomplete="off" placeholder="Título de la nosotros" value="{{ $about->h1 }}">
					@if ($errors->has('h1'))
						<div>{{ $errors->first('h1')}}</div>
					@endif
				</div>
				<div>
					<label for="img">Imagen de Fondo</label>
					<input type="file" name="img" id="img">
					@if ($errors->has('img'))
						<div>{{ $errors->first('img')}}</div>
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