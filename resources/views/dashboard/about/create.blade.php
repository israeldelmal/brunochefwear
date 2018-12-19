@extends('dashboard.master')

@section('title', 'Escritorio: Crear elemento')

@section('content')
	<div class="forms">
		<div>
			<h1>Crear elemento</h1>
			<form action="{{ url('/escritorio/about/almacenar') }}" method="POST" enctype="multipart/form-data">
				<div>
					<label for="h1">Título</label>
					<input type="text" name="h1" id="h1" placeholder="Título" autocomplete="off" autofocus value="{{ old('h1') }}">
					@if ($errors->has('h1'))
						<div>{{ $errors->first('h1')}}</div>
					@endif
				</div>
				<div>
					<label for="content">Contenido</label>
					<textarea name="content" id="formcontent">{{ old('content') }}</textarea>
					@if ($errors->has('content'))
						<div>{{ $errors->first('content')}}</div>
					@endif
				</div>
				<div>
					<button type="submit">Crear</button>
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