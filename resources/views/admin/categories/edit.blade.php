@extends('layouts.app')

@section('title', 'Bienvenido a App Shop')

@section('body-class', 'product-page')


@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
    <div class="container">        

        <div class="section text-center">
            <h2 class="title">Actualizar categoria</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/categories/'.$category->id.'/edit') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                            <i class="material-icons">note_add</i></span>
                            <input type="text" placeholder="Nombre de la categoria" name="name" 
                                   class="form-control" value="{{ old('name', $category->name) }}">
                        </div>
                    </div
                     <div class="col-sm-6 text-left">  
                       <div class="input-group">                
                            <label class="control-label">Imágen de la categoria</label>
                            <input type="file"  name="image" >
                            @if($category->image)
                            <p class="help-block text-left">
                            Subir solo si desea reemplazar la
                                <a href="{{ asset('/images/categories/'. $category->image) }}" target="_blank">imágen actual</a>
                            </p>    
                            @endif
                        </div>
                      </div> 
                </div>                                                
               

                 <div class="input-group">
                     <span class="input-group-addon">
                            <i class="material-icons">reorder</i></span>   
                <textarea class="form-control" placeholder="Descripción de la categoria" rows="5" 
                name="description">{{ old('description', $category->description) }}</textarea>
                </div>
                
                <button class="btn btn-primary">Guardar cambios</button>
                <a href="{{ url('/admin/categories') }}" class="btn btn-default">Cancelar</a>

            </form>

        </div>


       
    </div>

</div>

@include('includes.footer')
@endsection

