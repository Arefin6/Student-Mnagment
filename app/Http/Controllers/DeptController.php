<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

use DB;

class DeptController extends Controller
{
    public function cse(){
		
		$student = DB::table('students')->where('department', 'C.S.E')->get();
		
		return view('admin.cse')->with('students', $student );
	}
	
	 public function bba(){
		 
		$student = DB::table('students')->where('department', 'B.B.A')->get();
		 
		return view('admin.bba')->with('students', $student );
	 }
	 public function eee(){	
	   
	    $student = DB::table('students')->where('department', 'E.E.E')->get();
	   
	   
	 return view('admin.eee')->with('students', $student );
	 }	
	 public function llb()	
	 {
	$student = DB::table('students')->where('department', 'L.L.B')->get();
	
	 return view('admin.llb')->with('students', $student );
	 }
	 public function english(){
         
		 $student = DB::table('students')->where('department', 'English')->get();
		 
		 return view('admin.english')->with('students', $student );
		
	 }		
	
	
}
