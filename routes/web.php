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
Route::get('/questions',['as'=>'questions','uses'=>'QuestionController@getQuestions']);
Route::get('/survey',['as'=>'survey','uses'=>'SurveyController@getSurvey']);
Route::get('/reports',['as'=>'reports','uses'=>'ReportController@getReports']);
Route::get('/vehicles',['as'=>'vehicles','uses'=>'VehicleController@getVehicles']);

Route::get('/stationsInfo',['as'=>'showStationInfo','uses'=>'StationController@showStationInformation']);
Route::get('/editStation',['as'=>'editStation','uses'=>'StationController@editStations']);
Route::post('/poststations',['as'=>'postStation','uses'=>'StationController@createStation']);
Route::post('/updatestations',['as'=>'updateStation','uses'=>'StationController@updateStations']);
Route::post('/deletestations',['as'=>'deleteStation','uses'=>'StationController@deleteStation']);

Route::get('/brandsInfo',['as'=>'showBrandInfo','uses'=>'BrandController@showBrandInformation']);
Route::get('/editBrands',['as'=>'editBrand','uses'=>'BrandController@editBrand']);
Route::post('/postBrands',['as'=>'postBrand','uses'=>'BrandController@createBrand']);
Route::post('/updateBrands',['as'=>'updateBrand','uses'=>'BrandController@updateBrand']);
Route::post('/deleteBrands',['as'=>'deleteBrand','uses'=>'BrandController@deleteBrand']);


//api routes
Route::get('/api/stations',['as'=>'apiStations','uses'=>'StationController@downloadStations']);
Route::get('/api/brands',['as'=>'apiBrands','uses'=>'BrandController@downloadBrands']);
Route::get('/api/questions',['as'=>'apiQuestions','uses'=>'QuestionController@downloadQuestions']);
Route::get('/api/vehicles',['as'=>'apiVehicles','uses'=>'VehicleController@downloadVehicles']);
Route::post('/api/survey',['as'=>'apiSurvey','uses'=>'SurveyController@uploadSurvey']);
Route::post('/api/report',['as'=>'apiReports','uses'=>'ReportController@uploadReports']);
