<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product\Pizza\Ingredient;

class PorductAttributeTest extends TestCase
{

	/**
	 * The number of attributes to create for testing
	 */
	const TOTAL_ATTRIBUTES = 10;

	use RefreshDatabase;

	/**
	 * The attributes to use with testing
	 * @var Collection
	 */
	private $attributes;

	/**
	 * The type of attribute to created
	 * @var String
	 */
	private $attributeType = \App\Product\Pizza\Ingredient::class;

	/**
	 * The type of product to create
	 * @var String
	 */
	private $productType = \App\Product\Pizza\Pizza::class;

	/**
	 * Setup method used to prep for testing
	 */
	public function setUp() 
	{
		parent::setUp();

		$product = factory($this->productType)->create();
		$this->attributes = factory($this->attributeType, self::TOTAL_ATTRIBUTES)->create([
			'product_id' => $product->id
		]);
	}

    /**
     * Tests to ensure a product is returned when requesting 
     * an attributes Product
     */
    public function testGettingProductFromAttributeReturnsCorrectType()
    {
		$instance = $this->attributes->first()->getProduct();

    	$this->assertInstanceOf($this->productType, $instance);
    }

    /**
     * Tests to ensure that getting a product from an attribute returns the appropriate
     * product
     */
    public function testGettingProductFromAttributeReturnsCorrectProduct() 
    {
    	$instance = $this->attributes->first()->getProduct();

    	$this->assertEquals($this->attributes->first()->product_id, $instance->id);
    }
}
