<?php

use App\User;
use App\Project;
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




// Route::get('/projects/create', function () {

//     $user = User::findOrFail(1);
//     echo $user->projects->user_id;

// });




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/checkemail', 'HomeController@checkemail');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');



Route::get('/projects/index', 'ProjectController@index')->name('projects.index');
Route::post('/projects/create', 'ProjectController@create')->name('projects.create');

Route::get('/projects/index2', 'ProjectController@index2')->name('projects.index2');
Route::post('/projects/create2', 'ProjectController@create2')->name('projects.create2');

Route::get('/projects/index3', 'ProjectController@index3')->name('projects.index3');
Route::post('/projects/create3', 'ProjectController@create3')->name('projects.create3');

Route::get('/projects/index4', 'ProjectController@index4')->name('projects.index4');
Route::post('/projects/create4', 'ProjectController@create4')->name('projects.create4');

// Route::get('/projects/index5', 'ProjectController@index5')->name('projects.index5');
// Route::post('/projects/create5', 'ProjectController@create5')->name('projects.create5');
Route::get('/projects/create5', 'ProjectController@create5')->name('projects.index5');

	