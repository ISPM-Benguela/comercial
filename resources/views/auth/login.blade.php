@extends('layouts.autente')
@section('head')
 <link rel="stylesheet" href="{{asset('css/login.css')}}">
@stop
@section('content')
<div class="container">
        <div class="principal">
            <img src="{{asset('images/icons/logo.jpg')}}" width="100" heigh="100"   />

            <h3>Entrar no sistema</h3>

            <form class="form-horizontal formulario" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                            <label>Email</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email " style="height: 50px;"  autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                            <label>Senha</label>
                                <input id="password" type="password" class="form-control" placeholder="Senha" style="height: 50px;" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar login
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                 Entrar
                                </button>

                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Nao tem conta? criar agora.
                                </a>
                            </div>
                        </div>
                    </form>
        </div><!-- ./ principal -->    
    </div><!-- ./ container -->
@endsection

