<?php

namespace App\Http\Controllers;

use App\ExerciseInstance;

class ExerciseInstancesController extends Controller
{
    public function index()
    {
        return ExerciseInstance::all();
    }

    public function show(ExerciseInstance $instance)
    {
        return $instance;
    }
}
