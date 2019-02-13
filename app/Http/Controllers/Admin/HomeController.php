<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Notificao;

class HomeController extends Controller
{
    
    public function inicio(){
        $params = [
            'categorias' => Categoria::all(),
            'titulo' => "Produtos",
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => Produto::where('promocao', 0)->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
        ];

        return view('admin.painel.inicio')->with($params);
    }
}
