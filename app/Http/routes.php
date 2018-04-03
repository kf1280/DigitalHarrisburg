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
  return view('welcome');
});

Route::get('about', function() {
  return view('about');
});

Route::get('publish/{id}', [
  'uses' => 'FeatureController@publish',
  'as' => 'feature.publish'
]);

Route::resource('blog', 'BlogController');
Route::resource('features', 'FeatureController');
Route::resource('collections', 'CollectionController');
Route::resource('comment', 'CommentController');
Route::resource('maps', 'MapController');
Route::resource('dashboard', 'DashboardController');

Route::post('/maps/{id}/markers', 'MapController@storeMarker');
Route::post('/maps/{id}/circles', 'MapController@storeCircle');

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