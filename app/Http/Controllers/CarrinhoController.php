<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        // Retrieve cart items from session or database
        $itensCarrinho = session()->get('carrinho', []);

        return view('carrinho', compact('itensCarrinho'));
    }

    public function adicionarAoCarrinho(Request $request)
    {
        // Logic to add item to cart
        $item = [
            'id' => $request->input('item_id'),
            'nome' => $request->input('item_nome'),
            'preco' => $request->input('item_preco')
        ];

        $carrinho = session()->get('carrinho', []);
        $carrinho[] = $item;
        session()->put('carrinho', $carrinho);

        return redirect()->route('carrinho.index');
    }

    public function removerItemCarrinho(Request $request)
    {
        // Logic to remove item from cart
        $itemId = $request->input('item_id');
        $carrinho = session()->get('carrinho', []);

        foreach ($carrinho as $key => $item) {
            if ($item['id'] == $itemId) {
                unset($carrinho[$key]);
            }
        }

        session()->put('carrinho', array_values($carrinho));

        return redirect()->route('carrinho.index');
    }
}
