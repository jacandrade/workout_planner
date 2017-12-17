@extends('layouts.master')

@section('content')

    <div class="content">

        <h1>Plans</h1>

        <div class="row">
        @foreach ($plans as $plan)
            @include('plans.plan')
        @endforeach
        </div>

        <!-- Delete Plan Modal -->
        @include('modals.delete')

        <!-- Add plan modal -->
        @include('modals.addplan')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-40" 
            data-toggle="modal" data-target="#addPlanModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/plans.js></script>
@endsection