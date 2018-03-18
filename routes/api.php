<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//api routes
Route::get('/stations',['as'=>'apiStations','uses'=>'StationController@downloadStations']);
Route::get('/brands',['as'=>'apiBrands','uses'=>'BrandController@downloadBrands']);
Route::get('/questions',['as'=>'apiQuestions','uses'=>'QuestionController@downloadQuestions']);
Route::get('/vehicles',['as'=>'apiVehicles','uses'=>'VehicleController@downloadVehicles']);
Route::post('/survey',['as'=>'apiSurvey','uses'=>'SurveyController@uploadSurvey']);
Route::post('/report',['as'=>'apiReports','uses'=>'ReportController@uploadReports']);
