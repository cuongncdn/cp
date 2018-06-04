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

Route::group(['prefix' => 'v0'], function() {
    Route::apiResource('/employees', 'EmployeeController');
    Route::apiResource('/clients', 'ClientController');
    
    Route::group(['prefix' => 'employees'], function () {
        Route::apiResource('/{employee}/appointments', 'EmployeeAppointmentController', ['names' => [
            'index' => 'employee.appointments.index',
            'show' => 'employee.appointments.show',
            'store' => 'employee.appointments.store',
            'update' => 'employee.appointments.update',
            'destroy' => 'employee.appointments.destroy',
        ]]);
    });
    Route::group(['prefix' => 'employees'], function () {
        Route::apiResource('/{employee}/availabilities', 'AvailabilityController');
    });

    Route::group(['prefix' => 'clients'], function () {
        Route::apiResource('/{client}/appointments', 'ClientAppointmentController', ['names' => [
            'index' => 'client.appointments.index',
            'show' => 'client.appointments.show',
            'store' => 'client.appointments.store',
            'update' => 'client.appointments.update',
            'destroy' => 'client.appointments.destroy',
        ]]);
    });
});

// TEST
// Route::group(['prefix' => 'clients'], function () {
//     Route::apiResource('/{client}/appointments', 'ClientAppointmentController');
// });
// Route::group(['prefix' => 'employees'], function () {
//     Route::apiResource('/{employee}/appointments', 'EmployeeAppointmentController');
// });