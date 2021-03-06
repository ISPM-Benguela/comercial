<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;
use Comercio\Contacto;
use Comercio\Carrinho;
use Comercio\Notificao;
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
         //$this->middleware(['auth']);
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
            $total = Carrinho::where('user_id', $user)->count(); // select * from carrinho where user_id = $user
        }

        $params = [
            'categorias' => Categoria::all(), // select * from categiras
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
    public function testando()
    {
        $params = [
            'categorias' => Categoria::all(),
            'titulo' => "Produtos",
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => Produto::where('promocao', 0)->count(),
            'totalpromo' => Produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];


        return view('paginas.teste')->with($params);
    }
}
