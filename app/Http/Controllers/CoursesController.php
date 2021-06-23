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

    public function details($slug)
    {
        dd('asd');
        return view('course.details', [
            'course' => Course::where('slug', $slug)->first()
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

    public function edit(Request $request)
    {
        $c = Course::find($request->id);
        $c->teacher_id = $request->teacher_id;
        $c->save();
        return redirect()->back();
    }
}
