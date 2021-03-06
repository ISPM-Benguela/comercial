@extends('layouts.app')

@section('head')
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/backoffice/encomenda.css')}}">
@stop 
@section('principal')
 
    <div class="row cabeca">
        <div class="cl-sm-12 col-md-12 col-xs-12">
           <h2>Aprovar vendas <i class="fa fa-barcode"></i></h2>
        </div>    
    </div><!-- ./ cabeca -->
    <div class="row corpo">
        <div class="cl-sm-12 col-md-12 col-xs-12">
        <div class="table-responsive">
        <table class="myTable table table-stripeds">
         <thead>
           <tr>
             <th>Cliente</th>
             <th>Produto</th>
             <th>Quantidade</th>
             <th>Acao</th>
           </tr> 
          </thead>
          <tbody>
          <tfoot>
           <tr>
             <th>Cliente</th>
             <th>Produto</th>
             <th>Quantidade</th>
             <th>Acao</th>
           </tr> 
          </tfoot>
          <tbody>
           <tr>
              <td>Jose Tandala</td>
              <td>Computador Mac</td>
              <td>5</td>
              <td>
                  <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                  <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
            </td>
           </tr>
           <tr>
              <td>Armando katito</td>
              <td>Servidor HP</td>
              <td>4</td>
              <td>
                 <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                  <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
              </td>
           </tr>
           <tr>
              <td>Humberto Fortes</td>
              <td>Computador Desktop Mac</td>
              <td>1</td>
              <td>
                  <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                  <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
              </td>
           </tr>
           <tr>
              <td>Bernadeth Bueke</td>
              <td>Kit electronica</td>
              <td>3</td>
              <td>
                  <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> </a>
                  <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> </a>
              </td>
           </tr>
          
           </tbody>
        </table>
      </div>
        </div>    
    </div><!-- ./ cabeca -->
@stop
@section('footer')
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/backoffice/app1.js')}}" charset="utf-8"></script>
@stop