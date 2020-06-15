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

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/', 'Frontend\FrontendController@index')->name('index');
route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('contact.us');
route::get('news/events/details/{id}', 'Frontend\FrontendController@newsdetails')->name('news.event.details');
route::get('our/misson', 'Frontend\FrontendController@mission')->name('our.mission');
route::get('our/visson', 'Frontend\FrontendController@vission')->name('our.vission');
route::get('news/evetnts', 'Frontend\FrontendController@newsEvents')->name('our.news.evets');
route::post('contact/store', 'Frontend\FrontendController@contactstore')->name('contact.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
	Route::prefix('users')->group(function(){
	route::get('/view', 'Backend\UsersController@view')->name('users.view');
	route::get('/add', 'Backend\UsersController@add')->name('users.add');
	route::post('/store', 'Backend\UsersController@store')->name('users.store');
	route::get('/edit/{id}', 'Backend\UsersController@edit')->name('users.edit');
	route::post('/update/{id}', 'Backend\UsersController@update')->name('users.update');
	route::get('/delete/{id}', 'Backend\UsersController@delete')->name('users.delete');
});

 Route::prefix('profile')->group(function(){
	route::get('/view', 'Backend\ProfileController@view')->name('profile.view');
	route::get('/password/view', 'Backend\ProfileController@passwordView')->name('password.view');
	route::post('/store', 'Backend\ProfileController@store')->name('profile.store');
	route::get('/edit', 'Backend\ProfileController@edit')->name('profile.edit');
	route::post('/update', 'Backend\ProfileController@update')->name('profile.update');
	route::get('/delete/{id}', 'Backend\ProfileController@delete')->name('profile.delete');
	route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('password.update.view');
});

Route::prefix('suppliers')->group(function(){
	route::get('/view', 'Backend\SupplierController@view')->name('suppliers.view');
	route::get('/add', 'Backend\SupplierController@add')->name('suppliers.add');
	route::post('/store', 'Backend\SupplierController@store')->name('suppliers.store');
	route::get('/edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
	route::post('/update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
	route::get('/delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
});

Route::prefix('customers')->group(function(){
	route::get('/view', 'Backend\CustormerController@view')->name('customers.view');
	route::get('/add', 'Backend\CustormerController@add')->name('customers.add');
	route::post('/store', 'Backend\CustormerController@store')->name('customers.store');
	route::get('/edit/{id}', 'Backend\CustormerController@edit')->name('customers.edit');
	route::post('/update/{id}', 'Backend\CustormerController@update')->name('customers.update');
	route::get('/delete/{id}', 'Backend\CustormerController@delete')->name('customers.delete');
});

Route::prefix('units')->group(function(){
	route::get('/view', 'Backend\UnitController@view')->name('units.view');
	route::get('/add', 'Backend\UnitController@add')->name('units.add');
	route::post('/store', 'Backend\UnitController@store')->name('units.store');
	route::get('/edit/{id}', 'Backend\UnitController@edit')->name('units.edit');
	route::post('/update/{id}', 'Backend\UnitController@update')->name('units.update');
	route::get('/delete/{id}', 'Backend\UnitController@delete')->name('units.delete');
});

Route::prefix('categories')->group(function(){
	route::get('/view', 'Backend\CategoryController@view')->name('categories.view');
	route::get('/add', 'Backend\CategoryController@add')->name('categories.add');
	route::post('/store', 'Backend\CategoryController@store')->name('categories.store');
	route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('categories.edit');
	route::post('/update/{id}', 'Backend\CategoryController@update')->name('categories.update');
	route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('categories.delete');
});

Route::prefix('products')->group(function(){
	route::get('/view', 'Backend\ProductController@view')->name('products.view');
	route::get('/add', 'Backend\ProductController@add')->name('products.add');
	route::post('/store', 'Backend\ProductController@store')->name('products.store');
	route::get('/edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
	route::post('/update/{id}', 'Backend\ProductController@update')->name('products.update');
	route::get('/delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
});

Route::prefix('purchase')->group(function(){
	route::get('/view', 'Backend\PurchaseController@view')->name('purchase.view');
	route::get('/add', 'Backend\PurchaseController@add')->name('purchase.add');
	route::post('/store', 'Backend\PurchaseController@store')->name('purchase.store');
	route::get('/pending/', 'Backend\PurchaseController@pendingList')->name('purchase.pending.list');
	route::get('/approve/{id}', 'Backend\PurchaseController@approve')->name('purchase.approve');
	route::get('/delete/{id}', 'Backend\PurchaseController@delete')->name('purchase.delete');
});

Route::get('/get-category', 'Backend\DefaultController@getCategory')->name('get-category');
Route::get('/get-product', 'Backend\DefaultController@getProduct')->name('get-product');
Route::get('/get-stock', 'Backend\DefaultController@getStock')->name('check-product-stock');



Route::prefix('invoice')->group(function(){
	route::get('/view', 'Backend\InvoiceController@view')->name('invoice.view');
	route::get('/add', 'Backend\InvoiceController@add')->name('invoice.add');
	route::post('/store', 'Backend\InvoiceController@store')->name('invoice.store');
	route::get('/pending/', 'Backend\InvoiceController@pendingList')->name('invoice.pending.list');
	route::get('/approve/{id}', 'Backend\InvoiceController@approve')->name('invoice.approve');
	route::get('/delete/{id}', 'Backend\InvoiceController@delete')->name('invoice.delete');
});

});

