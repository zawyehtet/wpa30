<?php

use Illuminate\Http\Request;

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

Route::get("students", "ProductController@getProducts");
Route::post("students/create", "ProductController@createStudent");

Route::get("posts", "PostController@getPosts");
Route::post("posts/create", "PostController@createPost");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
