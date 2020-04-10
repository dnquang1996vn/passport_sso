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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users', function (Request $request) {

})->middleware('client');

Route::post('/user', function (Request $request) {
    factory(\App\User::class)->create([
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
    ]);
})->middleware('client');
