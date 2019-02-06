<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;
use Comercio\Produto;

class Carrinho extends Model
{
    protected $fillable = [
        'user_id',
        'produto_id',
        'quantidade',
    ];

    public function user()
    {
        return $this->belongsTo("Comercio\User");
    }
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
