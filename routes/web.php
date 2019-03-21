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
Auth::routes();

Route::get('/blog', 'BlogController@blog');
Route::get('/blog/{slug}', 'BlogController@blogpost');

Route::get('/', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('/pages', 'PagesController');
    Route::resource('/blog', 'BlogController');
    Route::get('/media', 'MediaController@index');
    Route::resource('/account', 'AccountController');
    Route::resource('/settings', 'SettingsController');
    Route::get('/changepass','HomeController@changepass');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
});

Route::get('/{slug}', 'HomeController@show');
//przez to że tak napisałem wysypuje się migracja
$pages = App\Pages::all();
foreach($pages as $page){
    Route::get('/{slug}/{childslug}', 'HomeController@childshow');
}



