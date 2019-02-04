<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $params = [
            'titulo' => 'Categoria'
        ];

        return view('admin.categoria.index')->with([
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
            'produtos' => Produto::all(),
        ];

        return view('admin.categoria.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required',
        ]);
        
        $categoria = Categoria::create([
            'nome' => $request->input('nome'),
        ]);

        return redirect()->route('categorias.index')->with('success','Categoria cadastrado com sucesso.');
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
            'categoria' => Categoria::find($id),
        ];
       return view('admin.categoria.delete')->with($params);
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
            'categoria' => Categoria::find($id),
        ];
       return view('admin.categoria.edit')->with($params);
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
        $this->validate($request, [
            'nome' => 'required',
        ]);
        $categoria = Categoria::find($id);
        $categoria->nome = $request->input('nome');

        $categoria->save();

        return redirect()->route('categorias.index')->with('info', 'Categorias actualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();

        return redirect()->route('categorias.index')->with('error', "Categoria eliminado com sucesso.");
    }
}
