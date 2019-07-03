<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])){
                Session::put('adminSession', $data['email']);
                return redirect()->route('admin.dashboard')->withSuccess('Welcome to admin');
            }else{
                return redirect()->route('admin.login')->withError('Invalid Username or Password');
            }
        }
        return view('admin.login');
    }

    public function dashboard(){
        if(Session::has('adminSession')){
            //Do whatever is in here which should mostly be left empty
        }else{
            return redirect()->route('admin.login')->withError('Please Make sure you are an admin');
        }
        return view('admin.dashboard');
    }
}
