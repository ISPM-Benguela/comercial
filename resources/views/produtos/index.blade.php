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
             <img src="images/product-15.jpg" />
             <div class="caption">
                <h3>Relogio Gucci</h3>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                <p>Este e um bom produto que vale a penas
                 dar um golpede vista nele.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                   <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
              <img src="images/product-02.jpg" />
              <div class="caption">
                <h3>Nome do produto</h3>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                <p>Este e um bom produto que vale a penas
                 dar um golpede vista nele.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
             <img src="images/product-06.jpg" />
             <div class="caption">
                <h3>Nome do produto</h3>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                <p>Este e um bom produto que vale a penas
                 dar um golpede vista nele.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a> 
                 <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
             <img src="images/product-04.jpg" />
              <div class="caption">
                <h3>Nome do produto</h3>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                <p>Este e um bom produto que vale a penas
                 dar um golpede vista nele.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
           <img src="images/product-05.jpg" />
           <div class="caption">
                <h3>Nome do produto</h3>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                <p>Este e um bom produto que vale a penas
                 dar um golpede vista nele.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
         </div>
       </div>
     </div><!--./ produtos-cabecas -->
     <div class="produtos-corpo">
       <h3><i class="fa fa-barcode"></i> Produtos desponiveis</h3>
       <div class="row">
         
           <div class="col-md-3 thumbnail">
              <img src="images/product-02.jpg" />
              <div class="caption">
              <p>Nome do produto</p>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
             <img src="images/product-06.jpg" />
             <div class="caption">
                <p>Nome do produto</p>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a> 
                 <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
             <img src="images/product-04.jpg" />
              <div class="caption">
              <p>Nome do produto</p>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
             <img src="images/product-04.jpg" />
              <div class="caption">
              <p>Nome do produto</p>
                <p class="catalogo">23.00 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
         </div>
         <nav class="pagination">
           <ul class="pager">
             <li><a href="">Ultimo</a></li>
             <li><a href="">1</a></li>
             <li><a href="">2</a></li>
             <li><a href="">3</a></li>
             <li><a href="">4</a></li>
             <li><a href="">Proximo</a></li>
           </ul>
         </nav>
       </div><!-- ./ row -->
      </div><!-- ./ produtos-corpo -->
  </div><!-- ./ produtos -->
  

  

@stop
@section('footer')
 <script src="js/backoffice/owl.carousel.js"></script>
 <script src="js/backoffice/app.js"></script>
@stop

