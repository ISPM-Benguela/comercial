@extends('layouts.app')

@section('principal')
<h1><i class='fa fa-key'></i> Edit {{$permicao->name}}</h1>
<br>
{{ Form::model($permicao, array('route' => array('previlegios.update', $permicao->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

<div class="form-group">
    {{ Form::label('name', 'Permission Name') }}
    {{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<br>
{{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@stop