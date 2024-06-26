<!-- carrinho.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Carrinho</title>
</head>
<body>
    <h1>Seu Carrinho</h1>

    <div id="carrinho-container">
        <!-- Verifica se $itensCarrinho não é null e é um array antes de contar -->
        @if($itensCarrinho ?? false && count($itensCarrinho) > 0)
            <ul>
                @foreach($itensCarrinho as $item)
                    <li>{{ $item->nome }} - R$ {{ $item->preco }}</li>
                    <form action="{{ route('removerItemCarrinho') }}" method="post">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->id ?? '' }}">
                        <button type="submit">Remover Item</button>
                    </form>
                @endforeach
            </ul>
        @else
            <p>O seu carrinho está vazio.</p>
        @endif
    </div>

    <!-- Outros elementos da página aqui -->

    <script src="{{ asset('js/carrinho.js') }}"></script>

</body>
</html>
