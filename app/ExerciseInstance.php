<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseInstance extends Model
{
    //
    protected $fillable = ['exercise_id', 'plan_day_id', 'order', 'exercise_duration'];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function plan_days()
    {
        return $this->belongsToMany(PlanDay::class);
    }
}
