<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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


// SI SON
// Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');//ruta de almacenar datos


// Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
// Route::get('cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');//ruta de actualizar datos

// Route::delete('cursos/{curso}', [CursoController::class, 'delete'])->name('cursos.delete');
Route::get('/', HomeController::class)->name('home');
Route::resource('asignatura',CursoController::class)->parameters(['asignatura'=>'curso'])->names('cursos');

Route::view('sobre-mi', 'sobre-mi')->name('sobre-mi');
Route::view('portafolio', 'portafolio.portafolio')->name('portafolio.portafolio');
// Route::get('contactanos', function (){
//     $correo = new ContactanosMailable;
//     Mail::to('jefersondelgado0918@gmail.com')->send($correo);
//     return 'Mensaje enviado';
// });
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


// Route::view('contactanos', 'contactanos.index')->name('contactanos.index');
// Route::view('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
// // Route::get('contactanos', [ContactanosController::class, 'index'])->names('contactanos.index');



//grupo de rutas

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index');
//     Route::get('cursos/create', 'create');
//     Route::get('cursos/{curso}', 'show');
// });



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

