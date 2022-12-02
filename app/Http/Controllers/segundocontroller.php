<?php

namespace App\Http\Controllers;

use App\Models\listaarepa;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class segundoController extends Controller
{
    /*public function ingreso(){
        return "carga de productos y precio";
    }
    public function usuario(){
        return "formulario usuario";
    } */
    public function ingreso(){
        return view("carga.ingreso");
    }
    //public function usuario(){
        //return view("carga.usuario");
   // }
//}

//importante metodo para pasar variable en la url
public function usuario(){
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
/*public function arepas($arepa, $jugo = null){
    
    if ($jugo) {
        return view("carga.arepas", ["arepa" => $arepa, "jugo" => $jugo],);
    
        
    } else{
          return "quieres arepa de $arepa";
    }*/

}
