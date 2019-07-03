<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])){
                return redirect()->route('admin.dashboard')->withSuccess('Welcome to admin');
            }else{
                return redirect()->route('admin.login')->withError('Invalid Username or Password');
            }
        }
        return view('admin.login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
