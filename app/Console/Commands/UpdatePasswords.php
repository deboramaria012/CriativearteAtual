<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UpdatePasswords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:passwords';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Atualiza as senhas dos clientes e usuários para hashes bcrypt';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Para Clientes
        $clientes = ClienteModel::all();
        foreach ($clientes as $cliente) {
            // Só faz hash se a senha não estiver hasheada
            if (!Hash::needsRehash($cliente->senhaCliente)) {
                $cliente->senhaCliente = Hash::make($cliente->senhaCliente);
                $cliente->save();
                $this->info("Senha do cliente {$cliente->emailCliente} atualizada.");
            }
        }

        // Para Usuários
        $usuarios = Usuario::all();
        foreach ($usuarios as $usuario) {
            // Só faz hash se a senha não estiver hasheada
            if (!Hash::needsRehash($usuario->senhaUsuario)) {
                $usuario->senhaUsuario = Hash::make($usuario->senhaUsuario);
                $usuario->save();
                $this->info("Senha do usuário {$usuario->emailUsuario} atualizada.");
            }
        }

        $this->info('Atualização de senhas concluída.');
        return 0;
    }
}
