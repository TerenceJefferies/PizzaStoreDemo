@extends('layouts.common')

@section('content')

	<h1>{{ $pizza->name }}</h1>
	
	<p>Crust: {{ $pizza->getCrust()->name }}</p>
	@if($pizza->getToppings()->isNotEmpty())
		<p>Our Excellent {{ $pizza->name }} contains the following toppings:</p>
		<ul>
			@foreach($pizza->getToppings() as $topping)
				<li>{{ $topping->name }}</li>
			@endforeach
		</ul>
	@endif



@endsection('content')