<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
      if(Auth::attempt([
        'email'=> $request->email,
        'password'=> $request->password
      ]))
      {
        $user =User::where('email', $request->email)->first();
        if($user->is_admin()){
          return redirect()->route('admin/dashboard')->with(compact('user'));
        }
        if($user->is_burser()){
          return redirect()->route('burser/dashboard');
      }
      return redirect()->route('home');
    }
    Session::flash('login','wrong user email or password');
    return redirect()->back();
}
}
