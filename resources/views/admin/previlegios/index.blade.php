@extends('layouts.app')

@section('principal')
<h1><i class="fa fa-key"></i> Previlegios

    <a href="{{ route('usuarios.index') }}" class="btn btn-primary pull-right"><i class="fa fa-group"></i> Usuarios</a>
    &nbsp;&nbsp; <a href="{{ route('nivel.index') }}" class="btn btn-primary pull-right"><i class="fa fa-key"></i> Niveis</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Previlegios</th>
                    <th>Operacao</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permicao as $cada)
                <tr>
                    <td>{{ $cada->name }}</td> 
                    <td>
                    <a href="{{ URL::to('painel/previlegios/'.$cada->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Editar</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['previlegios.destroy', $cada->id] ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('painel/previlegios/create') }}" class="btn btn-success"> Cadastrar previlegio</a>
@stop