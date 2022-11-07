<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndicadoresController;
use App\Http\Controllers\ChartController;

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
})->name('home');


Route::get('/indicadores/list', [IndicadoresController::class, 'index'])->name('index');


Route::post('/indicadores/create', [IndicadoresController::class, 'create']);


Route::get('/editar/{id}', [IndicadoresController::class, 'edit'])->name('indi.edit');
Route::get('/eliminar/{id}', [IndicadoresController::class, 'delete'])->name('indi.delete');


Route::post('/indicadores/update', [IndicadoresController::class, 'update']);


Route::get('/grafico/data', [ChartController::class, 'indicadoresJson'])->name('graficodata');



Route::get('/grafico', [ChartController::class, 'chart'])->name('grafico');
