<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\complain;
use Illuminate\Http\Request;
use Session;
use Auth;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        if(Auth::guard('web')->check()){
            $this->validate($request, [
                'message' => 'required',
            ]);

            $complain = new complain;
            $complain->message = $request->message;
            $complain->student_id = Auth::guard('web')->user()->id;
            $complain->save();

            session()->flash('success', 'Your comment submitted successfully !!!');
            return redirect()->route('index');
        }
        else{
        	session()->flash('error', 'You are not logged in !!! Please login for commenting !!!');
            return redirect()->route('login');
        }
    }
}
