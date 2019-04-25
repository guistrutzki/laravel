@extends('posts.master')

@section('conteudo')

    {{--    LISTAGEM DOS POSTS  --}}
    {{ Html::style('css/style.css') }}

    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Texto</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $key => $value)

                <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->titulo}}</td>
                    <td>{{$value->texto}}</td>
                    <td>
                        <a href="posts/{{$value->id}}/edit" class="btn btn-success btn-sm">Editar</a>

                        {!! Form::open(['id'=>'deleteForm', 'url' => '/posts/'. $value->id, 'method' => 'DELETE']) !!}
                             {!! Form::submit('Apagar', ['class'=> 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
