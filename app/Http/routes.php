<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
  return view('home');
});

Route::get('about', function() {
  return view('about');
});

Route::resource('blog', 'BlogController');
Route::resource('features', 'FeatureController');
Route::resource('collections', 'CollectionController');
Route::resource('maps', 'MapController');

// Route::get('blog', function () {
//     return view('blog.index');
// });

// Route::get('collection', function () {
//     return view('collection.index');
// });

// Route::get('dashboard', function () {
//     return view('dashboard.index');
// });

// Route::get('feature', function () {
//     return view('feature.index');
// });

// Route::get('map', function () {
//     return view('map.index');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
