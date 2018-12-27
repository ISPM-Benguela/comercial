<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'imagem',
    ];
}
