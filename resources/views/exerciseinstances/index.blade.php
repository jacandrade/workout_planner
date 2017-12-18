@extends('layouts.master')

@section('content')

    <div class="content padding-20-v">

        <h1>Exercise instances</h1>

        <div class="row">
        @foreach ($exercise_instances as $instance)
            @include('exerciseinstances.exerciseinstance')
        @endforeach
        </div>

        <!-- Delete exercise instance Modal -->
        @include('modals.delete')

        <!-- Add exercise instance modal -->
        @include('modals.addexerciseinstance')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-5" 
            data-toggle="modal" data-target="#addExerciseInstanceModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/exerciseinstances.js></script>
@endsection