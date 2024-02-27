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

Route::get('/servico/cabelos', [ServicoController::class, 'servicoCabelo'])->name('servicoCabelo');
Route::get('/servico/maquiagens', [ServicoController::class, 'servicoMaquiagem'])->name('servicoMaquiagem');
Route::get('/servico/barbas', [ServicoController::class, 'servicoBarba'])->name('servicoBarba');
Route::get('/servico/cilios', [ServicoController::class, 'servicoCilios'])->name('servicoCilios');
Route::get('/servico/massagens', [ServicoController::class, 'servicoMassagem'])->name('servicoMassagens');
Route::get('/servico/unhas', [ServicoController::class, 'servicoUnha'])->name('servicoUnhas');
Route::get('/servico/rosto', [ServicoController::class, 'servicoRosto'])->name('servicoRosto');
Route::get('/servico/depilacao', [ServicoController::class, 'servicoDepilacao'])->name('servicoDepilacoes');
Route::get('/servico/sobrancelhas', [ServicoController::class, 'servicoSobrancelha'])->name('servicoSobrancelhas');






//
