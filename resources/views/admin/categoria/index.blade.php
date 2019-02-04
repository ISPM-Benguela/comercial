@extends('layouts.app')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('categorias.create')}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Cadastrar categoria </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome da categoria</th>
                                <th>Accao</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nome da categoria</th>
                                <th>Accao</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($categorias))
                            @foreach($categorias as $row)
                            <tr>
                                <td>{{$row->nome}}</td>
                                <td>
                                    <a href="{{ route('categorias.edit', ['id' => $row->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i> Actualizar</a>
                                    <a href="{{ route('categorias.show', ['id' => $row->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i> Eliminar</a>
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
</div>
@stop