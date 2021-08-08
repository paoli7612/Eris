<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course.all', [
            'courses' => Course::all()
        ]);
    }

    public function show(Course $course)
    {
        # code...
    }
}
