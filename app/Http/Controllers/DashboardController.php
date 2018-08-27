<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged_user_id = auth()->user()->id; //to get the id of the logged in user
        $user = User::find($logged_user_id); //fetch the array object of the logged user from the database model
        return view('dashboard')->with(['posts'=> $user->posts, 'projects'=> $user->projects]); //get the posts created by the user.
    }
    public function myprojects(){
        $logged_user_id = auth()->user()->id; //to get the id of the logged in user
        $user = User::find($logged_user_id); //fetch the array object of the logged user from the database model
        return view('dashboard.myprojects')->with(['projects'=> $user->projects]); //get the posts created by the user.
    }
}
