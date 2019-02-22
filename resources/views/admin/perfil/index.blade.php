
@extends('layouts.app')

@section('principal')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Perfil do {{ Auth::user()->name }}<a href="{{route('inicio')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Back </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    
                    <img src="{{asset('storage')}}/{{ $perfil->imagem }}" width="200" heigh="200" class="thumbnail" />
                    <h2>{{ $perfil->user['name'] }}</h2>
                    <form method="post" action="{{ route('perfil.update', ['id' => $perfil->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$perfil->nome}}" id="nome" name="nome" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('nome'))
                                <span class="help-block">{{ $errors->first('nome') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('provincia') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="provincia">Provincia <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$perfil->provincia}}" id="provincia" name="provincia" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('provincia'))
                                <span class="help-block">{{ $errors->first('provincia') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imagem') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Imagem <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" value="{{$perfil->imagem}}" id="avatar" name="imagem" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('imagem'))
                                <span class="help-block">{{ $errors->first('imagem') }}</span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Actualizar Perfil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
