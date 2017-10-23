<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Product\AttributeMapper;
use App\Product\Pizza\IngredientMapper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('AttributeMapper', function($app) {
            return new AttributeMapper();
        });

        $this->app->singleton('IngredientMapper', function($app) {
            return new IngredientMapper();
        });
    }
}
