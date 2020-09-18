<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class NewsletterController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth:admin');
    }

    public function Newsletter()
    {
        $sub = DB::table('newsletters')->get();
        return view('admin.newsletter.newsletter',compact('sub'));
    }

    public function DeleteSub($id)
    {
        DB::table('newsletters')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Subscriber Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
