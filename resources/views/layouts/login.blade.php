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
                    <div class="pb-block" id="divLoginContro" style="padding: 10px;">   
                        <div class="row main" >
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" value="{{ Request::old('email') ?: '' }}" id="email" placeholder="Informar o email do produto" name="name" class="form-control col-md-8 col-xs-12" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <br />
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" value="{{ Request::old('password') ?: '' }}" id="password" placeholder="Informar o email do produto" name="name" class="form-control col-md-8 col-xs-12">
                                    @if ($errors->has('password'))
                                    <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>      
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sess&atilde;o</button>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-md-12">
                                    <a href="{{ route('register')}}" class="btn btn-link btn-block">Criar contals</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div><!-- ./ principal -->    
    </div><!-- ./ container -->
@stop