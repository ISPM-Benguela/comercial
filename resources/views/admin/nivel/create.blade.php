@extends('layouts.app')

@section('principal')

<h1><i class='fa fa-key'></i> Adicionar nivel</h1>
<hr>

<form method="post" action="{{ route('nivel.store') }}" class="form-horizontal form-label-left">
    {{ csrf_field() }}

<div class="form-group">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<h5><b>Atribuir permicao</b></h5>

<div class='form-group'>
    @foreach ($permicoes as $permicao)
        {{ Form::checkbox('permissions[]',  $permicao->id ) }}
        {{ Form::label($permicao->name, ucfirst($permicao->name)) }}<br>

    @endforeach
</div>

{{ Form::submit('Cadastrarem Membro', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop