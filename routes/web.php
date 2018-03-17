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
    return view('dashboard');
});

Route::get('/stations',['as'=>'stations','uses'=>'StationController@getStations']);
Route::get('/brands',['as'=>'brands','uses'=>'BrandController@getBrands']);
Route::get('/questions',['as'=>'stations','uses'=>'QuestionController@getQuestions']);
Route::get('/survey',['as'=>'survey','uses'=>'SurveyController@getSurvey']);
Route::get('/reports',['as'=>'reports','uses'=>'ReportController@getReports']);
Route::get('/vehicles',['as'=>'vehicles','uses'=>'VehicleController@getVehicles']);

Route::get('/show/stationsInfo',['as'=>'showStationInfo','uses'=>'StationController@showStationInformation']);


Route::post('/poststations',['as'=>'postStation','uses'=>'stationController@createStation']);
