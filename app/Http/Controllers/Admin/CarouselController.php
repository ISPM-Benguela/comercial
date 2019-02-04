<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Categoria;
use Comercio\Produto;
use Comercio\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'produtos' => Produto::all(),
            'categorias' => Categoria::all(),
            'carousel' => Carousel::all(),
        ];
        return view('admin.carousel.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'categorias' => Categoria::all(),
            'produtos' => Produto::all(),
        ];
        return view('admin.carousel.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomeFile = null;
        $upload = null;

        $this->validate($request, [
            
            'preco' => 'required',
            'nome' => 'required',
            'imagem' => 'required',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Carousel', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('carousel.create')
                    ->with('error','Falha ao fazer upload');
            }
        }
        $artigo = Carousel::create([
            'preco' => $request->input('preco'),
            'nome' => $request->input('nome'),
            'imagem' => $upload,
            
        ]);

        return redirect()->route('carousel.index')->with('success',"Cadastrado com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $params = [
            'categorias' => Categoria::all(),
            'carousel' => Carousel::find($id),
        ];
        return view('admin.carousel.delete')->with($params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $params = [
            'categorias' => Categoria::all(),
            'carousel' => Carousel::find($id),
        ];
        return view('admin.carousel.edit')->with($params);
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
        $this->validate($request, [
            'nome' => 'required',
            'preco' => 'required',
            'imagem' => 'required',
        ]);

        $carousel = Carousel::findOrFail($id);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $nome = uniqid(date('HisYmd'));

            $extensao = $request->file('imagem')->extension();

            $nameFile = "{$nome}.{$extensao}";

            $upload = $request->file('imagem')->storeAs('Carousel', $nameFile);

            if(!$upload )
            {
                return redirect()
                    ->route('carousel.create')
                    ->with('error','Falha ao fazer upload');
            }
        }

        $carousel->nome = $request->input('nome');
        $carousel->preco = $request->input('preco');
        $carousel->imagem = $upload;

        $carousel->save();
        return redirect()->route('carousel.index')->with('success',"Actividade actualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();

        return redirect()->route('carousel.index')->with('error', ' Eliminado com sucesso.');
    }
}
