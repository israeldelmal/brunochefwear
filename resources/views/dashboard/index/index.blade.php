@extends('dashboard.master')

@section('title', 'Escritorio')

@section('content')
	<div id="index">
		<ul>
			<li>
				<span>Artículos</span>
				<span>{{ count($arts) }}</span>
			</li>
			<li>
				<span>Elementos</span>
				<span>{{ count($elmts) }}</span>
			</li>
			<li>
				<span>Usuarios</span>
				<span>{{ count($usrs) }}</span>
			</li>
		</ul>
		<div>
			<h1>Últimos artículos</h1>
			<table>
				<thead>
					<tr>
						<td>Artículo</td>
						<td>Autor</td>
						<td>Estatus</td>
						<td>Fecha</td>
					</tr>
				</thead>
				<tbody>
					@if(count($articles) > 0)
						@foreach($articles as $article)
							<tr>
								<td>{{ $article->title }}</td>
								<td>{{ $article->user->name }} {{ $article->user->lastname }}</td>
								<td>
									@if($article->status == true)
										Activo
									@else
										Inactivo
									@endif
								</td>
								<td>{{ $article->created_at->format('d | M | Y') }}</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td>Próximamente</td>
							<td>#</td>
							<td>#</td>
							<td>#</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div>
			<h1>Últimos usuarios</h1>
			<table>
				<thead>
					<tr>
						<td>Nombre</td>
						<td>E-Mail</td>
						<td>Fecha</td>
					</tr>
				</thead>
				<tbody>
					@if(count($users) > 0)
						@foreach($users as $user)
							<tr>
								<td>{{ $user->name }} {{ $user->lastname }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->created_at->format('d | M | Y') }}</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td>Próximamente</td>
							<td>#</td>
							<td>#</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
@endsection