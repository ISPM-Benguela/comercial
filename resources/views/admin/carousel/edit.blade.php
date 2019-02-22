@extends('layouts.app')

@section('principal')

<h3><i class='fa fa-picture-o'></i> Editar carousel</h3>
<br>


<form method="post" action="{{ route('carousel.update', ['id' => $carousel->id]) }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Nome') }}
        <input type="text" name="nome" class="form-control" value="{{ $carousel->nome}}" />
        @if ($errors->has('nome'))
         <span class="help-block">{{ $errors->first('nome') }}</span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Preco') }}
        <input type="number" name="preco" placeholder="10,00 kz" value="{{ $carousel->preco}}"  min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
        @if ($errors->has('preco'))
         <span class="help-block">{{ $errors->first('preco') }}</span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Imagem') }}
        <input type="file" name="imagem" value="{{ Request::old('preco') ?: '' }}" class="form-control" />
        @if ($errors->has('imagem'))
         <span class="help-block">{{ $errors->first('imagem') }}</span>
        @endif
    </div>
{{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
{{Form::close()}}

@stop