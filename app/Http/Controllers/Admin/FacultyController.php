<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
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
        $faculties = faculty::orderBy('short_name', 'asc')->get();
        return view ('admin.faculty.show',compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.faculty.create');
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
            'name'       => 'required',
            'short_name' => 'required'
        ]);

        $faculty = new faculty;
        $faculty->name = $request->name;
        $faculty->short_name = $request->short_name;

        $faculty->save();
        return redirect(route('faculty.index'));
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
        $faculty = faculty::find($id);
        return view ('admin.faculty.edit',compact('faculty'));
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
            'name'       => 'required',
            'short_name' => 'required'
        ]);

        $faculty = faculty::find($id);
        $faculty->name = $request->name;
        $faculty->short_name = $request->short_name;

        $faculty->save();
        return redirect(route('faculty.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        faculty::find($id)->delete();
        return redirect(route('faculty.index'));
    }
}
