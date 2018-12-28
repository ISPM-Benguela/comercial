<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;

class HomeController extends Controller
{
    
    public function inicio(){
        $params = [
            'categorias' => Categoria::all(),
        ];
        return view('admin.painel.inicio')->with($params);
    }
}
