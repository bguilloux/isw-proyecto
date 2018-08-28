<?php

namespace isw\Http\Controllers;

use Illuminate\Http\Request;

use isw\Http\Requests;
use isw\Aumento;
use Illuminate\Support\Facades\Redirect;
use isw\Http\Requests\AumentoFormRequest;
use DB;

class AumentoController extends Controller
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
            return view('vehiculos.aumento.index',["categorias"=>$categorias,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("vehiculos.aumento.create");
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
        return Redirect::to('vehiculos/aumento');

    }
    public function show($id)
    {
        return view("vehiculos.aumento.show",["categoria"=>Vehiculos::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("vehiculos.aumento.edit",["categoria"=>Vehiculos::findOrFail($id)]);
    }
    public function update(AumentoFormRequest $request,$id)
    {
        $categoria=Vehiculos::findOrFail($id);
        $categoria->id_marca=$request->get('id_marca');
        $categoria->modelo=$request->get('modelo');
        $categoria->tipo_neumatico=$request->get('tipo_neumatico');
        $categoria->aro=$request->get('aro');
        $categoria->tipo_combustible=$request->get('tipo_combustible');
        $categoria->kilometraje=$request->get('kilometraje');
        $categoria->update();
        return Redirect::to('vehiculos/aumento');
    }

}
