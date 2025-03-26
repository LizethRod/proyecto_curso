<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/hola", function(){
//     // return "Hola mundo";
//     return route("hola");
// })->name("hola");

// Route::get('/nombre/{nom?}', function ($nom = 'ejemplo_nombre') {
//     return $nom;
// });

// Route::get('/nombre/{nom}', function (string $nom) {
//     return "Hola $nom";
// })->where('nom', '[A-Za-z]+');

// Route::get("/verificar", function (Request $request){
//     if ($request->route()->named("hola")) {
//         return "ok";
//     } else {
//         return "no existe";
//     }
// });

// Route::prefix("admin")->group(function(){
//     Route::get("/primero", function(){
//         return "primero admin";
//     })->name("admin.primero");
//     Route::get("/segundo", function(){
//         return "segundo admin";
//     })->name("admin.segundo");
// });

// Route::get('/', [CursoController::class, 'getName'])->name("home");
Route::get('/sumar/{x?}/{y?}', [CursoController::class, 'sumar'])->name('sumar');
Route::get('/restar/{x?}/{y?}', [CursoController::class, 'restar'])->name('restar');
Route::get('/multiplicar/{x?}/{y?}', [CursoController::class, 'multiplicar'])->name('multiplicar');
Route::get('/dividir/{x?}/{y?}', [CursoController::class, 'dividir'])->name('dividir');