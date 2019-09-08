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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('edit', 'HomeController@edit')->name('edit');
Route::get('demo', 'HomeController@demo')->name('demo');

Route::get('login/facebook', 'FacebookController@redirectToProvider');
Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');

Route::post('personal-details','PersonalDetailsController@index');
Route::post('career-obj','CareerObjectiveController@index');
Route::post('career-sum','CareerSummaryController@index');
Route::post('special-qua','SpecialQualificationController@index');
Route::post('academic-qua','AcademicQuaController@index');
Route::get('aca-del/{id}','AcademicQuaController@delete');

Route::post('training-sum','TrainingSumController@index');
Route::get('tra_del/{id}','TrainingSumController@delete');
Route::post('specialization','SpecializationController@index');
Route::get('del_spe/{id}','SpecializationController@delete');

Route::post('description','DescriptionController@index');
Route::post('language','LanguageProController@index');
Route::get('lang_del/{id}','LanguageProController@delete');

Route::post('reference','ReferenceController@index');
