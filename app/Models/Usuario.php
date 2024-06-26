<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'tblusuarios';
    protected $primarykey ='id_usuario';


    public function tipo_usuario(){
        return $this->morphOne('tipo_usuario', 'tipo_usuario_id','tipo_usuario_type');
    }

}
