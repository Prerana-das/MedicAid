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
//home View
Route::get('index', 'MainController@index');
//Symtoms View
Route::get('symptoms', 'SymptomController@index');


Route::get('admin', 'Admin\AdminController@index');



Route::get('age', 'Admin\Age\AgeController@index');
Route::post('age/save', 'Admin\Age\AgeController@save');
Route::post('age/edit', 'Admin\Age\AgeController@edit');
Route::get('age/del/{ageID}', 'Admin\Age\AgeController@del');

Route::get('gender', 'Admin\Gender\GenderController@index');
Route::post('gender/save', 'Admin\Gender\GenderController@save');
Route::post('gender/edit', 'Admin\Gender\GenderController@edit');
Route::get('gender/del/{genderID}', 'Admin\Gender\GenderController@del');

Route::get('symptom', 'Admin\Symptom\SymptomController@index');
Route::post('symptom/save', 'Admin\Symptom\SymptomController@save');
Route::post('symptom/edit', 'Admin\Symptom\SymptomController@edit');
Route::get('symptom/edit/{symptomID}', 'Admin\Symptom\SymptomController@del');

Route::get('disease', 'Admin\Disease\DiseaseController@index');
Route::post('disease/save', 'Admin\Disease\DiseaseController@save');
Route::post('disease/edit', 'Admin\Disease\DiseaseController@edit');
Route::get('disease/del/{diseaseID}', 'Admin\Disease\DiseaseController@del');


Route::get('specialist', 'Admin\Specialist\SpecialistController@index');
Route::post('specialist/save', 'Admin\Specialist\SpecialistController@save');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
