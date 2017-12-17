<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    protected $fillable = ['exercise_name'];

    public function exercise_instances()
    {
        return $this->hasMany(ExerciseInstance::class);
    }
}
