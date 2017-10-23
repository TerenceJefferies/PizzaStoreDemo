<?php

namespace App\Product\Pizza;

use App\Product\Pizza\Scopes\PizzaScope;
use App\Product\Product;
use App\Product\ProductAttribute;
use App\Product\Pizza\Topping;
use App\Product\Pizza\Crust;

class Pizza extends Product
{

	/**
	 * Startup actions for the pizza model
	 */
	protected static function boot() 
	{
		parent::boot();

		static::addGlobalScope(new PizzaScope());
	}

	/**
	 * Gets all toppings for the pizza
	 * @return Collection A collection containing all of the toppings
	 */
	public function getToppings() 
	{
		$toppings = $this->hasMany(Topping::class,'product_id')->get();
		return $toppings;
	}

	/**
	 * Gets the crust for the pizza
	 * @return Crust The crust
	 */
	public function getCrust() 
	{
		return $this->hasOne(Crust::class,'product_id')->first();
	}

}