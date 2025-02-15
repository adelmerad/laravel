<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
 //   return $request->user();
//})->middleware('auth:sanctum');

Route::apiResource('posts',PostController::class);
Route::apiResource('games',GameController::class);
Route::apiResource('characters',CharacterController::class);


//Route::get('/',function(){
//return 'API';
//});