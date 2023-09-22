<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Models\Integrantes;
use App\Models\seccion;
use Illuminate\Http\Request;

class IntegrantesController extends Controller
{
    public function index(){

        $integrantes = Integrantes::select('nombre','correo','Id_grado','Id_seccion','Id_rol','Id_estado','secciones.seccion')
        ->join ('secciones','secciones.id', '=', 'integrantes.Id_seccion')
        ->get();

        return view('paginas.integrantes', array ("integrantes" => $integrantes));
    }

    public function getForm(){

        $seccion = seccion::all();
        $grado = Grado::all();


        return view('paginas.inscripcion', array ("seccion"=> $seccion, "grado"=> $grado));
    }

    public function store(Request $request){

        $integrantes = new integrantes ();
        $integrantes-> Nombre= $request->post ('nombre');
        $integrantes-> Telefono= $request->post ('telefono');
        $integrantes-> Correo= $request->post ('correo');
        $integrantes-> Password= $request->post ('password');
        $integrantes-> Id_grado= $request->post ('grado');
        $integrantes-> Id_seccion= $request->post ('seccion');
        $integrantes-> Id_rol= 3;
        $integrantes-> Id_estado= 1;
        $integrantes-> save();

        return redirect()-> route('integrantes');
    }
}
