<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\student;

use App\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.allstudent')->with('students', student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addstudent');
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
			
            'student_id' => 'required',
			
            'img' => 'required|image',
			
            'father_name' => 'required',
			
            'mother_name' => 'required',
			
            'student_email' => 'required|email',
			
            'student_phone' => 'required',
			
            'department' => 'required',
			
            'admition_year' => 'required',
			
            'address' => 'required'
        ]);
		
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/students', $img_new_name);
		
		$student = student::create([
		
            'name' => $request->name,
			
            'student_id' => $request->student_id,
			
            'img' => 'uploads/students/'.$img_new_name,
			
            'father_name' => $request->father_name,
			
            'mother_name' => $request->mother_name,
			
            'student_email' => $request->student_email,
			
            'student_phone' => $request->student_phone,
			
            'department' => $request->department,
			
            'admition_year' => $request->admition_year,
			
            'address' => $request->address,
            
		

        ]);
		
		  
		
		 return redirect()->route('student.all')->with('success','Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=student::find($id);
		
		return view('admin.studentedit')->with('student',$student);
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
        $this->validate($request, [
		
            'name' => 'required',
			
            'student_id' => 'required',
	
			
            'father_name' => 'required',
			
            'mother_name' => 'required',
			
            'student_email' => 'required|email',
			
            'student_phone' => 'required',
			
            'department' => 'required',
			
			
            'address' => 'required'
        ]);
		
		$student = student::find($id);
		
		if($request->hasFile('img')){
		
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/students', $img_new_name);
		
		$student->img = 'uploads/students/'.$img_new_name;	
		
		}
		
		
		    $student->name = $request->name;
			
            $student->student_id = $request->student_id;
			
            $student->father_name = $request->father_name;
			
            $student->mother_name = $request->mother_name;
			
            $student->student_email = $request->student_email;
			
            $student->student_phone = $request->student_phone;
			
            $student->department = $request->department;
			
            $student->admition_year = $request->admition_year;
			
            $student->address = $request->address;
		
		   $student->save();
		
		
		
		return redirect()->route('student.all')->with('success','Student Added Successfully');;
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
		
		$student->delete();
		
		return redirect()->route('student.all')->with('success','Student Added Successfully');;
    }
}
