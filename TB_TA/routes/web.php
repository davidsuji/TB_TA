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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/syarat', function(){
return view('syarat');
});
//Route::resource('v1', 'TugasAkhirController');
Route::resource('mahasiswa', 'MahasiswaController');
Route::resource('dosen','DosenController');
Route::resource('judulTa','JudulTAController');

// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		$data['role'] = \App\UserRole::whereUserId(Auth::id())->get();
		return view('home', $data);
	});
});
// Route untuk user yang admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin', $data);
	});
});
// Route untuk user yang member
Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
	Route::get('/', function(){
		return view('member');
	});
});
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
