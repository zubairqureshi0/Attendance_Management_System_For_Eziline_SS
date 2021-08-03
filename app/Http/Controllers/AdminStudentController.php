<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminStudentController extends Controller
{
	public function index()
	{

		$select = DB::select("select * from  users");

		return view("Admin/view_student")->with("select",$select);
   	}

    
}
