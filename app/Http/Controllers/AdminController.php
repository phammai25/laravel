<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Admin;
use App\Post;
use App\User;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::find('1');
        return view('adminhome')->with('admin',$admin);
    }
    public function reviewPost()
    {
        $post =  Post::where('status','0')->get();
        return view('reviewpost')->with('post',$post);
    }
    public function publicpost($id)
    {
        $viewpost = Post::find($id);
        return view('publicpost')->with('viewpost',$viewpost);
    }
    public function submitpost($id)
    {
        $post = Post::find($id);
        // $post ->update([
        //     'status'=>'1',
        //     'updated_at'=>date('Y-m-d H:i:s'),
        //     ]);
        $post->status = "1";
        $post->save();

        return Redirect::to(url('/admin/review_post'));
    }
    public function memberProfile()
    {
        $user = User::all();
        return view('memberprofile')->with('user',$user);
    }
    public function viewprofile($id)
    {
        $user = User::find($id);
        return view('viewprofile')->with('user',$user);
    }
    public function deleteuser($id)
    {
        $user = User::find($id)->delete();
       
        return Redirect::to(url('/admin/member_
            profile'));
    }
}
