@extends('layout.layoutdash')

@section('Dashboard')

@section('conteudo-dash')

<form method="POST" action="{{ route('admin.cliente.update', $cliente->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome:</label>
        <input id="nome" type="text" name="nome" value="{{ $cliente->nome }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="{{ $cliente->email }}" required>
    </div>
    <div>
        <label for="telefone">Telefone:</label>
        <input id="telefone" type="text" name="telefone" value="{{ $cliente->telefone }}" required>
    </div>
    <button type="submit">Atualizar</button>
</form>
@endsection
