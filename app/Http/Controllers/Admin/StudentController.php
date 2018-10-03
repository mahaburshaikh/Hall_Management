<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\faculty;
use App\Model\user\room;
use App\Model\user\session;
use App\Model\user\student;
use Illuminate\Http\Request;
use Hash; 

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = student::all();
        return view ('admin.student.show',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = session::all();
        $rooms = room::all();
        $faculties = faculty::all();
        return view ('admin.student.create',compact('faculties','sessions','rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'student_id' => 'required',
            'student_reg' => 'required',
            'email' => '',
            'address' => 'required',
            'password' => 'required',
            'mobile_no' => '',
            'border_no' => 'required',
            'faculty_id' => 'required',
            'session_id' => 'required',
            'room_id' => 'required'
        ]);

        if($request->hasFile('image')){
        $imageName = $request->image->store('public');
    }

        $student = new student;
        $student->image = $imageName;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->student_id = $request->student_id;
        $student->student_reg = $request->student_reg;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->password = Hash::make($request->password);
        $student->mobile_no = $request->mobile_no;
        $student->border_no = $request->border_no;
        $student->faculty_id = $request->faculty_id;
        $student->session_id = $request->session_id;
        $student->room_id = $request->room_id;

        if(!is_null($request->image)){
        $filename = time().'.' .$request->image->getClientOriginalExtension();
        $request->image->move('images/student', $filename);
        $student->image = $filename;

    }

        $student->save();

        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        $sessions = session::all();
        $rooms = room::all();
        $faculties = faculty::all();
        return view ('admin.student.edit',compact('student','faculties','sessions','rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'student_id' => 'required',
            'student_reg' => '',
            'email' => '',
            'address' => 'required',
            'password' => '',
            'mobile_no' => '',
            'border_no' => 'required',
            'faculty_id' => 'required',
            'session_id' => 'required',
            'room_id' => 'required'
        ]);

        $student = student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->student_id = $request->student_id;
        $student->student_reg = $request->student_reg;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->mobile_no = $request->mobile_no;
        $student->border_no = $request->border_no;
        $student->faculty_id = $request->faculty_id;
        $student->session_id = $request->session_id;
        $student->room_id = $request->room_id;

        $student->save();

        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::find($id)->delete();
        return redirect(route('student.index'));
    }
}
