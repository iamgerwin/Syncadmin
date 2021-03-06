<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {
    if(!Session::has('user'))
        return redirect()->route('login.index');
    return 'ge0';
});

Route::resource('login', 'LoginController',['only' => ['index','store']]);

/**
   APIs
*/
Route::group(['prefix' => 'api'], function()
{
    Route::group(['prefix' => 'v1'], function()
    {
        Route::resource('machine','MachinesController');
        Route::resource('table','TablesController');
        Route::resource('jobtype','JobtypesController');
        Route::resource('job','JobsController');

    });
});

Route::get('dashboard',['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::group(['prefix' => 'setup'], function()
{
    Route::resource('machine','SetupMachineController',['only' => ['index','edit','create','show']]);
    
    Route::resource('table','SetupTableController',['only' => ['index','edit','create','show']]);
    
    Route::resource('jobtype','SetupJobtypeController',['only' => ['index','edit','create','show']]);
});