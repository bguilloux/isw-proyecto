<?php

namespace isw\Http\Controllers;

use Illuminate\Http\Request;

use isw\Http\Requests;
use isw\Usuarios;
use Illuminate\Support\Facades\Redirect;
use isw\Http\Requests\UsuariosFormRequest;
use DB;
class UsuariosController extends Controller
{
      public function __construct()
    {
 $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $categorias=DB::table('users')

            ->orderBy('id','desc') //desc es ordenar de manera descendente los tipos de usuario
            ->paginate(7);
            return view('acceso.usuarios.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("acceso.usuarios.create");
    }
    public function store (UsuariosFormRequest $request)
    {
        $categoria=new Usuarios;
        $categoria->name=$request->get('name');
        $categoria->email=$request->get('email');
        $categoria->password=$request->get('password');
        $categoria->save();
        return Redirect::to('acceso/usuarios');

    }
    public function show($id)
    {
        return view("acceso.usuarios.show",["categoria"=>Usuarios::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("acceso.usuarios.edit",["categoria"=>Usuarios::findOrFail($id)]);
    }
    public function update(UsuariosFormRequest $request,$id)
    {
        $categoria=Usuarios::findOrFail($id);
        $categoria->name=$request->get('name');
        $categoria->email=$request->get('email');
        $categoria->password=$request->get('password');
        $categoria->update();
        return Redirect::to('acceso/usuarios');
    }
    public function destroy($id)
    {
        $categoria=Usuarios::findOrFail($id);
        $categoria->delete();
        return Redirect::to('acceso/usuarios');
    }

}
