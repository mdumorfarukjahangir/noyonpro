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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/','MsgController@store')->name('msg.store');
Route::get('post/{slug}','PostController@details')->name('post.details');
Auth::routes();


Route::group(['as'=>'admin.', 'prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tag', 'TagController');
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('brandname', 'BrandnameController');
    Route::resource('portfolio', 'PortfolioController');
    Route::resource('countdown', 'CountdownController');
    Route::resource('intro', 'IntroController');
    Route::resource('about', 'AboutController');
    Route::resource('im', 'ImController');

    Route::resource('msg', 'MsgController');
    Route::resource('address', 'AddressController');
    Route::get('/pending/post','PostController@pending')->name('post.pending');
    Route::put('/post/{id}/approve','PostController@approval')->name('post.approve');

});



Route::group(['as'=>'user.','prefix' => 'user','namespace' => 'User','middleware' => ['auth','user']], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
