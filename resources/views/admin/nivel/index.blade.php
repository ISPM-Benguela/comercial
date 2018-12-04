@extends('layouts.app')

@section('principal')
<h1><i class="fa fa-key"></i> Niveis

    <a href="{{ route('usuarios.index') }}" class="btn btn-primary pull-right" style="margin-left: 10px;"><i class="fa fa-group"></i> Usuarios </a>
    <a href="{{ route('previlegios.index') }}" class="btn btn-primary pull-right"><i class="fa fa-unlock"></i> Perimicoes</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nivel</th>
                    <th>Permicoes</th>
                    <th>Operacao</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($niveis as $nivel)
                <tr>

                    <td>{{ $nivel->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $nivel->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('painel/nivel/'.$nivel->id. '/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['nivel.destroy', $nivel->id] ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('nivel.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Cadastrar nivel</a>

@stop