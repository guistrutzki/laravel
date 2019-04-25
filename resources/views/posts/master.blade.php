@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{--VERIFICA SE POSSUI A VARIAVEL DE SESSAO MESSAGE--}}
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        Post adicionado com sucesso!
                    </div>
                @endif


                @if(Session::has('update'))
                    <div class="alert alert-success" role="alert">
                        Post alterado com sucesso!
                    </div>
                @endif

                @if(Session::has('remove'))
                    <div class="alert alert-danger" role="alert">
                        Post apagado com sucesso!
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Lista de Posts
                        <div class="float-right">
                            <a class='btn btn-xs btn-success' href="{{route('posts.create')}}">Criar novo Post</a>
                        </div>
                    </div>
                    @yield('conteudo')
                </div>
            </div>
        </div>
    </div>
@endsection