<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

use Comercio\User;

class Perfil extends Model
{
    protected $fillable = [
        'nome',
        'provincia',
        'imagem',
        'tipo',
        'user_id',
    ];

    protected $table = "perfils";
    public $timestamps = false;
    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo("Comercio\User");
    }
}
