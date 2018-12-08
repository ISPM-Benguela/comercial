@extends('layouts.app')

@section('head')
 <link rel="stylesheet" href="{{asset('css/painel/inicio.css')}}">
@stop

@section('principal')

 <div class="container">
    <div class="principal">
        <div class="centro">
                <img src="{{asset('images/icons/logo.jpg')}}" />
        </div>
        <div class="descrecao">
                <h3>DB Comércio Geral e Prestação de Serviços </h3>
                <span class="rua">Rua São Pedro do Liro nº28 - Bairro Liro Zona 5 - Lobito - Bengurla <br></span>
              
                    
        </div>
        <i class="email">Email: db.luanda@gmail.com <br /><i>Telefone: 917 812 391</i></i> 
        
    </div><!-- ./ principal -->
</div><!-- ./ container -->

@stop