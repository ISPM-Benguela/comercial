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

Route::get('/home', function(){
    return redirect('/');
  });

Route::get('sobre', 'HomeController@sobre')->name('sobre');


Route::get('servicos', 'HomeController@servicos')->name('servicos');

Route::get('contactos', 'HomeController@contactos')->name('contactos');

Route::post('enviar', 'HomeController@enviar')->name('enviar');

Route::resource("categoria","CategoriaController");

Route::get('image-upload',['as'=>'image.upload','uses'=>'HomeController@imageUpload']);

Route::post('image-upload',['as'=>'image.upload.post','uses'=>'HomeController@imageUploadPost']);

// Painel de controle so para funcionarios

Route::group(["middleware" => "auth"], function(){
    Route::group(['prefix' => 'painel','namespace' => 'Admin'], function(){

        //Route::get("/", "HomeController@index")->name('painel');

        Route::resource("usuarios","UsuarioController");

        Route::resource("artigos","ArtigoController");

        Route::resource('nivel', 'NivelController');

        Route::resource('previlegios', 'PrevilegioController');

        Route::resource('encomendas', 'EncomendaController');

        Route::resource('carousel', 'CarouselController');

        Route::resource('vendas', 'VendaController');

        Route::resource('categorias', 'CategoriaController');

        Route::get('/', 'HomeController@inicio')->name('inicio');

        Route::resource('produtos', 'ProdutoController');

        });
});

// Paginas cliente com produtos


Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();

