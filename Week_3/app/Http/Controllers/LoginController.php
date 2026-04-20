<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req) {
        $req->session()->put('username', $req->input('username'));
        return redirect('/');
        // $username=$req->input('username');
        // return $username;
    }

}