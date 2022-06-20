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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('workers', App\Http\Controllers\API\WorkerAPIController::class);


Route::resource('benefit_categories', App\Http\Controllers\API\BenefitCategoryAPIController::class);


Route::resource('service_of_benefit_categories', App\Http\Controllers\API\ServiceOfBenefitCategoryAPIController::class);


Route::resource('service_requests', App\Http\Controllers\API\ServiceRequestAPIController::class);


Route::resource('statuses', App\Http\Controllers\API\StatusAPIController::class);


Route::resource('service_proposals', App\Http\Controllers\API\ServiceProposalAPIController::class);


Route::resource('user_roles', App\Http\Controllers\API\UserRoleAPIController::class);
