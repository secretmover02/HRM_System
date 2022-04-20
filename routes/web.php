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
    return view('index');
});

Auth::routes();

Route::get('/profile', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/Update', function(){
	return view('auth.login');
});
Route::POST('/store', 'UserController@store');
Route::post('/profile', 'UserController@show');
Route::get('/home', 'HomeController@index')->name('home');

//for log in user
Route::get('/PersonalInfo', 'HomeController@personal_info')->name('/PersonalInfo');
Route::get('/FamilyBackground', 'HomeController@family_background')->name('/FamilyBackground');
Route::get('/EducationalBackground', 'HomeController@educational_background')->name('/EducationalBackground');
Route::get('/ELigibility', 'HomeController@civil_service_eligibilty')->name('/ELigibility');
Route::get('/WorkExperience', 'HomeController@work_experience')->name('/WorkExperience');
Route::get('/Affiliation', 'HomeController@affilation_involvement')->name('/Affiliation');
Route::get('/Training', 'HomeController@learning_development')->name('/Training');
Route::get('/Affiliation', 'HomeController@work_involvement')->name('/Affiliation');