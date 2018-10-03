<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\ProvostAcoountCreateNotification;
use Illuminate\Support\Facades\DB;
use App\Model\admin\admin;
use App\Model\user\department;
use App\Model\user\faculty;
use App\Model\user\provost;
use Illuminate\Http\Request;
use Mail;
use Hash; 
use File;

class ProvostController extends Controller
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
        $provosts = provost::all();
        return view('admin.provost.show',compact('provosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = faculty::all();
        $departments = department::all();
        return view ('admin.provost.create',compact('faculties','departments'));
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
        'name'        =>  'required',
        'designation' =>  'required',
        'email'       =>  'required',
        'phone'       =>  'required',
        'address'     =>  'nullable',
        'faculty_id'  => 'required',
        'department_id'  => 'required',
        'password'  => 'required'
    ]);
       if($request->hasFile('image')){
        $imageName = $request->image->store('public');
    }
       $provost = new provost;
       $provost->image = $imageName;
       $provost->name = $request->name;
       $provost->designation = $request->designation;
       $provost->email = $request->email;
       $provost->phone = $request->phone;
       $provost->address = $request->address;
       $provost->faculty_id = $request->faculty_id;
       $provost->department_id = $request->department_id;

       //$password = str_random(8);
       $provost->password = Hash::make($request->password);
     
       if(!is_null($request->image)){
        $filename = time().'.' .$request->image->getClientOriginalExtension();
        $request->image->move('images/provost', $filename);
        $provost->image = $filename;

    }
    
    $provost->save();

    $admin = new admin;
    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->phone = $request->phone;
    $admin->address = $request->address;
    $admin->password = Hash::make($request->password);
    $admin->save();
    //$admin->notify(new ProvostAcoountCreateNotification($admin, $password));
    

    return redirect(route('provost.index'));
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
        $provost = provost::find($id);
        $faculties = faculty::all();
        $departments = department::all();

        return view ('admin.provost.edit',compact('provost','faculties','departments'));
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
        'name'        =>  'required',
        'designation' =>  'required',
        'email'       =>  'required',
        'phone'       =>  'required',
        'address'     =>  '',
        'faculty_id'  => 'required',
        'department_id'  => 'required'
    ]);

       $provost = provost::find($id);
       $provost->name = $request->name;
       $provost->designation = $request->designation;
       $provost->email = $request->email;
       $provost->phone = $request->phone;
       $provost->address = $request->address;
       $provost->faculty_id = $request->faculty_id;
       $provost->department_id = $request->department_id;

       $provost->save();
       return redirect(route('provost.index'));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provost = provost::find($id);
        admin::where('email', $provost->email)->delete();
        if($provost->image){
            if (File::exists('images/provost/'.$provost->image)) {
              File::delete('images/provost/'.$provost->image);
            }
        }
        $provost->delete();
        return redirect(route('provost.index'));
    }
}
