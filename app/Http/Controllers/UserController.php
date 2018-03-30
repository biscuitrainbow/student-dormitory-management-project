<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user-index', compact('users'));
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {

        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('\dashboard');
        }

        return redirect()->back();

    }

    public function logout()
    {
        Auth::logout();

        return redirect('\login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/user/index');

    }


    public function edit(User $user)
    {
        return view('user-edit', compact('user'));
    }



    public function update(User $user)
    {
        $user->update([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'username' => request()->username,
        ]);
        return redirect('/user/index');
    }

    public function create()
    {
        return view('user-create');
    }

    public function store()
    {
        User::create([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'username' => request()->username,
            'password' => bcrypt(request()->pass),
        ]);

        return redirect('/user/index');
    }
}
