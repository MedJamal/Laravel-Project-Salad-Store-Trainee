<?php

Route::get('/', function () {
    return view('index');
});

Route::resource('ingredients', 'IngredientController');

Route::resource('orders', 'OrderController');

Auth::routes();

// Route::get('profile', function () {
//     // Only authenticated users may enter...
// })->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');