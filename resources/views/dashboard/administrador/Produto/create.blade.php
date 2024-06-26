<!-- resources/views/produtos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Produto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao">{{ old('descricao') }}</textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" required>
            </div>
            <div class="form-group">
                <label for="categoriaproduto">Categoria</label>
                <input type="text" class="form-control" id="categoriaproduto" name="categoriaproduto" value="{{ old('categoriaproduto') }}">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="text" class="form-control" id="imagem" name="imagem" value="{{ old('imagem') }}">
            </div>
            <button type="submit" class="btn btn-primary">Criar Produto</button>
        </form>
    </div>
@endsection
