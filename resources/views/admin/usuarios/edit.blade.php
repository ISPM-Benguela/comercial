@extends('layouts.app')

@section('titulo')
Editar funcionario
@stop

@section('principal')

<h3><i class='fa fa-user-plus'></i> Editar ("{{$user->name}}")</h3>
<hr>

{{ Form::model($user, array('route' => array('usuarios.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

<div class="form-group">
    {{ Form::label('name', 'Nome') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', null, array('class' => 'form-control')) }}
</div>

<h5><b>Dar um nivel de acesso</b></h5>

<div class='form-group'>
    @foreach ($nivel as $role)
        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
        {{ Form::label($role->name, ucfirst($role->name)) }}<br>

    @endforeach
</div>

<div class="form-group">
    {{ Form::label('password', 'Senha') }}<br>
    {{ Form::password('password', array('class' => 'form-control')) }}

</div>

<div class="form-group">
    {{ Form::label('password', 'Confirmar senha') }}<br>
    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

</div>

{{ Form::submit('Cadastrar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop