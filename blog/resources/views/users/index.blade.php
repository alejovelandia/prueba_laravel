

@extends('layout')

@section('content')


	<HEAD>DIEGO ES RE LOK</HEAD>

		<h1>{{ $title }} </h1>
	  
			
		<ul>
			@forelse ($users as $user)
					
					<li>{{ $user }}</li>
			@empty
					<li>No hay usuarios registrados.</li>
			@endforelse

		</ul>

	
@endsection('content')
	
@section('sidebar')
	@parent

	<h2> barra personalizada</h2>
	
@endsection('sidebar');