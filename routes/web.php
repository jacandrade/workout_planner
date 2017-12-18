<?php

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

Route::get('/plans', 'PlansController@index');
Route::get('/plans/{plan}', 'PlansController@show');
Route::patch('/plans/{plan}', 'PlansController@update');
Route::delete('/plans', 'PlansController@delete');
Route::post('/plans', 'PlansController@store');


Route::get('/plan_days', 'PlanDaysController@index');
Route::get('/plan_days/{planDay}', 'PlanDaysController@show');
Route::delete('/plan_days', 'PlanDaysController@delete');
Route::post('/plan_days', 'PlanDaysController@store');

Route::get('/exercises', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');
Route::delete('/exercises', 'ExercisesController@delete');
Route::post('/exercises', 'ExercisesController@store');

Route::get('/exercise_instances', 'ExerciseInstancesController@index');
Route::get('/exercise_instances/{instance}', 'ExerciseInstancesController@show');
Route::delete('/exercise_instances', 'ExerciseInstancesController@delete');
Route::post('/exercise_instances', 'ExerciseInstancesController@store');


Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
Route::delete('/users', 'UsersController@delete');
Route::post('/users', 'UsersController@store');
