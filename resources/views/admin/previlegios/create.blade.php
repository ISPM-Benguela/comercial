@extends('layouts.app')

@section('principal')

<h3><i class='fa fa-key'></i> Cadastrar Previlegio</h3>
<br>


<form method="post" action="{{ route('previlegios.store') }}" class="form-horizontal form-label-left">
    {{ csrf_field() }}
    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
@if(!$nivel->isEmpty()) 
    <h4>Atribuir permicao</h4>

    @foreach ($nivel as $cada) 
        {{ Form::checkbox('nivel[]',  $cada->id ) }}
        {{ Form::label($cada->name, ucfirst($cada->name)) }}<br>

    @endforeach
@endif
<br>
{{ Form::submit('Cadastrar', array('class' => 'btn btn-primary')) }}
{{Form::close()}}

@stop