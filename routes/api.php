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


Route::group( [ 'prefix' => 'patient'], function()
{

    

    Route::post('bookAppointment','AppointmentController@bookAppointment');
  

    Route::post('deleteAppointment','AppointmentController@deleteAppointment');
  


});


Route::group( [ 'prefix' => 'HCP'], function()
{

    Route::post('acceptAppointment','AppointmentController@acceptAppointment');
  
    
    Route::post('declineAppointment','AppointmentController@declineAppointment');
    
    
    Route::post('addstock','SupplementController@create');
    



});


Route::group( [ 'prefix' => 'GA'], function()
{

    Route::post('deletesupplement','SupplementController@deletesupplement');
  
    
    // Route::post('declineAppointment','AppointmentController@declineAppointment');
    
    
    // Route::post('addstock','SupplementController@create');
    



});

//deletesupplement