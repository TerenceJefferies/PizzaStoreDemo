<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product\Pizza\Pizza;

class PizzaController extends Controller
{
    
    /**
     * Shows a pizze
     * @param  Pizza  $pizza The pizza to show
     * @return  view The view
     */
	public function show(Pizza $pizza) 
	{
		return view('pizza.show',[
			'pizza' => $pizza
		]);
	}

}
