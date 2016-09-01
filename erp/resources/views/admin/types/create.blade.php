@extends('principal')

@section('title', 'crear tipo')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Registro de tipo</div>
  		<div class="panel-body">
 		   
  		{!! Form::open(['route' => 'admin.types.store', 'method' => 'POST']) !!}
  			<div class="form-group">
  				{!! form::label('tipo') !!}
  				{!! form::text('type', null, ['class' => 'form-control', 'placeholder' => 'nombre de tipo','required']) !!}

  			</div>
  			<div class="form-group">
  				{!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
  			</div>
  		{!! Form::close() !!}



 		</div>
 		<div class="panel-footer">parte del panel de administracion</div>
	</div>
@endsection
