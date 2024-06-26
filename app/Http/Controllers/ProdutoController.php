<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = ProdutoModel::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'categoriaproduto' => 'nullable|exists:categorias,id',
            'imagemproduto' => 'nullable|string|max:255',
        ]);

        ProdutoModel::create($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function show(ProdutoModel $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function edit(ProdutoModel $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, ProdutoModel $produto)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
            'categoriaproduto' => 'nullable|exists:categorias,id',
            'imagemproduto' => 'nullable|string|max:255',
        ]);

        $produto->update($validated);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(ProdutoModel $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
