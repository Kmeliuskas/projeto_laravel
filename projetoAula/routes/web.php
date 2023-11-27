<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

//Rota que direciona para a página de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class, 'cadastro'])->name('usuarios.cadastro');

//Rota que direciina para a pafina de processar formulário
Route::post('/usuarios/novo', [UsuarioController::class, 'novo'])->name('usuarios.novo');

//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 'telaLogin'])->name('tela.login');

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para chamar a função de cadastro de produtos
Route::get('/cadastro_produto', [ProdutoController::class, 'cadastroProduto'])->name('tela.cadastro');

//Rota que direciina para a pafina de processar formulário Cadastro
Route::post('/produto/cadastro', [UsuarioController::class, 'produtoNovo'])->name('produto.novo');

//Rota para mostrar os produtos cadastrados
Route::get('/produto/mostra_produto', [ProdutoController::class, 'cadastraProduto'])->name('produto.mostraProdutos');