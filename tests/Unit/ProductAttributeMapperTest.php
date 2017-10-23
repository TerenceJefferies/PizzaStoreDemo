<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product\AttributeMapper;
use App\Product\Pizza\Pizza;
use App\Product\Pizza\Ingredient;

class ProductAttributeMapperTest extends TestCase
{

	/**
	 * The product class to use with testing
	 * @var Product
	 */
	private $productClass = Pizza::class;

	/**
	 * The attribute class to use with testing
	 * @var Attribute
	 */
	private $attributeClass = Ingredient::class;

	/**
	 * The mapper to use with testing
	 * @var AttributeMapper
	 */
	private $mapper;

	/**
	 * Sets up the instance for testing
	 */
	public function setUp() 
	{
		$this->mapper = new AttributeMapper();
	}

    /**
     * Tests to ensure requesting a product type from an attribute type 
     * returns the appropriate type.
     */
    public function testProductFromAttributeReturnsCorrectType()
    {
    	$instanceName = $this->mapper->getProductFromAttribute($this->attributeClass);
    	$instance = new $instanceName();

    	$this->assertInstanceOf($this->productClass, $instance);
    }

    /**
     * Test to ensure getting a an attribute from a product returns the correct type
     */
    public function testAttributeFromProductReturnsCorrectType() 
    {
    	$instanceName = $this->mapper->getAttributeFromProduct($this->productClass);
    	$instance = new $instanceName();

    	$this->assertInstanceOf($this->attributeClass, $instance);
    }

}
