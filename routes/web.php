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
Route::get('/', 'FrontendController@index');

Route::get('/Thể Thao', 'FrontendController@thethao');
Route::get('/Giáo Dục', 'FrontendController@giaoduc');
Route::get('/Thời Sự', 'FrontendController@thoisu');
Route::get('/Văn Hóa', 'FrontendController@vanhoa');
Route::get('/ESport', 'FrontendController@esport');
Route::get('/search' ,'FrontendController@search');
// Route::get('/showdetailnews', function () {
//    return view('frontend.showdetailnews');
//  });
Route::get('/showdetailnews', 'FrontendController@showdetailnews');
route::get('tin-tuc-{name}','FrontendController@showdetailnews');



Route::group(['prefix' => 'admin', 'as' => 'admin.'],  function () {
    Route::get('/','AdminController@index')->name('index');
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('login', 'AdminController@login')->name('login');
    route::post('login','AdminController@postLoginAdmin');
    Route::get('logout', 'AdminController@logout');
    

 
    Route::resource('category','CategoryController');
    Route::resource('banner', 'BannerController');
    Route::get('news/quickGet/{id}', 'NewsController@getById');
    Route::resource('news', 'NewsController');
    Route::resource('user', 'UserController');


});
