@extends('layouts.app')

@section('titulo')
{{ $params['titulo'] }}
@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <link rel="stylesheet" href="css/backoffice/produto.css">
 <link rel="stylesheet" href="css/backoffice/owl.carousel.min.css">
 <link rel="stylesheet" href="css/backoffice/owl.theme.default.css">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> Produtos em destaque</h3>
         <br />
        <a href="{{ route('produtos.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Cadastrar produto</a>
     <div class="container produtos-cabeca">
       <div class="row">
         <div class="owl-carousel owl-them">
           <div class="item thumbnail">
             <img src="images/product-01.jpg" />
           </div><!-- ./ item -->
           <div class="item thumbnail">
           <img src="images/product-02.jpg" />
           </div><!-- ./ item -->
           <div class="item thumbnail">
           <img src="images/product-03.jpg" />
           </div><!-- ./ item -->
           <div class="item thumbnail">
           <img src="images/product-04.jpg" />
           </div><!-- ./ item -->
           <div class="item thumbnail">
           <img src="images/product-05.jpg" />
           </div><!-- ./ item -->
         </div>
       </div>
     </div><!--./ produtos-cabecas -->
     <div class="produtos-corpo">

     </div>
  </div><!-- ./ produtos -->
  

  

@stop
@section('footer')
 <script src="js/backoffice/owl.carousel.js"></script>
 <script src="js/backoffice/app.js"></script>
@stop

