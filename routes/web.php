<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\segundocontroller;
use App\Http\Controllers\Jugocontroller;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


route::controller(ClienteController::class)->group(function(){
    Route::get('/carga/usuario', "index")->name("inicio");
});

route::controller(ClienteController::class)->group(function(){
    Route::get('/', "index")->name("inicio");
    Route::get('/carga/crear', "create")->middleware('auth')->name("crear");
    Route::post('/carga/crear', "store")->middleware('auth')->name("formulario");
    Route::put('/carga/perfil/{arepa}', "update")->middleware('auth')->name("editarformulario");
    Route::delete('/carga/perfil/{arepa}', "destroy")->middleware('auth')->name("borrarformulario");
    Route::get('/carga/perfil/{arepa}', "perfil")->middleware('auth')->name("perfil");
        Route::get('/carga/perfil/{arepa}/edit', "edit")->middleware('auth')->name("editar");
    }); 
    
    
route::controller(segundoController::class)->group(function(){
        
     });

     route::controller(JugoController::class)->group(function(){
        Route::get('/li2/crear', "create")->middleware('auth')->name("crear2");
        Route::post('/li2/crear', "store")->middleware('auth')->name("formulario2");
        Route::put('/li2/perfil/{jugopostre}', "update")->middleware('auth')->name("editarformulario2");
        Route::delete('/li2/perfil/{jugopostre}', "destroy")->middleware('auth')->name("borrarformulario2");
        Route::get('/li2/perfil/{jugopostre}', "perfil")->middleware('auth')->name("perfil2");
            Route::get('/li2/perfil/{jugopostre}/edit', "edit")->middleware('auth')->name("editar2");
        }); 
     

require __DIR__.'/auth.php';
