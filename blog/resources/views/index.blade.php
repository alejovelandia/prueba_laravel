

@extends('layout')



@section('content')


	

		<h1>{{ $title }} </h1>
	  
			
		<ul>


			@forelse ($users as $user)
					
					
					<li>{{ $user->name }}, ({{ $user->email }})</li>
			@empty
					<li>No hay usuarios registrados.</li>
			@endforelse

		</ul>

	
@endsection('content')
	
@section('sidebar')
	@parent

	<h2> barra personalizada</h2>

@endsection('sidebar');