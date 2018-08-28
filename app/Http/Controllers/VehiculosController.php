<?php

namespace isw\Http\Controllers;

use Illuminate\Http\Request;

use isw\Http\Requests;
use isw\Vehiculos;
use Illuminate\Support\Facades\Redirect;
use isw\Http\Requests\VehiculosFormRequest;
use DB;

class VehiculosController extends Controller
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
            $categorias=DB::table('vehiculos')

            ->orderBy('id_marca','desc') //desc es ordenar de manera descendente los tipos de usuario
            ->paginate(7);
            return view('vehiculos.nuevo.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("vehiculos.nuevo.create");
    }
    public function store (VehiculosFormRequest $request)
    {
        $categoria=new Vehiculos;
        $categoria->patente=$request->get('patente');
        $categoria->id_marca=$request->get('id_marca');
        $categoria->modelo=$request->get('modelo');
        $categoria->tipo_neumatico=$request->get('tipo_neumatico');
        $categoria->aro=$request->get('aro');
        $categoria->tipo_combustible=$request->get('tipo_combustible');
        $categoria->kilometraje=$request->get('kilometraje');
        $categoria->save();
        return Redirect::to('vehiculos/nuevo');

    }
    public function show($id)
    {
        return view("vehiculos.nuevo.show",["categoria"=>Vehiculos::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("vehiculos.nuevo.edit",["categoria"=>Vehiculos::findOrFail($id)]);
    }
    public function update(VehiculosFormRequest $request,$id)
    {
        $categoria=Vehiculos::findOrFail($id);
        $categoria->patente=$request->get('patente');
        $categoria->id_marca=$request->get('id_marca');
        $categoria->modelo=$request->get('modelo');
        $categoria->tipo_neumatico=$request->get('tipo_neumatico');
        $categoria->aro=$request->get('aro');
        $categoria->tipo_combustible=$request->get('tipo_combustible');
        $categoria->kilometraje=$request->get('kilometraje');
        $categoria->update();
        return Redirect::to('vehiculos/nuevo');
    }
    public function destroy($id)
    {
        $categoria=Vehiculos::findOrFail($id);
        $categoria->delete();
        return Redirect::to('vehiculos/nuevo');
    }
}

