<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
Route::get('/', [BibliotecaController::class, 'metodoInicio'])->name('apodoInicio');
Route::get('/formulario', [BibliotecaController::class, 'metodoFormulario'])->name('apodoFormulario');
Route::get('/recuerdos', [BibliotecaController::class, 'metodoRecuerdo'])->name('apodoRecuerdo'); // Corregir el nombre de la ruta

Route::post('/guardarRecuerdos', [BibliotecaController::class, 'metodoGuardar'])->name('guardar');

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

/*Route::get('/', function () {
    return view('welcome');
});*/
