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

Route::get('/vehiclesInfo',['as'=>'showVehicleInfo','uses'=>'VehicleController@showVehicleInformation']);
Route::get('/editVehicle',['as'=>'editVehicle','uses'=>'VehicleController@editVehicle']);
Route::post('/postVehicle',['as'=>'postVehicle','uses'=>'VehicleController@createVehicle']);
Route::post('/updateVehicle',['as'=>'updateVehicle','uses'=>'VehicleController@updateVehicle']);
Route::post('/deleteVehicle',['as'=>'deleteVehicle','uses'=>'VehicleController@deleteVehicle']);

Route::get('/questionInfo',['as'=>'showQuestionInfo','uses'=>'QuestionController@showQuestionInformation']);
Route::get('/editQuestion',['as'=>'editQuestion','uses'=>'QuestionController@editQuestion']);
Route::post('/postQuestion',['as'=>'postQuestion','uses'=>'QuestionController@createQuestion']);
Route::post('/updateQuestion',['as'=>'updateQuestion','uses'=>'QuestionController@updateQuestion']);
Route::post('/deleteQuestion',['as'=>'deleteQuestion','uses'=>'QuestionController@deleteQuestion']);

Route::get('/reportInfo',['as'=>'showReportInfo','uses'=>'ReportController@showReportInformation']);
Route::get('/editReport',['as'=>'editReport','uses'=>'ReportController@editReport']);
Route::post('/postReport',['as'=>'postReport','uses'=>'ReportController@createReport']);
Route::post('/updateReport',['as'=>'updateReport','uses'=>'ReportController@updateReport']);
Route::post('/deleteReport',['as'=>'deleteReport','uses'=>'ReportController@deleteReport']);