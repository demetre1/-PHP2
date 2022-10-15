<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DavalebaControler;
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

//Route::middleware('auth:sanctum')->get('/user',
//    function (Request $request) {
//    return $request->user();
//});
Route::post('/',[DavalebaControler::class,'store']);
Route::get('/index',[DavalebaControler::class,'index']);
Route::get('/hobbi',[DavalebaControler::class,'hoobi']);
Route::get('/age',[DavalebaControler::class,'age']);
Route::get('/food',[DavalebaControler::class,'food']);
Route::get('/futureJob',[DavalebaControler::class,'FutureJob']);
Route::delete('/hopes',[DavalebaControler::class,'hopes']);
Route::put('/Davaleba',[DavalebaControler::class,'LETSGOOOOOOOO']);
