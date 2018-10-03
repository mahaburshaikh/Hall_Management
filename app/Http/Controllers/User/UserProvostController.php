<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Model\user\provost;
use Illuminate\Http\Request;

class UserProvostController extends Controller
{
    public function index()
    {
    	$provosts = provost::paginate('4');
    	return view('user.provost',compact('provosts'));
    }
    public function provost_details($id)
    {
        $provost_again = provost::all();
    	$provosts = provost::where('id',$id)->first();
    	return view('user.provost_details',compact('provosts','provost_again'));
    }
}
