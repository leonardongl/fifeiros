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

Route::get('clubs', 'ClubController@list');
Route::get('clubs/ranking', 'ClubController@ranking');
Route::post('clubs', 'ClubController@store');
Route::get('clubs/{id}', 'ClubController@find');
Route::get('clubs/players/{id}', 'ClubController@listPlayers');

Route::get('players/home/ranking', 'PlayerController@rankingHome');
Route::get('players/home/highlights', 'PlayerController@highlights');
Route::get('players/{id}', 'PlayerController@find');
