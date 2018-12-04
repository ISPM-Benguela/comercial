@extends('layouts.app')

@section('principal')
<div class="container principal">
        <div class="row tudo">
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">
                <div class="menu-sidebar how-shadow1">
                    <div class="cabeca">
                        <i class="fa fa-tachometer"></i>
                        <h3> Panei de Controle </h3>
                    </div>
                    <div class="corpo">
                        <ul class="nav">
                                <li> <i class="icon fa fa-shopping-basket"></i><a href="produtos.html"> Produtos <span class="badge">43</span></a></li>
                                <li><i class="icon fa fa-list-ol"></i><a href="categorias.html"> Categorias <span class="badge badge-danger">5</span></a></li>
                                <li><i class="icon fa fa-group"></i><a href="{{route('usuarios.index')}}"> Funcionarios <span class="badge badge-danger">8</span></a></li>
                                <li><i class="icon fa fa-gift"></i><a href="encomendas.html"> Encomendas <span class="badge badge-danger">15</span> </a></li>
                                <li><i class="icon fa fa-feed"></i><a href="notificacao.html"> Notificações <span class="badge badge-danger">15</span></a></li>
                                <li><i class="icon fa fa-gears"></i><a href="configuracao.html"> Configurações </a></li>
                        </ul>
                    </div>
                    <div class="roda-pe">
                        
                    </div><!-- ./ roda-pe -->
                </div><!-- ./ menu side-bar -->
            </div>
            <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10 funcionarios" >
                <div class="row">
                    <div class="func-cabecalho">
                        <h2>Encomendas <i class="fa fa-gift"></i></h2>
                    </div>
                    <div class="col-md-8col-sm-8 add-func">

                        <div class="cabeca-encomenda">
                            <label for="">Total Encomendas <i class="badge ">15</i></label>

                            <div class="esquerdo">
                                <button class="btn btn-default pull-left">Imprimir <i class="fa fa-print"></i></button>

                                <form action="" class="navbar-form pull-left">
                                    <div class="form-group">
                                        <select class="form-control" >
                                            <option value="">Escola uma opcao</option>
                                            <option value="">PDF</option>
                                            <option value="">EXCEL</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="form-control" value="Exportar">
                                    </div>
                                </form>
                            </div><!-- ./ esquerdo -->
                            <div class="direito pull-right">
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <p>Data</p><select class="form-control">
                                                <option >Hoje</option>
                                                <option >Ontem</option>
                                                <option >Esta semana</option>
                                                <option >Este Mes</option>
                                                <option >Customisavel</option>
                                        </select>
                                        <a href="" class="btn btn-default"><i class="fa fa-search"></i></a>
                                        De <input type="text" class="form-control" size="2" placeholder="dia"> A <input type="text" class="form-control" size="2" placeholder="dia">
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                        
                        <table class="table animated fadeInDown">
                            <tr>
                                <th>Data</th>
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Preco</th>
                                <th>Total a pagar</th>
                                <th>categoria</th>
                                <th>Fechar Encomenda</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>12-02-2018</td>
                                    <td>Tv Plasma</td>
                                    <td>2</td>
                                    <td>200.000. 00</td>
                                    <td>400.000.00</td>
                                    <td>Electro Domestico</td>
                                    <td><a href="" class="btn btn-default"><i class="fa fa-check-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>12-02-2018</td>
                                    <td>Tv Plasma</td>
                                    <td>2</td>
                                    <td>200.000. 00</td>
                                    <td>400.000.00</td>
                                    <td>Electro Domestico</td>
                                    <td><a href="" class="btn btn-default"><i class="fa fa-check-square-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>12-02-2018</td>
                                    <td>Tv Plasma</td>
                                    <td>2</td>
                                    <td>200.000. 00</td>
                                    <td>400.000.00</td>
                                    <td>Electro Domestico</td>
                                    <td><a href="" class="btn btn-default"><i class="fa fa-check-square-o"></i></a></td>
                                </tr>
                                
                            </tbody>
                        </table>

                        <ul class="pager">
                            <li><a href="">Primeira</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">6</a></li>
                            <li><a href="">7</a></li>
                            <li><a href="">Proximo</a></li>
                        </ul>
                    </div><!-- ./ add-func -->
                    <div class="col-sm-4 col-md-4 list-func">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop