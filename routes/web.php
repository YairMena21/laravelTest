<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConfirmadoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\DefuncionesController;
use App\Http\Controllers\GraficasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/graficas',[GraficasController::class, 'casosTotales'])->name('graficas');;
Route::get('/estado/getEstados', [EstadoController::class, 'getEstados']);

Route::resource('/estado', EstadoController::class);
Route::resource('/confirmado', ConfirmadoController::class);
Route::resource('/defunciones', DefuncionesController::class);


