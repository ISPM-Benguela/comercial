@extends('layouts.autente')

@section('head')
 <link rel="stylesheet" href="{{asset('css/login.css')}}">
@stop

@section('content')
    <div class="container">
        <div class="principal">
            <img src="images/user.jpg"   />

            <h3>Entrar no sistema</h3>

            <form action="{{ route('login') }}" method="post" >
                {{ csrf_field() }}

               {{ csrf_field() }}
                    <div class="pb-block" id="divLoginContro" style="padding: 10px;">   
                        <div class="row main" >
                                <div class="form-group col-md-12 {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                            <input
                                                    id="email"
                                                    type="text"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    placeholder="Informar o email"
                                            >
            
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                            <input
                                                    id="password"
                                                    type="password"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password"
                                                    value="{{ old('password') }}"
                                                    placeholder="informar a senha"
                                            >
            
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                    </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sess&atilde;o</button>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <a href="{{ route('home')}}" class="btn btn-link btn-block">P&aacute;gina Inicial</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div><!-- ./ principal -->    
    </div><!-- ./ container -->
@stop