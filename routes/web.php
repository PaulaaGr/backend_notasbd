<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('verEstudiantes', 'EstudianteController@index');
$router->get('mostrarEstudiantes/{codigo}', 'EstudianteController@show');
$router->post('crearEstudiante', 'EstudianteController@store');
$router->put('modificarEstudiante/{codigo}', 'EstudianteController@update');
$router->delete('eliminarEstudiante/{codigo}', 'EstudianteController@destroy');

$router->get('verActividades', 'ActividadController@index');
$router->get('mostrarActividades/{id}', 'ActividadController@show');
$router->post('crearActividad', 'ActividadController@store');
$router->put('modificarActividad/{id}', 'ActividadController@update');
$router->delete('eliminarActividad/{id}', 'ActividadController@destroy');

