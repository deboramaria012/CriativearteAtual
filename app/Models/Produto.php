<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'preco', 'categoriaproduto', 'imagemproduto'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
