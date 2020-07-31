<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    //
    public function index () {
    	if(!session('userAdmin')){
            return redirect ('admin/login');
        }else{
            return redirect ('admin/dashboard');
        }
    }

    public function login(){
    	return view('admin/login');
    }
    public function dashboard(){
        return view ('admin/dashboard');
    }
    public function postLoginAdmin(Request $request){
        $username_a = $request->input('username');
        $password_a = md5($request->input('password'));
        $status = 1;
        $admin = Admin::where('username',$username_a)->where('password',$password_a)->get();
        if(count($admin)==0){
            $alert = "Wrong username or password !!! Please login again!";
            return redirect()->back()->with('alert',$alert);    
        }else{
            session(['userAdmin'=>$username_a]);
            return redirect('admin');
        }
    }
     public function logout(){
        session()->forget('userAdmin');
        return redirect('admin');
    }
}
        

    