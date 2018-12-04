<?php

namespace Comercio;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded = [];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nome'
            ]
            ];
    }
    public function todosProdutos()
    {
        return $this->belongsToMany('Comercio\Produto','produtos','categoria_id');
    }
}
