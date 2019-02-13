@extends('layouts.app')

@section('head')
 <link rel="stylesheet" href="{{asset('css/now.css')}}" />
 
  
 <link rel="stylesheet" href="{{asset('css/backoffice/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/backoffice/owl.theme.default.css')}}">
 <link rel="stylesheet" href="{{asset('css/backoffice/produto.css')}}">
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> Produtos em promoção</h3>
         <br />
      <a href="{{route('produtos.create')}}" type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar produto</a>  
     
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
                                <th>Preço normal</th>
                                <th>Preço promoção</th>
                                
                                <th>Accao</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Preço normal</th>
                                <th>Preço promoção</th>
                                
                                <th>Accao</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if(count($produtos))
                            @foreach ($produtos as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                                <td>{{number_format($row->preco,2)}} Kz</td>
                                <td>{{number_format($row->novo_preco,2)}} Kz</td>
 
                                <td>
                                    <a href="{{ route('promover.edit', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Terminar promoção</a>
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

