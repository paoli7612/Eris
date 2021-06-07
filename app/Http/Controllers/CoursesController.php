<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }

    public function show($slug)
    {
        return view('courses.show', [
            'course' => Course::where('slug', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $course = Course::make($request->title, $request->year, $request->semester);
        $course->save();
        return redirect($course->route());
    }

    public function delete($slug)
    {
        Course::where('slug', $slug)->delete();
        return redirect('/courses');
    }
}
