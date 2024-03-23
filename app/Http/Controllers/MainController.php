<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ProfilePage($username){
        $data = DB::table('profile')->where('user',$username)->first();
        return view('profile')->with('data',$data);
    }

    public function HomePage(){
        $data = DB::table('profile')->get();
        return view('home')->with('data',$data);
    }
}
