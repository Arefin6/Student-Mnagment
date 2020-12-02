<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Admin;
use App\Teacher;
use App\student;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$this->validate($request, [
            'admin_email' => 'required',
            'admin_password' => 'required'
        ]);
		 $email = $request->input('admin_email');
		
		 $password = $request->input('admin_password');
		
		 $result = DB :: table('admins')
			 
		 ->where('admin_email',$email)
			 
		 ->where('admin_password',$password)->get();
		 
        
		
		if(count($result)>0){
			
			return view('admin.dashboard')
				
			->with('students_count',student::all()->count())
			
			  //->with('users_count',User::all()->count())
			
			  ->with('teachers_count',Teacher::all()->count())
			
			  ->with('admins_count',Admin::all()->count());
			
			Session::flash('success','You are loged in');
			
			return redirect()->route('admin.index');
		}
		
		else {
			
			Session::flash('info','email or password is wrong');
			
			return redirect()->back();
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
		
            'admin_name' => 'required',
			
            'admin_email' => 'required|email',
			
            'admin_password' => 'required',
			
            'admin_phone' => 'required'
        ]);
		
		$admin = Admin::create([
		
            'admin_name' => $request->admin_name,
			
            'admin_email' => $request->admin_email,
			
            'admin_password'=>$request->admin_password,
			
			'admin_phone' => $request->admin_phone,
			
			

        ]);
		
		 return redirect()->route('admin.backend');
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view ('admin.admin_login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	 public function logout()
    {
        
	  return redirect()->route('admin.backend');	
	}
	
	public function settings()
    {
        
	  return view('admin.setting');	
	}
	public function viewprofile()
    {
        
	  return view('admin.viewprofile');	
	}
	
	
}
