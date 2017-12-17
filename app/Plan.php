<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['plan_name', 'plan_description', 'plan_difficulty'];

    public function plan_days()
    {
        return $this->hasMany(PlanDay::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'plan_id');
    }
}
