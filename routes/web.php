<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

// Route::resource('dashboard/service', 'ServiceController');
// Route::resource('dashboard/offer', 'OfferController');
// Route::get('dashboard/service/{service}/confirm', ['as' => 'service.confirm', 'uses' => 'ServiceController@confirm']);
// Route::get('dashboard/offer/{offer}/confirm', ['as' => 'offer.confirm', 'uses' => 'OfferController@confirm']);

// Route::get('dashboard/index_data', ['as' => 'index_data.index', 'uses' => 'IndexDataController@index']);
// Route::put('dashboard/index_data', ['as' => 'index_data.update', 'uses' => 'IndexDataController@update']);

Route::any('dashboard/{all}', function () {
    return view('frontend.user.dashboard');
})->where(['all' => '.*']);

//Route::put('service', ['as' => 'service.update', 'uses' => 'DashboardController@serviceUpdate']);
//Route::put('offer', ['as' => 'offer.update', 'uses' => 'DashboardController@offerUpdate']);
/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});
