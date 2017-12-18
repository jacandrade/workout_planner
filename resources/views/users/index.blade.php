@extends('layouts.master')

@section('content')

    <div class="content padding-20-v">

        <h1>Users</h1>

        <div class="row">
        @foreach ($users as $user)
            @include('users.user')
        @endforeach
        </div>

        <!-- Delete user Modal -->
        @include('modals.delete')

        <!-- Add user modal -->
        @include('modals.adduser')

        
        <button type="button" class="btn btn-success rounded-circle btn-xl fixed-bottom float-right margin-5" 
            data-toggle="modal" data-target="#addUserModal">
            <i class="fa fa-plus fa-4x"></i>
        </button>
    </div>

@endsection

@section('pagescripts')
    <script src=js/users.js></script>
@endsection