<?php

use Illuminate\Database\Seeder;
use App\Product; 
use App\Category; 
use App\ProductImage; 

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factories
        //factory(Product::class)->make(); //crea objetos
        //factory(ProductImage::class, 200)->create(); //crea objetos y ademas lo guarda en database

       /*
       factory(Category::class, 5)->create(); //creamos y guardamos 5 categorias
        factory(Product::class, 100)->create(); //creamos y guardamos 100 productos
     	factory(ProductImage::class, 200)->create(); //creamos y guardamos 200 images
        */

        $categories = factory(Category::class, 4)->create(); //creamos y guardamos 5 categorias
        $categories->each(function ($c) { //iteramos c/categoria
            $products = factory(Product::class, 5)->make(); //generamos 20 productos
            $c->products()->saveMany($products); //asociamos los 20 productos a c/categoria guardando en  DB

            $products->each(function ($p){ //iteramos cada producto
                $images = factory(ProductImage::class, 3)->make(); //creamos 5 imagenes
                $p->images()->saveMany($images); //a c/producto le asociamos las 5 imagenes y guardamos en DB

            });
        });
    }
}
