<?php

Route::get('/', function () {
    return view('index');
});

Route::resource('ingredients', 'IngredientController');

Route::resource('orders', 'OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');


// Admin routes
Route::group( ['prefix'=>'admin'], function(){

    // Index
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');
    
    // Ingredients
    Route::get('/ingredients', 'IngredientController@index')->name('admin.ingredients.index');
    Route::get('/ingredients/create', 'IngredientController@create')->name('admin.ingredients.create');
    Route::post('/ingredients', 'IngredientController@store')->name('admin.ingredients.store');
    // Route::get('/ingredients/{id}/edit', 'IngredientController@edit')->name('admin.ingredients.edit');
    // Route::put('/ingredients/{id}', 'IngredientController@edit')->name('admin.ingredients.update');

    // Ingredients
    Route::get('/orders', 'OrderController@index')->name('admin.orders.index');
    Route::get('/orders/create', 'OrderController@create')->name('admin.orders.create');
    Route::post('/orders', 'OrderController@store')->name('admin.orders.store');
    Route::get('/orders/{id}/{status}', 'OrderController@status')->name('admin.orders.status');
    Route::get('/order/{id}', 'OrderController@show')->name('admin.order.show');
    // Route::get('/orders/{id}/edit', 'OrderController@edit')->name('admin.orders.edit');
    // Route::put('/orders/{id}', 'OrderController@edit')->name('admin.orders.update');


});