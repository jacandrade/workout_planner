@extends('layouts.master')

@section('content')

    <div class="content padding-20-v">

        <h1>Plan days</h1>

        <div class="row">
        @foreach ($plan_days as $plan_day)
            @include('plandays.planday')
        @endforeach
        </div>

        <!-- Delete Plan Day Modal -->
        @include('modals.delete')

        <!-- Add plan modal -->
        @include('modals.addplanday')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-40" 
            data-toggle="modal" data-target="#addPlanDayModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/plandays.js></script>
@endsection