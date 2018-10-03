<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\payment;
use App\Model\user\session;
use App\Model\user\student;
use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = payment::all();
        return view ('admin.payment.show',compact('payments'));
    }
    public function pdftest()
    {
        $pdf = PDF::loadView('admin.payment.test');
        return $pdf->stream('fdf.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = student::all();
        $sessions = session::all();
        $payments = payment::first();
        return view ('admin.payment.create',compact('sessions','students','payments'));
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
            //'student_name'=> 'required',
            'border_no'   => 'required',
            //'student_id'  => 'required',
            'level'       => 'required',
            'semester'    => 'required',
            //'session'     => 'required',
            'duration'    => 'required',
           // 'year'        => 'required',
            'amount'      => 'required',
            
      ]);

        $student = student::where('border_no',$request->border_no)->first();
        $payment = new payment;
        $session = session::find($student->session_id);

        $payment->student_name = $student->first_name.' '.$student->last_name;
        $payment->border_no  = $request->border_no;
        $payment->student_id = $student->id;
        $payment->level      = $request->level;
        $payment->semester   = $request->semester;
        $payment->session    = $session->session;
        $payment->duration   = $request->duration;
        $payment->year       =  date('Y');
        $payment->amount     = $request->amount;
        if($request->due)
    {
        $payment->due        = $request->due;
    }

        $payment->save();
        return redirect(route('payment.index'));

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
        $payments = payment::find($id);
        return view ('admin.payment.edit',compact('payments')); 
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
            //'student_name'=> 'required',
            'border_no'   => 'required',
            //'student_id'  => 'required',
            'level'       => 'required',
            'semester'    => 'required',
            //'session'     => 'required',
            'duration'    => 'required',
           // 'year'        => 'required',
            'amount'      => 'required',
            
      ]);

        $student = student::where('border_no',$request->border_no)->first();
        $payment = payment::find($id);
        $session = session::find($student->session_id);

        $payment->student_name = $student->first_name.' '.$student->last_name;
        $payment->border_no  = $request->border_no;
        $payment->student_id = $student->id;
        $payment->level      = $request->level;
        $payment->semester   = $request->semester;
        $payment->session    = $session->session;
        $payment->duration   = $request->duration;
        $payment->year       =  date('Y');
        $payment->amount     = $request->amount;
        if($request->due)
    {
        $payment->due        = $request->due;
    }

        $payment->save();
        return redirect(route('payment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
