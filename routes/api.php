<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

use App\Http\Controllers\Auth\LoginController;

#site controllers
Route::get('/site', HomeController::class);

#admin controllers
Route::prefix('auth')->group(function () {
    Route::post('/login', [LoginController::class]);

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
});

#default
Route::get('/', function () {
    return 'Hello';
});
