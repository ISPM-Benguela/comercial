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
        $params = [
            'titulo' => 'Produtos',
            'categorias' => Categoria::all(),
            #'produto' => Produto::find($id),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'produtos' => produto::where('promocao', 1)->get(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];
        return view('admin.promover.index')->with($params);
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
            $produto->novo_preco = $preco;
            $produto->inicio = $inicio;
            $produto->fim = $termino;
            $produto->save();

            return redirect()->route('promover.index')->with('success', 'Produto em promoção');
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
        $produto = Produto::find($id);

        if($produto->promocao == true){
            $produto->promocao = 0;
            $produto->novo_preco = 0;
            $produto->inicio = 0;
            $produto->fim = 0;
            $produto->save();

            return redirect()->route('promover.index')->with('success', 'Promoção do Produto terminado.');
        }
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
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
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
