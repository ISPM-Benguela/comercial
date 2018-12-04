<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $fillable = [
        'titulo','conteudo'
    ];
}
