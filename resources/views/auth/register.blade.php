@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form"  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>Registro</h4>
                           
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        
                        <div class="content">                           
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                           
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" name="name" value="{{ old('name', $name) }}" required autofocus class="form-control" placeholder="Nombre">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>                               
                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $email) }}" placeholder="Correo electrónico..." required autofocus>
                            </div>

                             <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">phone</i>
                                </span>
                                <input id="phone" type="phone" placeholder="Teléfono" class="form-control" name="phone" value="{{ old('phone') }}" required>
                            </div>                            

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">class</i>
                                </span>
                                <input id="address" type="text" placeholder="Dirección" class="form-control" name="address" value="{{ old('address') }}" required>
                            </div>  

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>                          
                                  <input id="password" placeholder="Contraseña" type="password" class="form-control" name="password" required>
                            </div>

                             <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>                          
                                  <input id="password" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                             

                           
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</button
                        </div>
                         <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                              </a>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

  @include('includes.footer')

</div>
@endsection
