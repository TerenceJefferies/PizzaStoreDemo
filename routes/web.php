<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('pizza/{pizza}', 'PizzaController@show')->name('pizza.show');