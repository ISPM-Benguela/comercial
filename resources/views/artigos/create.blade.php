@extends('layouts.app')

@section('title', '| Create New Post')

@section('principal')
    <div class="row">
        <div class="col-md-8 ">

        <h1>Criar isso seriamuito util para nos</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store')) }}

        <div class="form-group">
            {{ Form::label('titulo', 'Titulo') }}
            {{ Form::text('titulo', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('conteud', 'Todo o conteudo aquiS') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection