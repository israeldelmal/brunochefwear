@extends('dashboard.master')

@section('title', 'Escritorio: Contacto')

@section('content')
	<div class="forms">
		<div>
			<h1>Editar Contacto</h1>
			<form action="{{ url('/escritorio/contacto/actualizar') }}" method="POST" enctype="multipart/form-data">
				<div>
					<label for="h1">Título</label>
					<textarea name="h1" id="h1" rows="3" placeholder="Título de Contacto">{{ $contact->h1 }}</textarea>
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