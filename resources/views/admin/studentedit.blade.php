@extends('layouts.layout')

@section('content')

@include('includes.errors')

@include('includes.app')


 
 
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-offset-3 col-lg-10  mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center mb-3 ">Edit Student</h3>
              <form action="{{ route('student.update',['id'=>$student->id]) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
				
                 <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control p_input" name="name" placeholder="name" value=" {{$student->name}}">
                </div>
				
				<div class="form-group">
                  <label>Id:</label>
                  <input type="text" class="form-control p_input" name="student_id" placeholder="id" value=" {{$student->student_id}}">
                </div>
				 
				 <div class="form-group">
                  <label>Img:</label>
                  <input type="file" class="form-control p_input" name="img" placeholder="image" value="{{$student->img}}">
                </div>
				
				  <div class="form-group">
                  <label>Father's Name:</label>
                  <input type="text" class="form-control p_input" name="father_name" placeholder="Father name" value=" {{$student->father_name}}">
                </div>
				
				  <div class="form-group">
                  <label>Mother's Name:</label>
                  <input type="text" class="form-control p_input" name="mother_name" placeholder="Mother name" value=" {{$student->mother_name}}">
                </div>
				 
				
                <div class="form-group">
                  <label> Student Email: </label>
                  <input type="email" class="form-control p_input" name="student_email" placeholder="email" value=" {{$student->student_email}}">
                </div>
				
				
				 <div class="form-group">
                  <label> Student Phone:</label>
                  <input type="text" class="form-control p_input" name="student_phone" placeholder="phone" value=" {{$student->student_phone}}">
                </div>
				
				 <div class="form-group">
                  <label>Department:</label>
                  <select name="department" id="" class="form-control" value=" {{$student->department}}">
				    
					<option value="C.S.E">C.S.E</option>
					<option value="B.B.A">B.B.A</option>
					<option value="E.E.E">E.E.E</option>
					<option value="L.L.B">L.L.B</option>
					<option value="English">English</option>
				  
				  </select>
                </div>
				<div class="form-group">
                  <label>Admition Year:</label>
                  <input type="date" class="form-control p_input" name="admition_year" placeholder="admition year" value=" {{$student->admition_year}}">
                </div>
				
				 <div class="form-group">
                  <label>Address:</label>
                  <input type="text" class="form-control p_input" name="address" placeholder="address" value="{{$student->address}}">
                </div>
				 
                
                <div class="text-center">
                  <button type="submit" class="btn  text-white btn-success btn-lg">Update Student</button>
                </div>
                </div>
                </div>
				</div>
				</div>
				</div>

@endsection