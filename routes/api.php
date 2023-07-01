<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\DetailsCommandeController;
use App\Http\Controllers\UserController;
use  App\Http\Controllers\AuthController;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

// Route User
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);
Route::post('/users/save',[UserController::class, 'store']);
//Route::put('/author/update/{id}',[UserController::class, 'update']);
//Route::delete('/author/delete/{id}',[UserController::class, 'destroy']);


// Route Authors
Route::get('/author',[AuthorsController::class,'index']);
Route::get('/author/{id}',[AuthorsController::class,'show']);
Route::post('/author/save',[AuthorsController::class, 'store']);
Route::put('/author/update/{id}',[AuthorsController::class, 'update']);
Route::delete('/author/delete/{id}',[AuthorsController::class, 'destroy']);


//Route Categorie
Route::get('/categorie',[CategorieController::class,'index']);
Route::get('/categorie/{id}',[CategorieController::class,'show']);
Route::post('/categorie/save',[CategorieController::class, 'store']);
Route::put('/categorie/update/{id}',[CategorieController::class, 'update']);
Route::delete('/categorie/delete/{id}',[CategorieController::class, 'destroy']);

//Route Book
Route::get('/book',[BookController::class,'index']);
Route::get('/book/{id}',[BookController::class,'show']);
Route::post('/book/save',[BookController::class, 'store']);
Route::put('/book/update/{id}',[BookController::class, 'update']);
Route::delete('/book/delete/{id}',[BookController::class, 'destroy']);

//Route Panier
Route::get('/panier',[PanierController::class,'index']);
Route::get('/panier/{id}',[PanierController::class,'show']);
Route::post('/panier/save',[PanierController::class, 'store']);
Route::put('/panier/update/{id}',[PanierController::class, 'update']);
Route::delete('/panier/delete/{id}',[PanierController::class, 'destroy']);

//Route Commande
Route::get('/Commande',[CommandeController::class,'index']);
Route::get('/Commande/{id}',[CommandeController::class,'show']);
Route::post('/Commande/save',[CommandeController::class, 'store']);
Route::put('/Commande/update/{id}',[CommandeController::class, 'update']);
Route::delete('/Commande/delete/{id}',[CommandeController::class, 'destroy']);

//Route Detail Commande
Route::get('/DetailCommande',[DetailsCommandeController::class,'index']);
Route::get('/DetailCommande/{id}',[DetailsCommandeController::class,'show']);
Route::post('/DetailCommande/save',[DetailsCommandeController::class, 'store']);
Route::put('/DetailCommande/update/{id}',[DetailsCommandeController::class, 'update']);
Route::delete('/DetailCommande/delete/{id}',[DetailsCommandeController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('Authors',AuthorsController::class);
