@extends('layouts.master')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Workout Planner
        </div>

        <div class="links">
            <a href="/plans">Plans</a>
            <a href="/plan_days">Plan days</a>
            <a href="/assigned_plans">Assigned Plans</a>
            <a href="/exercises">Exercises</a>
            <a href="/exercise_instances">Exercise instances</a>
            <a href="/users">User list</a>
        </div>
    </div>
</div>

@endsection