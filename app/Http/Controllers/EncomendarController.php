<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;
use Comercio\Contacto;
use Comercio\Carrinho;
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
        echo $id;
        #return view('paginas.encomendar')->with($params);
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
