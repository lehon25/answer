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
})->name('index');
Route::post('/contact', 'PageController@submitContact');
Route::resource('/questions','QuestionController');
Route::resource('/answers','AnswersController',['except'=>['index','create','show']]);
Route::get('/contact','PageController@contact')->name('contact');
Route::post('/contact','PageController@sendContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{user}','PageController@profile')->name('profile');
Route::get('/upload','UploadController@getUpload')->name('upload');
Route::post('/upload','UploadController@postUpload');

Route::get('/github/{username}','ApiController@github')->name('github');

Route::get('/weather','ApiController@getWeather')->name('weather');
Route::post('/weather','ApiController@postWeather');

Route::get('/weather/js','ApiController@getWeatherJs')->name('weather.js');
