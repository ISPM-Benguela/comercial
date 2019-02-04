@extends('layouts.app')

@section('titulo')

@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 

 <link rel="stylesheet" href="css/backoffice/owl.carousel.min.css">
 <link rel="stylesheet" href="css/backoffice/owl.theme.default.css">
 <link rel="stylesheet" href="css/backoffice/produto.css">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> Produtos do slide</h3>
         <br />
      <a href="{{route('carousel.create')}}" type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar produto</a>  
     
     <div class="produtos-corpo" style="background: #ccc; padding: 20px;">
       <h3 style="padding: 10px; text-transform: uppercase; padding-bottom: 15px; color: #888; font-weight: bolder;"><i class="fa fa-barcode"></i> Produtos desponiveis</h3>
       <div class="row">
         @foreach($carousel as $carouse)
           <div class="col-md-3 thumbnail">
              <img src="{{asset('storage')}}/{{ $carouse->imagem }}" width="600" height="600" />
              <div class="caption">
              <p>{{ $carouse->nome }}</p>
                <p class="catalogo">{{ $carouse->preco }} </p>

                 <a href="{{ route('carousel.edit', ['id' => $carouse->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Actualizar</a>
                 <a href="{{ route('carousel.show', ['id' => $carouse->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                  
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
        @endforeach
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

