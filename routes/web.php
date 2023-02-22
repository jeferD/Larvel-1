<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

//grupo de rutas

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

// Route::get('cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}', [CursoController::class, 'show']);

// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido";
// });

// Route::get('cursos', function () {
//     return "Bienvenido a cursos";
// });

// Route::get('cursos/create', function () {
//     return "Bienvenido a crear cursos";
// });

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido a cursos $curso";
// });

// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria=null) {
//     if (categoria) {
//         return "Bienvenido a cursos $curso y la categoria $categoria";
//     }else{
//         return "Bienvenido a cursos $curso ";
//     }
    
// });

// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria=null) {
//     if (categoria) {
//         return "Bienvenido a cursos $curso y la categoria $categoria";
//     }else{
//         return "Bienvenido a cursos $curso ";
//     }
    
// });

