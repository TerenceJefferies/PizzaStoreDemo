<?php

use Illuminate\Database\Seeder;

use App\Product\Pizza\Pizza;
use App\Product\Pizza\Ingredient;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(Pizza::class, 10)->create()->each(function($pizza) {
        	factory(Ingredient::class, 3)->create([//Give our pizzas some ingredients
        		'product_id' => $pizza->id
        	]);
            factory(Ingredient::class)->create([
                'name' => 'Crust',
                'value' => array_random(['Thin','Deep','Standard','Stuffed']),
                'product_id' => $pizza->id
            ]);
        });
    }
}
