<?php

namespace App\Product\Pizza;

use App\Product\Pizza\Topping;

class IngredientMapper
{

	protected $mappings = [
		'Topping' => Topping::class
	];

	/**
	 * Converts the textual representation of an ingredient into a type
	 * @param  String $type The representation
	 * @return String       The type
	 */
	public function getIngredientFromType($type)
	{
		if(isset($this->mappings[$type]))
		{
			return $this->mappings[$type];
		}
		return null;
	}

}