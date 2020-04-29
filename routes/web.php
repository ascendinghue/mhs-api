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

    /*
        Projects
    */
    $router->get('projects', 'ProjectController@index');
    $router->get('projects/{id}', 'ProjectController@show');
    $router->patch('projects/{id}', 'ProjectController@update');
    $router->post('projects', 'ProjectController@store');
    $router->delete('projects/{id}', 'ProjectController@delete');

    /*
        Names
    */
    $router->get('names', 'NameController@index');
    $router->get('names/{id}', 'NameController@show');
    $router->patch('names/{id}', 'NameController@update');
    $router->post('names', 'NameController@store');
    $router->delete('names/{id}', 'NameController@delete');

    /*
        Links
    */
    $router->get('links', 'LinkController@index');
    $router->get('links/{id}', 'LinkController@show');
    $router->patch('links/{id}', 'LinkController@update');
    $router->post('links', 'LinkController@store');
    $router->delete('links/{id}', 'LinkController@delete');

    /*
        Aliases
    */
    $router->get('aliases', 'AliasController@index');
    $router->get('aliases/{id}', 'AliasController@show');
    $router->patch('aliases/{id}', 'AliasController@update');
    $router->post('aliases', 'AliasController@store');
    $router->delete('aliases/{id}', 'AliasController@delete');

    /*
        Subjects
    */
    $router->get('subjects', 'SubjectController@index');
    $router->get('subjects/{id}', 'SubjectController@show');
    $router->patch('subjects/{id}', 'SubjectController@update');
    $router->post('subjects', 'SubjectController@store');
    $router->delete('subjects/{id}', 'SubjectController@delete');


    $crudObjects = [
        'lists' => 'ProjectListController'
    ];

    /*
        Generic CRUD Endpoints 
    */
    foreach($crudObjects as $endpoint => $controller) {
        $router->get($endpoint, $controller.'@index');
        $router->get($endpoint.'/{id}', $controller.'@show');
        $router->patch($endpoint.'/{id}', $controller.'@update');
        $router->post($endpoint, $controller.'@store');
        $router->delete($endpoint.'/{id}', $controller.'@delete');
    }

    /*
        Relationship Endpoints
                  for 
                Subjects
    */
    $router->get('subjects/{id}/projects', 'SubjectController@getProjects');

    /*
        Relationship Endpoints
                  for
                Projects
    */
    $router->get('projects/{id}/subjects', 'ProjectController@getSubjects');
    $router->post('projects/{id}/subjects', 'ProjectController@addSubject');
    $router->delete('projects/{project_id}/subjects', 'ProjectController@removeSubject');

    
    /*
        Relationship Endpoints
                  for
                Aliases
    */
    // $router->get('aliases/{id}/name', 'AliasController@getName');

});
