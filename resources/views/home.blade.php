@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
       <div class="panel-title text-center">
       		Students
       </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    
                    <th>
                        Name
                    </th>
                    <th>
                        Eamil
                    </th>
                    
					
                    
                    
                </thead>

                <tbody>
                   @if($users->count()>0)
               
                    @foreach($users as $user)
                        <tr>
                            
                            <td>{{$user ->name }}</td>
                            
							<td>{{$user->email }}</td>
                            
                            
                         @endforeach
                        @else
                   
                    	<tr>
                    		<th colspan="5" class="text-center">No student</th>
                    	</tr>
                    	 @endif	
                    	
                </tbody>
            </table>
        </div>
    </div>   
@endsection
