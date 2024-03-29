<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;
use App\Models\Propiedad;

const PRECIO_BASE = 1500;
const VALOR_AUMENTO= 0.001;

class ApartamentoController extends Controller
{
    public function index(){
        $duenios = Duenio::all();
        $propiedades = Propiedad::all();
        return view('index', compact('duenios', 'propiedades'));
    }

    public function ircalcular(){
        return view('calcularPrecio');
    }

    public function calcularPrecio(Request $request){
        $piso = $request->filled('piso') ? intval($request->input('piso')) : 1;
        //filled se usa para verificar si hay algun valor ingresado en el input o no utilizando un oprador terneario
        $area=$request->input('area');
        // $piso = intval($piso);
        if($piso==1){
            $cantidadTotal=PRECIO_BASE*$area;
            $total= number_format($cantidadTotal);
        }else{
            $nuevoPrecio = ((PRECIO_BASE*0.001*$piso) + PRECIO_BASE)*$area;
            $total= number_format($nuevoPrecio);

        }
        return view('resultadoPrecio', compact('piso', 'area', 'total'));
    }

    public function mostrarFormDuenios(){
        return view('insertarDuenios');
    }

    public function mostrarFormPropiedades(){
        return view('insertarPropiedades');
    }

    public function insertarDuenio(Request $request){
        $nvoDuenio = new Duenio();
        $nvoDuenio->nombre = $request->input('nombre');
        $nvoDuenio->apellido = $request->input('apellido');
        $nvoDuenio->correo = $request->input('correo');
        $nvoDuenio->telefono = $request->input('telefono');
        $nvoDuenio->save();

        return redirect('/');
    }

    public function insertarPropiedad(Request $request){
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->piso=$request->input('piso');
        $nvaPropiedad->area=$request->input('area');
        $nvaPropiedad->color=$request->input('color');
        $nvaPropiedad->idDuenio=$request->input('idDuenio');
        $nvaPropiedad->save();

        return redirect('/');
    }

    public function buscarDuenio(Request $request){
        $idBuscado=$request->input('idDuenio');
        $duenioBuscado = Duenio::find($idBuscado);
        return view('busquedaDuenio', compact('duenioBuscado'));
    }

    public function buscarPropiedad(Request $request){
        $idBuscado = $request->input('idPropiedad');
        $propiedadBuscada = Propiedad::find($idBuscado);
        return view ('busquedaPropiedad', compact('propiedadBuscada'));
    }

    public function editarDuenio($idDuenio){
        //va a buscar el objeto seleccionado a la base
        $duenioEditado = Duenio::find($idDuenio);
        return view('editarInfoDuenio' , compact('duenioEditado'));
    }

    public function actualizarDuenio(Request $request, $idDuenio){
        $nvoDuenio = Duenio::find($idDuenio);
        $nvoDuenio->nombre=$request->input('nombre');
        $nvoDuenio->apellido=$request->input('apellido');
        $nvoDuenio->correo=$request->input('correo');
        $nvoDuenio->save();

        return redirect('/');

    }

    public function editar2($id){
        $propiedadEncontrada= Propiedad::find($id);
        return view('editarInfoPropiedad', compact('propiedadEncontrada'));
    }

    public function actualizarPropiedad(Request $request, $id){
        $nvaPropiedad = Propiedad::find($id);
        $nvaPropiedad->piso=$request->input('piso');
        $nvaPropiedad->area=$request->input('area');
        $nvaPropiedad->color=$request->input('color');
        $nvaPropiedad->idDuenio=$request->input('idDuenio');
        $nvaPropiedad->estado=$request->input('estado');
        $nvaPropiedad->save();
        return redirect('/');
    }

    public function eliminar1(Request $request, $idDuenio){
        $duenioEliminar = Duenio::find($idDuenio);
        return view ('eliminarDuenio', compact('duenioEliminar'));
    }

    public function destroy1($idDuenio){
        $duenio=Duenio::find($idDuenio);
        $duenio->delete();
        return redirect('/');
    }

    public function eliminar2(Request $request, $idPropiedad){
        $propiedadEliminar = Propiedad::find($idPropiedad);
        return view ('eliminarPropiedad', compact('propiedadEliminar'));
    }

    public function destroy2($idPropiedad){
        $propiedad=Propiedad::find($idPropiedad);
        $propiedad->delete();
        return redirect('/');
    }



    
}

