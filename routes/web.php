<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

$router->get('/',
    [
        'uses' => 'MainController@home',
        'as' =>'main-home'
    ]
);

$router->get('/categories',
    [
        'uses'=>'CategoryController@list',
        'as' =>'categories-list'
    ]
);

$router->get('/categories/{id}',
    [
        'uses'=>'CategoryController@item',
        'as' => 'categories-item'
    ]
);

$router->get('/tasks',
    [
        'uses' =>'TasksController@list',
        'as' =>'task-list'
    ]
);

$router->get('/tasks/{id}',
    [
        'uses' => 'TasksController@item',
        'as' => 'task-item'
    ]
);

$router->get('/formtasks',
    [
        'uses'=>'TasksController@form',
        'as' =>'display-form'
    ]
);

$router->post('/formtasks',
    [   'uses'=>"TasksController@add",
        'as' =>'add-task'
]);
