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

    public function store(Request $request)
    {
        $c = new Course;
        $c->title = $request->title;
        $c->slug = Str::slug($c->title);
        $c->year_id = $request->year;
        $c->save();
        return redirect()->back();
    }

    public function details($slug)
    {
        return view('course.details', [
            'course' => Course::where('slug', $slug)->first()
        ]);
    }

    public function delete(Request $request)
    {
        Course::find($request->id)->delete();
        return redirect('courses');
    }

    public function edit(Request $request)
    {
        $c = Course::find($request->id);
        $c->title = $request->title;
        $c->description = $request->description;
        $c->year_id = $request->year;
        $c->slug = Str::slug($c->title);
        $c->save();
        return redirect($c->route());
    }
}
