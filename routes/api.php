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

//Route::middleware('auth:sanctum')->get('/user',
//    function (Request $request) {
//    return $request->user();
//});
Route::get('/name',function (){
    return 'დემეტრე კახაბრიშვილი';
});
Route::get('/age',function (){
    return '20';
});

Route::get('/hobby',function (){
    return 'gaming, coding';
});
Route::get('/futureJob',function (){
    return 'Fullstack დეველოპერი ჯერ მარტო პრონტს ვუთმობ დიდ დროს ბაკი გამოცდილების მისაღებად ამოვირჩიე';

});

Route::get('/Food',function (){
    return 'ქართული სამზარეულო';

});
Route::post('/Array',function(){
    $array = ['Message'=>'პოსტი წარმატებით განახლდა'];
   return response()->json($array);
});
Route::delete('/Array',function(){
    $array = ['Message'=>'პოსტი წარმატებით წაიშალა'];
    return response()->json($array);
});
Route::put('/Array',function(){
    $array = ['Message'=>'პოსტი წარმატებით აიტვირთა'];
    return response()->json($array);
});
