z<?php

// use Illuminate\Support\Facades\Route;
//////////////////////////////////////////////
////Admin
  Route::get('/admin_layout', function () {
  	return view('Admin/admin_layout');
  });
  /////////////////////////////////////////////////////////
///////////student
  Route::get('/admin_student', function () {
  	return view('Admin/student');
  });

  /////////////////////////////////////////////////////
///////////report

  Route::get('/admin_report', function () {
  	return view('Admin/report');
  });

Route::post("admin-create-report","Add_StudentController@index");
  /////////////////////////////////////////////////
////////////add_student,viewStudent


Route::get("admin-view-attandances","AdminAttendanceController@index");
Route::get("admin-add-attendance","AdminAttendanceController@create");
 Route::post("save-add-attendance","AdminAttendanceController@store");
 Route::get("delete-attendance/{id}", "AdminAttendanceController@delete");

////////////////////////////////////////////////////
///////view_leave

 Route::get("view_admin_leave","LeaveController@view_admin_leave");

///////////////////////////////////////////////////////////////
//////view attandence

Route::get("admin-view-students","AdminStudentController@index");

Route::get("admin_view_attandence", "View_StudentController@view_user_attandence");

///////////////////////////////////////////////////////
//////User
 Route::get('/', function () {
    return redirect('login');
  });
 /////////////////////////////////////////////////
  Route::get('/user_layout', function () {
  	return view('User/user_layout');
  });
/////////////////////////////////////////////////////////////
  ////attandence

Route::get('/user_attandence', function () {
return view('User/attandence');
  });
Route::post("save-attandence","AttandenceController@index");
Route::get("user_view_attandence","AttandenceController@user_view_attandence");

/////////////////////////////////////////////////////////
//leave

Route::get('/user_leave', function () {
return view('User/leave');
  });
Route::post("save-leave","LeaveController@index");

////////////////////////////////////////////////////////////
////profile

  Route::get('/user_profile', function () {
  	return view('User/profile');
  });


  ///////////////////////////////////////////////////////////////
  ////////////////auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





