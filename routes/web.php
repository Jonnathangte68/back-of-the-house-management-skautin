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

$router->get('/', 'WelcomeScreenController');
$router->post('store-website', ['middleware' => 'auth', 'DataWebsiteManagerController@store']);
$router->post('log-me-in', 'LogInController');
$router->post('set-new-password', 'ChangePasswordController');
$router->get('dashboard', ['middleware' => 'auth', 'uses' => 'DashboardController']);
$router->get('/editor', ['middleware' => 'auth', 'uses' => 'PageEditorController@view']);
$router->get('/labels', ['middleware' => 'auth', 'uses' => 'ContentController@view']);
$router->get('/corporate', ['middleware' => 'auth', 'uses' => 'CorporateInformationController@view']);
$router->get('/queries', ['middleware' => 'auth', 'uses' => 'QueryController@view']);
$router->get('/advertisements', ['middleware' => 'auth', 'uses' => 'AdvertisementController@view']);
$router->get('/settings', ['middleware' => 'auth', 'uses' => 'SettingsController@view']);
$router->get('/notes', ['middleware' => 'auth', 'uses' => 'NotesController@view']);
