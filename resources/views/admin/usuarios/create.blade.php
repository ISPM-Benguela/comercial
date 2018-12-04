@extends('layouts.app')

@section('titulo')
    Criar funcioarios
@stop

@section('principal')
<h1><i class='fa fa-user-plus'></i> Cadastrar usuario</h1>
<hr>

<form method="post" action="{{ route('usuarios.store') }}" class="form-horizontal form-label-left">
        {{ csrf_field() }}
<div class="form-group">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', '', array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', '', array('class' => 'form-control')) }}
</div>
 <div class="form-group">
     @foreach ($nivel as $n)
     
         {{ Form::checkbox('nivel[]', $n->id)}}
         {{ Form::label($n->name, ucfirst($n->name)) }}
     @endforeach
 </div>
 <div class="form-group">
    {{ Form::label('password', 'Senha') }}<br>
    {{ Form::password('password', array('class' => 'form-control')) }}

</div>

<div class="form-group">
    {{ Form::label('password', 'Confirmar Senha') }}<br>
    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

</div>

{{ Form::submit('Cadastrar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop