<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;
use Comercio\Contacto;
use Comercio\Carrinho;
use Comercio\Notificao;
use Comercio\Contact;
use Comercio\User;
use Auth;


class TestandoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'categorias' => Categoria::all(),
            'titulo' => "Produtos",
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => Produto::where('promocao', 0)->count(),
            'totalpromo' => Produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
            'usuarios' => User::all(),
        ];


        return view('paginas.teste')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
