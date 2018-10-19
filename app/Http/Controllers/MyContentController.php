<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class MyContentController extends Controller
{
    function index()
    {
    	$mypost = User::find(auth()->user()->id)->post;
    	return view('mycontent')->with('mypost',$mypost);
   }
    function viewpost($id)
    {

    	$viewpost = Post::find($id);
		return view('viewmypost')->with('viewpost',$viewpost);
    }

}
