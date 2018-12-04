<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;

use Auth;

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
        $permicao = Permission::all();
        return view('admin.previlegios.index')->with('permicao', $permicao);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nivel = Role::get(); // Pega todos previlegios

        return view('admin.previlegios.create')->with('nivel', $nivel);
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
        return redirect('previlegios');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permicao = Permission::findOrFail($id);

        return view('admin.previlegios.edit', compact('permicao'));
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
