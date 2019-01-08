@extends('layouts.app')

@section('principal')

<h3><i class='fa fa-picture-o'></i> Cadastrar carousel</h3>
<br>


<form method="post" action="{{ route('carousel.store') }}" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
        {{ Form::label('name', 'Selecionar produtos') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Imagem') }}
        <input type="file" name="imagem" class="form-control" />
    </div>
{{ Form::submit('Cadastrar', array('class' => 'btn btn-primary')) }}
{{Form::close()}}

@stop