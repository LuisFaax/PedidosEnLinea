<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Product;
use App\Category;

class TestController extends Controller
{
    
    public function welcome()
    {
    	//$products = Product::paginate(9);
    	 //return view('welcome')->with(compact('products')); //compact crea un array asociativo de los arametros que le pasamos

    	 $categories = Category::has('products')->get(); //has - devuelve solo las categorias que tienen productos
    	 return view('welcome')->with(compact('categories')); //compact crea un array asociativo de los arametros que le pasamos


    }
}
