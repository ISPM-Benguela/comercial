<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Notificao extends Model
{
    protected $fillable = [
        'user_id',
        'nivel',
        'notificacao',
    ];
}
