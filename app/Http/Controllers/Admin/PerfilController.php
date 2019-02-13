<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Perfil;
use Auth;
use Comercio\Notificao;
use Comercio\Produto;

class PerfilController extends Controller
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
        
        $user = Auth::user()->id;

        return view('admin.perfil.index')->with([
            'params' => $params,
            'perfil' => Perfil::find($user),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => Produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
        ]);
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
        $params = [
            'titulo' => 'Produtos'
        ];
        
        $user = Auth::user()->id;

        return view('admin.perfil.index')->with([
            'params' => $params,
            'perfil' => Perfil::find($user),
            'totalpromo' => produto::where('promocao', 1)->count(),
        ]);
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
            'imagem' => 'required',
        ]);
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();
            

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Perfil', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('perfil.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $perfil = Perfil::find($id);
        $perfil->nome = $request->input('nome');
        $perfil->provincia = $request->input('provincia');
        $perfil->imagem = $upload;
        $perfil->save();

        return redirect()->route('home')->with('success', 'Perfil actializado com sucesso');
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
