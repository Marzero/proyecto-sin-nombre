@extends('principal')

@section('title', 'crear tipo')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">Registro de location</div>
  		<div class="panel-body">
 		   
  		{!! Form::open(['route' => 'admin.locations.store', 'method' => 'POST']) !!}
  			<div class="form-group">
  				{!! form::label('X') !!}
  				{!! form::text('X', null, ['class' => 'form-control', 'placeholder' => 'coordenada x','required']) !!}
  			</div>
        <div class="form-group">
          {!! form::label('Y') !!}
          {!! form::text('Y', null, ['class' => 'form-control', 'placeholder' => 'coordenada y','required']) !!}
        </div>
  			<div class="form-group">
  				{!! form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
  			</div>
  		{!! Form::close() !!}



 		</div>
 		<div class="panel-footer">parte del panel de administracion</div>
	</div>
@endsection
