<?php

namespace Comercio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Comercio\Http\Controllers\Controller;

use Comercio\User;
use Auth;
use Comercio\Perfil;
use Comercio\Produto;
use Comercio\Categoria;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Comercio\Notificao;

//Enables us to output flash messaging
use Session;




class UsuarioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('id','DESC')->paginate(5);

        $params = [
            'usuarios' => $usuarios,
            'categorias' => Categoria::all(),
            'totalproduto' => Produto::all()->count(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
        ];
        
        return view('admin.usuarios.index')->with($params);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $params = [
            'nivel' => Role::get(),
            'categorias' => Categoria::all(),
            'notitotal' => Notificao::where('nivel', 1)->count(),
            'totalproduto' => produto::all()->count(),
        ];
        return view('admin.usuarios.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //Validate name, email and password fields
          $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->only('email', 'name', 'password')); //Retrieving only the email and password data
        $nivel = $request['nivel']; //Retrieving the roles field

        $perfil = new Perfil;
        $perfil->tipo = 'Operador';

        $user->perfil()->save($perfil);

       
        //Checking if a role was selected
        if (isset($nivel)) {

            foreach ($nivel as $n) {
            $nivel_r = Role::where('id', '=', $n)->firstOrFail();            
            $user->assignRole($nivel_r); //Assigning role to user
            }
        }        
    //Redirect to the users.index view and display message
        return redirect()->route('usuarios.index')
            ->with('flash_message',
             'Funcionarions (' . $user->name  . ') cradastrado com sucesso!');
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
            'totalproduto' => Produto::all()->count(),
        ];
        return redirect('usuarios')->with($params); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); //Get user with specified id
        $nivel = Role::get(); //Get all roles
        $categorias = Categoria::all();

        $notitotal =Notificao::where('nivel', 1)->count();
        $totalproduto = produto::all()->count();

        return view('admin.usuarios.edit', compact('user', 'nivel', 'categorias','notitotal','totalproduto'));
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
        $user = User::findOrFail($id); //Get role specified by id

          //Validate name, email and password fields    
            $this->validate($request, [
                'name'=>'required|max:120',
                'email'=>'required|email|unique:users,email,'.$id,
                'password'=>'required|min:6|confirmed'
            ]);

            $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
            $roles = $request['roles']; //Retreive all roles
            $user->fill($input)->save();
    
            if (isset($roles)) {        
                $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
            }        
            else {
                $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
            }
            return redirect()->route('usuarios.index')
                ->with('flash_message',
                 'Actualizado o usuarios (' . $user->name . ') com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id); 
        $user->delete();

        return redirect()->route('usuarios.index')
            ->with('flash_message',
             'Usuarios eliminado com sucesso.');
    }
}
