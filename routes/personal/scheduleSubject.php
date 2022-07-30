<?php

/* =================
| Default Route Menu
 =====================*/

Route::group(['prefix' => 'scheduleSubject', 'middleware' => ['auth'], 'namespace'=>'App\Http\Controllers\Management' ], function() {
    Route::get('/', function () {
        return view('template.maintance');
    });
    // Route::get('/', ['as' => 'Aktifitas', 'uses' => 'ActivityController@index']);

    // Route::post('/create',  ['as' => 'klsconfig.create', 'uses' => 'ActivityController@create']);
    // Route::post('/getlist', ['as' => 'klsconfig.getlist', 'uses' => 'ActivityController@getlist']);
    // Route::post('/store',   ['as' => 'klsconfig.store', 'uses' => 'ActivityController@store']);
    // Route::post('/delete',  ['as' => 'klsconfig.delete', 'uses' => 'ActivityController@delete']);
});
