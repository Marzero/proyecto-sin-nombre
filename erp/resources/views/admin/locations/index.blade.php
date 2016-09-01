@extends('principal')

@section('title', 'lista de tipos')

@section('content')
	<a href="{{ route('admin.locations.create') }}" class="btn btn-info">Registrar nueva locacion</a>
	<table class="table tabler-striped">
		<thead>
			<th>ID</th>
			<th>COORDENADA X</th>
			<th>COORDENADA Y</th>
			<th>OPCIONES</th>
		</thead>
		<tbody>
			@foreach($locations as $location)
				<tr>
					<td>{{ $location->id  }}</td>
					<td>{{ $location->X }}</td>
					<td>{{ $location->Y }}</td>
					<td>

						<a href="" class="btn btn-danger">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a> 
						<a href="{{ route('admin.locations.destroy', $location->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-warning">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
						</a>

					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $locations->render() !!}
@endsection