<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use DB;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function dashboard(){
        Session::put('dashboard','');
        return view('admin.dashboard');
    }

    public function userprofile(){
        Session::put('userprofile','');
        if(Auth::user()->email == 'mayor0014u@yahoo.com'){
            return view('admin.userprofile');
        }
        else{
            $user = DB::table('profiles')
                    ->where('email', Auth::user()->email)
                    ->first();
            if($user){
                return view('admin.displayprofileforuser')->with('user',$user);
            }
            else{
                return view('admin.userprofile');
            }

        }
        
    }

    public function users(){
        Session::put('users','');
        return view('admin.users');
    }

    public function addcategory(){
        Session::put('addcategory','');
        return view('admin.addcategory');
    }

    public function allcategories(){
        Session::put('allcategories','');
        return view('admin.allcategories');
    }

    public function trash(){
        Session::put('trash','');
        return view('admin.trash');
    }
    //
}
