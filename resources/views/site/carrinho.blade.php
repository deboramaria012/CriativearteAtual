<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Carrinho</title>
    <link rel="stylesheet" href="{{ asset('css/carrinho.css') }}">
</head>
<style>
    /* carrinho.css */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f9f9f9;
    }

    h1 {
        margin: 20px 0;
    }

    #carrinho-container {
        width: 80%;
        max-width: 600px;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        padding: 10px;
        background: #f1f1f1;
        border-radius: 4px;
    }

    button {
        background: #ff6347;
        color: white;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 4px;
    }

    button:hover {
        background: #ff4500;
    }

    p {
        text-align: center;
        font-size: 1.2em;
    }

    .total-container {
        text-align: right;
        margin-top: 20px;
        font-size: 1.2em;
        font-weight: bold;
    }

</style>
<body>
    <h1>Seu Carrinho</h1>

    <div id="carrinho-container">
        @if($itensCarrinho && count($itensCarrinho) > 0)
            <ul>
                @foreach($itensCarrinho as $item)
                    <li>
                        <span>{{ $item['nome'] }} - R$ {{ number_format($item['preco'], 2, ',', '.') }}</span>
                        <form action="{{ route('removerItemCarrinho') }}" method="post" class="form-remover">
                            @csrf
                            <input type="hidden" name="item_id" value="{{ $item['id'] }}">
                            <button type="submit" onclick="return confirm('Tem certeza que deseja remover este item?');">Remover Item</button>
                        </form>
                    </li>
                @endforeach
            </ul>
            <div class="total-container">
                <strong>Total: R$ {{ number_format(collect($itensCarrinho)->sum('preco'), 2, ',', '.') }}</strong>
            </div>
        @else
            <p>O seu carrinho está vazio.</p>
        @endif
    </div>

    <script src="{{ asset('js/carrinho.js') }}"></script>
</body>
</html>
