<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    // use ResetPasswords;

    protected $redirectTo ='admin/home';

    public function __contruct()
    {
        $this->middleware('guest:admin');
    }

    public function showResetForm(Request $request, $token =null)
    {
        return view('admin.auth.password.reset')
            ->with([
                'token' => $token, 
                'email' => $request->email
            ]);
    }
    
}
