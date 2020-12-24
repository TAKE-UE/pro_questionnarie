<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PostCheck;

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

Route::get('/', 'PostController@index');
Route::get('/posts/{id}', 'PostController@store')->where('id', '[0-9]+');
Route::get('/posts/show/{id}', 'PostController@show');
Route::post('/posts/create', 'PostController@create');
Route::post('/posts/deleted{id}', 'PostController@deleted');
Route::get('/posts/list', 'PostController@list');
Route::get('/posts/details/{id}', 'PostController@details')->name('details')->middleware(PostCheck::class);
Route::get('/response/poll/{id}', 'ResponseController@poll')->name('poll.id');
Route::post('/response/poll', 'ResponseController@responsePoll');

// Route::get('/', function () {
//   return view('welcome');
// });
// Route::post('/posts', 'PostController@post');

// Route::get('/info', function () {return view('phpinfo');});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
