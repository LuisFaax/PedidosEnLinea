<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\CartDetail;
use App\ProductImage;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
   public function index() //listado
   {
   	$products = Product::paginate(10);
   		return view('admin.products.index')->with(compact('products'));
   }

    public function create() //formulario de registro 
   {
    $categories = Category::orderBy('name')->get();
   		return view('admin.products.create')->with(compact('categories'));
   }

    public function store(Request $request) //registrar nuevos productos
   {
   	//dd($request->all());

   	//validacion
   	$rules = [
   		'name' => 'required|min:3',
   		'description' => 'required|max:200',
   		'price' => 'required|numeric|min:0',
   	];
   	$this->validate($request, $rules);


   	$product = new Product();
   	$product->name = $request->input('name');
  	$product->description = $request->input('description');
  	$product->price = $request->input('price');
  	$product->long_description = $request->input('long_description');
    $product->category_id = $request->category_id;
  	$product->save();

		return redirect('admin/products');
   }

    public function edit($id)  
   {
     $categories = Category::orderBy('name')->get();
   		$product = Product::find($id);
   		return view('admin.products.edit')->with(compact('product','categories'));
   }

    public function update(Request $request, $id) 
   {
	//validacion
   	$rules = [
   		'name' => 'required|min:3',
   		'description' => 'required|max:200',
   		'price' => 'required|numeric|min:0',
   	];
   	$this->validate($request, $rules);
   	
     	$product = Product::find($id);
     	$product->name = $request->input('name');
  	  $product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
      $product->category_id = $request->category_id;
  	  $product->save();

		return redirect('admin/products');
   }

    public function destroy($id)  
   {
    //NOTA: SI SE DESEA NO  ELIMINAR LOS PRODUCTOS QUE TENGAN VENTAS O ESTEN EN EL CARRITO, HAY QUE CAMBIAR ESTA LOGICA Y VALIDAR ANTES DEL DELETE

      //eliminamos relacion
      CartDetail::where('product_id', $id)->delete();
      ProductImage::where('product_id', $id)->delete();

      //eliminamos producto
   		$product = Product::find($id);
   		$product->delete();
   		
      Session::flash('msg', 'Se eliminó el producto y las imágenes asociadas');
   		return back(); //como el user ya esta ubicado en el fom products, solo hacemos un back
   }



}
