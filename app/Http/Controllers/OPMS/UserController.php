<?php

namespace App\Http\Controllers\OPMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function login()
    {
        return view('User.login');
    }
    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
         ]);


        $login_info=$request->except(['_token']);

            //   dd(Auth::attempt($login_info));
                if (Auth::attempt($login_info)) {
                    $request->session()->regenerate();
                    return redirect()->intended('/');
                }
                else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function UserList()
    {
        $users = User::all();
        return view ('User.userList',compact('users'));
    }
}