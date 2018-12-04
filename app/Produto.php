<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Produto extends Model
{
    protected $guarded = [];

    protected $appends = ["thumbs"];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nome'
                ]
            ];
    }
    public function categorias()
    {
        return $this->belongsTo('Comercio\Categoria','categoria_id','id');
    }
}
Produos::find(1)->categorias();