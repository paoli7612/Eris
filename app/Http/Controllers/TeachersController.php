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

    public function details(Teacher $teacher)
    {
        return view('teacher.details', [
            'teacher' => $teacher
        ]);
    }

    public function store()
    {
        Teacher::create([
            'name' => request('name'),
            'slug' => Str::slug(request('name'), '_'),
        ]);
        return redirect()->back();
    }
}
