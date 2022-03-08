<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
        //leer
        public function leer()
        {
            $contenidos = Contenido::paginate(5);

            return view('components.panel.contenido.contenido', compact('contenidos'));
        }

        //acceder alta
        public function acceder()
        {
            return view('components.panel.contenido.contenido_alta');
        }

        //alta
        public function alta(Request $request)
        {
            //validacion
            $request->validate([
                'ruta' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
                'titulo' => 'required',
                'contenido' => 'required'
            ]);

            $imageName = time() . '.' . $request->ruta->extension();
            $request->ruta->move(public_path('/img/'), $imageName);

            $nuevoContenido = new Contenido;

            $nuevoContenido->ruta = $request->imageName;
            $nuevoContenido->titulo = $request->titulo;
            $nuevoContenido->contenido = $request->contenido;


            $nuevoContenido->save();

            return redirect('contenido')->with('mensaje', 'Contenido agregado con exito!');
        }

        //acceder editar
        // public function editar($id)
        // {
        //     $contenido = Contenido::findOrFail($id);

        //     return view('components.panel.contenido.contenido_editar', compact('contenido'));
        // }

        //update
        // public function update(Request $request, $id)
        // {
        //     $ContenidoUpdate = Contenido::findOrFail($id);

        //     //validacion
        //     $request->validate([
        //         'titulo' => 'required',
        //         'contenido' => 'required'
        //     ]);

        //     $ContenidoUpdate->titulo = $request->titulo;
        //     $ContenidoUpdate->contenido = $request->contenido;


        //     $ContenidoUpdate->save();

        //     return redirect('contenido')->with('mensaje', 'Contenido editado con exito!');
        // }

        //baja
        public function baja($id)
        {

            $contenidoEliminar = Contenido::findOrFail($id);
            $contenidoEliminar->delete();

            return redirect('contenido')->with('mensaje', 'Contenido eliminado con exito!');
        }

        /*PAGINA WEB*/
        //leer producto web
        // public function leerWeb()
        // {

        //     $contenidos = Contenido::paginate(5);

        //     return view('components.pagina.producto', compact('productos'));
        // }
}
