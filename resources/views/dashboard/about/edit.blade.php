@extends('dashboard.master')

@section('title', 'Escritorio: Editar elemento')

@section('content')
	<div class="forms">
		<div>
			<h1>Editar elemento</h1>
			<form action="{{ url('/escritorio/about/actualizar/' . $nosotros->id) }}" method="POST" enctype="multipart/form-data">
				<div>
					<label for="h1">Título</label>
					<input type="text" name="h1" id="h1" placeholder="Título" autocomplete="off" autofocus value="{{ $nosotros->h1 }}">
					@if ($errors->has('h1'))
						<div>{{ $errors->first('h1')}}</div>
					@endif
				</div>
				<div>
					<label for="content">Contenido</label>
					<textarea name="content" id="formcontent">{{ $nosotros->content }}</textarea>
					@if ($errors->has('content'))
						<div>{{ $errors->first('content')}}</div>
					@endif
				</div>
				<div>
					<label for="status">Estatus</label>
					<select name="status" id="status">
						<option value="1">Activo</option>
						<option value="0" @if($nosotros->status == false) selected @endif>Inactivo</option>
					</select>
				</div>
				<div>
					<button type="submit">Actualizar</button>
				</div>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection

@section('js')
	<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'formcontent' );
	</script>
@endsection