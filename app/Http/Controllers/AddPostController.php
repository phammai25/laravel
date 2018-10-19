<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Post;
class AddPostController extends Controller
{
    function index()
    {
    	return view('addpost');
    }
    function viewpost($id)
    {
    	$viewpost = Post::find($id);
		return view('viewpost')->with('viewpost',$viewpost);
    }
    function addPost(){
 	
    	$arr = [
			      
		        'user_id'=>auth()->user()->id,
    			'tag'=>Input::get('tag'),
		        'catalog'=>Input::get('catalog'),
		        'content'=>Input::get('content'),
		        'status'=>'0',
		        'created_at'=>date('Y-m-d H:i:s'),

		];
	
		if(DB::table('post')->insert($arr)){
			return Redirect::to(url('/home'));
	 	} else {
	 		return view('/addpost');
		}
    }
}
