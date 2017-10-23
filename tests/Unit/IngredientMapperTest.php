<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Product\Pizza\IngredientMapper;
use App\Product\Pizza\Topping;

class IngredientMapperTest extends TestCase
{
    /**
     * Tests to ensure the ingredient mapper returns the appropriate type
     * when asked
     */
    public function testIngredientMapperReturnsCorrectType()
    {
    	$mapper = new IngredientMapper();
    	$type = $mapper->getIngredientFromType('Topping');
    	$instance = App()->make($type);
    	$this->assertInstanceOf(Topping::class, $instance);
    }
}
