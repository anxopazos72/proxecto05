<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TendaController;

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

Route::redirect('/', '/home');
Route::get('/home', [TendaController::class,'index']);
Route::post('/home', [TendaController::class,'newsletter'])->name('newsletter');
Route::get('/nos', [TendaController::class,'nos']);
Route::get('/contacto', [TendaController::class,'contacto']);
Route::get('/produtos', [TendaController::class,'produtos']);
Route::post('/contacto', [TendaController::class, 'enviarEmail'])->name('mensaxe');

