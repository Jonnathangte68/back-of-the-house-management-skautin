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
$router->post('log-me-in', 'LogInController');
$router->post('set-new-password', 'ChangePasswordController');
$router->get('dashboard', ['middleware' => 'auth', 'uses' => 'DashboardController']);
$router->get('/editor', ['middleware' => 'auth', 'uses' => 'PageEditorController@view']);
$router->get('/labels', ['middleware' => 'auth', 'uses' => 'ContentController@view']);
$router->get('/corporate', ['middleware' => 'auth', 'uses' => 'CorporateInformationController@view']);
$router->get('/queries', ['middleware' => 'auth', 'uses' => 'QueryController@view']);
$router->get('/advertisements', ['middleware' => 'auth', 'uses' => 'AdvertisementController@view']);
$router->get('/settings', ['middleware' => 'auth', 'uses' => 'SettingsController@view']);
$router->get('/troubleshooting', ['middleware' => 'auth', 'uses' => 'TroubleshooterController@view']);
$router->get('/scripts', ['middleware' => 'auth', 'uses' => 'ScriptController@view']);
$router->get('/notes', ['middleware' => 'auth', 'uses' => 'NotesController@view']);
$router->get('/editor/{page}', ['middleware' => 'auth', 'uses' => 'PageEditorController@editNew']);
$router->get('/email-editor', ['middleware' => 'auth', 'uses' => 'EmailEditorController@index']);
$router->get('/code-editor-view/{fileId}', ['middleware' => 'auth', 'uses' => 'ScriptController@editCodeView']);
// End view renderers
$router->post('/store-todo', ['middleware' => 'auth', 'uses' => 'NotesController@store']);
$router->post('/store-script-file', ['middleware' => 'auth', 'uses' => 'ScriptController@store']);
$router->get('/get-todos', ['middleware' => 'auth', 'uses' => 'NotesController@getAll']);
$router->get('/log-out', ['middleware' => 'auth', 'uses' => 'LogOutController']);
$router->get('retrive-website/{code}', ['middleware' => 'auth', 'uses' => 'DataWebsiteManagerController@get']);
$router->post('store-website', ['middleware' => 'auth', 'uses' => 'DataWebsiteManagerController@store']);
$router->post('/update-script-file-content', ['middleware' => 'auth', 'uses' => 'ScriptController@updateCode']);
$router->post('/delete-script-file/{id}', ['middleware' => 'auth', 'uses' => 'ScriptController@delete']);