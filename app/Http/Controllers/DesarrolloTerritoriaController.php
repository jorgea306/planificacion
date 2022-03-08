<?php

namespace App\Http\Controllers;

use App\Models\Desarrollo_Territorial;
use Illuminate\Http\Request;

class DesarrolloTerritoriaController extends Controller
{
    //leer
    public function leer()
    {
        $desarrollo = Desarrollo_Territorial::paginate(5);

        return view('components.pagina.contenido', compact('desarrollo'));
    }

    //acceder alta
    public function acceder()
    {
        return view('components.pagina.formulario_desarrollo');
    }

    //alta
    public function alta(Request $request)
    {

        //validacion
        $request->validate([
            'pregunta1' => 'required',
            'pregunta2' => 'required',
            'pregunta3' => 'required',
            'pregunta4' => 'required',
            'pregunta5' => 'required',
            'pregunta6' => 'required',
            'pregunta7' => 'required',
            'pregunta8' => 'required',
            'pregunta9' => 'required',
            'pregunta10' => 'required',
            'pregunta11' => 'required',
            'pregunta12' => 'required',
            'pregunta13' => 'required',
            'pregunta14' => 'required',
            'pregunta15' => 'required',
            'pregunta16' => 'required',
            'pregunta17' => 'required'
        ]);

        $nuevoDesarrollo = new Desarrollo_Territorial;

        $nuevoDesarrollo->pregunta1 = $request->pregunta1;
        $nuevoDesarrollo->pregunta2 = $request->pregunta2;
        $nuevoDesarrollo->pregunta3 = $request->pregunta3;
        $nuevoDesarrollo->pregunta4 = $request->pregunta4;
        $nuevoDesarrollo->pregunta5 = $request->pregunta5;
        $nuevoDesarrollo->pregunta6 = $request->pregunta6;
        $nuevoDesarrollo->pregunta7 = $request->pregunta7;
        $nuevoDesarrollo->pregunta8 = $request->pregunta8;
        $nuevoDesarrollo->pregunta9 = $request->pregunta9;
        $nuevoDesarrollo->pregunta10 = $request->pregunta10;
        $nuevoDesarrollo->pregunta11 = $request->pregunta11;
        $nuevoDesarrollo->pregunta12 = $request->pregunta12;
        $nuevoDesarrollo->pregunta13 = $request->pregunta13;
        $nuevoDesarrollo->pregunta14 = $request->pregunta14;
        $nuevoDesarrollo->pregunta15 = $request->pregunta15;
        $nuevoDesarrollo->pregunta16 = $request->pregunta16;
        $nuevoDesarrollo->pregunta17 = $request->pregunta17;



        $nuevoDesarrollo->save();

        return redirect('/')->with('mensaje', 'Contenido agregado con exito!');
    }

    // //acceder editar
    // public function editar($id)
    // {

    //     $nosotros = Desarrollo_Territorial::findOrFail($id);

    //     return view('components.panel.nosotros.nosotros_editar', compact('nosotros'));
    // }

    // //update
    // public function update(Request $request, $id)
    // {

    //     $NosotrosUpdate = Desarrollo_Territorial::findOrFail($id);

    //     //validacion
    //     $request->validate([
    //         'titulo' => 'required',
    //         'contenido' => 'required'
    //     ]);


    //     $NosotrosUpdate->titulo = $request->titulo;
    //     $NosotrosUpdate->contenido = $request->contenido;

    //     $NosotrosUpdate->save();

    //     return redirect('nosotros')->with('mensaje', 'Contenido Nosotros editado con exito!');
    // }

    //baja
    public function baja($id)
    {

        $desarrolloEliminar = Desarrollo_Territorial::findOrFail($id);
        $desarrolloEliminar->delete();

        return redirect('desarrollo_panel')->with('mensaje', 'Contenido Nosotros eliminado con exito!');
    }

    /*PANEL*/
    //leer producto panel
    public function leerWeb()
    {

        $desarrollo = Desarrollo_Territorial::paginate(20);

        return view('components.panel.desarrollo.desarrollo', compact('desarrollo'));
    }

    //cargar producto seleccionado
}
