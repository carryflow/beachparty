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

Route::get('/', function () {
    return view('welcome');
});


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::name('admin.')->prefix('admin')->group(function () {

	// Route::get('index', function () {
 //    	return view('admin.index');
	// })->name('index');
	Route::get('home', 'HomeController@index')->name('home');
	
	

	
	// rutas de usuario
	Route::resource('users', 'UsersController');
	// Route::get('users/{id}/destroy',[
	// 'uses' => 'UserController@destroy',
	// 'as' => 'users.destroy',
 //    ]);

 //    //rutas imagen
 //    Route::get('images/updateImg', 'imageController@updateImg')->name('images.updateImg');
 //    Route::put('images/update', 'imageController@update')->name('images.update');
    
});


