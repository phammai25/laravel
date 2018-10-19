<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Auth;
use App\Post;
use Illuminate\Support\Facades\Redirect;
class HomePageController extends Controller
{
    function index()
    {
    	if(isset(auth()->user()->id)){
    		return Redirect::to(url('/home'));
    	}
    	else{
		$post = Post::all();
    	return view('homepage')->with('post',$post);
    	}
    }
}
