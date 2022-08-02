<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace'=>'Main'], function(){
    Route::get('/', 'IndexController@indexMain')->name('main.listing');
    Route::post('/search', 'IndexController@searchMain')->name('main.search');
    Route::get('/event/{event}', 'IndexController@showEvent')->name('main.show');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', 'IndexController@adminMain')->name('admin.main.index');

    });
        Route::group(['namespace'=>'Category', 'prefix' => 'categories'], function(){
            Route::get('/', 'CategoryController@categoryIndex')->name('admin.category.index');
            Route::get('/create', 'CategoryController@categoryCreate')->name('admin.category.create');
            Route::post('/', 'CategoryController@categoryStore')->name('admin.category.store');
            Route::get('/{category}', 'CategoryController@categoryShow')->name('admin.category.show');
            Route::get('/{category}/edit', 'CategoryController@categoryEdit')->name('admin.category.edit');
            Route::patch('/{category}', 'CategoryController@categoryUpdate')->name('admin.category.update');
            Route::delete('/{category}', 'CategoryController@categoryDelete')->name('admin.category.delete');
        });
        Route::group(['namespace'=>'Event', 'prefix' => 'events'], function(){
            Route::get('/', 'EventController@eventIndex')->name('admin.event.index');
            Route::get('/create', 'EventController@eventCreate')->name('admin.event.create');
            Route::post('/', 'EventController@eventStore')->name('admin.event.store');
            Route::get('/{event}', 'EventController@eventShow')->name('admin.event.show');
            Route::get('/{event}/edit', 'EventController@eventEdit')->name('admin.event.edit');
            Route::post('/{event}', 'EventController@eventUpdate')->name('admin.event.update');
            Route::delete('/{event}', 'EventController@eventDelete')->name('admin.event.delete');
        });
        Route::group(['namespace'=>'User', 'prefix' => 'users'], function(){
            Route::get('/', 'UserController@userIndex')->name('admin.user.index');
            Route::get('/create', 'UserController@userCreate')->name('admin.user.create');
            Route::post('/', 'UserController@userStore')->name('admin.user.store');
            Route::get('/{user}', 'UserController@userShow')->name('admin.user.show');
            Route::get('/{user}/edit', 'UserController@userEdit')->name('admin.user.edit');
            Route::patch('/{user}', 'UserController@userUpdate')->name('admin.user.update');
            Route::delete('/{user}', 'UserController@userDelete')->name('admin.user.delete');
        });
});



Auth::routes(['verify' => true]);
