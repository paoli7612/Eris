<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index()
    {
        return view('course.index', [
            'courses' => Course::all()
        ]);
    }

    public function details(Course $course)
    {
        return view('course.details', [
            'course' => $course
        ]);
    }

    public function store(Request $request)
    {
        Course::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '_')
        ]);
        return redirect()->back();
    }

    public function edit(Course $course)
    {
        $course->year_id = request('year_id');
        $course->teacher_id = request('teacher_id');
        $course->save();
        return redirect('courses');
    }

    public function delete($id)
    {
        Course::destroy($id);
        return redirect('courses');
    }
}
