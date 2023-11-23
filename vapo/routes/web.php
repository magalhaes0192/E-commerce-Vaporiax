<?php


use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


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


Route::get("/", [SiteController::class, "index"])->name("welcome");
Route::get("/produto/{slug}", [SiteController::class, "details"])->name('detalhes');

Route::get('/edit_profile/{id}', [PerfilController::class, 'index'])->name('visualizar-perfil')->middleware('auth');
Route::get('/verificar-perfil/{id}', [PerfilController::class, 'checkPerfil'])->name('verificar-perfil')->middleware('auth');
Route::get('/perfil/editar/{id}', [PerfilController::class, 'showUpdate'])->name('atualizar-perfil')->middleware('auth');
Route::get('/perfil/adicionar/{id}', [PerfilController::class, 'showstore'])->name('adicionar-perfil')->middleware('auth');
Route::get('/endereco/adicionar/{id}', [PerfilController::class, 'showstoreEnd'])->name('mostrar-endereco')->middleware('auth');
Route::get('/endereco/editar/{enderecoId}/{id}', [PerfilController::class, 'showupdateEnd'])->name('exibir-endereco')->middleware('auth');


Route::post('/edit_profile/{id}', [PerfilController::class, 'update'])->name('editar-perfil')->middleware('auth');
Route::post('/add_profile/{id}', [PerfilController::class, 'store'])->name('criar-perfil')->middleware('auth');
Route::post('/add_endereco/{id}', [PerfilController::class,'storeEnd'])->name('adicionar-endereco')->middleware('auth');
Route::post('/edit_endereco/{enderecoId}/{id}', [PerfilController::class,'updateEnd'])->name('editar-endereco')->middleware('auth');

Route::delete('/apagar-perfil/{id}', [PerfilController::class, 'destroy'])->name('apagar-conta')->middleware('auth');
Route::delete('/apagar-endereco/{enderecoId}/{id}', [PerfilController::class,'destroyEnd'])->name('apagar-endereco')->middleware('auth');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
