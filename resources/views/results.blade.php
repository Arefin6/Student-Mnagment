@extends('layouts.header')

@section('content')

 <div class="card">
            <div class="card-body">
              <h2 class="card-title text-center">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
					      
						  <th>Image:</th>
                         
                          <th>Name:</th>
                          
                          <th>ID:</th>
                          
                          <th>Email:</th>
                          
                          <th>Phone:</th>
                          
                          <th>Address:</th>
                          
                          <th>Dept</th>
                          
                      </tr>
                    </thead>
                    <tbody>
                     @if($students->count()>0)
                    @foreach($students as $student)
                        <tr>
                            <td>
                            <img src="{{ asset('' . $student['img']) }}"   width="90px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>
                             {{$student->name}}
                            </td>
							
							<td>
                             {{$student->student_id}}
                            </td>
							
							<td>
                             {{$student->student_email}}
                            </td>
							
							<td>
                             {{$student->student_phone}}
                            </td>
							
							<td>
                             {{$student->address}}
                            </td>
							
							<td>
                             {{$student->department}}
                            </td>
							
							
                            
                           
                        </tr>
						
						@endforeach
                    @else
                    	<tr>
                    		<th colspan="5" class="text-center">No Result found</th>
                    	</tr>
                    	
                    @endif	
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection