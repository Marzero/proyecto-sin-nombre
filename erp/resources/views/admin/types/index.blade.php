@extends('principal')

@section('title', 'lista de tipos')

@section('content')
	<a href="{{ route('admin.types.create') }}" class="btn btn-info">Registrar nuevo tipo</a>
	<table class="table tabler-striped">
		<thead>
			<th>ID</th>
			<th>NOMBRE DEL TIPO</th>
			<th>OPCIONES</th>
		</thead>
		<tbody>
			@foreach($types as $type)
				<tr>
					<td>{{ $type->id }}</td>
					<td>{{ $type->type }}</td>
					<td>

						<a href="" class="btn btn-danger">
							<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
						</a> 
						<a href="{{ route('admin.types.destroy', $type->id) }}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-warning">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
						</a>

					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $types->render() !!}
@endsection