@extends('layout')
@section('title', 'Postagens')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Resumo</th>
                    <th>Ações</th>
                </tr>
                @foreach($posts as $post)
                    @if($post->active)
                    <tr>
                    @else
                    <tr class="table-secondary">
                    @endif
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->summary }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection