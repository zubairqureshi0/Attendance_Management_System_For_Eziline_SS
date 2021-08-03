<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function view_user_attandence()

	{

	$select = DB::select("select * from  users");

	return view("Admin/student")->with("select",$select);
   }
   

  }
