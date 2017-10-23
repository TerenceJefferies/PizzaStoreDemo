<?php

use Faker\Generator as Faker;

use App\Product\Pizza\Pizza;
use App\Product\Pizza\Ingredient;

$factory->define(Ingredient::class, function (Faker $faker) {
    return [
    	'name' => 'Topping',
        'value' => $faker->randomElement(['Pepperoni','Ham','Cheese','Mushroom'])
    ];
});
