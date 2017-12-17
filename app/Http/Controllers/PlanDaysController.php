<?php

namespace App\Http\Controllers;

use App\{ PlanDay, Plan };

class PlanDaysController extends Controller
{
    public function index()
    {
        $plan_days = PlanDay::all(); 
        $plans = Plan::all();
        return view('plandays.index', compact(['plan_days', 'plans']));
    }

    public function show(PlanDay $planDay)
    {
        return $planDay;
    }
    
    public function delete()
    {
        $id = request('id');
        if(PlanDay::destroy($id))
        {
            return $id;
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error deleting this day. Please, contact an admin.'
            ]);
        }
    }

    public function store()
    {
        $plan_day = PlanDay::create([
            'day_name' => request('day_name'),
            'order' => request('order'),
            'plan_id' => request('plan_id'),
        ]);

        if($plan_day)
        {
            return view('plandays.planday', compact('plan_day'))->render();
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error saving the day. Please, contact an admin.'
            ]);
        }
    }
}
