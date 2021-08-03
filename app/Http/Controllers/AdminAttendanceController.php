<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminAttendanceController extends Controller
{
	Public function index() 
    {
    	$select = DB::select("select * from attandences");

    	return view("Admin/view_attendance")->with("select",$select);
    }


	public function create()
    {
    	$all_students = DB::select('select * from users');

		return view('Admin/add_attendance')->with('all_students',$all_students);
    }

    public function store(Request $request)

	{
		$insert = DB::insert("insert into attandences values(?,?,?,?)",[null,$request->student,$request->attandence,$request->date]);
		return redirect ("admin-add-attendance");
	}


	 public function delete($id)
   {
   	DB::delete("delete from attandences where id='$id'");

   	return redirect("admin-view-attandances");
   }

   
}
