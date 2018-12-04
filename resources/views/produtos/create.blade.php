@extends('layouts.app')

@section('titulo')
{{ $params['titulo'] }}
@stop
@section('head')
 <link rel="stylesheet" href="css/now.css" />
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@stop
@section('principal')
  <div class="produtos">
     <h3><i class="fa fa-shopping-basket"></i> CADASTRAR PRODUTO</h3>
         <br />
     <div class="produtos-cabeca">
     
     </div>
     <div class="produtos-corpo">
     <form method="post" action="{{ route('produtos.store') }}" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="">Nome do Produto</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" value="{{ Request::old('name') ?: '' }}" id="name" placeholder="Informar o nome do produto" name="name" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="">Carregar Imagem</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="file" value="{{ Request::old('name') ?: '' }}" id="name"  name="name" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="">Preco</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" value="{{ Request::old('name') ?: '' }}" id="name" placeholder="Informar o nome do produto" name="name" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="">Estoque</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="number" value="{{ Request::old('name') ?: '' }}" id="name" placeholder="Informar o nome do produto" name="name" class="form-control col-md-8 col-xs-12">
        @if ($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="">Categoria</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <select  id="description" name="description" class="form-control col-md-7 col-xs-12">
            <option>--- Selecionar categoria ---</option>
        </select>
        @if ($errors->has('description'))
        <span class="help-block">{{ $errors->first('description') }}</span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
<label for="">Descricao</label>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <input type="text" value="{{ Request::old('description') ?: '' }}" id="description" name="description" class="form-control col-md-7 col-xs-12">
        @if ($errors->has('description'))
        <span class="help-block">{{ $errors->first('description') }}</span>
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
 <script src="js/now.js"></script>
@stop

