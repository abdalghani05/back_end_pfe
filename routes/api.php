<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\BookController;

// Route Authors
Route::get('/Authors',[AuthorsController::class,'index']);
Route::post('/Authors/save',[AuthorsController::class, 'store']);
Route::put('/Authors/update/{id}',[AuthorsController::class, 'update']);
Route::delete('/Authors/delete/{id}',[AuthorsController::class, 'destroy']);


//Route Categorie
Route::get('/categorie',[CategorieController::class,'index']);
Route::post('/categorie/save',[CategorieController::class, 'store']);
Route::put('/categorie/update/{id}',[CategorieController::class, 'update']);
Route::delete('/categorie/delete/{id}',[CategorieController::class, 'destroy']);

//Route Book
Route::get('/book',[BookController::class,'index']);
Route::post('/book/save',[BookController::class, 'store']);
Route::put('/book/update/{id}',[BookController::class, 'update']);
Route::delete('/book/delete/{id}',[BookController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('Authors',AuthorsController::class);
