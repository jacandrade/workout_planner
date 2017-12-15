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


Route::get('/plan_days', 'PlanDaysController@index');
Route::get('/plan_days/{planDay}', 'PlanDaysController@show');

Route::get('/exercises', 'ExercisesController@index');
Route::get('/exercises/{exercise}', 'ExercisesController@show');

Route::get('/exercise_instances', 'ExerciseInstancesController@index');
Route::get('/exercise_instances/{instance}', 'ExerciseInstancesController@show');

Route::get('/assigned_plans', 'AssignedPlansController@index');
Route::get('/assigned_plans/{plan}', 'AssignedPlansController@show');

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
