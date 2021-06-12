<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
        return view('teacher.index', [
            'teachers' => Teacher::all()
        ]);
    }

    public function store(Request $request)
    {
        $t = new Teacher;
        $t->name = $request->name;
        $t->surname = $request->surname;
        $t->slug = Str::slug($t->complete_name());
        $t->save();
        return redirect()->back();
    }

    public function details($slug)
    {
        return view('teacher.details', [
            'teacher' => Teacher::where('slug', $slug)->first()
        ]);
    }
}
