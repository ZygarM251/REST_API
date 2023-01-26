<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('zygar/305427/people', [PeopleController::class, 'index']);
 Route::post('zygar/305427/people',[PeopleController::class,'create']);
 Route::get('zygar/305427/people/{people}',[PeopleController::class,'read']);
 Route::put('zygar/305427/people/{people}',[PeopleController::class,'update']);
 Route::delete('zygar/305427/people/{people}',[PeopleController::class,'delete']);

 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });
