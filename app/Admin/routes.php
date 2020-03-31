<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {


    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('projects', ProjectController::class);
    $router->resource('users', UserController::class);
    $router->resource('entreprises', EntrepriseController::class);
    $router->get('/api/entreprises', 'EntrepriseController@entreprises');
    $router->resource('states', StateController::class);
    $router->resource('comments', CommentController::class);
    $router->resource('actions', ActionController::class);
    $router->resource('budgets', BudgetController::class);
    $router->resource('applications', ApplicationController::class);
    $router->resource('fonctions', FonctionController::class);

});
