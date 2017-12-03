@extends('layouts.app')

@section('title', 'Resultados de búsqueda')

@section('body-class', 'profile-page')

@section('styles')
    <style>
            
         .team {
            margin-bottom: 50px;
         }
         .row {
            margin-top: 20px;
         }
    /*not(:first-child) */

    </style>
@endsection

@section('content')    
<div class="header header-filter" style="background-image: url('/img/examples/city.jpg');"></div>

<div class="main main-raised">
<div class="profile-content">
    <div class="container">
        <div class="rows">
            <div class="profile">
                <div class="avatar">
                    <img src="/img/search.png" alt="Imágen representativa de la búsqueda" class="img-rounded img-responsive">
                </div>
                <div class="name">
                    <h3 class="title">Resultados de búsqueda</h3>                   
                </div>

                 @if (session('msg'))
                        <div class="alert alert-success">
                            {{ session('msg') }}
                        </div>
                @endif
                
            </div>
        </div>
        <div class="description text-center">
            <p>Se encontraron {{ $products->count() }}  resultados para el término: <b>{{$query}}</b></p>
        </div>
    
            
           <div class="team text-center">
                      <div class="row">
                               @foreach ($products as $key => $product)
                                
                                @if(!($key % 3) and $key > 0)
                                </div>
                                <div class="row">
                                @endif
                                
                                <div class="col-md-4">
                                 <div class="team-player">
                                <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-rounded ">
                                        <h4 class="title">
                                       <a href="{{ url('/products/'. $product->id) }}"> {{ $product->name }} </a> 
                                       
                                        </h4>
                                        <p class="description">{{ $product->description }}</p>
                                    </div>  
                                    </div> 
                                @endforeach
                    </div>

                <div class="text-center">
                    {{ $products->links() }}
                </div>


               
     </div>
                
            </div>


       

    </div>
</div>
</div>

    


@include('includes.footer')
@endsection




