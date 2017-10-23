<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product\Pizza\Pizza;
use App\Product\Pizza\Ingredient;

class PizzaTest extends TestCase
{

	/**
	 * The name of the pizza we will use for testing
	 */
	const PIZZA_NAME = 'PIZZA_TEST_NAME';

	use RefreshDatabase;

	/**
	 * The pizza we will run our tests against
	 * @var Pizza
	 */
	private $pizza;

	/**
	 * The toppings associated with the pizza
	 * @var Collection
	 */
	private $toppings;

	/**
	 * Sets up the class for tests
	 */
	public function setUp() 
	{
		parent::setUp();

		$this->pizza = factory(Pizza::class)->create([
			'name' => self::PIZZA_NAME
		]);
		factory(Ingredient::class)->create([
			'name' => 'Crust',
			'value' => 'Deep',
			'product_id' => $this->pizza->id
		]);

		$this->toppings = collect();
		$toppings = [
			'Pepperoni',
			'Ham',
			'Cheese'
		];
		foreach($toppings as $topping)
		{
			$this->toppings->push(factory(Ingredient::class)->create([
				'name' => 'Topping',
				'value' => $topping,
				'product_id' => $this->pizza->id
			]));
		}
	}

	/**
	 * Tests to ensure the pizza show view displays the name of the pizza
	 */
	public function testPizzaShowViewDisplaysThePizzaName() 
	{
		$response = $this->get(route('pizza.show',['pizza' => $this->pizza->id]));

		$response->assertSeeText(self::PIZZA_NAME);		
	}

	/**
	 * Tests to ensure the pizza show view is given a pizza
	 */
	public function testPizzaShowViewIsGivenAPizza() 
	{
		$response = $this->get(route('pizza.show',['pizza' => $this->pizza->id]));

		$response->assertViewHas('pizza');
	}

    /**
     * Test to ensure that the pizza show route is operational
     */
    public function testPizzaShowRouteIsOperational()
    {
        $response = $this->get(route('pizza.show',['pizza' => $this->pizza->id]));

        $response->assertSuccessful();
    }

    /**
     * Test to ensure the crust is shown to the user
     */
    public function testCrustIsVisible()
    {
    	$response = $this->get(route('pizza.show',['pizza' => $this->pizza->id]));

    	$response->assertSeeText($this->pizza->getCrust()->name);
    }

    /**
     * Ensures all ingredients are visible on the page
     */
    public function testAllIngredientsAreVisible()
    {
    	$response = $this->get(route('pizza.show',['pizza' => $this->pizza->id]));

    	foreach($this->toppings as $topping) 
    	{
    		$response->assertSeeText($topping->value);
    	}
    }
}
