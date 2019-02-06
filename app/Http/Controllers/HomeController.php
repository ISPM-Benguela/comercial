<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;
use Comercio\Contacto;
use Comercio\Carrinho;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Show the application dashboard.
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
            'produtos' => Produto::take(4)->orderBy('created_at','desc')->get(),
            'desponivel' => Produto::all(),
            'total' => $total,
        ];
        return view('paginas.index')->with($params);
    }

    public function sobre()
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }

        $params = [
            'categorias' => Categoria::all(),
            'total' => $total,
        ];
        return view('paginas.sobre')->with($params);
    }
    public function servicos()
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }

        $params = [
            'categorias' => Categoria::all(),
            'total' => $total,
        ];
        return view('paginas.servicos')->with($params);
    }
    public function contactos()
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }
        $params = [
            'categorias' => Categoria::all(),
            'total' => $total,
        ];
        return view('paginas.contactos')->with($params);
    }

    public function enviar(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'mensagem' => 'required',
        ]);

        $contacto = Contacto::create([
            'email' => $request->input('email'),
            'mensagem' => $request->input('mensagem'),
        ]);

        return redirect()->route('contactos')->with('success', "Mensagem enviada com sucesso!");
    }
    public function categoria($nome)
    {
        return $nome;
        $params = [
            'categoria' => Categoria::find($id),
        ];

        return view('produtos.categoria');
    }

}
