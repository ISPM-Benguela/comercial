<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('paginas.cliente');
    }
}
