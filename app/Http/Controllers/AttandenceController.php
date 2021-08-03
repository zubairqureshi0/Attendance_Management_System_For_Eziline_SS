<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AttandenceController extends Controller
{
	 public function index (Request $request)

	{  
		

	$insert = DB::insert("insert into attandences values(?,?,?,?)",[null,"1",$request->attandence,$request->date]);
	return redirect("user_attandence");
    
	}

	public function user_view_attandence ()
	{

	$select = DB::select("select * from  attandences");

	return view("User/view_attandence")->with("select",$select);
   }
}

