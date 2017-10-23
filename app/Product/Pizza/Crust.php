<?php

namespace App\Product\Pizza;

use App\Product\Pizza\Ingredient;
use App\Product\Pizza\Scopes\CrustScope;

class Crust extends Ingredient
{

	/**
	 * Startup actions for the crust model
	 */
	protected static function boot() 
	{
		parent::boot();

		static::addGlobalScope(new CrustScope());
	}

	/**
	 * Gets the name of the crust
	 * @return String The name
	 */
	public function getNameAttribute()
	{
		return $this->value;		
	}

}