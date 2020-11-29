<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Use App\Produto;
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

Route::resource('product','ProdutoController');

Route::resource('cliente','ClienteController');


//Search Route:
Route::get('/search','SearchProdutosController@index')->name('search');
Route::get('/search-cliente','SearchClientesController@index')->name('search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', 'ProdutoController@produtos_cadastrados');
