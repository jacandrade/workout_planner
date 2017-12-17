<?php

namespace App\Http\Controllers;

use App\{ User, Plan };

class UsersController extends Controller
{
    public function index()
    {
        $users =  User::all();
        $plans =  Plan::all();
        return view('users.index', compact(['users', 'plans'])); 
    }

    public function show(User $user)
    {
        return $user;
    }

    public function delete()
    {
        $id = request('id');
        if(User::destroy($id))
        {
            return $id;
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error deleting this user. Please, contact an admin.'
            ]);
        }
    }

    public function store()
    {
        $user = User::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'plan_id' => request('plan_id'),
        ]);

        if($user)
        {
            return view('users.user', compact('user'))->render();
        }
        else
        {
            return response()->json([
                'error' => true,
                'message' => 'There was an error saving the user. Please, contact an admin.'
            ]);
        }
    }
}
