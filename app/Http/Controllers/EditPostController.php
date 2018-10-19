<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use News;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Author;
use Illuminate\Support\Facades\Auth;


class EditPostController extends Controller
{
    public function index($id)
    {
    	$editpost = Post::find($id);
    	return view('editpost')->with('editpost',$editpost);
    }
    function editpost($id)
    {
    	$post = Post::find($id);
    	$post ->update([
    		'tag'=>Input::get('tag'),
    		'catalog'=>Input::get('catalog'),
    		'content'=>Input::get('content'),
    		'updated_at'=>date('Y-m-d H:i:s'),
    		]);
    	
    	return Redirect::to(url('/mycontent'));
    	
    }
    function deletepost($id){
    	$post = Post::find($id);
    	$post->delete();
    	return Redirect::to(url('/mycontent'));
    }
    
}
