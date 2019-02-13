<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;

use Auth;
use Comercio\Categoria;
use Comercio\Notificao;
use Comercio\Produto;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PrevilegioController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $params = [
            'permicao' => Permission::all(),
            'categorias' => Categoria::all(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
            
        ];
        return view('admin.previlegios.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
             'nivel' => Role::get(), // Pega todos previlegios
             'categorias' => Categoria::all(),
             'totalpromo' => produto::where('promocao', 1)->count(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];

        return view('admin.previlegios.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $name = $request['name'];
        $permicao = new Permission();
        $permicao->name = $name;

        $nivel = $request['nivel'];

        $permicao->save();

        if (!empty($request['nivel'])) { //If one or more role is selected
            foreach ($nivel as $n) {
                $r = Role::where('id', '=', $n)->firstOrFail(); //Match input role to db record

                $permission = Permission::where('name', '=', $name)->first(); //Match input //permission to db record
                $r->givePermissionTo($permission);
            }
        }

        return redirect()->route('previlegios.index')
            ->with('flash_message',
             'Previlegio ('. $permicao->name.') vriado!');
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

            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalpromo' => produto::where('promocao', 1)->count(),
        ];
        return redirect('previlegios')->with($params);
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
            'permicao' => Permission::findOrFail($id),
            'categorias' => Categoria::all(),
            'totalpromo' => produto::where('promocao', 1)->count(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
            'totalEncomeda' => Produto::where('stock', 0)->count(), 
            'categTotal' => Categoria::all()->count(),
        ];

        return view('admin.previlegios.edit')->with($params);
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
        $permicao = Permission::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $input = $request->all();
        $permicao->fill($input)->save();

        return redirect()->route('previlegios.index')
            ->with('flash_message',
             'Previlegio actualizado com '. $permicao->name.' com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permicao = Permission::findOrFail($id);

        //Make it impossible to delete this specific permission    
         if ($permicao->name == "area restrita") {
            return redirect()->route('previlegios.index')
            ->with('flash_message',
             'Nao autorizada a eliminar este previlegio!');
        }

        $permicao->delete();

        return redirect()->route('previlegios.index')
            ->with('flash_message',
             'Previlegio eliminado com sucesso!');
    }
}
