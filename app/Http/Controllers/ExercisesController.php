<?php

namespace App\Http\Controllers;

use App\Exercise;

class ExercisesController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all(); 
        return view('exercises.index', compact('exercises'));
    }

    public function show(Exercise $exercise)
    {
        return $exercise;
    }

    public function delete()
    {
        $id = request('id');
        if(Exercise::destroy($id))
        {
            return $id;
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error deleting this exercise . Please, contact an admin.'
            ]);
        }
    }

    public function store()
    {
        $exercise = Exercise::create([
            'exercise_name' => request('exercise_name'),
        ]);

        if($exercise)
        {
            return view('exercises.exercise', compact('exercise'))->render();
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error saving the exercise . Please, contact an admin.'
            ]);
        }
    }
}
