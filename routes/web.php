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

Route::get('login', function(){
	return view('authentication.login');
});

Route::get('registration', function(){
	return view('authentication.registration');
});

/*Route::get('home', function(){
	return view('common.home');
});*/
Route::group(['middleware'=>'checkuser'], function(){
	Route::get('home', 'HomeController@show');
});


/*Route::group('validateReg', 
	['middleware'=>'passwordVal', function(){
	Route::post('submitReg',['uses'=>'AuthController@store']);
}]);*/

Route::post('submitReg','AuthController@store');

Route::post('submitLogin','AuthController@authenticate');

Route::get('logout', 'HomeController@logout');

Route::get('usernotfound', 'AuthController@notFound');