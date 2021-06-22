<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeachersController extends Controller
{
    public function index()
    {
        return view('teacher.index', [
            'teachers' => Teacher::all()
        ]);
    }

    public function details($slug)
    {
        return view('teacher.details', [
            'teacher' => Teacher::where('slug', $slug)->first()
        ]);
    }

    public function store(Request $request)
    {
        $t = new Teacher;
        $t->name = $request->name;
        $t->slug = Str::slug($request->name);
        $t->save();
        return redirect()->back();
    }
}
