<?php

use Faker\Generator as Faker;

$factory->define(App\Product\Pizza\Pizza::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Pepperoni Pizza', 'Ham Pizza', 'Cheese Pizza']),
        'price' => $faker->randomFloat(2,1,20.00),
        'type' => 'pizza'
    ];
});
