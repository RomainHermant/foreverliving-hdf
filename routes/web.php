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

//Accueil
Route::get('/', 'ViewController@index')->name('index');

//Notre Aloe
Route::get('/notre-aloe', 'ViewController@notrealoe')->name('notre-aloe');

//FAQ
Route::get('/faq', 'ViewController@faq')->name('faq');

//Produits
Route::get('/produits', 'ViewController@products')->name('products');

Route::namespace('Auth')->group(function() {
    Route::namespace('Admin')->group(function() {

        Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

        //Page products
        Route::get('admin/produits', 'ProduitController@index')->name('admin.products');
        Route::get('admin/produits/ajouter-products', 'ProduitController@addProduitForm')->name('createForm.products');
        Route::post('admin/produits/add', 'ProduitController@add')->name('create.products');
        Route::get('admin/produits/update/{id}', 'ProduitController@updateProduitForm')->name('updateForm.products');
        Route::post('admin/produits/update', 'ProduitController@update')->name('update.products');
        Route::post('admin/produits/delete/{id}', 'ProduitController@delete')->name('delete.products');

        //Page faq
        Route::get('admin/faq', 'FAQController@index')->name('admin.faq');
        Route::get('admin/faq/addFAQ', 'FAQController@addFAQForm')->name('createForm.faq');
        Route::post('admin/faq/add', 'FAQController@add')->name('create.faq');
        Route::get('admin/faq/update/{id}', 'FAQController@updateFAQForm')->name('updateForm.faq');
        Route::post('admin/faq/update', 'FAQController@update')->name('update.faq');
        Route::post('admin/faq/delete/{id}', 'FAQController@delete')->name('delete.faq');
    });
});

Auth::routes();
