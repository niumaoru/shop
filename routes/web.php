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

//测试路由
Route::get('/test', 'TestsController@test')->name('test');

//主页路由(后期被商品列表页面取代)
//Route::get('/', 'PagesController@root')->name('root')->middleware('verified');

//用户路由
Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')
        ->name('user_addresses.index');
    Route::get('user_addresses/create', 'UserAddressesController@create')
        ->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')
        ->name('user_addresses.store');
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')
        ->name('user_addresses.edit');
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')
        ->name('user_addresses.update');
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')
        ->name('user_addresses.destroy');
});

//商品列表路由
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

//商品详情页路由
Route::get('products/{product}', 'ProductsController@show')->name('products.show');