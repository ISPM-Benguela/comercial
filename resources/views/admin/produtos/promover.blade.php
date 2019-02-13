@extends('layouts.app')

@section('principal')

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                        <h1><i class="fa fa-refresh"></i> Promover o produto "{{ $produto->nome }}"</h1>
                            <hr>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                   <h2 style="margin-bottom: 10px;">ver a lista de promoção <a href="{{route('promover.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="#" class="thumbnail">
                            <img src="{{asset('storage')}}/{{ $produto->imagem }}" alt="...">
                            </a>

                            <div class="caption">
                                <h3>{{ $produto->nome }}</h3>
                                <p>preço anterior {{ $produto->preco }}</p>
                               
                            </div>
                        </div>
                     </div>
                    <div  style="margin-bottom: 20px;"></div>
                    <div class="row">
                       <div class="col-md-6 col-xs-6">
                        <form method="POST" action="{{ route('promover.store')}}">
 
                        <div class="form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
                           <label>Preço de Promoção</label>
                           <input type="number" name="preco" class="form-control" placeholder="Preço de promoção" />
                           <input type="hidden" name="id" value="{{ $produto->id }}" />
                           @if ($errors->has('preco'))
                             <span class="help-block">{{ $errors->first('preco') }}</span>
                           @endif
                        </div>
                        <div class="form-group">
                           <label>Data Inicio</label>
                          <input type="date" name="inicio" class="form-control" />
                          
                        </div>

                        <div class="form-group">
                           <label>Data final</label>
                          <input type="date" name="termino" class="form-control" />
                          
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <button type="submit" class="btn btn-success"> Promover o produto</button>
                    </form>
                       </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop
