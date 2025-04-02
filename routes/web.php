<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Suscribed;

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

// Route::resource('users', AdminUserController::class)->parameters([
//     'users' => 'id'
// ]);

// Route::resource('users', AdminUserController::class)->parameters([
//     'create' => 'users.build'
// ]);

// middleware sin registrar
// Route::get('/suscribed', function(){
//     return "Bienvenido";
// })->middleware(Suscribed::class);

// middleware registrado
// Route::get('/suscribed', function(){
//     return "Bienvenido";
// })->middleware('suscribed');

// vistas
// Route::view('ejemplo', 'example', ['name' => 'EjemploNombre'])->name('ejemplo');
Route::get('/ejemploVista', [CursoController::class, 'abrirVista'])->name('curso.ejemploVista');

// usercontroller
Route::get('/directivas', [UserController::class, 'index'])->name('user.index');

Route::get('/incluir', function () {
    return view('incluir');
})->name('incluir');

// post controller
Route::controller(PostController::class)->group(function (){
    Route::get('/post', 'index')->name('posts.index');
    Route::get("/posts/create", 'create')->name('posts.create');
    Route::post("/posts", 'store')->name('posts.store');
    Route::get("/posts/{id}", 'show')->name('posts.show');
});

// Route::controller(PostController::class)->group(function(){
//     Route::get('/post', 'index')->name('posts.index');
//     Route::get('/posts/create', 'create')->name('posts.create');
//     Route::post('/posts', 'store')->name('posts.store');
// });