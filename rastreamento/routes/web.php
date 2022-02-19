<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaController;

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

Route::get('/categoria/{categoria}', [CategoriaController::class, 'show']);
Route::post('/categoria', [CategoriaController::class, 'store']);
Route::put('/categoria/{categoria}', [CategoriaController::class, 'update']);
Route::delete('/categoria/{categoria}', [CategoriaController::class, 'destroy']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/produto/create', [ProdutoController::class, 'create']);
Route::get('/admin/produto/{produto}', [ProdutoController::class, 'edit']);

Route::get('/admin/categoria', [CategoriaController::class, 'index']);
Route::get('/admin/categoria/create', [CategoriaController::class, 'create']);
Route::get('/admin/categoria/{categoria}', [CategoriaController::class, 'edit']);

require __DIR__.'/auth.php';
