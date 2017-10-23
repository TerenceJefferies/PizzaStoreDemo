<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product\Pizza\Pizza;

class HomeTest extends TestCase
{

	/**
	 * The name to assign the pizza we will test against
	 */
	const PIZZA_NAME = 'PIZZA_FEATURE_TEST';

	use RefreshDatabase;

	/**
	 * A pizza that can be checked for in our tests
	 * @var Pizza
	 */
	private $pizza;

	/**
	 * Performs setup method, prep class for testing
	 */
	public function setUp() 
	{
		parent::setUp();

		$this->pizza = factory(Pizza::class)->create([
			'name' => self::PIZZA_NAME
		]);
	}

	/**
	 * Tests to ensure the homepage rendered our test pizza
	 */
	public function testHomepageShowsPizzaNames() 
	{
		$response = $this->get(route('home'));

		$response->assertSeeText(self::PIZZA_NAME);
	}

    /**
     * Test to ensure the homepage route is operational
     */
    public function testHomepageRouteIsOperational()
    {
    	$response = $this->get(route('home'));

    	$response->assertSuccessful();
    }

    /**
     * Tests to ensure the homepage is given pizzas to show
     */
  	public function testHomepageIsGivenPizzas() 
  	{
  		$response = $this->get(route('home'));

		$response->assertViewHas('pizzas');  		
  	}
}
