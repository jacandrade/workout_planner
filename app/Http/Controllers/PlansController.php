<?php

namespace App\Http\Controllers;

use App\Plan;

class PlansController extends Controller
{
    public function index()
    {
        return Plan::all();
    }

    public function show(Plan $plan)
    {
        return $plan;
    }
}
