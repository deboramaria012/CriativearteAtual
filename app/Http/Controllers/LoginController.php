<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }
    public function autenticar(Request $request)
    {
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
                'tipo_usuario_type' => $usuario ? $usuario->tipo_usuario_type : null, // Certifique-se de que 'tipo_usuario_type' existe no relacionamento
                'nomeUsuario' => $cliente->nomeCliente
            ]);

            // Verifique a autenticação
            if ($usuario && $usuario->tipo_usuario_type == 'cliente') {
                return redirect()->route('dashboard.cliente');
            } elseif ($usuario && $usuario->tipo_usuario_type == 'administrador') {
                return redirect()->route('dashboard.administrador');
            } else {
                return back()->withErrors(['email' => 'Tipo de usuário inválido.']);
            }
        } else {
            return back()->withErrors(['email' => 'Credenciais inválidas.']);
        }
    }
}
