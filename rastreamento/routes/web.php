<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/produto/{produto}', [ProdutoController::class, 'show']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::put('/produto/{produto}', [ProdutoController::class, 'update']);
Route::delete('/produto/{produto}', [ProdutoController::class, 'destroy']);

Route::prefix('categoria')->middleware(['auth'])->group(function () {
    Route::get('/categoria/{categoria}', [CategoriaController::class, 'show']);
    Route::post('/', [CategoriaController::class, 'store']);
    Route::put('/{categoria}', [CategoriaController::class, 'update']);
    Route::delete('/{categoria}', [CategoriaController::class, 'destroy']);
});

Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth']);
Route::get('/admin/produto/create', [ProdutoController::class, 'create']);
Route::get('/admin/produto/{produto}', [ProdutoController::class, 'edit']);

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/categoria', [CategoriaController::class, 'index']);
    Route::get('/categoria/create', [CategoriaController::class, 'create']);
    Route::get('/categoria/{categoria}', [CategoriaController::class, 'edit']);
});

Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/contato', [HomeController::class, 'contato']);
Route::post('/contato', [HomeController::class, 'enviar']);

require __DIR__.'/auth.php';
