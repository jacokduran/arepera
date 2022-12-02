<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
//comentario para asignar debemos poner ruta
use App\Http\Controllers\primerController;
use App\Http\Controllers\segundocontroller;
//rutas usando invoke
Route::get('/', primerController::class); 


route::controller(ClienteController::class)->group(function(){
Route::get('/carga/usuario', "index")->name("inicio");
Route::get('/carga/crear', "create")->name("crear");
Route::post('/carga/crear', "store")->name("formulario");
Route::put('/carga/perfil/{arepa}', "update")->name("editarformulario");
Route::delete('/carga/perfil/{arepa}', "destroy")->name("borrarformulario");
}); 

 route::controller(segundoController::class)->group(function(){
    Route::get('/carga/ingreso', "ingreso"); 
    //Route::get('/carga/usuario', "usuario");
    Route::get('/carga/perfil/{arepa}', "perfil")->name("perfil");
    Route::get('/carga/perfil/{arepa}/edit', "edit")->name("editar");
 });
 
 
 /*
 ...................................importanteee....
 Route::get('/carga/arepas/{arepa}/{jugo?}', function ($arepa, $jugo = null){
    
      if ($jugo) {
          return view("carga.arepas", ["arepa" => $arepa, "jugo" => $jugo],);
      
          
      } else{
            return "no existe ese menu";
      }
  
});
...................................





//Route::get('/carga/arepas/{arepas}', "arepas");
 //function($arepa, $jugo = null)
 
 /*Route::get('users/{id}', function ($id) {
     return "$id hola";
 });   la funcion para pasar variable */
//rutas en forma de grupo
//Route::get('/carga/ingreso', [segundoController::class, "ingreso"]); 
//Route::get('/carga/usuario', [segundoController::class, "usuario"]); 

 //otra forma de poner en grupo
    /*  Route::get('/carga/arepas/{arepas}/{jugo?}', function($arepa, $jugo = null){
if ($jugo) {
      return "primero";
} else{
      return "segundo";
}

      
}) ;*/
 //......................................................
 
 