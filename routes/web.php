<?php

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

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/lista', function () {
    return view('listadeprodutos');
});

Route::get('/detalhe', function () {
    return view('detalhedoproduto');
});

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/produto', 'ProdutoController@index')->name('product-index');

    Route::get('/produto/show/{id}', 'ProdutoController@show')->name('product-show');

    Route::get('/produto/create', 'ProdutoController@create')->name('product-create');
    Route::post('/produto/create', 'ProdutoController@store');

    Route::get('/produto/edit/{id}', 'ProdutoController@edit')->name('product-edit');
    Route::post('/produto/edit/{id}', 'ProdutoController@update');

    Route::delete('/produto/remove/{id}', 'ProdutoController@destroy');

    Route::get('/produto/filter-products', 'ProdutoController@search');
});