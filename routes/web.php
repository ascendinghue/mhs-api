<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api/v1'], function() use($router){
    $router->get('projects', 'ProjectController@index');
    $router->post('projects', 'ProjectController@store');
    $router->get('projects/{id}', 'ProjectController@show');
    $router->patch('projects/{id}', 'ProjectController@update');
    $router->delete('projects/{id}', 'ProjectController@delete');
});
