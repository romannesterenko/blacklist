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

Route::get('/', [App\Http\Controllers\PagesController::class, 'showMainPage']);
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapXmlController::class, 'index']);
Route::get('/buyer/{phone}', [App\Http\Controllers\PagesController::class, 'showBuyerPage']);
Route::post('/buyer/find_by_phone', [App\Http\Controllers\BlackListController::class, 'getByPhone']);
Route::post('/buyer/find_by_name', [App\Http\Controllers\BlackListController::class, 'getByName']);
Route::post('/blacklist', [App\Http\Controllers\BlackListController::class, 'createBlackListRow']);
Route::post('/feedback', [App\Http\Controllers\FeedbackController::class, 'create']);
