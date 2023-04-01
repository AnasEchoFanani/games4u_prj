<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrincipaleController;
use Illuminate\Support\Facades\Route;



//Admin__Route___________________________________________________________________________________________________


Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminController::class , 'index']);
});


//User__Route___________________________________________________________________________________________________

Route::group(['prefix' => 'user'], function () {
    //
});


//Support__Route_________________________________________________________________________________________________

Route::group(['prefix' => 'support'], function () {
    //
});


//Home__Route____________________________________________________________________________________________________



Route::group(['prefix' => '/'], function () {
    Route::get('/',[PrincipaleController::class , 'index']);
});