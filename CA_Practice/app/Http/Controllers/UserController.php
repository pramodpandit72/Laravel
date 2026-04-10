<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function User() {
        $students = [
            ['name' => 'Raman', 'marks' => 75],
            ['name' => 'Amit', 'marks' => 40],
            ['name' => 'Neha', 'marks' => 30],
        ];

        return view('student', compact('students'));
    }
}
