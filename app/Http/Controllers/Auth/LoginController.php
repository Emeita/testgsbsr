<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
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
    protected $redirectTo = '/land';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // public function login(Request $request){

    //     $message = array(
    //         'required.email'    =>  'This is required',
    //         'required.password' =>  'This is required',
    //     );
    //     $this->validate($request,[
    //         'email' =>  'required',
    //         'password'  =>  'required',
    //     ],$message);
    
    //     $email = $request->email;
    //     $pass = $request->password;
    
    //     if(Auth::attempt(['email' => $email, 'password' => $pass, 'status' => 1])){
    //         Session::flash('success','Welcome '.Auth::user()->name);
    //         return redirect()->route('land');
    //     }else{
    //         Session::flash('error','Sorry! Try Again. It seems your login credential is not correct.');
    //         return redirect()->back();
    //     }
    
    
}
