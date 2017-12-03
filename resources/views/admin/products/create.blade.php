@extends('layouts.app')

@section('title', 'Bienvenido a App Shop')

@section('body-class', 'product-page')


@section('content')

<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">        

        <div class="section text-center">
            <h2 class="title">Registrar nuevo producto</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('/admin/products/') }}">
                {{ csrf_field() }}
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <i class="material-icons">note_add</i></span>
                            <input type="text" placeholder="Nombre del producto" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                    </div>

                     <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <i class="material-icons">attach_money</i></span>
                            <input type="number" step="0.01" placeholder="Precio del producto" name="price" class="form-control" value="{{ old('price') }}">
                        </div>                        
                    </div>
                </div>

                
                 <div class="row">
                      <div class="col-sm-6">
                        <div class="input-group">
                         <span class="input-group-addon">
                                <i class="material-icons">description</i></span>                       
                            <input type="text" placeholder="Descripción corta" name="description" class="form-control" value="{{ old('description') }}">
                          </div>
                        </div>  
                        <div class="col-sm-6">
                                                       
                               <select class="form-control" name="category_id">
                                   <option value="0">General</option>
                                   @foreach ($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                                   @endforeach
                               </select>                               
                                                 
                    </div>
                 </div>  

               

                 <div class="input-group">
                     <span class="input-group-addon">
                            <i class="material-icons">reorder</i></span>   
                <textarea class="form-control" placeholder="Descripción larga del producto" rows="5" name="long_description">{{ old('long_description') }}</textarea>
                </div>
                
                <button class="btn btn-primary">Registrar producto</button>
                <a href="{{ url('/admin/products') }}" class="btn btn-default">Cancelar</a>

            </form>

        </div>


       
    </div>

</div>

@include('includes.footer')
@endsection

