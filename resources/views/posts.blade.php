@extends('layout')
@section('title', 'Postagenss')
@section('content')
    @include('includes.menu')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('postagensnovo') }}" class="btn btn-success mb-3">Novo</a>
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
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->summary }}</td>
                        <td>
                            <form onsubmit="return confirmDelete();" action="{{ route('postagensdelete', ['id'=> $post->id]) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="{{ route('postagensform', ['id'=> $post->id]) }}" class="btn btn-info">
                                    Editar
                                </a>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection