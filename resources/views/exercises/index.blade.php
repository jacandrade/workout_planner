@extends('layouts.master')

@section('content')

    <div class="content padding-20-v">

        <h1>Exercises</h1>

        <div class="row">
        @foreach ($exercises as $exercise)
            @include('exercises.exercise')
        @endforeach
        </div>

        <!-- Delete exercise Modal -->
        @include('modals.delete')

        <!-- Add exercise modal -->
        @include('modals.addexercise')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-5" 
            data-toggle="modal" data-target="#addExerciseModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/exercises.js></script>
@endsection