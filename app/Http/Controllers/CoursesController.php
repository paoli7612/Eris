<?php

namespace App\Http\Controllers;

use App\Models\Course;
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

    public function details($slug)
    {
        return view('course.details', [
            'course' => Course::where('slug', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $t = new Course();
        $t->title = $request->title;
        $t->slug = Str::slug($request->name);
        $t->save();
        return redirect()->back();
    }
}
