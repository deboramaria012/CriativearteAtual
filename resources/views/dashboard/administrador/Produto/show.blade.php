<!-- resources/views/produtos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $produto->nome }}</h1>
        <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
        <p><strong>Preço:</strong> R$ {{ $produto->preco }}</p>
        <p><strong>Categoria:</strong> {{ $produto->categoriaproduto }}</p>
        <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" style="width: 300px; height: auto;">
        <a href="{{ route('produtos') }}" class="btn btn-primary">Voltar</a>
    </div>
@endsection
