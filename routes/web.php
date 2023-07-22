<?php

use App\Http\Controllers\ApiJsonplaceholderController;
use App\Http\Controllers\ChuckAPIController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('startpage');
});

// ApiJsonplaceholderController
Route::get('/api/jsonplaceholder/index', [ApiJsonplaceholderController::class, 'index']);
Route::get('/api/jsonplaceholder/show', [ApiJsonplaceholderController::class, 'show']);

// ChuckNorris jokes
Route::get('/api/chuckapi/index', [ChuckAPIController::class, 'index']);
Route::get('/api/chuckapi/show', [ChuckAPIController::class, 'show']);
