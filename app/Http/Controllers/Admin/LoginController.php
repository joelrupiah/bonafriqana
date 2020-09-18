<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')
            ->attempt(['email' => $request->email,
                        'password' => $request->password], 
                        $request->remember)) {
            return redirect()->intended(route('admin.home')); //admin.dashboard
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}
