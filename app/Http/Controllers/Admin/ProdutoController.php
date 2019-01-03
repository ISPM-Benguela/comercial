<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $params = [
            'titulo' => 'Produtos'
        ];
        /*
        $product = new Produto;
        $product->nome = 'God of War';
        $product->descricao = "BOm produto";
        $product->preco = "23.3";
        $product->stock = "23";
        
        $product->save();

        $category = Categoria::find([1, 2]);
        $product->categorias()->attach($category);

        return 'Success';*/

        

        return view('produtos.index')->with([
            'params' => $params,
            'categorias' => Categoria::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'titulo' => 'Produtos',
            'categorias' => Categoria::all(),
        ];

        return view('produtos.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
