<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    protected $fillable = [
        'user_id',
        'produto_id',
        'estado_encomenda',
    ];
    public function produtos()
    {
        return $this->hasMany('Comercio\Produto');
    }
    public function cliente()
    {
        return $this->belongsTo('Comercio\Encomenda');
    }
}
