<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\complain;
use App\Model\user\faculty;
use App\Model\user\hall_details;
use App\Model\user\notice;
use App\Model\user\provostmessage;
use App\Model\user\room;
use App\Model\user\session;
use App\Model\user\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $notices = notice::paginate(5);
        $provostMessage = provostmessage::first();        
        $hall_details = hall_details::first();        
        return view ('user.home',compact('notices', 'provostMessage','hall_details'));
    }

    public function msg_details()
    {
        $message_details = provostmessage::first();
        return view ('user.provostMessageDetails',compact('message_details'));
    }

    public function hall_details()
    {
        $hall_details = hall_details::first();
        return view ('user.halldetails',compact('hall_details'));
    }

    public function notice_details($id)
    {
        $message_details = provostmessage::first(); 
        $hall_details = hall_details::first();
        $provostMessage = provostmessage::first();
        $notice = notice::where('id',$id)->first();
        return view('user.noticedetails',compact('notice','message_details','hall_details','provostMessage'));
    }

    public function session()
    {
    	$sessions = session::all();
    	return view ('user.session',compact('sessions'));
    }

    public function session_student($session)
    {
    	$sessionName = session::where('session', $session)->first();
    	$students = student::where('session_id',$sessionName->id)->paginate(3);
    	return view ('user.student',compact('students'));
    }

    public function student_details($student_id)
    {
    	$students = student::where('student_id',$student_id)->first();
    	return view ('user.student_details',compact('students'));
    }

    public function faculty_student($short_name,$id)
    {
    	// $faculty = faculty::where('short_name',$short_name)->first();
    	$students = student::where('faculty_id',$id)->paginate(2);
    	return view ('user.student',compact('students'));  	
    }

    public function room_student($block, $room_no)
    {
    	$room = room::where('block', $block)
    			->where('room_no', $room_no)
    			->first();

    	$students = student::where('room_id',$room->id)->paginate(1);
    	return view ('user.student',compact('students'));
    }


    public function searchQuery(Request $request)
    {
        $query = $request->searchQuery;
        $students = student::orWhere('first_name', $query)
                    ->orWhere('last_name', $query)
                    ->orWhere('student_id', $query)
                    ->orWhere('student_reg', $query)
                    ->orWhere('email', $query)
                    ->orWhere('mobile_no', $query)
                    ->orWhere('border_no', $query)
                    ->orWhere('address', $query)
                    ->paginate(10);

        return view ('user.student',compact('students'));
    }

    

}
