<?php

namespace App\Http\Controllers;

use App\PlanDays;

class PlanDaysController extends Controller
{
    public function index()
    {
        return PlanDays::all();
    }

    public function show(PlanDays $planDay)
    {
        return $planDay;
    }
}
