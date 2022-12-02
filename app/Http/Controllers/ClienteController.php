<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\jugo;
use App\Models\listaarepa;
use Illuminate\Http\Request;  
use Illuminate\support\Str;  
class ClienteController extends Controller
{
   
    public function index()
    {
       $lista = listaarepa::all();
       $lista2 = jugo::all();
       //return $lista;
    return view('/carga/usuario', ["lista" => $lista,"lista2" => $lista2]);
    }

    
    public function create()
    {
        return view('/carga/crear',);
    }

    
    public function store(Request $request)
    {   
        $request->validate([
        "arepa" => "required",
        "precio" => "required",
        "descripcion" => "required",
        //"file" => "required|image|max:2048"
        
    ]);
    $formulario = new listaarepa();
if( $request->hasFile("imagenarepa")) {
    $files = $request->file('imagenarepa');
 
$name = $files->getClientOriginalName();
    $file = $request->file("imagen");
    $destinationPath = "imagenes/";
    $filename = time() . "-" . $name;
    $uploadSuccess = $request->file("imagenarepa")->move($destinationPath, $filename);
    $formulario->imagenarepa = $destinationPath . $filename;
}

        
        $formulario->arepa = $request->arepa;
        $formulario->precio = $request->precio;
        $formulario->descripcion = $request->descripcion;

        $formulario->save();
        return redirect()->route("perfil", $formulario->id);
        
    }

    
    public function show(cliente $cliente)
    {
        //
    }


     
    public function update(Request $request, listaarepa $arepa,)
    { $arepa->arepa = $request->arepa;
        $arepa->descripcion = $request->descripcion;
        $arepa->precio = $request->precio;
        $arepa->save();
        return redirect()->route("perfil", $arepa->id);
        //
        
    }

    
    public function destroy(listaarepa $arepa)
    { $arepa->delete();
        return redirect()->route("inicio",);
        //
    }

    public function perfil($arepa,){

        $perfil = listaarepa::find($arepa);
        return view("carga.perfil", ["perfil" => $perfil, "arepa" => $arepa],);
        }
    
        public function edit(listaarepa $arepa,) //otra forma recuperar objeto completo
        {   
            //$perfil = listaarepa::find($arepa);
            return view("carga.edit", ["perfil" => $arepa,],);
            //
        }
}
