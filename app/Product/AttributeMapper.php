<?php

namespace App\Product;

class AttributeMapper{

	/**
	 * Mapping attributes to their product types
	 * @var Array
	 */
	protected $mappings = [
		Pizza\Ingredient::class => Pizza\Pizza::class
	];

	/**
	 * Takes an attribute type and returns its associated product type
	 * @param  String $type The attribute type
	 * @return String       The product type
	 */
	public function getProductFromAttribute($type) 
	{
		if(isset($this->mappings[$type]))
		{
			return $this->mappings[$type];
		}

		return null;
	}

	/**
	 * Gets the attribute type from the product type
	 * @param  String type The product type
	 * @return String The attribute type
	 */
	public function getAttributeFromProduct($type) 
	{
		$mapping = array_flip($this->mappings);
		if(isset($mapping[$type]))
		{
			return $mapping[$type];
		}

		return null;
	}

}