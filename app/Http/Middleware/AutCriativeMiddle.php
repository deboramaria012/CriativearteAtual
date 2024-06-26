<?php

namespace App\Http\Middleware;

use App\Models\Usuario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AutCriativeMiddle
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('email')) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        $email = session('email');
        $usuario = Usuario::where('email', $email)->first();

        if (!$usuario) {
            return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
        }

        $tipoUsuario = $usuario->tipo_usuario;

        if ($tipoUsuario) {
            $tipo = null;

            if ($tipoUsuario === 'cliente') {
                $tipo = 'cliente';
            } elseif ($tipoUsuario === 'funcionario') {
                $tipo = 'funcionario';
            }

            if ($tipo === $tipoUsuario) {
                return $next($request);
            } else {
                return back()->withErrors(['email' => 'Acesso não permitido para esse perfil']);
            }
        }

        return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
    }
}
