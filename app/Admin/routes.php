<?php

use App\Admin\Controllers\CheckController;
use App\Admin\Controllers\BlackListController;
use App\Admin\Controllers\BuyerController;
use App\Admin\Controllers\FeedbackController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('checks', CheckController::class);
    $router->resource('black-lists', BlackListController::class);
    $router->resource('buyers', BuyerController::class);
    $router->resource('feedback', FeedbackController::class);

});
