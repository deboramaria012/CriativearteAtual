<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = 'tblclientes';
    protected $primaryKey = 'idCliente';
    protected $fillable = [
        'nomeCliente', 'emailCliente', 'telefoneCliente', 'senhaCliente', 'created_at', 'updated_at'
    ];

    public function usuario()
    {
        return $this->hasOne(Usuario::class, 'idUsuario', 'idCliente');
    }
}
