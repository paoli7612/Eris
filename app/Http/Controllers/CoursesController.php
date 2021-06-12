<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('course.index', [
            'courses' => Course::all()
        ]);
    }

    public function details(Request $request)
    {
        dd($request->slug);
    }
}
