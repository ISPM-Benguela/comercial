<?php

namespace Comercio;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['nome', 'imageable_id','imageable_type'];
    
}
