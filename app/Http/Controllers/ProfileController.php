<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

use App\student;


use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student_register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
		
		$this->validate($request, [
            'email' => 'required',
			
            'password' => 'required'
        ]);
		
		 $profile=Profile::find($id);
		
		 $email = $request->input('email');
		
		 $password = $request->input('password');
		
		  
		
		 $result = DB::table('perfroms')->where('email',$email)
			 ->where('password',$password);
		
		
		if(count($result)>0){
			
			return view('edit')->with('profile',$profile);
			
		}
			 
			 
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
		
            'name' => 'required',
			
            'email' => 'required|email',
			
            'password' => 'required',
			
            'phone' => 'required'
        ]);
		
		$profile = Profile::create([
		
            'name' => $request->name,
			
            'email' => $request->email,
			
            'password'=>$request->password,
			
			'phone' => $request->phone,
			
			

        ]);
		
		 return redirect()->route('students');
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('student_login');
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
	
	public function logout(){
		
		return redirect()->route('admin.backend');
	}
	
	public function view(){
		
	
		
		return view('student.viewprofile')->with('students',student::all());
	}
	
	public function settings(){
		
		return view('student.settings');
	}
	
	
}
