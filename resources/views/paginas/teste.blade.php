
@extends('layouts.app')

@section('principal')

  <h3>Ola mundo</h3>

  @if (count($usuarios) > 0)
     <ul>
       @foreach($usuarios as $usuario)

         <li>Nome: {{ $usuario->name }}, Telefone: {{ $usuario->phone->telefone }}<li>
       @endforeach
     </ul>
  @endif
@stop
