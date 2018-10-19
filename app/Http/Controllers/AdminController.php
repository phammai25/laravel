<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

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
        $id = Admin::find('1');
        return view('adminhome')->with('id',$id);
    }
    public function reviewPost()
    {
        echo "ád";
    }
    public function memberProfile()
    {
        echo "ưefrg";
    }
}
