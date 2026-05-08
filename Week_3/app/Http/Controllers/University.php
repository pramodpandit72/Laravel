<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class University extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::all();
        // $students=Student::where('city','=','Phagwara')->get();
        // $students=Student::where('marks','>=',80)->get();
        // $students=Student::select('name', 'city')->get();
        // $students=Student::orderBy('name','desc')->get();

        // return $students;
        // return view('studentdata', compact("students"));

        // $count=Student::count();
        // return "Total students in db: $count";
        
    }


}
