<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClienteModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Método para exibir o formulário de criação de cliente
    public function createCliente()
    {
        return view('dashboard.administrador.cliente.create');
    }

    // Método para cadastrar um novo cliente
    public function storeCliente(Request $request)
    {
        $request->validate([
            'nomeCliente' => 'required|string|max:100',
            'emailCliente' => 'required|email|max:100',
            'telefoneCliente' => 'required|string|max:20',
        ], [
            'nomeCliente.required' => 'O nome do cliente é obrigatório.',
            'emailCliente.required' => 'O e-mail do cliente é obrigatório.',
            'telefoneCliente.required' => 'O telefone do cliente é obrigatório.',
        ]);

        try {
            $cliente = new ClienteModel();
            $cliente->nome = $request->input('nomeCliente');
            $cliente->email = $request->input('emailCliente');
            $cliente->telefone = $request->input('telefoneCliente');
            $cliente->save();

            return redirect()->route('dashboard.cliente')->with('success', 'Cliente cadastrado com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('admin.cliente.create')->with('error', 'Erro ao cadastrar cliente: ' . $e->getMessage());
        }
    }

    // Método para exibir a lista de clientes
    public function indexCliente()
    {
        $clientes = ClienteModel::all();
        return view('dashboard.administrador.cliente.index', compact('clientes'));
    }

    // Método para exibir o formulário de edição de cliente
    public function editCliente($id)
    {
        $cliente = ClienteModel::findOrFail($id);
        return view('dashboard.administrador.cliente.edit', compact('cliente'));
    }

    // Método para atualizar os dados de um cliente
    public function updateCliente(Request $request, $id)
    {
        $request->validate([
            'nomeCliente' => 'required|string|max:100',
            'emailCliente' => 'required|email|max:100',
            'telefoneCliente' => 'required|string|max:20',
        ], [
            'nomeCliente.required' => 'O nome do cliente é obrigatório.',
            'emailCliente.required' => 'O e-mail do cliente é obrigatório.',
            'telefoneCliente.required' => 'O telefone do cliente é obrigatório.',
        ]);

        try {
            $cliente = ClienteModel::findOrFail($id);
            $cliente->nome = $request->input('nomeCliente');
            $cliente->email = $request->input('emailCliente');
            $cliente->telefone = $request->input('telefoneCliente');
            $cliente->save();

            return redirect()->route('admin.cliente.index')->with('success', 'Cliente atualizado com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('admin.cliente.edit', $id)->with('error', 'Erro ao atualizar cliente: ' . $e->getMessage());
        }
    }

    // Método para excluir um cliente
    public function destroyCliente($id)
    {
        try {
            $cliente = ClienteModel::findOrFail($id);
            $cliente->delete();

            return redirect()->route('admin.cliente.index')->with('success', 'Cliente excluído com sucesso.');
        } catch (\Exception $e) {
            return redirect()->route('admin.cliente.index')->with('error', 'Erro ao excluir cliente: ' . $e->getMessage());
        }
    }
}
