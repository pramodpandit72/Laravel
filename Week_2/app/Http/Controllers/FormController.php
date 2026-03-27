<?php

namespace App\Http\Controllers; // Path of controller

use Illuminate\Http\Request;  // Make use of request class

class FormController extends Controller
{
    public function submit(Request $request){ // Make the obj of request class
        $request->validate([
            "name"=>"required|min:1|max:15|regex:/^[A-Za-z\s]+$/",
            "username"=>"required|min:1|max:20|regex:/^[A-Za-z0-9_]+$/",
            "email" => "required|email|unique:users,email",
            "password' => 'required|min:8|max:20|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/"
        ]);

        // return $request->all();
        // return response()->json([
        //     $request->name,
        //     $request->email
        // ]);


        $name=$request->name;
        $email=$request->email;
        // return "Name entered by user is $name";
        // $username=$request->username;
        // return "Username entered by user is $username";
        return "<script> alert ('Form submitted Successfully by $name with email id $email') </script>";

    }
}
