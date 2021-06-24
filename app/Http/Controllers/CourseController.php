<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
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

    public function store()
    {
        Course::create([
            'title' => request('title'),
            'slug' => Str::slug(request('title'), '_'),
            'teacher_id' => request('teacher_id'),
            'year_id' => request('year_id')
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        Course::find($id)->update([
            'teacher_id' => request('teacher_id'),
            'year_id' => request('year_id'),
        ]);

        return redirect('courses');
    }

    public function delete($id)
    {
        Course::destroy($id);
        return redirect('courses');
    }
}
