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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Hello world';
});

Route::get('/test2', function () {
    return 'Hello world Hello world Hello world Hello world';
});

Route::redirect('/test', '/test2');
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/user/profile', function () {
    return "Hello There...";
})->name('profile');

Route::get('/user/{name}', 'UserController@show');
Route::get('foo', 'Photos\AdminController@method');
Route::resource('photos', 'PhotoController');
Route::get('/', function () {
    return view('admin.profile');
});
Route::get('/', function () {
    return view('tryblade.child');
});
