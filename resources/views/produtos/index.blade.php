@extends('layouts.app')

@section('titulo')
{{ $params['titulo'] }}
@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 

 <link rel="stylesheet" href="css/backoffice/owl.carousel.min.css">
 <link rel="stylesheet" href="css/backoffice/owl.theme.default.css">
 <link rel="stylesheet" href="css/backoffice/produto.css">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> Produtos em destaque</h3>
         <br />
      <a href="{{route('produtos.create')}}" type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar produto</a>  
     <div class="container produtos-cabeca">
       <div class="row">
         <div class="owl-carousel owl-them">
           <div class="item thumbnail">
             <img src="images/produtos/product01.png" width="600" height="600" />
             <div class="caption">
                <h3> NoteBook PC 2000</h3>
                <p class="catalogo">123.000 Kz <small>Estoque: 33</small></p>

                <p>Este computador é ideial para programadores
                  tem 4 GB de RAM 1 Tera de espaço.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                   <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
              <img src="images/produtos/product02.png" width="600" height="600" />
              <div class="caption">
                <h3>Auscutador Bluetooth</h3>
                <p class="catalogo">23.000 Kz <small>Estoque: 33</small></p>

                <p>Este aucutador é ideial para ouvir boa musica
                    em qualquer lugar suporta bluetooth.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
             <img  src="images/produtos/product10.jpeg" width="600" height="600"  />
             <div class="caption">
                <h3>iPhone 8 Plus</h3>
                <p class="catalogo">123.000 Kz <small>Estoque: 33</small></p>

                <p>Este e um dos recentes produto da apple com grandes 
                  capacidade ele tem de espaço 64 BG.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a> 
                 <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
              <img  src="images/produtos/product11.jpeg" width="600" height="600"  />
              <div class="caption">
                <h3>Mix Table</h3>
                <p class="catalogo">230.000 Kz <small>Estoque: 33</small></p>

                <p>Esta é uma mix table ideial para dj profissional
                  este producto foi feito pensando em alta performace..</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="item thumbnail">
              <img  src="images/produtos/product09.png" width="600" height="600"
           <div class="caption">
                <h3>Camera Digital</h3>
                <p class="catalogo">83.000 Kz <small>Estoque: 33</small></p>

                <p>Este produto pode ser usado por todos paricularmente profissionais
                  da area o produto foi feito pensando no facil uso e qualidade.</p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
         </div>
       </div>
     </div><!--./ produtos-cabecas -->
     <div class="produtos-corpo" style="background: #ccc; padding: 20px;">
       <h3 style="padding: 10px; text-transform: uppercase; padding-bottom: 15px; color: #888; font-weight: bolder;"><i class="fa fa-barcode"></i> Produtos desponiveis</h3>
       <div class="row">
         
           <div class="col-md-3 thumbnail">
              <img src="images/produtos/product07.png" width="600" height="600" />
              <div class="caption">
              <p>Samsung Gallaxy</p>
                <p class="catalogo">100.000 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
              <img src="images/produtos/product04.png" width="600" height="600" />
             <div class="caption">
                <p>Tablet Samsung</p>
                <p class="catalogo">93.000 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a> 
                 <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
              <img src="images/produtos/product08.png" width="600" height="600" />
              <div class="caption">
              <p>LapTop Dell</p>
                <p class="catalogo">73.000 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="#" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           <div class="col-md-3 thumbnail">
              <img src="images/produtos/product03.png" width="600" height="600" />
              <div class="caption">
              <p>NoteBook Samsung</p>
                <p class="catalogo">230.000 Kz <small>Estoque: 33</small></p>

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

