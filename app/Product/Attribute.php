<?php

namespace App\Product;

use Illuminate\Database\Eloquent\Model;

abstract class Attribute extends Model
{
    
   	/**
   	 * The table to use when saving product attribute data
   	 * @var string
   	 */
    protected $table = 'product_attributes';

    /**
     * Gets the product related to the attribute
     * @return Mixed The related product
     */
    public function getProduct() 
    {
    	$attributeType = get_called_class();
    	$targetClass = App()['AttributeMapper']->getProductFromAttribute($attributeType);
    	$product = $this->belongsTo($targetClass,'product_id')->first();
    	return $product;
    }

}
