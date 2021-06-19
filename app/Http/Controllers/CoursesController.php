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

    public function store(Request $request)
    {
        Course::create($request);
        return redirect()->back();
    }

    public function details($slug)
    {
        $course = Course::where('slug', $slug)->first();

        if ($course == null) {
            abort(403, 'Course not exist.');
        }

        return view('course.details', [
            'course' => $course
        ]);
    }

    public function delete(Request $request)
    {
        Course::find($request->id)->delete();
        return redirect('courses');
    }

    public function edit(Request $request)
    {
        return redirect(Course::edit($request)->route);
    }
}
