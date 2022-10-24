<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api/v1', 'as' => 'api/v1'], function () {
    Route::get('/testing-route', function () {
        return 'Package Working';
    });
});
