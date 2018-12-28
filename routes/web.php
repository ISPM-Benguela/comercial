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



// Rotas de autenticacao
Auth::routes();


// paginas inicio

Route::get('/', 'HomeController@index')->name('home');

Route::get('image-upload',['as'=>'image.upload','uses'=>'HomeController@imageUpload']);

Route::post('image-upload',['as'=>'image.upload.post','uses'=>'HomeController@imageUploadPost']);

// Painel de controle so para funcionarios

Route::group(["middleware" => "auth"], function(){
    Route::group(['prefix' => 'painel','namespace' => 'Admin'], function(){

        Route::resource("usuarios","UsuarioController");

        Route::resource("artigos","ArtigoController");

        Route::resource('nivel', 'NivelController');

        Route::resource('previlegios', 'PrevilegioController');

        Route::resource('encomendas', 'EncomendaController');

        Route::resource('vendas', 'VendaController');

        Route::get('inicio', 'HomeController@inicio')->name('inicio');
       Route::resource('produto', 'ProdutoController');

        });
});

// Paginas cliente com produtos

 Route::resource('produtos', 'ProdutoController');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::resource('categorias', 'ProdutoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
