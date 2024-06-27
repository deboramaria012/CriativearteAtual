<!-- resources/views/produtos/edit.blade.php -->

@extends('layoutdash.layout')

@section('conteudo')

    <div class="container">
        <h1>Editar Produto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $produto->nome) }}" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco', $produto->preco) }}" required>
            </div>
            <div class="form-group">
                <label for="categoriaproduto">Categoria</label>
                <input type="text" class="form-control" id="categoriaproduto" name="categoriaproduto" value="{{ old('categoriaproduto', $produto->categoriaproduto) }}">
            </div>
            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="text" class="form-control" id="imagem" name="imagem" value="{{ old('imagem', $produto->imagem) }}">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </div>
@endsection
