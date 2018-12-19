@extends('dashboard.master')

@section('title', 'Escritorio: Elementos (Nosotros)')

@section('content')
	<div class="forms">
		<div>
			<h1>Listado de Elementos (Nosotros)</h1>
			<table>
				<thead>
					<tr>
						<td>Título</td>
						<td>Autor</td>
						<td>Estatus</td>
						<td>Fecha de publicación</td>
						<td>Acciones</td>
					</tr>
				</thead>
				<tbody>
					@if(count($nosotros) > 0)
						@foreach($nosotros as $about)
							<tr>
								<td>{{ $about->h1 }}</td>
								<td>{{ $about->user->name }} {{ $about->user->lastname }}</td>
								<td>
									@if($about->status == true)
										Activo
									@else
										Inactivo
									@endif
								</td>
								<td>{{ $about->created_at->format('d | M | Y') }}</td>
								<td>
									<a href="{{ url('/escritorio/about/editar/' . $about->id) }}"><i class="fas fa-pencil-alt"></i> Editar</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td>Próximamente</td>
							<td>#</td>
							<td>#</td>
							<td>#</td>
							<td>#</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@endsection