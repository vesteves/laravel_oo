<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/produto/{produto}', [ProdutoController::class, 'show']);
Route::post('/produto', [ProdutoController::class, 'store']);
Route::put('/produto/{produto}', [ProdutoController::class, 'update']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/produto/create', [ProdutoController::class, 'create']);
Route::get('/admin/produto/{produto}', [ProdutoController::class, 'edit']);
