<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ClienteModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
Route::get('/', [HomeController::class, 'index']);
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');


Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');
Route::post('/adicionar-ao-carrinho', [CarrinhoController::class, 'adicionarAoCarrinho'])->name('adicionarAoCarrinho');
Route::post('/remover-item-carrinho', [CarrinhoController::class, 'removerItemCarrinho'])->name('removerItemCarrinho');


// Route::resource('gallery', GaleriaController::class);


// Route::middleware(['autenticacao:cliente'])->group(function (){

//     Route::get('/dashboard/cliente',[ClienteController::class,'index'])->name('dashboard.administrador.cliente.cliente');

//  });



// Rotas para cliente com middleware de autenticação
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/cliente', [ClienteController::class, 'index'])->name('dashboard.cliente');
    Route::get('/dashboard/administrador', function () {
        return view('dashboard.administrador');
    })->name('dashboard.administrador');
});

Route::prefix('admin')->middleware('autenticacao')->group(function () {

    Route::get('/clientes', [AdminController::class, 'indexCliente'])->name('admin.cliente.index');
    Route::get('/clientes/create', [AdminController::class, 'createCliente'])->name('admin.cliente.create');
    Route::post('/clientes', [AdminController::class, 'storeCliente'])->name('admin.cliente.store');
    Route::get('/clientes/{id}/edit', [AdminController::class, 'editCliente'])->name('admin.cliente.edit');
    Route::put('/clientes/{id}', [AdminController::class, 'updateCliente'])->name('admin.cliente.update');
    Route::delete('/clientes/{id}', [AdminController::class, 'destroyCliente'])->name('admin.cliente.destroy');
});



// Route::get('/buscar-cliente', function (Request $request) {
//     $emailCliente = $request->input('email'); // Supondo que você esteja passando o email via URL

//     if ($emailCliente) {
//         $cliente = ClienteModel::where('email', $emailCliente)->first();

//         if ($cliente) {
//             // Faça algo com os dados do cliente encontrado, como retornar uma view
//             return view('cliente', ['cliente' => $cliente]);
//         } else {
//             // Tratar caso nenhum cliente seja encontrado, como retornar uma mensagem de erro
//             return redirect()->back()->with('error', 'Cliente não encontrado.');
//         }
//     } else {
//         return redirect()->back()->with('error', 'Email não fornecido.');
//     }
// })->name('cliente.buscar');


Route::resource('categorias', CategoriaController::class);
Route::get('/galeria', [GaleriaController::class, 'index']);

// Route::post('/buscar-cliente', [ClienteController::class, 'buscarClientePorEmail'])->name('cliente.buscarPorEmail');
// Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

// Route::post('/adicionar-ao-carrinho', [CarrinhoController::class ,'index'])->name('adicionarAoCarrinho');
// Route::post('/remover-item-carrinho', [CarrinhoController::class, 'index'])->name('removerItemCarrinho');

Route::resource('produtos', ProdutoController::class);


