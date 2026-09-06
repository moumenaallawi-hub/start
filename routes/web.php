<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIfNameIsMassa;
use Illuminate\Support\Facades\Route; 


Route::get('/', function () {
    $data = ['1', '2', '3', '4', '5'];
    return view('massa', compact('data'));
});
//Route::get('/moumena', [ TestController::class, 'moumena']);

//Route::get('/hello' , SingleController::class);
//Route::get('/hello2' , SingleController::class);

/*Route::controller(TestController::class)->middleware('check_name')->group(function () {
    Route::get('/moumena', 'moumena')->name('index');
    Route::get('/print-name/{name?}', 'printName')->name('printMyNameRoute');
});*/

//Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('printMyNameRoute');

//Route::get('/hello' , [UserController::class, 'index']);
 
Route::resource('posts', PostController::class);  