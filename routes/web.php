<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/moumena', [ TestController::class, 'index']);


Route::get('/printName/{name?}', [TestController::class, 'printName']);
