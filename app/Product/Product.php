<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

abstract class Product extends Model
{
    
    /**
     * The table to use when saving product data
     * @var string
     */
    protected $table = 'products';

    /**
     * Gets the attributes from the product
     * @return Collection The attributes associated with the product
     */
    public function getAttributes() 
    {
    	$productType = get_called_class();

    	$targetClass = App()['AttributeMapper']->getAttributeFromProduct($productType);
    	$attributes = $this->hasMany($targetClass, 'product_id')->get();
    	return $attributes;
    }

}
