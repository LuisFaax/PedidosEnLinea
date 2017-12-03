@extends('layouts.app')

@section('title', 'App Shop | Dashboard')

@section('body-class', 'profile-page')


@section('content')    
<div class="header header-filter" style="background-image: url({{ asset('/img/bg1.jpg')}});"></div>

<div class="main main-raised">
<div class="profile-content">
    <div class="container">
        <div class="row">
            <div class="profile">
                <div class="avatar">
                    <img src="{{ $product->featured_image_url }}" alt="Circle Image" class="img-circle img-responsive img-raised">
                </div>
                <div class="name">
                    <h3 class="title">{{ $product->name }}</h3>
                    <h6>{{ $product->category->name }}</h6>
                </div>

                 @if (session('msg'))
                    <div class="row">
                        <div class="col-sm-8 text-center">
                            <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="{{ url('/#cats') }}" class="btn btn-default btn-sm">
                                        <i class="material-icons">find_in_page</i>
                                        Seguir agregando + productos
                                    </a>
                        </div>
                    </div>
                        
                @endif
                
            </div>
        </div>
        <div class="description text-center">
            <p>{{ $product->long_description }} </p>
        </div>
    
        <!-- Button trigger modal -->    
        <div class="text-center">
        @if(auth()->check())
                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#popModal">
                    <i class="material-icons">add</i> Agregar al carrito
                </button>
            @else
                  <a href="{{ url('/login?redirect_to='. url()->current()) }}" class="btn btn-primary btn-round" >
                    <i class="material-icons">add</i> Agregar al carrito
                </a>  
            @endif
        </div>         

            


        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="profile-tabs">
                    <div class="nav-align-center">
                        

                        <div class="tab-content gallery">
                            <div class="tab-pane active" id="studio">
                                <div class="row">
                                    <div class="col-md-6">
                                    @foreach ($imagesLeft as $image)
                                        <img src="{{ $image->url }} " class="img-rounded" />
                                    @endforeach
                                    </div>
                                    <div class="col-md-6">                                       
                                        @foreach ($imagesRight as $image)
                                        <img src="{{ $image->url }} " class="img-rounded" />
                                    @endforeach
                                    </div>
                                </div>
                            </div>                          
                        </div>

                    </div>
                </div>
                <!-- End Profile Tabs -->
            </div>
        </div>

    </div>
</div>
</div>

    
<!-- Modal add to cart -->
            <div class="modal fade" id="popModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Selecciona la cantidad que deseas agregar</h4>
                  </div>
                  <form method="post" action="{{ url('/cart') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                      <div class="modal-body">
                        <input type="number" class="form-control" name="quantity" value="1">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info btn-simple">Agregar al carrito</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>
        <!-- // Modal add to cart -->

@include('includes.footer')
@endsection




