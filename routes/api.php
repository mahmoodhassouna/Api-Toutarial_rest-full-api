<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//App\Http\Controllers\Api

Route::group(['middleware' => ['api' ,'checkpassword','changelanguage' ] , 'namespace' => 'App\Http\Controllers\API'] ,function (){
    Route::post('get-main-categories', 'CategoriesController@index') ;
    Route::post('get-main-categories-byid', 'CategoriesController@getmaincategoriesbyid') ;
    Route::post('change-maincategory-active', 'CategoriesController@changeActive') ;

    Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
        Route::post('login', 'AuthController@login') ;
        Route::post('logout', 'AuthController@logout');

    });
});

//Route::group(['middleware' => ['api' ,'checkpassword','changelanguage','checkadmintoken:admins-api' ] , 'namespace' => 'App\Http\Controllers\API'] ,function (){
//    Route::post('acces-admin-api', 'CategoriesController@index') ;
//
//});


