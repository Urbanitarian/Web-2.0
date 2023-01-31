<?php

use App\Http\Controllers\API\DataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NeighbourhoodsController;
use App\Http\Controllers\API\MasterplansController;
use App\Http\Controllers\API\StreetscapesController;
use App\Http\Controllers\API\WebresourcesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("data", DataController::class);

Route::apiResource("neighbourhoods", NeighbourhoodsController::class); 

Route::apiResource("masterplans", MasterplansController::class);

Route::apiResource("streetscapes", StreetscapesController::class);

Route::apiResource("webresources", WebresourcesController::class);