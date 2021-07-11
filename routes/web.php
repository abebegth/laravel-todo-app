<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

Route::get('/', function () {

    return view('welcome');
});

// Route::get('about', 'TasksController@index'); // This will not work???? 
// Route::get('about', 'App\Http\Controllers\TasksController@index'); // this will work
Route::get('tasks', [TasksController::class, 'index']); // this will work too.
