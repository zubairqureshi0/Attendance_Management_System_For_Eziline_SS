<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LeaveController extends Controller
{
	public function index (Request $request)
	{

    
    $insert = DB::insert("insert into leave_requests values(?,?,?,?,?)",[null,$request->user_id,$request->application,$request->date,"pending"]);

    return redirect("user_leave");

  }
  public function view_admin_leave()

  {
  	$select = DB::select("select * from leave_requests");

  	return view("Admin/view_leave")->with("select",$select);
  }
}
