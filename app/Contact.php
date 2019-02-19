<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'telefone'
    ];

    public function usuario()
    {
        return $this->belongsTo("Comercio\User");
    }
}
