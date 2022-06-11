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

Route::prefix('fusion')->group(function() {
    Route::get('/', 'FusionController@index');
});

// /* Route Dashboards */
// Route::group(['prefix' => 'dashboard/fusion','middleware' =>['auth','web']], function ()
// {
//     Route::get('/',     'FusionController@index');
//     // Route::get('/test', '\Modules\Fusion\Http\Controllers\ZoHoController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/leads','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'LeadsController@index');
//     Route::get('/list', 'LeadsController@list');
// });


// Route::group(['prefix' => 'dashboard/fusion/contacts','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'ContactsController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/accounts','middleware' =>['auth','web']], function ()
// {

//     Route::get('/', 'AccountsController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/transactions','middleware' =>['auth','web']], function ()
// {

//     Route::get('/', 'TransactionController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/tasks','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'TasksController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/meetings','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'MeetingsController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/calls','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'CallsController@index');
// });


// Route::group(['prefix' => 'dashboard/fusion/vendors','middleware' =>['auth','web']], function ()
// {
//     Route::get('/', 'VendorsController@index');
// });