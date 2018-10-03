<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\Model\admin\admin;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('admin.login');
    }

    // public function login(Request $request)
    // {
    //      $admin = admin::where('email',$request->email)->first();
    //     if (count($admin)){
    //         if ($admin->status == 0){
    //             return ['email'=>'inactive','password'=>'You are not active person,please contact admin'];
    //         }
    //         else{
    //             return ['email'=>$request->email,'password'=>$request->password,'status'=>1];
    //         }
    //     }
        
    //     return $request->only($this->username(), 'password');

    // }



    // // protected function credentials(Request $request)
    // // {
    // //     $admin = admin::where('email',$request->email)->first();
    // //     if (count($admin)){
    // //         if ($admin->status == 0){
    // //             return ['email'=>'inactive','password'=>'You are not active person,please contact admin'];
    // //         }
    // //         else{
    // //             return ['email'=>$request->email,'password'=>$request->password,'status'=>1];
    // //         }
    // //     }
        
    // //     return $request->only($this->username(), 'password');
    // // }



public function login(Request $request){
        $this->validate($request,[
            'email'    => 'required|email',
            'password' => 'required|min:3'
            ]);
        // attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)){
            // if successfull then redirect to specific location
            return redirect()->intended(route('admin.home'));
        }
        // if unsuccessfull then redirect to login form with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }


    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();

        return redirect('admin-login');
    }
}
