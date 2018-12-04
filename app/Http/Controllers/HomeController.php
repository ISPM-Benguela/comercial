<?php

namespace Comercio\Http\Controllers;

use Illuminate\Http\Request;
use Comercio\Test;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function imageUpload()
    {
        return view('imagem.index');
    }
    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'imagem' => 'required'
        ]);

        $nameFile = null;
        
        if($request->hasFile('imagem')){

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
    
            // Recupera a extensão do arquivo
            $extension = $request->imagem->extension();
    
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            $upload = $request->imagem->storeAs('tests', $nameFile);

            if(!$upload){
                return "Error";
            }else{
                Test::create([
                    'title' => $request['title'],
                    'imagem' => $upload
                ]);
                return "salvamos";
            }
            
           
        }else{
            return "Nao tem";
        }

        return $nameFile;
        
    }

       
}
