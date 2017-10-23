<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;

use App\Product\Pizza\Pizza;
use App\Product\Pizza\Ingredient;
use App\Product\Pizza\Topping;
use App\Product\Pizza\Crust;

class ProductPizzaTest extends TestCase
{

	/**
	 * The total number of Pizzas to create for testing
	 */
	const TOTAL_PIZZAS = 10;

	use RefreshDatabase;

	/**
	 * The pizzas we intend to use with our tests
	 * @var Collection
	 */
	protected $pizzas;

	/**
	 * Setup method used to prep for testing
	 */
	public function setUp() 
	{
		parent::setUp();

		$this->pizzas = factory(Pizza::class, self::TOTAL_PIZZAS)->create();
	}

    /**
     * Tests to ensure that getting toppings from a pizza will return only toppings
     */
    public function testGettingToppingsReturnsOnlyToppings() 
    {
    	$pizza = factory(Pizza::class)->create();
    	$topping = factory(Ingredient::class)->create([
    		'name' => 'Topping',
    		'value' => 'Pepperoni',
    		'product_id' => $pizza->id
    	]);
    	$crust = factory(Ingredient::class)->create([
    		'name' => 'Crust',
    		'value' => 'Thin',
    		'product_id' => $pizza->id
    	]);
    	$toppings = $pizza->getToppings();

    	$this->assertEquals(1,$toppings->count());
    	$this->assertContainsOnlyInstancesOf(Topping::class, $toppings);
    }

    /**
     * Test to ensure asking for the crust of a pizza returns the correct type
     */
    public function testGettingCrustReturnsOnlyTheCorrectType()
    {   
        $pizza = factory(Pizza::class)->create();
        $topping = factory(Ingredient::class)->create([
            'name' => 'Topping',
            'value' => 'Pepperoni',
            'product_id' => $pizza->id
        ]);
        $crust = factory(Ingredient::class)->create([
            'name' => 'Crust',
            'value' => 'Thin',
            'product_id' => $pizza->id
        ]);
        $crust = $pizza->getCrust();

        $this->assertInstanceOf(Crust::class, $crust);
    }
}
