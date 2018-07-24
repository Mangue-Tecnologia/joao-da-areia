<?php

Route::get('/', 'HomeController@home');

Route::get('/home', 'HomeController@home');

Route::get('/sobre', 'SobreController@index');

Route::get('/produtos', 'ProdutosController@index');

Route::get('/servicos', 'ServicosController@index');

Route::get('/contato', 'ContatoController@index');

Route::get('/single_produto', 'HomeController@singleProduto');