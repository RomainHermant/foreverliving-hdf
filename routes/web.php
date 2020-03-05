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
    return view('index');
});

Route::get('/index', 'ViewController@index')->name('index');

Route::get('/Produits', 'ProduitController@index')->name('products');
Route::get('/Produits/addProduit', 'ProduitController@addProduitForm')->name('addProduitForm');
Route::post('/Produits/add', 'ProduitController@add')->name('addProduit');
Route::get('/Produits/update/{id}', 'ProduitController@updateProduitForm')->name('updateProduitForm');
Route::post('/Produits/update', 'ProduitController@update')->name('updateProduit');
Route::post('/Produits/delete/{id}', 'ProduitController@delete')->name('deleteProduit');
