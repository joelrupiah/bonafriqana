<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function StoreNewsletter(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email|unique:newsletters|max:55',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('newsletters')->insert($data);
        $notification=array(
            'message'=>'Thank you for subscribing',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
