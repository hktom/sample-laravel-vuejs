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
    $router->resource('states', StateController::class);
    $router->resource('comments', CommentController::class);
    $router->resource('actions', ActionController::class);
    $router->resource('budgets', BudgetController::class);
    $router->resource('applications', ApplicationController::class);
    $router->resource('fonctions', FonctionController::class);
    $router->resource('poncs', PoncController::class);
    $router->resource('actors', ActorController::class);
    $router->resource('echelles', EchelleController::class);
    $router->resource('types', TypeController::class);

    Route::group(['prefix' => 'api'], function (Router $router) {
        $router->get('entreprises', 'ApiController@entreprises');
        $router->get('projects', 'ApiController@projects');
        $router->get('comments', 'ApiController@comments');
        $router->get('states', 'ApiController@states');
        $router->get('poncs', 'ApiController@poncs');
        $router->get('actors', 'ApiController@actors');
    });

});
