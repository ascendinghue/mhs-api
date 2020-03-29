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
    
    $cruds = [
        'projects' => 'ProjectController',
        'subjects' => 'SubjectController'
    ];

    foreach($cruds as $endpoint => $controller) {
        $router->get($endpoint, $controller.'@index');
        $router->post($endpoint, $controller.'@store');
        $router->get($endpoint.'/{id}', $controller.'@show');
        $router->patch($endpoint.'/{id}', $controller.'@update');
        $router->delete($endpoint.'/{id}', $controller.'@delete');
    }

    $router->get('subjects/{id}/projects', 'SubjectController@getProjects');

    $router->get('projects/{id}/subjects', 'ProjectController@getSubjects');
    $router->post('projects/{id}/subjects', 'ProjectController@addSubject');
    $router->delete('projects/{project_id}/subjects', 'ProjectController@removeSubject');
});
