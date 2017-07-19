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

Route::get('/', 'HomeController@index')->name('frontend.home');
Route::get('/shop/{cat}', 'HomeController@shop')->name('frontend.shop');
Route::get('/viewproduct/{id}', 'HomeController@viewproduct')->name('frontend.viewproduct');

Route::get('/cart', 'CartController@index')->name('frontend.cart');
Route::get('/cart/add/{id}', 'CartController@add_item')->name('frontend.cart.add');
Route::get('/cart/remove/{id}', 'CartController@remove_item')->name('frontend.cart.remove');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/', 'Admin\HomeController@index')->name('backend.home');
  //Route::get('/login', 'Auth\LoginController@login')->name('login');
  Route::get('/login', 'Auth\LoginController@login')->name('backend.login');
  Route::post('/login', 'Auth\LoginController@authenticate')->name('backend.authenticate');
  Route::get('/logout', 'Auth\LoginController@logout')->name('backend.logout');

  Route::get('/products/index', 'Admin\ProductController@index')->name('backend.products.index');
  Route::get('/products/new', 'Admin\ProductController@new')->name('backend.products.new');
  Route::get('/products/delete/{id}', 'Admin\ProductController@delete')->name('backend.products.delete');
  Route::post('/products/store', 'Admin\ProductController@store')->name('backend.products.store');





  Route::get('/categories/main/index', 'Admin\CategoryController@index')->name('backend.category.index');
  Route::get('/categories/main/new', 'Admin\CategoryController@new')->name('backend.category.new');
  Route::get('/categories/main/delete/{id}', 'Admin\CategoryController@delete')->name('backend.category.delete');
  Route::post('/categories/main/store', 'Admin\CategoryController@store')->name('backend.category.store');

  Route::get('/categories/sub/index', 'Admin\SubCategoryController@index')->name('backend.subcategory.index');
  Route::get('/categories/sub/new', 'Admin\SubCategoryController@new')->name('backend.subcategory.new');
  Route::get('/categories/sub/delete/{id}', 'Admin\SubCategoryController@delete')->name('backend.subcategory.delete');
  Route::post('/categories/sub/store', 'Admin\SubCategoryController@store')->name('backend.subcategory.store');



});
