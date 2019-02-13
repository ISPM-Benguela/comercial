@extends('layouts.app')

@section('principal')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><a href="{{route('notificacao.index')}}" class="btn btn-info"><i class="fa fa-chevron-left"></i> Voltar </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('notificacao.store') }}" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group{{ $errors->has('notificador') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notificador">Notificador <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Auth::user()->name }}" id="notificador" name="notificador" class="form-control col-md-7 col-xs-12">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                                @if ($errors->has('notificador'))
                                <span class="help-block">{{ $errors->first('notificador') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nivel') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Grupo a notificar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select type="text" value="{{ Request::old('nivel') ?: '' }}" id="nivel" name="nivel" class="form-control col-md-7 col-xs-12">
                                    <option value="1"> Administradores </option>
                                    <option value="2"> Funcionarios </option>
                                    <option value="3"> Clientes </option>
                                </select>
                                @if ($errors->has('nivel'))
                                <span class="help-block">{{ $errors->first('nivel') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('notificacao') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Grupo a notificar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea type="text" value="{{ Request::old('notificacao') ?: '' }}" id="notificacao" name="notificacao" class="form-control col-md-7 col-xs-12">
                                    
                                </textarea>
                                @if ($errors->has('notificacao'))
                                <span class="help-block">{{ $errors->first('notificacao') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <button type="submit" class="btn btn-success"><i class="fa fa-bell"></i> Notificar o grupo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop