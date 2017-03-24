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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


/*
|--------------------------------------------------------------------------
| Requests Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'v1'], function () {
    Route::resource('requests/status', 'RequestStatusesController', ['except' => [
        'create', 'edit'
    ]]);
    Route::get('requests/status/log/{id}', 'RequestStatusesController@getStatusLog');

    Route::resource('requests', 'RequestsController', ['except' => [
        'create', 'edit'
    ]]);

    Route::resource('statuses', 'StatusesController', ['except' => [
        'create', 'edit'
    ]]);
    Route::resource('types', 'TypesController', ['except' => [
        'create', 'edit'
    ]]);
    Route::resource('users', 'UsersController', ['except' => [
        'create', 'edit'
    ]]);

    Route::resource('permissions', 'PermissionsController', ['except' => [
        'create', 'edit'
    ]]);
    Route::resource('roles', 'RolesController', ['except' => [
        'create', 'edit'
    ]]);

    Route::get('/', function()
    {

        // dd(url('/'));
        return Redirect::to(url('/') . '/docs/api/index.html');
        // return File::get(public_path() . '/docs/api/index.html');
    });

});




// Route::get('requests/status/{id}', 'RequestStatusesController@getStatus');
// Route::post('requests/status/{id}', 'RequestStatusesController@setStatus');
// Route::get('requests/status/log/{id}', 'RequestStatusesController@getStatusLog');



// Route::resource('requests/statuses', 'RequestStatusesController');



