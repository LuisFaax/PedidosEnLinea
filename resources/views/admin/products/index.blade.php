@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')


@section('content')
<div class="header header-filter" style="background-image: url({{ asset('/img/bg1.jpg')}});">
</div>

<div class="main main-raised">
    <div class="container">        

        <div class="section text-center">
            
            <div class="row">
                <div class="col-sm-9 text-center">
                   <h2 class="title">Listado de Productos</h2>
                </div>
                <div class="col-sm-3">
                    <a href ="{{ url('/admin/products/create') }}" class="btn btn-primary btn-just-icon" title="Nuevo producto">
                        <i class="material-icons">note_add</i>
                    </a>                   
                </div>
            </div>


             @if (Session::has('msg'))
            <div class="alert alert-info">
              <strong> {{ Session::get('msg') }}</strong>
            </div>
       
            @endif

            <div class="team">
                <div class="row">    
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class='col-md-5 text-center'>Descripción</th>
                                <th class="text-center">Categoria</th>
                                <th class="text-right">Precio</th>
                                <th class="text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category_name  }}</td>
                            <td class="text-right">&euro; {{ $product->price }}</td>
                            <td class="td-actions text-right">
                              <form method="post" action="{{ url('/admin/products/'.$product->id.'/delete') }}">
                              {{ csrf_field() }}

                                <a href="{{ url('/products/'.$product->id) }}" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs" target="_blank">
                                    <i class="fa fa-info"></i>
                                </a>

                                <a  href="{{ url('/admin/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>                                   
                                
                                 <a href="{{ url('/admin/products/'.$product->id.'/images') }}" rel="tooltip" title="Imágenes del producto" class="btn btn-warning btn-simple btn-xs">
                                    <i class="fa fa-image"></i>
                                </a>

                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>

        </div>


        
    </div>

</div>

@include('includes.footer')
@endsection

