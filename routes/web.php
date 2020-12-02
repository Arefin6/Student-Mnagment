<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/backend',[

        'uses' => 'AdminController@show',
		
        'as' => 'admin.backend'
    ]);


  Route::get('/search/result',function(){
	
	 $students= \App\student :: where('name','like', '%'. request('search').'%')->get();
	
	
	return view('results')->with('students',$students)
	
	                      ->with('search',request('search'));
	
	
	
        
	});

  Route::get('/home/lol',[

        'uses' => 'ProfileController@show',
		
        'as' => 'students'
    ]);
	
	Route::get('/logout',[

        'uses' => 'AdminController@logout',
		
        'as' => 'admin.logout'
    ]);
	
	
	Route::get('/settings',[

        'uses' => 'AdminController@settings',
		
        'as' => 'admin.settings'
    ]);

   
	Route::get('/profile/edit',[

        'uses' => 'ProfileController@create',
		
        'as' => 'profile.edit'
    ]);
    
    Route::get('/profile/index',[

        'uses' => 'ProfileController@index',
		
        'as' => 'profile.index'
    ]);
      
    Route::post('/profile/update/{id}',[

        'uses' => 'ProfileController@update',
		
        'as' => 'profile.update'
    ]);

   Route::post('/profile/store',[

        'uses' => 'ProfileController@store',
		
        'as' => 'profile.store'
    ]);
	
	Route::get('/allteacher',[

        'uses' => 'TeacherController@index',
		
        'as' => 'teacher.index'
    ]);
    Route::get('/teacher/create',[

        'uses' => 'TeacherController@create',
		
        'as' => 'teacher.create'
    ]);

    Route::post('/teacher/store',[

        'uses' => 'TeacherController@store',
		
        'as' => 'teacher.store'
    ]);

	 Route::get('/teacher/edit/{id}',[

        'uses' => 'TeacherController@edit',
		
        'as' => 'teacher.edit'
    ]);

    
	 Route::get('/teacher/delete/{id}',[

        'uses' => 'TeacherController@destroy',
		
        'as' => 'teacher.delete'
    ]);

    Route::post('/teacher/update/{id}',[

        'uses' => 'TeacherController@update',
		
        'as' => 'teacher.update'
    ]);
	
	
	Route::get('/viewprofile',[

        'uses' => 'AdminController@viewprofile',
		
        'as' => 'admin.view'
    ]);
	

  Route::get('/addstudent',[

        'uses' => 'StudentController@create',
		
        'as' => 'student.add'
    ]);	
	
	Route::get('/allstudent',[

        'uses' => 'StudentController@index',
		
        'as' => 'student.all'
    ]);	
	
	 
	Route::get('/editstudent/{id}',[

        'uses' => 'StudentController@edit',
		
        'as' => 'student.edit'
    ]);	
	
	Route::post('/updatetudent/{id}',[

        'uses' => 'StudentController@update',
		
        'as' => 'student.update'
    ]);	
	 Route::get('/deletestudent/{id}',[

        'uses' => 'StudentController@destroy',
		
        'as' => 'student.delete'
    ]);	
	
	Route::get('/tutionfee',[

        'uses' => 'StudentinfoController@index',
		
        'as' => 'student.tution'
    ]);	
	
	
	Route::get('/result',[

        'uses' => 'StudentinfoController@create',
		
        'as' => 'student.result'
    ]);	
	
	Route::post('/student/store',[

        'uses' => 'StudentController@store',
		
        'as' => 'student.store'
    ]);	
	
	
	Route::get('/cse',[

        'uses' => 'DeptController@cse',
		
        'as' => 'student.cse'
    ]);	
	
	Route::get('/bba',[

        'uses' => 'DeptController@bba',
		
        'as' => 'student.bba'
    ]);	
	
	Route::get('/eee',[

        'uses' => 'DeptController@eee',
		
        'as' => 'student.eee'
    ]);	
	
	Route::get('/llb',[

        'uses' => 'DeptController@llb',
		
        'as' => 'student.llb'
    ]);	
	
	Route::get('/english',[

        'uses' => 'DeptController@english',
		
        'as' => 'student.english'
    ]);	
	
	
	
	
Route::post('/admin/index', [

        'uses' => 'AdminController@index',
		
        'as' => 'admin.index'
    ]);

   
	
	
  Route::get('admin/create', [

        'uses' => 'AdminController@create',
		
        'as' => 'admin.create'
    ]);		
	
  Route::post('/admin/store', [

        'uses' => 'AdminController@store',
		
        'as' => 'admin.store'
    ]);	

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/view', [

        'uses' => 'ProfileController@view',
		
        'as' => 'student.viewProfile'
    ]);

Route::get('/student/settings', [

        'uses' => 'ProfileController@settings',
		
        'as' => 'student.settings'
    ]);
  Route::get('/student/logout', [

        'uses' => 'ProfileController@logout',
		
        'as' => 'student.logout'
    ]);