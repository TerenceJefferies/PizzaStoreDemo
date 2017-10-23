<?php

namespace App\Product\Pizza\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ToppingScope implements Scope
{

	/**
	 * Apply the topping scope to the query builder
	 * @param  Builder $builder The query builder
	 * @param  Model   $model   The model
	 */
	public function apply(Builder $builder, Model $model) 
	{
		$builder->where('name','=','Topping');
	}

}