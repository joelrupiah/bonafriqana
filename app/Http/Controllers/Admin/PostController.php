<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class PostController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth:admin');
    }

    public function BlogCatList()
    {
        $blogcat = DB::table('post_category')->get();
        // return response()->json($blogcat);
        return view('admin.blog.category.index',compact('blogcat'));
    }

    public function BlogCatStore(Request $request)
    {
        $validateData = $request->validate([
            'blog_category_name' => 'required|max:255',
        ]);

        $data = array();
        $data['category_name'] = $request->blog_category_name;
        DB::table('post_category')->insert($data);
        $notification=array(
            'message'=>'Blog Category Added',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function deleteBlogCat($id)
    {
        DB::table('post_category')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Blog Category Deleted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function EditBlogCat($id)
    {
        $blogcatedit = DB::table('post_category')->where('id',$id)->first();
        return view('admin.blog.category.edit',compact('blogcatedit'));
    }

    public function UpdateBlogCat(Request $request,$id)
    {
        $data = array();
        $data['category_name'] = $request->blog_category_name;
        DB::table('post_category')->where('id',$id)->update($data);
        $notification=array(
            'message'=>'Blog Category Updated',
            'alert-type'=>'success'
             );
           return Redirect()->route('add.blog.categorylist')->with($notification);
    }

    public function Create()
    {
        $blogcategory = DB::table('post_category')->get();
        return view('admin.blog.create',compact('blogcategory'));
    }

    public function store(Request $request)
    {
        $data = array();
        $data['post_title'] = $request->post_title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;

        $post_image = $request->file('post_image');

        if ($post_image) {
            $post_image_name = hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
            Image::make($post_image)->resize(400,200)->save('images/post/'.$post_image_name);
            $data['post_image'] = 'images/post/'.$post_image_name;

            DB::table('posts')->insert($data);

            $notification=array(
                'message'=>'Post Inserted',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);

        }
        else
        {
            $data['post_image'] = '';
            DB::table('posts')->insert($data);
            $notification=array(
                'message'=>'Product Inserted without Image',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }

    }

    public function index()
    {
        $post = DB::table('posts')
             ->join('post_category','posts.category_id','post_category.id')
             ->select('posts.*','post_category.category_name')
             ->get();
            return view('admin.blog.index',compact('post'));
            // return response()->json($post);
    }

    public function deletePost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        $image = $post->post_image;
        unlink($image);

        DB::table('posts')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Post Deleted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function EditPost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('admin.blog.edit',compact('post'));
    }

    public function UpdatePost(Request $request,$id)
    {

        $old_image = $request->old_image;

        $data = array();
        $data['post_title'] = $request->post_title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;

        $post_image = $request->file('post_image');

        if ($post_image) {
            unlink($old_image);
            $post_image_name = hexdec(uniqid()).'.'.$post_image->getClientOriginalExtension();
            Image::make($post_image)->resize(400,200)->save('images/post/'.$post_image_name);
            $data['post_image'] = 'images/post/'.$post_image_name;

            DB::table('posts')->where('id',$id)->update($data);

            $notification=array(
                'message'=>'Post Updated',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.blogpost')->with($notification);

        }
        else
        {
            $data['post_image'] = $old_image;
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'message'=>'Post Inserted without Image',
                'alert-type'=>'success'
                 );
                return Redirect()->route('all.blogpost')->with($notification);
        }
    }
}
