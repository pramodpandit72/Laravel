<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|min:1|max:15|regex:/^[A-Za-z\s]+$/",
            "email" => "required|email",
            "age" => "required|numeric|between:18,69",
            "course" => "required|in:PHP,Java,Python",
            "password" => "required|min:8|max:20|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/"
        ]);

        // return back()->with('success', 'Form Data Submitted Successfully!');
        return "Form Data Submitted successfully";
    }
}