<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
{
    // Validação dos dados de entrada
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $email = $request->input('email');
    $password = $request->input('password');

    // Converte a senha para um BigInteger
    $senhaClienteBigInt = intval($password);

    $cliente = ClienteModel::where('emailCliente', $email)->first();

    if ($cliente && $cliente->senhaCliente === $senhaClienteBigInt) {
        $usuario = $cliente->usuario; // Relacionamento definido no modelo

        session([
            'email' => $cliente->emailCliente,
            'id' => $cliente->idCliente,
            'tipo_usuario_type' => $usuario ? $usuario->tipo_usuario_type : null,
            'nomeUsuario' => $cliente->nomeCliente
        ]);

        // Verifique o tipo de usuário e redirecione para a rota apropriada
        if ($usuario && $usuario->tipo_usuario_type === 'cliente') {
            return redirect()->route('dashboard.cliente');
        } elseif ($usuario && $usuario->tipo_usuario_type === 'administrador') {
            return redirect()->route('dashboard.administrador');
        } else {
            // Desloga o usuário e retorna com erro
            Auth::logout();
            return back()->withErrors(['email' => 'Tipo de usuário inválido.']);
        }
    } else {
        // Credenciais inválidas
        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }
}

}
