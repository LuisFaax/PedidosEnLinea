<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  //mass asigment
  protected $fillable = ['name', 'description'];

  //validation
	public static $rules = [
   		'name' => 'required|min:3',
   		'description' => 'max:250'
   		
   	];


    // $category->products
    public function products()
    {
    	return $this->hasMany(Product::class); //una categoria tiene muchos productos
    }

    public function getFeaturedImageUrlAttribute()
    {
      if($this->image){
          return '/images/categories/' . $this->image;
      }else{

        $firstProduct = $this->products()->first();    
        if($firstProduct)   
            return $firstProduct->featured_image_url;
          else
            return '/images/default.png';
      }

    }
}
