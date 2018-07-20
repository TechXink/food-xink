<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




Route::prefix('v1')->group(function () {

    Route::get('yuedan/more', 'API\YueDanController@more');
    Route::put('participator/join/{id}/{token}', 'API\ParticipatorController@join');

    Route::apiResources([
            'yuedan' => 'API\YueDanController',
            'participator' => 'API\ParticipatorController',
    ]);

});
