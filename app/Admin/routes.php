<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    $router->resource('schools', SchoolController::class);
    $router->resource('skills', SkillController::class);
    $router->resource('professions', ProfessionController::class);

    $router->resource('school-professions', SchoolProfesionController::class);
    $router->resource('profession-skills', ProfessilonalSkillController::class);

});
