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

Route::group(['middleware' => 'authen'], function (){


    Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@Dashboard']);
    Route::get('/stations', ['as' => 'stations', 'uses' => 'StationController@getStations']);
    Route::get('/brands', ['as' => 'brands', 'uses' => 'BrandController@getBrands']);
    Route::get('/questions', ['as' => 'questions', 'uses' => 'QuestionController@getQuestions']);
    Route::get('/survey', ['as' => 'survey', 'uses' => 'SurveyController@getSurvey']);
    Route::get('/reports', ['as' => 'reports', 'uses' => 'ReportController@getReports']);
    Route::get('/vehicles', ['as' => 'vehicles', 'uses' => 'VehicleController@getVehicles']);
    Route::get('/users', ['as' => 'users', 'uses' => 'UserController@getUsers']);
    Route::get('/answers', ['as' => 'answers', 'uses' => 'AnswerController@getAnswers']);

    Route::get('/stationsInfo', ['as' => 'showStationInfo', 'uses' => 'StationController@showStationInformation']);
    Route::get('/editStation', ['as' => 'editStation', 'uses' => 'StationController@editStations']);
    Route::post('/poststations', ['as' => 'postStation', 'uses' => 'StationController@createStation']);
    Route::post('/updatestations', ['as' => 'updateStation', 'uses' => 'StationController@updateStations']);
    Route::post('/deletestations', ['as' => 'deleteStation', 'uses' => 'StationController@deleteStation']);

    Route::get('/brandsInfo', ['as' => 'showBrandInfo', 'uses' => 'BrandController@showBrandInformation']);
    Route::get('/editBrands', ['as' => 'editBrand', 'uses' => 'BrandController@editBrand']);
    Route::post('/postBrands', ['as' => 'postBrand', 'uses' => 'BrandController@createBrand']);
    Route::post('/updateBrands', ['as' => 'updateBrand', 'uses' => 'BrandController@updateBrand']);
    Route::post('/deleteBrands', ['as' => 'deleteBrand', 'uses' => 'BrandController@deleteBrand']);

    Route::get('/vehiclesInfo', ['as' => 'showVehicleInfo', 'uses' => 'VehicleController@showVehicleInformation']);
    Route::get('/editVehicle', ['as' => 'editVehicle', 'uses' => 'VehicleController@editVehicle']);
    Route::post('/postVehicle', ['as' => 'postVehicle', 'uses' => 'VehicleController@createVehicle']);
    Route::post('/updateVehicle', ['as' => 'updateVehicle', 'uses' => 'VehicleController@updateVehicle']);
    Route::post('/deleteVehicle', ['as' => 'deleteVehicle', 'uses' => 'VehicleController@deleteVehicle']);

    Route::get('/questionInfo', ['as' => 'showQuestionInfo', 'uses' => 'QuestionController@showQuestionInformation']);
    Route::get('/editQuestion', ['as' => 'editQuestion', 'uses' => 'QuestionController@editQuestion']);
    Route::post('/postQuestion', ['as' => 'postQuestion', 'uses' => 'QuestionController@createQuestion']);
    Route::post('/updateQuestion', ['as' => 'updateQuestion', 'uses' => 'QuestionController@updateQuestion']);
    Route::post('/deleteQuestion', ['as' => 'deleteQuestion', 'uses' => 'QuestionController@deleteQuestion']);

    Route::get('/reportInfo', ['as' => 'showReportInfo', 'uses' => 'ReportController@showReportInformation']);
    Route::get('/editReport', ['as' => 'editReport', 'uses' => 'ReportController@editReport']);
    Route::post('/postReport', ['as' => 'postReport', 'uses' => 'ReportController@createReport']);
    Route::post('/updateReport', ['as' => 'updateReport', 'uses' => 'ReportController@updateReport']);
    Route::post('/deleteReport', ['as' => 'deleteReport', 'uses' => 'ReportController@deleteReport']);

    Route::get('/surveyInfo', ['as' => 'showSurveyInfo', 'uses' => 'SurveyController@showSurveyInformation']);
    Route::get('/editSurvey', ['as' => 'editSurvey', 'uses' => 'SurveyController@editSurvey']);
    Route::post('/postSurvey', ['as' => 'postSurvey', 'uses' => 'SurveyController@createSurvey']);
    Route::post('/updateSurvey', ['as' => 'updateSurvey', 'uses' => 'SurveyController@updateSurvey']);
    Route::post('/deleteSurvey', ['as' => 'deleteSurvey', 'uses' => 'SurveyController@deleteSurvey']);

    Route::get('/loggerInfo', ['as' => 'showLoggerInfo', 'uses' => 'UserController@showLoggerInformation']);
    Route::get('/editLogger', ['as' => 'editLogger', 'uses' => 'UserController@editLogger']);
    Route::post('/postLogger', ['as' => 'postLogger', 'uses' => 'UserController@createLogger']);
    Route::post('/updateLogger', ['as' => 'updateLogger', 'uses' => 'UserController@updateLogger']);
    Route::post('/deleteLogger', ['as' => 'deleteLogger', 'uses' => 'UserController@deleteLogger']);

    Route::get('/answerInfo', ['as' => 'showAnswerInfo', 'uses' => 'AnswerController@showAnswerInformation']);
    Route::get('/editAnswer', ['as' => 'editAnswer', 'uses' => 'AnswerController@editAnswer']);
    Route::post('/postAnswer', ['as' => 'postAnswer', 'uses' => 'AnswerController@createAnswer']);
    Route::post('/updateAnswer', ['as' => 'updateAnswer', 'uses' => 'AnswerController@updateAnswer']);
    Route::post('/deleteAnswer', ['as' => 'deleteAnswer', 'uses' => 'AnswerController@deleteAnswer']);

//exports
Route::get('reports/export',['as'=>'exportReports','uses' =>'DashboardController@exportReports']);
Route::get('surveys/export',['as'=>'exportSurveys','uses' =>'DashboardController@exportSurvey']);
});
Auth::routes();

