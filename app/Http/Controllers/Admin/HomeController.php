<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;

class HomeController extends Controller
{
    
    public function inicio(){
        $params = [
            'categorias' => Categoria::all(),
            'titulo' => "Produtos",
        ];

        return view('admin.painel.inicio')->with($params);
    }
}
