@extends('layouts.app')
@section('principal')
    <div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Artigos</h3></div>
                    <div class="panel-heading">Page {{ $artigos->currentPage() }} of {{ $artigos->lastPage() }}</div>
                    @foreach ($artigos as $artigo)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('artigos.show', $artigo->id ) }}"><b>{{ $artigo->titulo }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($artigo->conteudo, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $artigos->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection