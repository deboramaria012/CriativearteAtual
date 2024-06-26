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
            session([
                'email' => $cliente->emailCliente,
                'id' => $cliente->idCliente,
                'tipo' => $cliente->tipo_usuario // Certifique-se de que 'tipo_usuario' existe em ClienteModel
            ]);

            return redirect()->intended('/dashboard/cliente');
        } else {
            return back()->withErrors(['email' => 'Credenciais inválidas.']);
        }
    }
}
