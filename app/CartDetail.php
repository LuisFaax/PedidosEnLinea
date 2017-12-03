<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    public function product()
    {
    	// CartDetail N --------- 1 Product
    	return $this->belongsTo(Product::class);
    }
}
