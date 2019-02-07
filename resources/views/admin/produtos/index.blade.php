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
     <div class="produtos-corpos" style="padding: 20px;">
       <h3 style="padding: 10px; text-transform: uppercase; padding-bottom: 15px; color: #888; font-weight: bolder;"><i class="fa fa-barcode"></i> Produtos desponiveis</h3>
       <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Preco</th>
                                <th>Descricao/th>
                                
                                <th>Accao</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Preco</th>
                                <th>Descricao/th>
                                <th>Accao</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if(count($produtos))
                            @foreach ($produtos as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                                <td>{{number_format($row->preco,2)}}</td>
                                <td>{{$row->descricao}}</td>
                                <td>
                                    <a href="{{ route('produtos.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> Editar produto</a>
                                    <a href="{{ route('produtos.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar produto</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
      </div><!-- ./ produtos-corpo -->
  </div><!-- ./ produtos -->
  

  

@stop
@section('footer')
 <script src="{{asset('js/backoffice/owl.carousel.js')}}"></script>
 <script src="{{asset('js/backoffice/app.js')}}"></script>
@stop

