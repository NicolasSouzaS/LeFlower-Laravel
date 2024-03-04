<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EsteticaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/cadastrar-se', [CadastroController::class, 'index'])->name('cadastroCliente');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');


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



// Rota de cadastro de usuário
Route::post('/cadastrar-se', [CadastroController::class, 'cadastroCliente'])->name('cadastro.store');

// Rota de login de usuario
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');



// Rotas com middleware
// Dashboard cliente
Route::middleware(['autenticacao:cliente'])->group(function(){
    Route::get('/cliente',[ClienteController::class,'index'])->name('dashboard.cliente');
    Route::get('/agendar',[ClienteController::class,'agendar'])->name('dashboard.agendar');
});
Route::middleware(['autenticacao:Administrador'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('dashboard.funcionarios.admin');
});Route::middleware(['autenticacao:Esteticista'])->group(function(){
    Route::get('/esteticista',[EsteticaController::class,'index'])->name('dashboard.funcionarios.estetica');
});
