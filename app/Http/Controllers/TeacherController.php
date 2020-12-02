<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teacher.index')->with('teachers',Teacher::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
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
			 
            'img' => 'required|image',
			 
            'address' => 'required',
			 
			 'dept' => 'required'
        ]);

        $Teacher = new Teacher;

        $Teacher->name = $request->name;
		
        $Teacher->email = $request->email;
		
        $Teacher->dept = $request->dept;
		
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/teacher', $img_new_name);
		
		$Teacher->img = 'uploads/teacher/'.$img_new_name;
		
		$Teacher->address = $request->address ;

        $Teacher->save();
		
		

    

        return redirect()->route('teacher.index');
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
        $teacher = Teacher::find($id);
		
		return view('admin.teacher.edit')->with('teacher', $teacher);
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
			 
            'email' => 'required|email',
			 
            'address' => 'required'
        ]);
		
		 $teacher = Teacher::find($id);
		
		if($request->hasFile('img')){
			
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/teacher', $img_new_name);
		
		$teacher->img = 'uploads/teacher/'.$img_new_name;
			
		}

     

        $teacher->name = $request->name;
		
        $teacher->email = $request->email;
		
        $teacher->address = $request->address;
		
		
		 $teacher->save();
		
		return redirect()->route('teacher.index');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teacher = Teacher::find($id);
		
		  $teacher->delete();
		
		 return redirect()->route('teacher.index');
    }
}
