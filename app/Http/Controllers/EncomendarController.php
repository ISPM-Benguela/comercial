<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;
use Comercio\Contacto;
use Comercio\Carrinho;
use Comercio\Encomenda;
use Auth;

class EncomendarController extends Controller
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
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }

        $params = [
            'categorias' => Categoria::all(),
            'carousel' => Carousel::all(),
            'produtos' => Produto::where('stock', 0)->get(),
            'desponivel' => Produto::all(),
            'total' => $total,
        ];

        return view('paginas.encomendar')->with($params);
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
        if(!Auth::user()){
            $total = 0;
            return redirect()->route('encomendar.index')->with('warning', "Para encomendar um produto, é necessário estar logado");

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }

        $params = [
            'categorias' => Categoria::all(),
            'carousel' => Carousel::all(),
            'produtos' => Produto::where('stock', 0)->get(),
            'desponivel' => Produto::all(),
            'total' => $total,
        ];
        
        $encomenda = Encomenda::create([
            'user_id'=> $user,
            'produto_id' => $id,
        ]);

        return redirect()->route('encomendar.index')->with('success', "Produto encomendado com sucesso.");
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
