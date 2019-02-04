@extends('layouts.app')

@section('titulo')

@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> EDITAR PRODUTO</h3>
         <br />
     <div class="produtos-cabeca">
     
     </div>
     <div class="produtos-corpo">
     <form method="post" action="{{ route('produtos.update', ['id' => $produto->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
    <label for="">Nome do Produto</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" value="{{ $produto->nome }}" id="nome" placeholder="Informar o nome do produto" name="nome" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('nome'))
         <span class="help-block">{{ $errors->first('nome') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
    <label for="">Carregar Imagem</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="file" value="{{ $produto->imagem}}" id="imagem"  name="imagem" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('imagem'))
        <span class="help-block">{{ $errors->first('imagem') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
    <label for="">Preco</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" value="{{ $produto->preco }}" id="preco" placeholder="Informar o nome do produto" name="preco" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('preco'))
        <span class="help-block">{{ $errors->first('preco') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
    <label for="">Estoque</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="number" value="{{ $produto->stock }}" id="stock" placeholder="Informar o nome do produto" name="stock" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('stock'))
        <span class="help-block">{{ $errors->first('stock') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
    <label for="">Categoria</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
    
       
        <select  id="categoria" name="categoria" class="form-control col-md-7 col-xs-12">
            <option value="{{ $produto->categoria->nome }}">{{ $produto->categoria->nome }}</option>
           
            <option>----- Selecionar categoria --------</option>
            @foreach($categorias as $categoria)
         
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
        
            @endforeach
        </select>
        @if ($errors->has('categoria'))
        <span class="help-block">{{ $errors->first('categoria') }}</span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
<label for="">Descricao</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <textarea  value="{{ Request::old('descricao') ?: '' }}" id="description" name="descricao" class="form-control col-md-7 col-xs-12">{{$produto->descricao}}</textarea>
        @if ($errors->has('descricao'))
        <span class="help-block">{{ $errors->first('descricao') }}</span>
        @endif
    </div>
</div>

<div class="ln_solid"></div>

<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 ">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</div>
</form>
     </div>
  </div><!-- ./ produtos -->
  

  

@stop
@section('footer')
 <script src="{{asset('js/now.js')}}"></script>
@stop

