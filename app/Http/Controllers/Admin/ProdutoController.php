<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Notificao;

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
        

        return view('admin.produtos.index')->with([
            'params' => $params,
            'categorias' => Categoria::all(),
            'produtos' => Produto::where('promocao', false)->get(),
            'notitotal' => Notificao::where('nivel', 0)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
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
            'produtos' => Produto::all(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
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
        $nomeFile = null;
        $upload = null;

        $this->validate($request, [
            'nome' => 'required|string',
            'descricao' => 'required',
            'imagem' => 'required',
            'preco' => 'required',
            'stock' => 'required',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Produtos', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('produtos.create')
                    ->with('error','Falha ao fazer upload');
            }
        }

       
        
        $categoria = Categoria::find($request->input('categoria'));

        $produto = Produto::create([
            'nome' => $request->input('nome'),
            'categoria_id' => $request->input('categoria'),
            'descricao' => $request->input('descricao'),
            'imagem' => $upload,
            'preco' => $request->input('preco'),
            'stock' => $request->input('preco'),
        ]);

        return redirect()->route('produtos.index')->with('success','Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $params = [
            'titulo' => 'Produtos',
            'categorias' => Categoria::all(),
            'produto' => Produto::find($id),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];

        return view('admin.produtos.delete')->with($params);
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
            'categorias' => Categoria::all(),
            'produto' => Produto::find($id),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];

        return view('admin.produtos.edit')->with($params);
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
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('produtos.index')->with('error', 'Actividade eliminada com sucesso.');
    }
}
