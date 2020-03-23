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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('config:cache');

   return "Cleared!";

});
Auth::routes();



// AUTH
Route::middleware(['auth'])->group(function(){
  Route::get('/home', 'HomeController@index')->name('home');
  // Route::get('/', 'UnauthController@welcome')->name('welcome');
});
//staff || administrator AUTH
Route::group(['middleware'=>'check-permission:administrator|staff'], function () {
  Route::get('/','HomeController@upload');
  Route::get('filesstore','HomeController@show')->name('filesstore');
  Route::post('/users/fileupload/','HomeController@fileupload')->name('users.fileupload');
Route::post('image/delete','HomeController@fileDestroy');
// Route::resource('files', 'HomeController');
Route::get('documents/download/{uuid}', 'HomeController@download')->name('documents.download');
Route::get('up/{id}','HomeController@up')->name('up');
});


//staff  AUTH
Route::group(['middleware'=>'check-permission:staff'], function () {



});
