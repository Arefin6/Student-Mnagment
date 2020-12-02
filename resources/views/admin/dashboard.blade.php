@extends('layouts.layout')

@section('content')
   
   
   <div class="col-lg-3">
   <div class="card">
	  <div class="card-body bg-info">
		<h5 class="card-title text-center">All student</h5>
		<p class="card-text text-center">{{$students_count}}</p>

	  </div>
	</div>

    </div>
    
    
    <div class="col-lg-3">
    <div class="card">
	  <div class="card-body bg-success">
		<h5 class="card-title text-center">Teacher</h5>
		<p class="card-text text-center">{{$teachers_count}}</p>

	  </div>
	</div>
    
    </div>
    
    
    <div class="col-lg-3">
    <div class="card">
	  <div class="card-body bg-danger">
		<h5 class="card-title text-center">Dept</h5>
		<p class="card-text text-center">6</p>

	  </div>
	</div>
    </div>
    
    
    <div class="col-lg-3">
    <div class="card">
	  <div class="card-body bg-warning">
		<h5 class="card-title text-center">Admins</h5>
		<p class="card-text text-center">{{$admins_count}}</p>

	  </div>
	</div>
    
    </div>
    
 
           
         
@stop