<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //$product->category
    public function category()
    {
    	return $this->belongsTo(Category::class); // 
    }

    // $product->images
    public function images()
    {
    	return $this->hasMany(ProductImage::class);
    }

    public function getFeaturedImageUrlAttribute()
    {
        //imagen destacada
        $featuredImage = $this->images()->where('featured', true)->first();
        if(!$featuredImage)
            $featuredImage = $this->images()->first(); //primera imagen

        if($featuredImage)
        {            
            return $featuredImage->url;
        }

        //default
        return '/images/default.png';

    }

//campo calculado */ accessor
    public function getCategoryNameAttribute()
    {
        if ($this->category)
            return $this->category->name;
        else
            return 'General';

    }

}





