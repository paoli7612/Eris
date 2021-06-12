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
        $c->save();
        return redirect()->back();
    }

    public function details(Request $request)
    {
        dd($request->slug);
    }
}
