<?php

namespace App\Http\Controllers;

use App\Exercise;

class ExercisesController extends Controller
{
    public function index()
    {
        return Exercise::all();
    }

    public function show(Exercise $exercise)
    {
        return $exercise;
    }
}
