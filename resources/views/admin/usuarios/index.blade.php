@extends('layouts.app')

@section('principal')
    
<h1><i class="fa fa-users"></i> Gestao de usuario <a href="{{ route('nivel.index') }}" class="btn btn-primary pull-right"><i class="fa fa-key"></i> Nivel de acesso</a>
    <a href="{{ route('previlegios.index') }}" class="btn btn-primary pull-right"><i class="fa fa-unlock"></i> Previlegios</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data do inicio</th>
                    <th>Previlegios</th>
                    <th>Operacao</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($usuarios as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('D, m, Y H:i') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td>
                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-info pull-left btn-xs" style="margin-right: 3px;"><i class="fa fa-edit"> Editar</i></a>
                    <a href="" class="btn btn-success pull-left btn-xs" style="margin-right: 3px;"><i class="fa fa-edit"> Notificar</i></a>
                  
                    

                    {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.show', $user->id] ]) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div><a href="{{ route('usuarios.create') }}" class="btn btn-success"><i class="fa fa-group"></i> cadastrar usuario</a></div>		
    {!! $usuarios->links() !!}
@stop