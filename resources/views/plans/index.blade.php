@extends('layouts.master')

@section('content')

    <div class="content padding-20-v">

        <h1>Plans</h1>

        <div class="row">
        @foreach ($plans as $plan)
            @include('plans.plan')
        @endforeach
        </div>

        <!-- edit plan modal placeholder-->
        <div class="modal fade" id="editPlanModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                </div>
                <div class="feedback-container"></div>
            </div>
        </div>

        <!-- Delete Plan Modal -->
        @include('modals.delete')

        <!-- Add plan modal -->
        @include('modals.addplan')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-5" 
            data-toggle="modal" data-target="#addPlanModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/plans.js></script>
@endsection