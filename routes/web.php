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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', 'ViewController@index')->name('index');

//Notre Aloe
Route::get('/notre-aloe', 'ViewController@notrealoe')->name('notre-aloe');
Route::get('/faq', 'ViewController@faq')->name('faq');

Route::namespace('Auth')->group(function() {
    Route::namespace('Admin')->group(function() {

        //Page Produit
        Route::get('/Produits', 'ProduitController@index')->name('products');
        Route::get('/Produits/addProduit', 'ProduitController@addProduitForm')->name('addProduitForm');
        Route::post('/Produits/add', 'ProduitController@add')->name('addProduit');
        Route::get('/Produits/update/{id}', 'ProduitController@updateProduitForm')->name('updateProduitForm');
        Route::post('/Produits/update', 'ProduitController@update')->name('updateProduit');
        Route::post('/Produits/delete/{id}', 'ProduitController@delete')->name('deleteProduit');

        //Page FAQ
        Route::get('/admin/faq', 'FAQController@index')->name('FAQs');
        Route::get('/faq/addFAQ', 'FAQController@addFAQForm')->name('addFAQForm');
        Route::post('/faq/add', 'FAQController@add')->name('addFAQ');
        Route::get('/faq/update/{id}', 'FAQController@updateFAQForm')->name('updateFAQForm');
        Route::post('/faq/update', 'FAQController@update')->name('updateFAQ');
        Route::post('/faq/delete/{id}', 'FAQController@delete')->name('deleteFAQ');
    });
});

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
