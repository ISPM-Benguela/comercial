<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Perfil;
use Comercio\Carrinho;
use Auth;

class ClienteController extends Controller
{
    public function index()
    {
        if(!Auth::user()){
            $total = 0;

        }else{
            $user = Auth::user()->id;
            $total = Carrinho::where('user_id', $user)->count();
        }


        $params = [
            'perfil' => Perfil::find($user),
            'total' => $total,
        ];
        return view('paginas.cliente')->with($params);
    }
}
