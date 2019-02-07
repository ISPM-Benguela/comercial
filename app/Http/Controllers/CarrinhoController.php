<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Produto;
use Comercio\Carrinho;
use Auth;

class CarrinhoController extends Controller
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
        $id = $request->input('id');

        if(Auth::user()){
       
        $produto = Produto::find($id);
        $user = Auth::user()->id;
        
        $carrinho = Carrinho::create([
            'user_id' => $user,
            'produto_id' => $produto->id,
        ]);

        return redirect()->route('home');

        }else {   
            return redirect()->route('carrinho.edit', ['id' => $id])->with('warning', 'Para adicionar a compra no carrinho, faça login');
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

        return $produto->nome;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }

        
        $params = [
            'produto' => Produto::find($id),
            'total' => $total,
            
        ];
        return view('paginas.carrinho')->with($params);
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
