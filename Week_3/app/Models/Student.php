<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Student extends Model
{
    protected $table = "students"; // Specifying the table 

    protected $fillable = [
        'regno', 'name', 'city', 'course', 'marks'
    ];
}
