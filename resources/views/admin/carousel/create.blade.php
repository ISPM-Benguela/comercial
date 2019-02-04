@extends('layouts.app')

@section('principal')

<h3><i class='fa fa-picture-o'></i> Cadastrar carousel</h3>
<br>


<form method="post" action="{{ route('carousel.store') }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Nome') }}
        <input type="text" name="nome" class="form-control" value="{{ Request::old('nome') ?: '' }}" />
        @if ($errors->has('nome'))
         <span class="help-block">{{ $errors->first('nome') }}</span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Preco') }}
        <input type="text" name="preco" class="form-control" value="{{ Request::old('preco') ?: '' }}" />
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
{{ Form::submit('Cadastrar', array('class' => 'btn btn-primary')) }}
{{Form::close()}}

@stop