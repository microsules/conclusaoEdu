@extends('layout')
@section('title', 'Formulário de categoria')
@section('content')
@include('includes.menu')
    <div class="row">
        <div class="class col-lg-12">
        @include('includes.errors')

    @if($category->id)
            <form action="{{ route('categoriasupdate', ['id' => $category->id]) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                @else
                <form action="{{ route('categoriasinsert') }}" method="POST">
                @endif

                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="name">Título</label>
                            <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input type="text" name="description" id="description" value="{{ $category->description }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="active">Situação</label><br>
                            <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Ativa ou inativa a categoria">
                                <label class="switch">
                                <input type="checkbox" name="active" value="1">
                                <span class="slider round"></span>
                            </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('categorias') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
