@if(isset($pizzas))
	@if($pizzas->isNotEmpty())
		<div class="pizza-slider">
			@foreach($pizzas as $pizza)
				<div class="pizza-slider__pizza"> 
					<div class="pizza__name">
						<a href="{{ route('pizza.show',['pizza' => $pizza->id]) }}">{{ $pizza->name }}</a>
					</div>
					<div class="pizza__price">
						{{ $pizza->price }}
					</div>
				</div>
			@endforeach
		</div>
	@endif
@endif
