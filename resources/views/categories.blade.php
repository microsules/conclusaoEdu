@extends('layout')
@section('title', 'Listagem de categoria')
@section('content')
    @include('includes.menu')

    <div class="class row">
        <div class="class col-lg-12">
    <a href="{{ route('categoriasnovo') }}" class="btn btn-success mb-3">Novo</a>
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                        <form onsubmit="return confirmDelete()" action="{{ route('categoriasdelete', ['id'=> $category->id] )}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a href="{{ route('categoriasform', ['id'=> $category->id] )}}" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection
