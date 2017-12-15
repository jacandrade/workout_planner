<?php

namespace App\Http\Controllers;

use App\AssignedPlan;

class AssignedPlansController extends Controller
{
    
    public function index()
    {
        return AssignedPlan::all();
    }

    public function show(AssignedPlan $plan)
    {
        return $plan;
    }
}
