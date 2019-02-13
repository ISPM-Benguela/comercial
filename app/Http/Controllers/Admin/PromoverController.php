<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Notificao;


class PromoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'preco' => 'required',
        ]);

        $inicio = $request->input('inicio');
        $termino = $request->input('termino');
        $preco = $request->input('preco');
        $id = $request->input('id');

        $produto = Produto::find($id);

        if($produto->promocao == false){
            $produto->promocao = 1;
            $produto->inicio = $inicio;
            $produto->fim = $termino;
            $produto->save();

            echo "Produto promovido";
        }else {
            echo "Ja nao temos promocao";
        }
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
        $params = [
            'titulo' => 'Produtos',
            'produto' => Produto::find($id),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
        ];

        return view('admin.produtos.promover')->with($params);
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
