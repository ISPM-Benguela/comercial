<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;
use Comercio\Artigo;

class ArtigoController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'publicar'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artigos = Artigo::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        return view('artigos.index', compact('artigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artigos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validating title and body field
        $this->validate($request, [
            'titulo' =>'required|max:100',
            'conteudo' =>'required',
        ]);

        $title = $request['titulo'];
        $body = $request['conteudo'];

        $post = Post::create($request->only('titulo', 'conteudo'));

        //Display a successful message upon save
        return redirect()->route('artigos.index')
            ->with('flash_message', 'Artigo,
            '. $post->title.' criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artigo = Artigo::findOrFail($id); //Find post of id = $id

        return view ('artigo.show', compact('artigo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artigo = Artigo::findOrFail($id);

        return view('artigos.edit', compact('artigo'));
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
            'titulo'=>'required|max:100',
            'conteudo'=>'required',
        ]);

        $artigo = Artigo::findOrFail($id);
        $artigo->titulo = $request->input('titulo');
        $artigo->conteudo = $request->input('conteudo');
        $artigo->save();

        return redirect()->route('artigos.show', 
            $artigo->id)->with('flash_message', 
            'Artigo, '. $artigo->titulo .' actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artigo = Artigo::findOrFail($id);
        $artigo->delete();

        return redirect()->route('posts.index')
            ->with('flash_message',
             'Artigo foi eliminado com sucesso');

    }
}
