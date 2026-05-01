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
        $students = Student::all();

        return $students;
    }


}
