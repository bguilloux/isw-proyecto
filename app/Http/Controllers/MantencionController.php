<?php

namespace isw\Http\Controllers;

use Illuminate\Http\Request;

use isw\Http\Requests;
use isw\Mantencion;
use Illuminate\Support\Facades\Redirect;
use isw\Http\Requests\MantencionFormRequest;
use DB;
class MantencionController extends Controller
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
            $categorias=DB::table('registro_mantenciones')

            ->orderBy('fecha','desc') //desc es ordenar de manera descendente los tipos de usuario
            ->paginate(7);
            return view('vehiculos.mantencion.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("vehiculos.mantencion.create");
    }
    public function store (MantencionFormRequest $request)
    {
        $categoria=new Mantencion;
        $categoria->patente=$request->get('patente');
        $categoria->fecha=$request->get('fecha');
        $categoria->kilometraje=$request->get('kilometraje');
        $categoria->save();
        return Redirect::to('vehiculos/mantencion');

    }
    public function show($id)
    {
        return view("vehiculos.mantencion.show",["categoria"=>Mantencion::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("vehiculos.mantencion.edit",["categoria"=>Mantencion::findOrFail($id)]);
    }
    public function update(MantencionFormRequest $request,$id)
    {
        $categoria=Mantencion::findOrFail($id);
       	$categoria->patente=$request->get('patente');
        $categoria->fecha=$request->get('fecha');
        $categoria->kilometraje=$request->get('kilometraje');
        $categoria->update();
        return Redirect::to('vehiculos/mantencion');
    }
    public function destroy($id)
    {
        $categoria=Mantencion::findOrFail($id);
        $categoria->delete();
        return Redirect::to('vehiculos/mantencion');
    }
}
