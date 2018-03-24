<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function admin(Request $request)
    {
$user = User::where('email', $request->email)->first();

   return view('admin',compact('user'));
    }

    public function burser(Request $request)
    {
      $user = User::where('email', $request->email)->first();
         return view('burser', compact('user'));
    }
}
