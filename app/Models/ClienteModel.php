<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'tblclientes';
    protected $primarykey ='idCliente';
    protected $fillable = ['nomeCliente', 'emailCliente', 'telefoneCliente','senhaCliente', 'created_at','updated_at']; // Nomes das colunas da tabela

    public function usuario(){
     return $this->morphOne(Usuario::class, 'tipo_usuario');


    }
}
