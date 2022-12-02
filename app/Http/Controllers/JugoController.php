<?php

namespace App\Http\Controllers;

use App\Models\jugo;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class JugoController extends Controller
{
    public function index()
    {
       
    }

    
    public function create()
    {
        return view('/li2/crear',);
    }

    
    public function store(Request $request)
    {   
        $request->validate([
            "jugopostre" => "required",
            "precio" => "required",
           
            
        ]);
    
            $formulario2 = new jugo();
            $formulario2->jugopostre = $request->jugopostre;
            $formulario2->precio = $request->precio;
            
    
            $formulario2->save();
            return redirect()->route("perfil2", $formulario2->id);
            
    
        
        
    }

    
    public function show()
    {
        //
    }


     
    public function update(Request $request, jugo $jugopostre,)
    { $jugopostre->jugopostre = $request->jugopostre;
        $jugopostre->precio = $request->precio;
        $jugopostre->save();
        return redirect()->route("perfil2", $jugopostre->id);
        //
        
    }

    
    public function destroy(jugo $jugopostre)
    { $jugopostre->delete();
        return redirect()->route("inicio",);
        //
    }

    public function perfil($jugopostre,){

        $perfil = jugo::find($jugopostre);
        return view("li2.perfil", ["perfil" => $perfil, "li2" => $jugopostre],);
        }
    
        public function edit(jugo $jugopostre,) //otra forma recuperar objeto completo
        {   
            //$perfil = listaarepa::find($arepa);
            return view("li2.edit", ["perfil" => $jugopostre,],);
            //
        }
    /*public function ingreso(){
        return "carga de productos y precio";
    }
    public function usuario(){
        return "formulario usuario";
    } 
    public function ingreso(){
        return view("carga.ingreso");
    }
    //public function usuario(){
        //return view("carga.usuario");
   // }
//}

//importante metodo para pasar variable en la url
/*public function usuario(){
    return view("carga.usuario");
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
public function arepas($arepa, $jugo = null){
    
    if ($jugo) {
        return view("carga.arepas", ["arepa" => $arepa, "jugo" => $jugo],);
    
        
    } else{
          return "quieres arepa de $arepa";
    }*/

}
