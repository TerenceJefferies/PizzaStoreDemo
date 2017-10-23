<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product\Pizza\Pizza;

class HomeController extends Controller
{

   	/**
   	 * Called on the index page (home page)
   	 * @return view The view to render
   	 */
	public function index()
	{
		return view('welcome',[
			'pizzas' => Pizza::all()
		]);
	}

}
