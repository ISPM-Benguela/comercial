<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Perfil;
use Auth;

class ClienteController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;

        $params = [
            'perfil' => Perfil::find($user),
        ];
        return view('paginas.cliente')->with($params);
    }
}
