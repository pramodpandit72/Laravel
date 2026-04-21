<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginClick(Request $request)
    {
      // $username = $request->input('username');
      // return $username;
      $request->session()->put('username', $request->input('username'));
      return redirect('/');
      // return "session Variable is " . $session('usename');
      // echo session('usename');
      
    }
    public function logoutclick(){
      session()->pull('username');
      return redirect('/login');
    }
}