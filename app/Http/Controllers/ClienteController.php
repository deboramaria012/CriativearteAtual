<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $idCliente = session('id');
        $cliente = ClienteModel::find($idCliente);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        return view('dashboard.administrador.cliente.cliente', compact('cliente'));
    }





    // public function login (Request $request){

    //     $credentials =$request->validate([
    //         'email' => 'required|email',
    //         'senha' => 'required',
    //     ]);


    //     $usuario =Usuario::where('email',$credentials['email'])->where('senha', $credentials['senha'])->firt();

    //     if ($usuario && $usuario->tipo_usuario_type == 'Cliente') {

    //         $cliente = $usuario->tipo_usuario()->firt();

    //         if($cliente){

    //             $token = $usuario->createToken('Token de Acesso')->plainTextToken;

    //             return response()->json([
    //                 'message' =>'Login bem sucedido!',
    //                 'usuario'=> [
    //                     'id' => $usuario->idUsuario,
    //                     'nome'=>$usuario->nome,
    //                     'email'=>$usuario->email,
    //                     'tipo_usuario'=> $usuario->tipo_usuario_type,
    //                     'dados_cliente' => [
    //                      'IdAlunoo'=>$cliente->idCliente,
    //                      'nome' =>$cliente->nome,
    //                     ],
    //                     ],

    //                     'access_token' => $token,
    //                     'token_type' => 'Bearer',
    //            ]);
    //         }

    //     }
    //     return response()->json(['message' => 'Credenciais invalidas ou usuário não é um cliente '], 401);
    // }

}





