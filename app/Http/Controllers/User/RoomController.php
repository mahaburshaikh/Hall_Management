<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\room;
use App\Model\user\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function room()
    {
    	$rooms = room::distinct()->get(['block']);
    	return view ('user.room',compact('rooms'));
    }

    public function room_list($block)
    {
    	$roomlist = room::where('block',$block)->get();
    	return view ('user.room_list',compact('roomlist'));
    }
    public function room_details($id)
    {
        $room_student = student::where('room_id',$id)->paginate(3);
        return view ('user.room_details',compact('room_student'));
    }
} 
