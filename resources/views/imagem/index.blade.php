@extends('layouts.app')

@section('titulo')
    Imagem
@stop

@section('principal')
    <h2>Uploading imagem with name</h2>

    <div class="panel panel-primary">

        <div class="panel-heading"><h2>Laravel 5.5 image upload example</h2></div>
  
        <div class="panel-body">
                <form action="{{ route('image.upload.post') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="from-group">
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagem" class="form-control" />
                    </div> 

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Cadastrar" />
                    </div>
                </form>
  
  
        </div>
  
      </div>
@stop