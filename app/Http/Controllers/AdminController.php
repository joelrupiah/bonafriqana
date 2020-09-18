<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        $newpass=$request->password;
        $confirm=$request->password_confirmation;
        if (Hash::check($oldpass,$password)) {
             if ($newpass === $confirm) {
                        $user=Admin::find(Auth::id());
                        $user->password=Hash::make($request->password);
                        $user->save();
                        Auth::logout();  
                        $notification=array(
                          'message'=>'Password Changed Successfully ! Login with Your New Password',
                          'alert-type'=>'success'
                           );
                         return Redirect()->route('admin.auth.login')->with($notification); 
                   }else{
                       $notification=array(
                          'message'=>'New and Confirm Password do not match!',
                          'alert-type'=>'error'
                           );
                         return Redirect()->back()->with($notification);
                   }     
        }else{
          $notification=array(
                  'message'=>'Old Password is incorrect',
                  'alert-type'=>'error'
                   );
                 return Redirect()->back()->with($notification);
        }
    }

    public function logout()
    {
        Auth::logout();
            $notification=array(
                'message'=>'Admin Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.auth.login')->with($notification);
    }
}
