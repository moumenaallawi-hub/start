<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/moumena', [ TestController::class, 'moumena']);


Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('printMyNameRoute');

Route::get('/hello' , [UserController::class, 'index']);
 
Route::resource('posts', PostController::class);