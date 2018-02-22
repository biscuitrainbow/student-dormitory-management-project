<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::all(); 
        return view('user-index',compact('users'));
    }

    public function login(){
        return view('login');
    }

    public function authenticate(){

        if(Auth::attempt(['username' =>request('username'),'password' => request('password')])){
            return redirect('\dashboard');
        }

        return redirect()->back();
    
    }
    
    public function logout(){
        Auth::logout();

        return redirect('\login');
    }

    public function signup(){
        return view('signup');
    }

    public function store(){
        User::create([
            'name' => request()->f_name,
            'lastname' => request()->l_name,
            'username'=>request()->username,
            'password' => bcrypt(request()->password),
        ]);
        return redirect('\login');
    }
}
