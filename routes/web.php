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

Route::get('vehicles', function () {
    return view('vehicles.vehicles');
});

Route::get('reports', function () {
    return view('reports.reports');
});
Route::get('brands', function () {
    return view('brands.brands');
});
Route::get('stations', function () {
    return view('stations.stations');
});
Route::get('survey', function () {
    return view('survey.survey');
});
