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
        <input type="text" name="preco" class="form-control" value="{{ $carousel->nome}}preco" />
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