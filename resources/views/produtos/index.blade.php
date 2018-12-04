@extends('layouts.app')

@section('titulo')
{{ $params['titulo'] }}
@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <link rel="stylesheet" href="css/produto.css">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-plus"></i> Produtos desponivel</h3>
         <br />
        <a href="{{ route('produtos.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Cadastrar produto</a>
     <div class="produtos-cabeca">
     
     </div>
     <div class="produtos-corpo">

     </div>
  </div><!-- ./ produtos -->
  

  

@stop
@section('footer')
 <script src="js/now.js"></script>
@stop

