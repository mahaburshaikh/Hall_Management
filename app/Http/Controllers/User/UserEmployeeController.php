<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Model\user\employee;
use Illuminate\Http\Request;

class UserEmployeeController extends Controller
{
    public function index()
    {
    	$employees = employee::all();
    	return view('user.employee',compact('employees'));
    }
    public function employee_details($id)
    {
        $employee_again = employee::all();
    	$employees = employee::where('id',$id)->first();
    	return view('user.employee_details',compact('employees','employee_again'));
    }
}
