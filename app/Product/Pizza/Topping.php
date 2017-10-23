<?php

namespace App\Product\Pizza;

use App\Product\Pizza\Ingredient;
use App\Product\Pizza\Scopes\ToppingScope;

class Topping extends Ingredient
{

	/**
	 * Perform startup actions on the model
	 */
	protected static function boot()
	{
		parent::boot();

		static::addGlobalScope(new ToppingScope());
	}

	/**
	 * Gets the name opf the topping
	 * @return String The name
	 */
	public function getNameAttribute()
	{
		return $this->value;
	}

}