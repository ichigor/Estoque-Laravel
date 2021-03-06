<?php

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/logar', 'LoginController@form');
Route::post('/logar', 'LoginController@logar');

Auth::routes();

Route::get('home', 'HomeController@index');
