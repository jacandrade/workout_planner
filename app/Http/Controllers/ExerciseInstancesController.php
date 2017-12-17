<?php

namespace App\Http\Controllers;

use App\{ Exercise, ExerciseInstance, PlanDay };

class ExerciseInstancesController extends Controller
{
    public function index()
    {
        $exercise_instances = ExerciseInstance::all();
        $exercises = Exercise::all();
        $plan_days = PlanDay::all();
        return view('exerciseinstances.index', compact(['exercise_instances', 'exercises', 'plan_days']));
    }

    public function show(ExerciseInstance $instance)
    {
        return $instance;
    }

    public function delete()
    {
        $id = request('id');
        if(ExerciseInstance::destroy($id))
        {
            return $id;
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error deleting this exercise instance. Please, contact an admin.'
            ]);
        }
    }

    public function store()
    {
        $instance = ExerciseInstance::create([
            'exercise_id' => request('exercise_id'),
            'exercise_duration' => request('exercise_duration'),
            'order' => request('order'),
        ]);
        

        if($instance)
        {
            $plan_day_ids = explode(',', request('plan_day_ids'));
            
            $instance->plan_Days()->sync($plan_day_ids);
            return view('exerciseinstances.exerciseinstance', compact('instance'))->render();
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error saving the exercise instance. Please, contact an admin.'
            ]);
        }
    }
}
