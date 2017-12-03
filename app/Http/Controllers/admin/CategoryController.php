<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use File;
use App\Product;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index() 
   {
   	$categories = Category::orderBy('id')->paginate(10);
   		return view('admin.categories.index')->with(compact('categories'));
   }

  
    public function create() //formulario de registro 
   {
   		return view('admin.categories.create');
   }

    public function store(Request $request) //registrar nuevos productos
   {
   	//dd($request->all());   
   	
   	$this->validate($request, Category::$rules);


   $category =	Category::create($request->only('name','description')); //mass assigment
   
   //save image file
   if($request->hasFile('image')) {    
      $file = $request->file('image');
      $path = public_path() . '/images/categories';
      $fileName = uniqid() . '-' .$file->getClientOriginalName();
      $moved = $file->move($path, $fileName);
   
    //update category image
    if ($moved) 
    {
        $category->image = $fileName;
        $category->save();
    }
}
		return redirect('admin/categories');
   }


    public function edit(Category $category) 
   {   		
   		return view('admin.categories.edit')->with(compact('category'));
   }


    public function update(Request $request, Category $category) 
   {
	
  //return dd($request->all());
   	$this->validate($request, Category::$rules);

   	//$category = Category::find($id);
   	$category->update($request->only('name','description'));  	

     //save image file
           if($request->hasFile('image')) {    
              $file = $request->file('image');
              $path = public_path() . '/images/categories';
              $fileName = uniqid() . '-' . $file->getClientOriginalName();
              $moved = $file->move($path, $fileName);
           
            //update category image
            if ($moved) 
            {
              $previousPath = $path . '/' . $category->image;
                $category->image = $fileName;
                $saved = $category->save();

                if($saved)
                  File::delete($previousPath);
            }
        }

		return redirect('admin/categories');
   }


    public function destroy(Category $category)  
   {
   		$msg='';
      $cont = Product::where('category_id', $category->id)->count();
      if ($cont <= 0){
   		   $category->delete();
         $msg ="Categoria eliminada";
       }else{
        $msg ="No es posible eliminar la categoria porque tiene productos relacionados";
       }


   		Session::flash('msg', $msg);
   		return back(); //como el user ya esta ubicado en el fom products, solo hacemos un back
   }

}
