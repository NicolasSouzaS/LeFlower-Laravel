<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');


// Serviços

Route::get('/servico/cabelo', [ServicoController::class, 'servicoCabelo'])->name('servicoCabelo');



//
