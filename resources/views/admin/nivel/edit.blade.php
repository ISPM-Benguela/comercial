@extends('layouts.app')

@section('principal')
<h3><i class='fa fa-key'></i> Editar nivel: ("{{$role->name}}")</h3>
    <hr>

    {{ Form::model($role, array('route' => array('nivel.update', $role->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nome do nivel') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Atribuir permicao</b></h5>
    @foreach ($permissions as $permission)

        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

    @endforeach
    <br>
    {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}    
@stop