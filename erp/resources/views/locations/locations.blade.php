@extends('principal')

@section('title'. 'home locations') 


@section('content')
	<div class="panel-muestra">
		<div class="panel-titulo">
			aqui el titulo

		</div>
  		<div class="panel-cuerpo">
    		{{ $location->X }}
			{{ $location->Y }}
		</div>
	</div>
	
	
@endsection

	{{ $location->X }}
	{{ $location->Y }}

