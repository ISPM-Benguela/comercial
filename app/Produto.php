<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;
use Comercio\Categoria;

class Produto extends Model
{
    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'preco',
        'stock',
        'promocao',
        'imagem',
        'novo_preco',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
