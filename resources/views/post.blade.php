@extends('layout')
@section('title', 'Formulário de Postagens')
@section('content')
    @include('includes.menu')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.errors')
            @if($post->id)
            <form action="{{ route('postagensupdate', ['id' => $post->id]) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
            @else
            <form action="{{ route('postagensinsert') }}" method="POST">
            @endif
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $post->id }}">
                <input type="hidden" name="post_date" id="post_date">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" id="title" name="title" 
                                value="{{ $post->title }}" 
                                class="form-control shadow-sm">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control shadow-sm">
                                <option value="">Selecione</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="summary">Resumo</label>
                            <textarea class="form-control shadow-sm" rows="3" id="summary" 
                                name="summary" value="{{ $post->summary }}"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="text">Texto</label>
                            <textarea class="form-control shadow-sm" rows="3" id="text" 
                                name="text" value="{{ $post->text }}"></textarea>
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
                    <div class="col-lg-3">
                        <div class="form-group">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('postagens') }}" class="btn btn-secondary">
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-success">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection