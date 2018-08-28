<?php

namespace isw\Http\Controllers;

use Illuminate\Http\Request;

use isw\Http\Requests;
use isw\Chofer;
use Illuminate\Support\Facades\Redirect;
use isw\Http\Requests\ChoferFormRequest;
use DB;
class ChoferController extends Controller
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
            $categorias=DB::table('conductor')

            ->orderBy('rut_conductor','desc') //desc es ordenar de manera descendente los tipos de usuario
            ->paginate(7);
            return view('acceso.chofer.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("acceso.chofer.create");
    }
    public function store (ChoferFormRequest $request)
    {
        $categoria=new Chofer;
        $categoria->rut_conductor=$request->get('rut_conductor');
        $categoria->patente=$request->get('patente');
        $categoria->nombre_conductor=$request->get('nombre_conductor');
        $categoria->pass_conductor=$request->get('pass_conductor');
        $categoria->save();
        return Redirect::to('acceso/chofer');

    }
    public function show($id)
    {
        return view("acceso.chofer.show",["categoria"=>Chofer::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("acceso.chofer.edit",["categoria"=>Chofer::findOrFail($id)]);
    }
    public function update(ChoferFormRequest $request,$id)
    {
        $categoria=Chofer::findOrFail($id);
        $categoria->rut_conductor=$request->get('rut_conductor');
        $categoria->patente=$request->get('patente');
        $categoria->nombre_conductor=$request->get('nombre_conductor');
        $categoria->pass_conductor=$request->get('pass_conductor');
        $categoria->update();
        return Redirect::to('acceso/chofer');
    }
    public function destroy($id)
    {
        $categoria=Chofer::findOrFail($id);
        $categoria->delete();
        return Redirect::to('acceso/chofer');
    }}
