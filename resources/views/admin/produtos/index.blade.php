@extends('layouts.app')

@section('head')
 <link rel="stylesheet" href="{{asset('css/now.css')}}" />
 

 <link rel="stylesheet" href="{{asset('css/backoffice/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/backoffice/owl.theme.default.css')}}">
 <link rel="stylesheet" href="{{asset('css/backoffice/produto.css')}}">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> Produtos em destaque</h3>
         <br />
      <a href="{{route('produtos.create')}}" type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar produto</a>  
     <div class="container produtos-cabeca">
       <div class="row">
         <div class="owl-carousel produto owl-them">
         @if(count($produtos) > 0)
          @foreach($produtos as $produto)
           <div class="item thumbnail">
             <img src="{{asset('storage')}}/{{ $produto->imagem }}" width="600" height="600" />
             <div class="caption">
                <h3> {{ $produto->nome }}</h3>
                <p class="catalogo">{{ $produto->preco }} Kz <small>Estoque: {{ $produto->stock }}</small></p>

                <p>{{ $produto->descricao }}.</p>

                 <p><a href="{{route('produtos.edit', ['id' => $produto->id])}}" class="btn btn-primary btn-xs" role="button"><i class="fa fa-pencil"></i> Editar</a>
                   <a href="{{route('produtos.show', ['id' => $produto->id])}}" class="btn btn-danger btn-xs" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
             </div><!-- ./ caption -->
           </div><!-- ./ item -->
           @endforeach
         @else 
            
           <div><h3>Cadastrar produto</h3></div>
         @endif  
         </div>
       </div>
     </div><!--./ produtos-cabecas -->
     <div class="produtos-corpo" style="background: #ccc; padding: 20px;">
       <h3 style="padding: 10px; text-transform: uppercase; padding-bottom: 15px; color: #888; font-weight: bolder;"><i class="fa fa-barcode"></i> Produtos desponiveis</h3>
       <div class="row">
         @foreach($produtos as $produto)
           <div class="col-md-3 thumbnail">
              <img src="{{asset('storage')}}/{{ $produto->imagem }}" width="600" height="600" />
              <div class="caption">
              <p>Samsung Gallaxy</p>
                <p class="catalogo">100.000 Kz <small>Estoque: 33</small></p>

                 <p><a href="#" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i> Editar</a>
                  <a href="{{route('produtos.show', ['id' => $produto->id])}}" class="btn btn-danger" role="button"><i class="fa fa-trash"></i> Eliminar</a></p>
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
 <script src="{{asset('js/backoffice/owl.carousel.js')}}"></script>
 <script src="{{asset('js/backoffice/app.js')}}"></script>
@stop

