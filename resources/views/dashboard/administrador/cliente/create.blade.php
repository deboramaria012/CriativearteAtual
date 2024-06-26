@extends('layoutdash.layout')

@section('conteudo-dash')
<form method="POST" action="{{ route('admin.cliente.store') }}">
    @csrf
    <div>
        <label for="nomecliente">Nome:</label>
        <input id="nomecliente" type="text" name="nomecliente" required>
    </div>
    <div>
        <label for="emailCliente">Email:</label>
        <input id="emailCliente" type="email" name="emailCliente" required>
    </div>
    <div>
        <label for="telefoneCliente">Telefone:</label>
        <input id="telefoneCliente" type="text" name="telefoneCliente" required>
    </div>
    <button type="submit">Cadastrar</button>
</form>
@endsection
