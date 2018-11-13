<?php

// Route::get('/', function () {
//     return view('index');
// });

// Route::resource('ingredients', 'IngredientController');

Route::resource('orders', 'OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Pages
Route::get('/', 'PagesController@index')->name('index');
Route::get('/contactus', 'PagesController@contactus')->name('contactus');
Route::get('/my-orders', 'PagesController@userOrders')->name('user.orders');
Route::get('/my-orders/{id}', 'PagesController@userOrderShow')->name('user.order.show');

// Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/add-to-cart/{id}', 'CartController@AddToCart')->name('AddToCart'); // change name to cart.AddToCart
Route::get('/cart/remove/{id}', 'CartController@RemoveItem')->name('cart.remove');
Route::get('/cart/reduce/{id}', 'CartController@ReduceByOne')->name('cart.ReduceByOne');
Route::get('/cart/increase/{id}', 'CartController@IncreaseByOne')->name('cart.IncreaseByOne');

Route::post('/ajaxplaceorder', 'OrderController@ajaxPlaceOrder')->name('ajaxPlaceOrder');

// User Order Page
Route::get('/order', function () {
    return view('order');
})->name('user_order.index'); // to change

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

// Route::get('/thankyou', function () {
//     return view('thankyou');
// });

// Admin routes
Route::group( ['middleware' => 'IsAdmin', 'prefix'=>'admin'], function(){

    // Index
    Route::get('/', function(){
        return view('admin.index');
    })->name('admin.index');
    
    // Ingredients
    Route::get('/ingredients', 'IngredientController@index')->name('admin.ingredients.index');
    Route::get('/ingredients/create', 'IngredientController@create')->name('admin.ingredients.create');
    Route::post('/ingredients', 'IngredientController@store')->name('admin.ingredients.store');
    Route::get('/ingredients/{id}/edit', 'IngredientController@edit')->name('admin.ingredients.edit');
    Route::patch('/ingredients/{id}/update', 'IngredientController@update')->name('admin.ingredients.update');
    Route::get('/ingredients/{id}/delete', 'IngredientController@delete')->name('admin.ingredients.delete');

    // Ingredients
    Route::get('/orders', 'OrderController@index')->name('admin.orders.index');
    Route::get('/orders/create', 'OrderController@create')->name('admin.orders.create');
    Route::post('/orders', 'OrderController@store')->name('admin.orders.store');
    Route::get('/orders/{id}/{status}', 'OrderController@status')->name('admin.orders.status');
    Route::get('/order/{id}', 'OrderController@show')->name('admin.order.show');
    // Route::get('/orders/{id}/edit', 'OrderController@edit')->name('admin.orders.edit');
    // Route::put('/orders/{id}', 'OrderController@edit')->name('admin.orders.update');

    Route::get('/ingredients-categories', 'IngredientscategoryController@index')->name('admin.ingredientscategory.index');

    // Users
    Route::get('/users', 'UserController@index')->name('admin.users.index');
    Route::get('/user/{id}', 'UserController@setRole')->name('admin.user.setRole');

});