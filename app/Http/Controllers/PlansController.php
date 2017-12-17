<?php

namespace App\Http\Controllers;

use App\Plan;

class PlansController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    public function show(Plan $plan)
    {
        return $plan;
    }

    public function delete()
    {
        $id = request('id');
        if(Plan::destroy($id))
        {
            return $id;
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error deleting this plan. Please, contact an admin.'
            ]);
        }
    }

    public function store()
    {
        $plan = Plan::create([
            'plan_name' => request('plan_name'),
            'plan_description' => request('plan_description'),
            'plan_difficulty' => request('plan_difficulty'),
        ]);

        if($plan)
        {
            return view('plans.plan', compact('plan'))->render();
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error saving the Plan. Please, contact an admin.'
            ]);
        }
    }
}
