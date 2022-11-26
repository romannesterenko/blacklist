<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainPage');
});
Route::get('/buyer/{phone}', function (){
    return view('buyerPage');
});
Route::post('/buyer/find_by_phone', [App\Http\Controllers\BlackListController::class, 'getByPhone']);
Route::post('/buyer/find_by_name', [App\Http\Controllers\BlackListController::class, 'getByName']);
Route::post('/blacklist', [App\Http\Controllers\BlackListController::class, 'createBlackListRow']);
