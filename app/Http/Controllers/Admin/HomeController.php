<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function inicio(){
        return view('admin.painel.inicio');
    }
}
