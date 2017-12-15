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

Route::get('/plans', function () {
    $plans = DB::table('plan')->get();
    return $plans;
});

Route::get('/plan_days', function () {
    $plan_days = DB::table('plan_days')->get();
    return $plan_days;
});

Route::get('/exercises', function () {
    $exercises = DB::table('exercise')->get();
    return $exercises;
});

Route::get('/exercise_instances', function () {
    $exercise_instances = DB::table('exercise_instances')->get();
    return $exercise_instances;
});
