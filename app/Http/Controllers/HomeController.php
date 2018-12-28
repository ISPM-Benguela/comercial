<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'categorias' => Categoria::all(),
            'carousel' => Carousel::all(),
            'produtos' => Produto::all(),
        ];
        return view('paginas.index')->with($params);
    }

    public function sobre()
    {
        $params = [
            'categorias' => Categoria::all(),
        ];
        return view('paginas.sobre')->with($params);
    }
    public function servicos()
    {
        $params = [
            'categorias' => Categoria::all(),
        ];
        return view('paginas.servicos')->with($params);
    }
    public function contactos()
    {
        $params = [
            'categorias' => Categoria::all(),
        ];
        return view('paginas.contactos')->with($params);
    }

}
