
@extends('layouts.app')


@section('principal')
     <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('notificacao.create')}}" class="btn btn-primary"><i class="fa fa-bell"></i> Notificar usuario</a></h2>
                    <div class="clearfix" style="margin-bottom: 10px;"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Notificador</th>
                                <th>Notificação</th>
                                <th>Acção</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Notificador</th>
                                <th>Notificação</th>
                                <th>Acção</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($notificacao))
                            @foreach($notificacao as $row)
                            <tr>
                                <td>{{$row->user_id}}</td>
                                <td>{{$row->notificacao}}</td>
                                <td>
                                    <a href="{{ route('notificacao.edit', ['id' => $row->id]) }}" class="btn btn-success btn-xs"><i class="fa fa-eye" title="Edit"></i> Visualizar</a>
                                    <a href="{{ route('notificacao.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

