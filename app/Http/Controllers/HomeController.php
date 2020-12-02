<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\student;

use App\Teacher;

use App\Admin;

use App\Home;

class HomeController extends Controller
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
		 $users=user::all();
		
        return view('student-dashboard')
			->with('students_count',student::all()->count())
			
			  //->with('users_count',User::all()->count())
			
			  ->with('teachers_count',Teacher::all()->count())
			
			  ->with('admins_count',Admin::all()->count());;
    }
}
