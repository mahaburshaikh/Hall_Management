<?php

namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
use App\Model\user\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employees = employee::all();
        return view('admin.employee.show',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
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
            'email'       =>  '',
            'phone'       =>  'required',
            'address'     =>  'required'
        ]);

        if($request->hasFile('image')){
        $imageName = $request->image->store('public');
    }

        $employee = new employee;
        $employee->image = $imageName;
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;

         if(!is_null($request->image)){
        $filename = time().'.' .$request->image->getClientOriginalExtension();
        $request->image->move('images/provost', $filename);
        $employee->image = $filename;

    }

        $employee->save();
        return redirect(route('employee.index'));
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
        $employee = employee::find($id);
        return view('admin.employee.edit',compact('employee'));
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
            'email'       =>  '',
            'phone'       =>  'required',
            'address'     =>  'required'
        ]);

        $employee = employee::find($id);
        $employee->name = $request->name;
        $employee->designation = $request->designation;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->address = $request->address;

        $employee->save();
        return redirect(route('employee.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::find($id)->delete();
        return redirect(route('employee.index'));
    }
}
