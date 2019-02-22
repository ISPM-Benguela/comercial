@extends('layouts.app')

@section('principal')
<div class="">

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-gift"></i> Lista de encomendas</h2>
                    <div class="clearfix" style="margin-bottom: 50px;"></div>
                </div>
                <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Produtp</th>
                                <th>Data da encomenda</th>
                                <th>ação</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Cliente</th>
                                <th>Produto</th>
                                <th>Data da encomenda</th>
                                <th>ação</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if (count($encomendas))
                            @foreach($encomendas as $row)
                            <tr>
                                <td>{{$row->cliente['name']}}</td>
                                <td>Produto</td> 
                                <td>{{$row->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil" title="Edit"></i> Fechar encomenda</a>
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
