<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;


Route::get('/Authors',[AuthorsController::class,'index']);
Route::post('/Authors/save',[AuthorsController::class, 'store']);
Route::put('/Authors/update/{id}',[AuthorsController::class, 'update']);
Route::delete('/Authors/delete/{id}',[AuthorsController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('Authors',AuthorsController::class);
