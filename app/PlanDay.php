<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanDay extends Model
{
    //
    protected $fillable = ['day_name', 'order', 'plan_id'];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function exercise_instances()
    {
        return $this->belongsToMany(ExerciseInstance::class);
    }
}
