<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Notificao;
use Comercio\Categoria;
use Auth;
use Comercio\Produto;


class NotificacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            
          $total = Notificao::where('nivel', 1)->count();
        }

        $params = [
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'notificacao' => Notificao::all(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];
        return view('admin.notificacao.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'notificacao' => Notificao::all(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];
        return view('admin.notificacao.create')->with($params);
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
            'notificador' => 'required',
            'nivel' => 'required',
            'notificacao' => 'required',
        ]);

        $nofiticacao = Notificao::create([
            'user_id' => $request->input('user_id'),
            'nivel' => $request->input('nivel'),
            'notificacao' => $request->input('notificacao')
        ]);

        return redirect()->route('notificacao.index')->with('success', 'Grupo notificado com sucesso.');
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
