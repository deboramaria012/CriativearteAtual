<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'tblusuarios';
    protected $primaryKey = 'idUsuario';
    protected $fillable = [
        'nomeUsuario', 'emailUsuario', 'senhaUsuario', 'telefoneUsuario', 'tipo_usuario_id', 'tipo_usuario_type', 'created_at', 'updated_at'
    ];

    public function cliente()
    {
        return $this->belongsTo(ClienteModel::class, 'idCliente', 'idUsuario');
    }
}
