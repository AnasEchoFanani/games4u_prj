<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PrincipaleController;
use Illuminate\Support\Facades\Route;



//Admin__Route___________________________________________________________________________________________________


/*
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminController::class , 'index'])->name('admin.index');
    Route::get('/create',[AdminController::class , 'create'])->name('admin.create');
    Route::post('/store',[AdminController::class , 'store'])->name('admin.store');
    Route::get('edit/{$id}',[AdminController::class , 'edit'])->name('admin.edit');
    Route::post('/update/{$id}',[AdminController::class , 'update'])->name('admin.update');
    Route::delete('/destroy/{$id}',[AdminController::class , 'destroy'])->name('admin.destroy');
})->name('admin');
*/

Route::resource('admin', AdminController::class);
Route::get('/commande' ,[AdminController::class , 'commande'] )->name('commande');
Route::get('/createGenre',[AdminController::class, 'createGenre'])->name('createGenre');
Route::post('/storeGenre',[AdminController::class , 'storeGenre'])->name('storeGenre');
Route::delete('/destroygenre/{id}', [AdminController::class , 'destroyGenre'])->name('destroyGenre');

//authentication__Route___________________________________________________________________________________________________

Route::group(['prefix' => 'authentication', 'middleware' => ['web']], function () {
    Route::get('/register',[AuthenticationController::class,'register']);
    Route::post('/store_register',[AuthenticationController::class,'store_register']);
    Route::get('/login',[AuthenticationController::class,'login']);
    Route::post('/login_go',[AuthenticationController::class,'login_go']);
    Route::get('/logout',[AuthenticationController::class,'logout']);
})->name('authentication');


//Support__Route_________________________________________________________________________________________________

Route::group(['prefix' => 'support'], function () {
    //
});


//Home__Route____________________________________________________________________________________________________



Route::group(['prefix' => '/'], function () {
    Route::get('/',[PrincipaleController::class , 'index']);
    Route::get('/{id}',[PrincipaleController::class, 'afficher'])->name('afficher');
})->name('index');

Route::get('/login' , function(){
    return view('login.login');
});
